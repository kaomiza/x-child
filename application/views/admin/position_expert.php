<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<div class="modal fade show" tabindex="-1" role="dialog" id="insertPosition" style="display:none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-heading">เพิ่มตำแหน่งผู้เชี่ยวชาญ</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <div>
                    <label class="text-paragraph">ชื่อตำแหน่งผู้เชี่ยวชาญ</label>
                    <label class="text-paragraph" style="color: red;">*</label>
                </div>
                <div>
                    <input onkeyup="isAllchar(this.value,this)" id="InputPosition1" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น ผู้เชี่ยวชาญด้านโภชนาการ">
                    <label class="text-paragraph" id="postion-error1" style="color: red; display:none; padding-top:5px;">
                        กรุณากรอกตำแหน่งผู้เชี่ยวชาญ
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
<div class="modal fade show" tabindex="-1" role="dialog" id="editPosition" style="display:none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-heading">แก้ไขตำแหน่งผู้เชี่ยวชาญ</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <div>
                    <label class="text-paragraph">ชื่อตำแหน่งผู้เชี่ยวชาญ</label>
                    <label class="text-paragraph" style="color: red;">*</label>
                </div>
                <div>
                    <input onkeyup="isAllchar(this.value,this)" id="InputPosition2" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น ผู้เชี่ยวชาญด้านโภชนาการ">
                    <label class="text-paragraph" id="postion-error2" style="color: red; display:none; padding-top:5px;">
                        กรุณากรอกตำแหน่งผู้เชี่ยวชาญ
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
            <h1 class="h1-title">ตำแหน่งผู้เชี่ยวชาญ</h1>
        </div>
    </div>
    <div class="bgWhite padding_main mainBoxRadius">
        <div class="mb-2">
            <button class="btn_backend text_btn btn" id="btnInsert" data-toggle="modal" data-target="#insertPosition">
                <i class="fa fa-plus"></i>&nbsp;&nbsp;
                เพิ่มตำแหน่งผู้เชี่ยวชาญ
            </button>
        </div>
        <table id="position" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th class="th_text">เลขที่</th>
                    <th class="th_text">ชื่อตำแหน่งผู้เชี่ยวชาญ</th>
                    <th class="th_text">แก้ไข</th>
                    <th class="th_text">สถานะ</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
<script>
    $("#position").DataTable({
        "processing": true,
        "responsive": true,
        "autoWidth": false,
        "ajax": {
            url: "<?php echo base_url('admin/position_expert/getAll'); ?>",
            type: "GET"
        },
        "columns": [{
                "data": "p_id",
                className: "td_text"
            },
            {
                "data": "p_name",
                className: "td_text"
            },
            {
                "data": null,
                "render": (data, type, row, meta) => {
                    return `
                        <button class="btn btn-flat btn-success" data-toggle="modal" data-target="#editPosition"
                        onclick="onClickEdit(` + row.p_id + `)"><i class="fa fa-edit"></i>
                        </button>
                        `;
                }
            },
            {
                "data": null,
                "render": (data, type, row, meta) => {
                    return `
                            <label for="toggle-` + row.p_id + `" class="toggle-1">
                                <input type="checkbox" id="toggle-` + row.p_id + `" 
                                class="toggle-1__input"  ` + (row.p_status == 1 ? 'checked' : '') + `
                                onchange="onClickActivate(` + row.p_id + `)">
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
            var inputTH = document.getElementById("InputPosition1").value;
            if (inputTH == "") {
                document.getElementById("postion-error1").style.display = "block";
                document.getElementById("InputPosition1").style.border = "1px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("postion-error1").style.display = "none";
                document.getElementById("InputPosition1").style.border = "1px solid #ced4da";
            }
            if (checkError == true) {
                /********insert**********/
                $.post('<?php echo base_url('admin/position_expert/create') ?>', {
                    p_name: inputTH
                }).done((res) => {
                    if (res == true) {
                        $('#InputPosition1').val();
                        $('#insertPosition').modal('hide');
                        toastr.success('เพิ่มข้อมูลสำเร็จ');
                        $('#position').DataTable().ajax.reload();
                    } else {
                        toastr.error('ไม่สามารถเพิ่มข้อมูลได้ โปรดลองใหม่ภายหลัง');
                    }
                }).fail((xhr, status, error) => {
                    toastr.error('ไม่สามารถเพิ่มข้อมูลได้ โปรดลองใหม่ภายหลัง');
                });
                console.log('Start Insert');
            }
        } else if (func == 'edit') {
            var inputTH = document.getElementById("InputPosition2").value;
            if (inputTH == "") {
                document.getElementById("postion-error2").style.display = "block";
                document.getElementById("InputPosition2").style.border = "1px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("postion-error2").style.display = "none";
                document.getElementById("InputPosition2").style.border = "1px solid #ced4da";
            }
            if (checkError == true) {
                /********update**********/
                var id = $('.edit_btn').attr('id');
                $.post('<?php echo base_url('admin/position_expert/update') ?>/' + id, {
                    p_name: inputTH
                }).done((res) => {
                    if (res == true) {
                        $('#InputPosition2').val();
                        $('#editPosition').modal('hide');
                        toastr.success('แก้ไขข้อมูลสำเร็จ');
                        $('#position').DataTable().ajax.reload();
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
        $.get('<?php echo base_url('admin/position_expert/getById'); ?>/' + id).done((res) => {
            $('#InputPosition2').val(res.p_name);
            $('.edit_btn').attr('id', res.p_id);
        });
    }

    function onClickActivate(id) {
        if ($('#toggle-' + id).is(":checked")) {
            $.post('<?php echo base_url('admin/position_expert/update'); ?>/' + id, {
                p_status: 1
            }).done((res) => {
                toastr.info('NO');
            }).fail((xhr, status, error) => {
                toastr.error('Error')
            })
        } else {
            $.post('<?php echo base_url('admin/position_expert/update'); ?>/' + id, {
                p_status: 0
            }).done((res) => {
                toastr.info('OFF');
            }).fail((xhr, status, error) => {
                toastr.error('Error')
            })
        }
    }
</script>