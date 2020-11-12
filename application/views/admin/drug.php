<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<div class="modal fade show" tabindex="-1" role="dialog" id="insertDrug" style="display:none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-heading">เพิ่มยา</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <div>
                    <label class="text-paragraph">กลุ่มยา</label>
                    <label class="text-paragraph" style="color: red;">*</label>
                </div>
                <div>
                    <select class="form-control text-paragraph" id="inputSelect1" required>
                    </select>
                    <label class="text-paragraph" id="drug-errorSelect1" style="color: red; display:none; padding-top:5px;">
                        กรุณาเลือกกลุ่มยา
                    </label>
                </div>
                <div>
                    <label class="text-paragraph">ชื่อยาภาษาไทย</label>
                    <label class="text-paragraph" style="color: red;">*</label>
                </div>
                <div>
                    <input onkeyup="isThaichar(this.value,this)" style="font-family: 'Kanit';" type="text" id="inputDrugTH1" class="form-control" placeholder="เช่น ยาทรามาดอล">
                    <label class="text-paragraph" id="drug-errorTH1" style="color: red; display:none; padding-top:5px;">
                        กรุณากรอกชื่อยาภาษาไทย
                    </label>
                </div>
                <div>
                    <label class="text-paragraph">ชื่อยาภาษาอังกฤษ</label>
                    <label class="text-paragraph" style="color: red;">*</label>
                </div>
                <div>
                    <input onkeyup="isEngchar(this.value,this)" style="font-family: 'Kanit';" type="text" id="inputDrugEN1" class="form-control" placeholder="เช่น Tramadol">
                    <label class="text-paragraph" id="drug-errorEN1" style="color: red; display:none; padding-top:5px;">
                        กรุณากรอกชื่อยาภาษาอังกฤษ
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
<div class="modal fade show" tabindex="-1" role="dialog" id="editDrug" style="display:none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-heading">แก้ไขยา</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <div>
                    <label class="text-paragraph">กลุ่มยา</label>
                    <label class="text-paragraph" style="color: red;">*</label>
                </div>
                <div>
                    <select class="form-control text-paragraph" id="inputSelect2" required="">
                    </select>
                    <label class="text-paragraph" id="drug-errorSelect2" style="color: red; display:none; padding-top:5px;">
                        กรุณาเลือกกลุ่มยา
                    </label>
                </div>
                <div>
                    <label class="text-paragraph">ชื่อยาภาษาไทย</label>
                    <label class="text-paragraph" style="color: red;">*</label>
                </div>
                <div>
                    <input onkeyup="isThaichar(this.value,this)" style="font-family: 'Kanit';" type="text" id="inputDrugTH2" class="form-control" placeholder="เช่น ยาทรามาดอล">
                    <label class="text-paragraph" id="drug-errorTH2" style="color: red; display:none; padding-top:5px;">
                        กรุณากรอกชื่อยาภาษาไทย
                    </label>
                </div>
                <div>
                    <label class="text-paragraph">ชื่อยาภาษาอังกฤษ</label>
                    <label class="text-paragraph" style="color: red;">*</label>
                </div>
                <div>
                    <input onkeyup="isEngchar(this.value,this)" style="font-family: 'Kanit';" type="text" id="inputDrugEN2" class="form-control" placeholder="เช่น Tramadol">
                    <label class="text-paragraph" id="drug-errorEN2" style="color: red; display:none; padding-top:5px;">
                        กรุณากรอกชื่อยาภาษาอังกฤษ
                    </label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary text_btn" data-dismiss="modal">ปิด</button>
                <button type="button" class="btn text_btn edit_btn edit_btn" style="background-color: #1e7e34; color:white;" onclick="onClickSave('edit')">บันทึก</button>
            </div>
        </div>
    </div>
</div>
<div class="main-margin padding_main">
    <div class="padding_main bgWhite mainBoxRadius boxHeader">
        <div>
            <h1 class="h1-title">ยา</h1>
        </div>
    </div>
    <div class="bgWhite padding_main mainBoxRadius main-margin">
        <div>
            <button class="btn_backend text_btn btn" id="btnInsert" data-toggle="modal" data-target="#insertDrug" onclick="fetch_group_drug()">
                <i class="fa fa-plus"></i>&nbsp;&nbsp;
                เพิ่มยา
            </button>
        </div>
        <div>
            <table id="drug" class="table table-bordered table-striped nowrap" style="width: 100%;">
                <thead>
                    <tr>
                        <th class="th_text">สถานะ</th>
                        <th class="th_text">เลขที่</th>
                        <th class="th_text">กลุ่มยา</th>
                        <th class="th_text">ชื่อยาภาษาไทย</th>
                        <th class="th_text">ชื่อยาภาษาอังกฤษ</th>
                        <th class="th_text">แก้ไข</th>
                    </tr>
                </thead>
            </table>
        </div>

    </div>
</div>
<script>
    $("#drug").DataTable({
        "processing": true,
        "responsive": true,
        "autoWidth": false,
        "ajax": {
            url: "<?php echo base_url('admin/drug/getAll'); ?>",
            type: "GET"
        },
        "columns": [{
                "data": null,
                "render": (data, type, row, meta) => {
                    return `
                            <label for="toggle-` + row.drug_id + `" class="toggle-1">
                                <input type="checkbox" id="toggle-` + row.drug_id + `" 
                                class="toggle-1__input"  ` + (row.drug_status == 1 ? 'checked' : '') + `
                                onchange="onClickActivate(` + row.drug_id + `)">
                                <span class="toggle-1__button"></span>
                            </label>
                        `;
                },
                width: 10
            },
            {
                "data": "drug_id",
                className: "td_text"
            },
            {
                "data": "gd_name",
                className: "td_text"
            },
            {
                "data": "drug_name_th",
                className: "td_text"
            },
            {
                "data": "drug_name_en",
                className: "td_text"
            },
            {
                "data": null,
                "render": (data, type, row, meta) => {
                    return `
                        <button class="btn btn-flat" style="padding: 2px .75rem; color: #199a6f;" data-toggle="modal" data-target="#editDrug"
                        onclick="onClickEdit(` + row.drug_id + `)"><i class="fa fa-edit"></i>
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
            var inputSelect = document.getElementById("inputSelect1").value;
            var inputTH = document.getElementById("inputDrugTH1").value;
            var inputEN = document.getElementById("inputDrugEN1").value;
            if (inputSelect == "--- กรุณาเลือก ---") {
                document.getElementById("drug-errorSelect1").style.display = "block";
                document.getElementById("inputSelect1").style.border = "1px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("drug-errorSelect1").style.display = "none";
                document.getElementById("inputSelect1").style.border = "1px solid #ced4da";
            }
            if (inputTH == "") {
                document.getElementById("drug-errorTH1").style.display = "block";
                document.getElementById("inputDrugTH1").style.border = "1px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("drug-errorTH1").style.display = "none";
                document.getElementById("inputDrugTH1").style.border = "1px solid #ced4da";
            }
            if (inputEN == "") {
                document.getElementById("drug-errorEN1").style.display = "block";
                document.getElementById("inputDrugEN1").style.border = "1px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("drug-errorEN1").style.display = "none";
                document.getElementById("inputDrugEN1").style.border = "1px solid #ced4da";
            }
            if (checkError == true) {
                /********insert**********/
                $.post('<?php echo base_url('admin/drug/create') ?>', {
                    gd_id: inputSelect,
                    drug_name_th: inputTH,
                    drug_name_en: inputEN
                }).done((res) => {
                    if (res == true) {
                        $('#inputDrugTH1').val();
                        $('#inputDrugEN1').val();
                        $('#insertDrug').modal('hide');
                        toastr.success('เพิ่มข้อมูลสำเร็จ');
                        $('#drug').DataTable().ajax.reload();
                    } else {
                        toastr.error('ไม่สามารถเพิ่มข้อมูลได้ โปรดลองใหม่ภายหลัง');
                    }
                }).fail((xhr, status, error) => {
                    toastr.error('ไม่สามารถเพิ่มข้อมูลได้ โปรดลองใหม่ภายหลัง');
                });
                console.log('Start Insert');
            }
        } else if (func == 'edit') {
            var inputSelect = document.getElementById("inputSelect2").value;
            var inputTH = document.getElementById("inputDrugTH2").value;
            var inputEN = document.getElementById("inputDrugEN2").value;
            if (inputSelect == "--- กรุณาเลือก ---") {
                document.getElementById("drug-errorSelect2").style.display = "block";
                document.getElementById("inputSelect2").style.border = "1px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("drug-errorSelect2").style.display = "none";
                document.getElementById("inputSelect2").style.border = "1px solid #ced4da";
            }
            if (inputTH == "") {
                document.getElementById("drug-errorTH2").style.display = "block";
                document.getElementById("inputDrugTH2").style.border = "1px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("drug-errorTH2").style.display = "none";
                document.getElementById("inputDrugTH2").style.border = "1px solid #ced4da";
            }
            if (inputEN == "") {
                document.getElementById("drug-errorEN2").style.display = "block";
                document.getElementById("inputDrugEN2").style.border = "1px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("drug-errorEN2").style.display = "none";
                document.getElementById("inputDrugEN2").style.border = "1px solid #ced4da";
            }
            if (checkError == true) {
                /********update**********/
                var id = $('.edit_btn').attr('id');
                $.post('<?php echo base_url('admin/drug/update') ?>/' + id, {
                    gd_id: inputSelect,
                    drug_name_th: inputTH,
                    drug_name_en: inputEN
                }).done((res) => {
                    if (res == true) {
                        $('#inputDrugTH2').val();
                        $('#inputDrugEN2').val();
                        $('#editDrug').modal('hide');
                        toastr.success('แก้ไขข้อมูลสำเร็จ');
                        $('#drug').DataTable().ajax.reload();
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
        $('#inputSelect2').empty();
        $('#inputSelect2').append('<option>--- กรุณาเลือก ---</option>');
        $.get('<?php echo base_url('admin/drug/getById'); ?>/' + id).done((res) => {
            $('#inputDrugTH2').val(res.drug_name_th);
            $('#inputDrugEN2').val(res.drug_name_en);
            $('.edit_btn').attr('id', res.drug_id);
            $.get('<?php echo base_url('admin/group_drug/getall'); ?>', (res2) => {
                res2.data.forEach(element => {
                    if (element.gd_id == res.gd_id) {
                        $('#inputSelect2').append('<option value="' + element.gd_id + '" selected>' + element.gd_name + '</option>');
                    } else {
                        $('#inputSelect2').append('<option value="' + element.gd_id + '">' + element.gd_name + '</option>');
                    }
                });
            });
        });
    }

    function onClickActivate(id) {
        if ($('#toggle-' + id).is(":checked")) {
            $.post('<?php echo base_url('admin/drug/update'); ?>/' + id, {
                drug_status: 1
            }).done((res) => {
                toastr.info('NO');
            }).fail((xhr, status, error) => {
                toastr.error('Error')
            })
        } else {
            $.post('<?php echo base_url('admin/drug/update'); ?>/' + id, {
                drug_status: 0
            }).done((res) => {
                toastr.info('OFF');
            }).fail((xhr, status, error) => {
                toastr.error('Error')
            })
        }
    }

    function fetch_group_drug() {
        $('#inputSelect1').empty();
        $('#inputSelect1').append('<option selected="">--- กรุณาเลือก ---</option>');
        $.get('<?php echo base_url('admin/group_drug/getall'); ?>', (res) => {
            res.data.forEach(element => {
                $('#inputSelect1').append('<option value="' + element.gd_id + '">' + element.gd_name + '</option>')
            });
        })
    }
</script>