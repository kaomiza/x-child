<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<div class="modal fade show" tabindex="-1" role="dialog" id="insertTypeChild" style="display:none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-heading">เพิ่มประเภทเด็กพิเศษ</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <div>
                    <label class="text-paragraph">ชื่อประเภทเด็กพิเศษ</label>
                    <label class="text-paragraph" style="color: red;">*</label>
                </div>
                <div>
                    <input onkeyup="isAllchar(this.value,this)" id="InputTC1" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น เด็กที่มีความบกพร่องทางสติปัญญา">
                    <label class="text-paragraph" id="TC-error1" style="color: red; display:none; padding-top:5px;">
                        กรุณากรอกชื่อประเภทเด็กพิเศษ
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
<div class="modal fade show" tabindex="-1" role="dialog" id="editTypeChild" style="display:none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-heading">แก้ไขประเภทเด็กพิเศษ</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <div>
                    <label class="text-paragraph">ชื่อประเภทเด็กพิเศษ</label>
                    <label class="text-paragraph" style="color: red;">*</label>
                </div>
                <div>
                    <input onkeyup="isAllchar(this.value,this)" id="InputTC2" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น เด็กที่มีความบกพร่องทางสติปัญญา">
                    <label class="text-paragraph" id="TC-error2" style="color: red; display:none; padding-top:5px;">
                        กรุณากรอกชื่อประเภทเด็กพิเศษ
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
            <h1 class="h1-title">ประเภทเด็กพิเศษ</h1>
        </div>
    </div>
    <div class="bgWhite padding_main mainBoxRadius">
        <div class="mb-2">
            <button class="btn_backend text_btn btn" id="btnInsert" data-toggle="modal" data-target="#insertTypeChild"><i class="fa fa-plus"></i>&nbsp;&nbsp;เพิ่มประเภทเด็กพิเศษ</button>
        </div>
        <table id="type_children" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th class="th_text">เลขที่</th>
                    <th class="th_text">ชื่อประเภทเด็กพิเศษ</th>
                    <th class="th_text">แก้ไข</th>
                    <th class="th_text">สถานะ</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
<script>
    $("#type_children").DataTable({
        "processing": true,
        "responsive": true,
        "autoWidth": false,
        "ajax": {
            url: "<?php echo base_url('admin/type_children/getAll'); ?>",
            type: "GET"
        },
        "columns": [{
                "data": "td_id",
                className: "td_text"
            },
            {
                "data": "td_name",
                className: "td_text"
            },
            {
                "data": null,
                "render": (data, type, row, meta) => {
                    return `
                        <button class="btn btn-success" data-toggle="modal" data-target="#editTypeChild"
                        onclick="onClickEdit(` + row.td_id + `)"><i class="fa fa-edit"></i>
                        </button>
                        `;
                }
            },
            {
                "data": null,
                "render": (data, type, row, meta) => {
                    return `
                            <label class="switch">
                                <input id="at` + row.td_id + `" type="checkbox" ` +
                        (row.td_status == 1 ? 'checked' : '') + `
                            onclick="onClickActivate(` + row.td_id + `)">
                                <span class="slider round"></span>
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
            var input = document.getElementById("InputTC1").value;
            if (input == "") {
                document.getElementById("TC-error1").style.display = "block";
                document.getElementById("InputTC1").style.border = "1px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("TC-error1").style.display = "none";
                document.getElementById("InputTC1").style.border = "1px solid #ced4da";
            }
            if (checkError == true) {
                /********insert**********/
                $.post('<?php echo base_url('admin/type_children/create') ?>', {
                    td_name: input
                }).done((res) => {
                    if (res == true) {
                        $('#InputTC1').val();
                        $('#insertTypeChild').modal('hide');
                        toastr.success('เพิ่มข้อมูลสำเร็จ');
                        $('#type_children').DataTable().ajax.reload();
                    } else {
                        toastr.error('ไม่สามารถเพิ่มข้อมูลได้ โปรดลองใหม่ภายหลัง');
                    }
                }).fail((xhr, status, error) => {
                    toastr.error('ไม่สามารถเพิ่มข้อมูลได้ โปรดลองใหม่ภายหลัง');
                });
                console.log('Start Insert');
            }


        } else if (func == 'edit') {
            var input = document.getElementById("InputTC2").value;
            if (input == "") {
                document.getElementById("TC-error2").style.display = "block";
                document.getElementById("InputTC2").style.border = "1px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("TC-error2").style.display = "none";
                document.getElementById("InputTC2").style.border = "1px solid #ced4da";
            }
            if (checkError == true) {
                /********update**********/
                var id = $('.edit_btn').attr('id');
                $.post('<?php echo base_url('admin/type_children/update') ?>/' + id, {
                    td_name: input
                }).done((res) => {
                    if (res == true) {
                        $('#InputTC2').val();
                        $('#editTypeChild').modal('hide');
                        toastr.success('แก้ไขข้อมูลสำเร็จ');
                        $('#type_children').DataTable().ajax.reload();
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
        $.get('<?php echo base_url('admin/type_children/getById'); ?>/' + id).done((res) => {
            $('#InputTC2').val(res.td_name);
            $('.edit_btn').attr('id', res.td_id);
        });
    }

    function onClickActivate(id) {
        if ($('#at' + id).is(":checked")) {
            $.post('<?php echo base_url('admin/type_children/update'); ?>/' + id, {
                td_status: 1
            }).done((res) => {
                toastr.info('NO');
            }).fail((xhr, status, error) => {
                toastr.error('Error')
            })
        } else {
            $.post('<?php echo base_url('admin/type_children/update'); ?>/' + id, {
                td_status: 0
            }).done((res) => {
                toastr.info('OFF');
            }).fail((xhr, status, error) => {
                toastr.error('Error')
            })
        }
    }
</script>