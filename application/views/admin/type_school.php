<div class="modal fade show" tabindex="-1" role="dialog" id="insertTypeSchool" style="display:none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-heading">เพิ่มประเภทโรงเรียน</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <div>
                    <label class="text-paragraph">ชื่อประเภทโรงเรียน</label>
                    <label class="text-paragraph" style="color: red;">*</label>
                </div>
                <div>
                    <input onkeyup="isAllchar(this.value,this)" style="font-family: 'Kanit';" type="text" id="InputTypeSchool1" class="form-control" placeholder="เช่น โรงเรียนเฉพาะความพิการ">
                    <label class="text-paragraph" id="typeSchool-error1" style="color: red; display:none; padding-top:5px;">
                        กรุณากรอกประเภทโรงเรียน
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
<div class="modal fade show" tabindex="-1" role="dialog" id="editTypeSchool" style="display:none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-heading">แก้ไขประเภทโรงเรียน</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <div>
                    <label class="text-paragraph">ชื่อประเภทโรงเรียน</label>
                    <label class="text-paragraph" style="color: red;">*</label>
                </div>
                <div>
                    <input onkeyup="isAllchar(this.value,this)" style="font-family: 'Kanit';" type="text" id="InputTypeSchool2" class="form-control" placeholder="เช่น โรงเรียนเฉพาะความพิการ">
                    <label class="text-paragraph" id="typeSchool-error2" style="color: red; display:none; padding-top:5px;">
                        กรุณากรอกประเภทโรงเรียน
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
            <h1 class="h1-title">ประเภทโรงเรียน</h1>
        </div>
    </div>
    <div class="bgWhite padding_main mainBoxRadius main-margin">
        <div>
            <button class="btn_backend text_btn btn" id="btnInsert" data-toggle="modal" data-target="#insertTypeSchool"><i class="fa fa-plus"></i>&nbsp;&nbsp;เพิ่มประเภทโรงเรียน</button>
        </div>
        <div>
            <table id="type_school" class="table table-bordered table-striped nowrap" style="width: 100%;">
                <thead>
                    <tr>
                        <th class="th_text">สถานะ</th>
                        <th class="th_text">ลำดับ</th>
                        <th class="th_text">รหัสประเภทโรงเรียน</th>
                        <th class="th_text">ชื่อประเภทโรงเรียน</th>
                        <th class="th_text">แก้ไข</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
<div>
    <script>
        $("#type_school").DataTable({
            "processing": true,
            "responsive": true,
            "autoWidth": false,
            "ajax": {
                url: "<?php echo base_url('admin/type_school/getAll'); ?>",
                type: "GET"
            },
            "order": [
                [1, "asc"]
        ],
            "columns": [{
                    'orderable': false,
                    "data": null,
                    "render": (data, type, row, meta) => {
                        return `
                            <label for="toggle-` + row.tsc_id + `" class="toggle-1">
                                <input type="checkbox" id="toggle-` + row.tsc_id + `"   
                                class="toggle-1__input"  ` + (row.tsc_status == 1 ? 'checked' : '') + `
                                onchange="onClickActivate(` + row.tsc_id + `)">
                                <span class="toggle-1__button"></span>
                            </label>
                        `;
                    },
                    width: 10
                },
                {
                    "data": null,
                    className: "td_text",
                    "render": (data, type, row, meta) => {
                        return meta.row + 1;
                    }
                },
                {
                    "data": "tsc_id",
                    className: "td_text"
                },
                {
                    "data": "tsc_name",
                    className: "td_text"
                },
                {
                    "data": null,
                    "render": (data, type, row, meta) => {
                        return `
                        <button class="btn btn-flat" style="padding: 2px .75rem; color: #199a6f;" data-toggle="modal" data-target="#editTypeSchool"
                        onclick="onClickEdit(` + row.tsc_id + `)"><i class="fa fa-edit"></i>
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
                var inputTH = document.getElementById("InputTypeSchool1").value;
                if (inputTH == "") {
                    document.getElementById("typeSchool-error1").style.display = "block";
                    document.getElementById("InputTypeSchool1").style.border = "1px solid #bd2130";
                    checkError = false;
                } else {
                    document.getElementById("typeSchool-error1").style.display = "none";
                    document.getElementById("InputTypeSchool1").style.border = "1px solid #ced4da";
                }
                if (checkError == true) {
                    /********insert**********/
                    $.post('<?php echo base_url('admin/type_school/create') ?>', {
                        tsc_name: inputTH
                    }).done((res) => {
                        if (res == true) {
                            $('#InputTypeSchool1').val();
                            $('#insertTypeSchool').modal('hide');
                            toastr.success('เพิ่มข้อมูลสำเร็จ');
                            $('#type_school').DataTable().ajax.reload();
                        } else {
                            toastr.error('ไม่สามารถเพิ่มข้อมูลได้ โปรดลองใหม่ภายหลัง');
                        }
                    }).fail((xhr, status, error) => {
                        toastr.error('ไม่สามารถเพิ่มข้อมูลได้ โปรดลองใหม่ภายหลัง');
                    });
                    console.log('Start Insert');
                }
            } else if (func == 'edit') {
                var inputTH = document.getElementById("InputTypeSchool2").value;
                if (inputTH == "") {
                    document.getElementById("typeSchool-error2").style.display = "block";
                    document.getElementById("InputTypeSchool2").style.border = "1px solid #bd2130";
                    checkError = false;
                } else {
                    document.getElementById("typeSchool-error2").style.display = "none";
                    document.getElementById("InputTypeSchool2").style.border = "1px solid #ced4da";
                }
                if (checkError == true) {
                    /********update**********/
                    var id = $('.edit_btn').attr('id');
                    $.post('<?php echo base_url('admin/type_school/update') ?>/' + id, {
                        tsc_name: inputTH
                    }).done((res) => {
                        if (res == true) {
                            $('#InputTypeSchool2').val();
                            $('#editTypeSchool').modal('hide');
                            toastr.success('แก้ไขข้อมูลสำเร็จ');
                            $('#type_school').DataTable().ajax.reload();
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
            $.get('<?php echo base_url('admin/type_school/getById'); ?>/' + id).done((res) => {
                $('#InputTypeSchool2').val(res.tsc_name);
                $('.edit_btn').attr('id', res.tsc_id);
            });
        }

        function onClickActivate(id) {
            if ($('#toggle-' + id).is(":checked")) {
                $.post('<?php echo base_url('admin/type_school/update'); ?>/' + id, {
                    tsc_status: 1
                }).done((res) => {
                    toastr.info('NO');
                }).fail((xhr, status, error) => {
                    toastr.error('Error')
                })
            } else {
                $.post('<?php echo base_url('admin/type_school/update'); ?>/' + id, {
                    tsc_status: 0
                }).done((res) => {
                    toastr.info('OFF');
                }).fail((xhr, status, error) => {
                    toastr.error('Error')
                })
            }
        }
    </script>