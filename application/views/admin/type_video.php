<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<div class="modal fade show" tabindex="-1" role="dialog" id="insertTypeVdo" style="display:none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-heading">เพิ่มประเภทวิดีโอความรู้</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <div>
                    <label class="text-paragraph">ชื่อประเภทวิดีโอความรู้</label>
                    <label class="text-paragraph" style="color: red;">*</label>
                </div>
                <div>
                    <input onkeyup="isAllchar(this.value,this)" id="InputTV1" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น เด็กที่มีความบกพร่องทางสติปัญญา">
                    <label class="text-paragraph" id="TV-error1" style="color: red; display:none; padding-top:5px;">
                        กรุณากรอกชื่อประเภทวิดีโอความรู้
                    </label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary text_btn" data-dismiss="modal">ปิด</button>
                <button type="button" class="btn text_btn" style="background-color: #1e7e34; color:white;" onclick="onClickSave('insert')">บันทึก</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade show" tabindex="-1" role="dialog" id="editTypeVdo" style="display:none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-heading">แก้ไขประเภทวิดีโอความรู้</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <div>
                    <label class="text-paragraph">ชื่อประเภทวิดีโอความรู้</label>
                    <label class="text-paragraph" style="color: red;">*</label>
                </div>
                <div>
                    <input onkeyup="isAllchar(this.value,this)" id="InputTV2" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น เด็กที่มีความบกพร่องทางสติปัญญา">
                    <label class="text-paragraph" id="TV-error2" style="color: red; display:none; padding-top:5px;">
                        กรุณากรอกชื่อประเภทวิดีโอความรู้
                    </label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary text_btn" data-dismiss="modal">ปิด</button>
                <button type="button" class="btn text_btn edit_btn" style="background-color: #1e7e34; color:white;" onclick="onClickSave('edit')">บันทึก</button>
            </div>
        </div>
    </div>
</div>
<div class="main-margin padding_main">
    <div class="padding_main bgWhite mainBoxRadius boxHeader">
        <div>
            <h1 class="h1-title">ประเภทวิดีโอความรู้</h1>
        </div>
    </div>
    <div class="bgWhite padding_main mainBoxRadius main-margin">
        <div>
            <button class="btn_backend text_btn btn" id="btnInsert" data-toggle="modal" data-target="#insertTypeVdo"><i class="fa fa-plus"></i>&nbsp;&nbsp;เพิ่มประเภทวิดีโอความรู้</button>
        </div>
        <div>
            <table id="type_video" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="th_text">เลขที่</th>
                        <th class="th_text">ชื่อประเภทวิดีโอความรู้</th>
                        <th class="th_text">แก้ไข</th>
                        <th class="th_text">สถานะ</th>
                    </tr>
                </thead>
            </table>
        </div>

    </div>
</div>
<script>
    $("#type_video").DataTable({
        "processing": true,
        "responsive": true,
        "autoWidth": false,
        "ajax": {
            url: "<?php echo base_url('admin/type_video/getAll'); ?>",
            type: "GET"
        },
        "columns": [{
                "data": "tv_id"
            },
            {
                "data": "tv_name"
            },
            {
                "data": null,
                "render": (data, type, row, meta) => {
                    return `
                        <button class="btn" style="padding: 2px .75rem; color: #199a6f;" data-toggle="modal" data-target="#editTypeVdo"
                        onclick="onClickEdit(` + row.tv_id + `)"><i class="fa fa-edit"></i>
                        </button>
                        `;
                }
            },
            {
                "data": null,
                "render": (data, type, row, meta) => {
                    return `
                        <label for="toggle-` + row.tv_id + `" class="toggle-1">
                            <input type="checkbox" id="toggle-` + row.tv_id + `" 
                            class="toggle-1__input"  ` + (row.tv_status == 1 ? 'checked' : '') + `
                            onchange="onClickActivate(` + row.tv_id + `)">
                            <span class="toggle-1__button"></span>
                        </label>
                            
                        `;
                }
            }
        ]
    });
</script>
<script>
    function onClickSave(func) {
        console.log(func);
        var checkError = true;
        if (func == 'insert') {
            var input = document.getElementById("InputTV1").value;
            if (input == "") {
                document.getElementById("TV-error1").style.display = "block";
                document.getElementById("InputTV1").style.border = "1px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("TV-error1").style.display = "none";
                document.getElementById("InputTV1").style.border = "1px solid #ced4da";
            }
            if (checkError == true) {
                /********insert**********/
                $.post('<?php echo base_url('admin/type_video/create') ?>', {
                    tv_name: input
                }).done((res) => {
                    if (res == true) {
                        $('#InputTV1').val();
                        $('#insertTypeVdo').modal('hide');
                        toastr.success('เพิ่มข้อมูลสำเร็จ');
                        $('#type_video').DataTable().ajax.reload();
                    } else {
                        toastr.error('ไม่สามารถเพิ่มข้อมูลได้ โปรดลองใหม่ภายหลัง');
                    }
                }).fail((xhr, status, error) => {
                    toastr.error('ไม่สามารถเพิ่มข้อมูลได้ โปรดลองใหม่ภายหลัง');
                });
                console.log('Start Insert');
            }


        } else if (func == 'edit') {
            var input = document.getElementById("InputTV2").value;
            if (input == "") {
                document.getElementById("TV-error2").style.display = "block";
                document.getElementById("InputTV2").style.border = "1px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("TV-error2").style.display = "none";
                document.getElementById("InputTV2").style.border = "1px solid #ced4da";
            }
            if (checkError == true) {
                /********update**********/
                var id = $('.edit_btn').attr('id');
                $.post('<?php echo base_url('admin/type_video/update') ?>/' + id, {
                    tv_name: input
                }).done((res) => {
                    if (res == true) {
                        $('#InputTV2').val();
                        $('#editTypeVdo').modal('hide');
                        toastr.success('แก้ไขข้อมูลสำเร็จ');
                        $('#type_video').DataTable().ajax.reload();
                    } else {
                        toastr.error('ไม่สามารถแก้ไขข้อมูลได้ โปรดลองใหม่ภายหลัง');
                    }
                }).fail((xhr, status, error) => {
                    toastr.error('ไม่สามารถแก้ไขข้อมูลได้ โปรดลองใหม่ภายหลัง');
                });
                console.log('Start Update');
            }
        }
    }

    function onClickEdit(id) {
        $.get('<?php echo base_url('admin/type_video/getById'); ?>/' + id).done((res) => {
            $('#InputTV2').val(res.tv_name);
            $('.edit_btn').attr('id', res.tv_id);
        });
    }

    function onClickActivate(id) {
        if ($('#at' + id).is(":checked")) {
            $.post('<?php echo base_url('admin/type_video/update'); ?>/' + id, {
                tv_status: 1
            }).done((res) => {
                toastr.info('NO');
            }).fail((xhr, status, error) => {
                toastr.error('Error')
            })
        } else {
            $.post('<?php echo base_url('admin/type_video/update'); ?>/' + id, {
                tv_status: 0
            }).done((res) => {
                toastr.info('OFF');
            }).fail((xhr, status, error) => {
                toastr.error('Error')
            })
        }
    }
</script>