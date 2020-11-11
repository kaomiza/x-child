<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<div class="modal fade show" tabindex="-1" role="dialog" id="insertGD" style="display:none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-heading">เพิ่มกลุ่มยา</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <div>
                    <label class="text-paragraph">ชื่อกลุ่มยา</label>
                    <label class="text-paragraph" style="color: red;">*</label>
                </div>
                <div>
                    <input onkeyup="isAllchar(this.value,this)" id="InputGD1" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น ยาระงับปวดและลดไข้">
                    <label class="text-paragraph" id="GD-error1" style="color: red; display:none; padding-top:5px;">
                        กรุณากรอกชื่อกลุ่มยา
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
<div class="modal fade show" tabindex="-1" role="dialog" id="editGD" style="display:none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-heading">แก้ไขกลุ่มยา</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <div>
                    <label class="text-paragraph">ชื่อกลุ่มยา</label>
                    <label class="text-paragraph" style="color: red;">*</label>
                </div>
                <div>
                    <input onkeyup="isAllchar(this.value,this)" id="InputGD2" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น ยาระงับปวดและลดไข้">
                    <label class="text-paragraph" id="GD-error2" style="color: red; display:none; padding-top:5px;">
                        กรุณากรอกชื่อกลุ่มยา
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
            <h1 class="h1-title">กลุ่มยา</h1>
        </div>
    </div>
    <div class="bgWhite padding_main mainBoxRadius main-margin">
        <div>
            <button class="btn_backend text_btn btn" id="btnInsert" data-toggle="modal" data-target="#insertGD">
                <i class="fa fa-plus"></i>&nbsp;&nbsp;
                เพิ่มกลุ่มยา
            </button>
        </div>
        <div>
            <table id="group_drug" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="th_text">เลขที่</th>
                        <th class="th_text">ชื่อกลุ่มยา</th>
                        <th class="th_text">แก้ไข</th>
                    </tr>
                </thead>
            </table>
        </div>

    </div>
</div>
<script>
    $("#group_drug").DataTable({
        "processing": true,
        "responsive": true,
        "autoWidth": false,
        "ajax": {
            url: "<?php echo base_url('admin/group_drug/getAll'); ?>",
            type: "GET"
        },
        "columns": [{
                "data": "gd_id",
                className: "td_text"
            },
            {
                "data": "gd_name",
                className: "td_text"
            },
            {
                "data": null,
                "render": (data, type, row, meta) => {
                    return `
                        <button class="btn btn-flat" style="padding: 2px .75rem; color: #199a6f;" data-toggle="modal" data-target="#editGD"
                        onclick="onClickEdit(` + row.gd_id + `)"><i class="fa fa-edit"></i>
                        </button>
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
            var inputTH = document.getElementById("InputGD1").value;
            if (inputTH == "") {
                document.getElementById("GD-error1").style.display = "block";
                document.getElementById("InputGD1").style.border = "1px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("GD-error1").style.display = "none";
                document.getElementById("InputGD1").style.border = "1px solid #ced4da";
            }
            if (checkError == true) {
                /********insert**********/
                $.post('<?php echo base_url('admin/group_drug/create') ?>', {
                    gd_name: inputTH
                }).done((res) => {
                    if (res == true) {
                        $('#InputGD1').val();
                        $('#insertGD').modal('hide');
                        toastr.success('เพิ่มข้อมูลสำเร็จ');
                        $('#group_drug').DataTable().ajax.reload();
                    } else {
                        toastr.error('ไม่สามารถเพิ่มข้อมูลได้ โปรดลองใหม่ภายหลัง');
                    }
                }).fail((xhr, status, error) => {
                    toastr.error('ไม่สามารถเพิ่มข้อมูลได้ โปรดลองใหม่ภายหลัง');
                });
                console.log('Start Insert');
            }
        } else if (func == 'edit') {
            var inputTH = document.getElementById("InputGD2").value;
            if (inputTH == "") {
                document.getElementById("GD-error2").style.display = "block";
                document.getElementById("InputGD2").style.border = "1px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("GD-error2").style.display = "none";
                document.getElementById("InputGD2").style.border = "1px solid #ced4da";
            }
            if (checkError == true) {
                /********update**********/
                var id = $('.edit_btn').attr('id');
                $.post('<?php echo base_url('admin/group_drug/update') ?>/' + id, {
                    gd_name: inputTH
                }).done((res) => {
                    if (res == true) {
                        $('#InputGD2').val();
                        $('#editGD').modal('hide');
                        toastr.success('แก้ไขข้อมูลสำเร็จ');
                        $('#group_drug').DataTable().ajax.reload();
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
        $.get('<?php echo base_url('admin/group_drug/getById'); ?>/' + id).done((res) => {
            $('#InputGD2').val(res.gd_name);
            $('.edit_btn').attr('id', res.gd_id);
        });
    }
</script>