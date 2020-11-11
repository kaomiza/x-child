<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<div class="modal fade show" tabindex="-1" role="dialog" id="insertDiseased" style="display:none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-heading">เพิ่มโรคประจำตัว</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <div>
                    <label class="text-paragraph">ชื่อโรคประจำตัวภาษาไทย</label>
                    <label class="text-paragraph" style="color: red;">*</label>
                </div>
                <div>
                    <input onkeyup="isThaichar(this.value,this)" id="InputDiseaTH1" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น ไข้หวัด">
                    <label class="text-paragraph" id="disea-errorTH1" style="color: red; display:none; padding-top:5px;">
                        กรุณากรอกชื่อโรคประจำตัวภาษาไทย
                    </label>
                </div>
                <div>
                    <label class="text-paragraph">ชื่อโรคประจำตัวภาษาอังกฤษ</label>
                    <label class="text-paragraph" style="color: red;">*</label>
                </div>
                <div>
                    <input onkeyup="isEngchar(this.value,this)" id="InputDiseaEN1" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น Common cold">
                    <label class="text-paragraph" id="disea-errorEN1" style="color: red; display:none; padding-top:5px;">
                        กรุณากรอกชื่อโรคประจำตัวภาษาอังกฤษ
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
<div class="modal fade show" tabindex="-1" role="dialog" id="editDiseased" style="display:none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-heading">แก้ไขโรคประจำตัว</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <div>
                    <label class="text-paragraph">ชื่อโรคประจำตัวภาษาไทย</label>
                    <label class="text-paragraph" style="color: red;">*</label>
                </div>
                <div>
                    <input onkeyup="isThaichar(this.value,this)" id="InputDiseaTH2" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น ไข้หวัด">
                    <label class="text-paragraph" id="disea-errorTH2" style="color: red; display:none; padding-top:5px;">
                        กรุณากรอกชื่อโรคประจำตัวภาษาไทย
                    </label>
                </div>
                <div>
                    <label class="text-paragraph">ชื่อโรคประจำตัวภาษาอังกฤษ</label>
                    <label class="text-paragraph" style="color: red;">*</label>
                </div>
                <div>
                    <input onkeyup="isEngchar(this.value,this)" id="InputDiseaEN2" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น Common cold">
                    <label class="text-paragraph" id="disea-errorEN2" style="color: red; display:none; padding-top:5px;">
                        กรุณากรอกชื่อโรคประจำตัวภาษาอังกฤษ
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
            <h1 class="h1-title">โรคประจำตัว</h1>
        </div>
    </div>
    <div class="bgWhite padding_main mainBoxRadius main-margin">
        <div>
            <button class="btn_backend text_btn btn" id="btnInsert" data-toggle="modal" data-target="#insertDiseased">
                <i class="fa fa-plus"></i>&nbsp;&nbsp;
                เพิ่มโรคประจำตัว
            </button>
        </div>
        <div>
            <table id="diseased" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="th_text">เลขที่</th>
                        <th class="th_text">ชื่อโรคประจำตัวภาษาไทย</th>
                        <th class="th_text">ชื่อโรคประจำตัวภาษาอังกฤษ</th>
                        <th class="th_text">แก้ไข</th>
                        <th class="th_text">สถานะ</th>
                    </tr>
                </thead>
            </table>
        </div>

    </div>
</div>
<script>
    $("#diseased").DataTable({
        "processing": true,
        "responsive": true,
        "autoWidth": false,
        "ajax": {
            url: "<?php echo base_url('admin/diseased/getAll'); ?>",
            type: "GET"
        },
        "columns": [{
                "data": "d_id",
                className: "td_text"
            },
            {
                "data": "d_nameTH",
                className: "td_text"
            },
            {
                "data": "d_nameEN",
                className: "td_text"
            },
            {
                "data": null,
                "render": (data, type, row, meta) => {
                    return `
                        <button class="btn" style="padding: 2px .75rem; color: #199a6f;" data-toggle="modal" data-target="#editDiseased"
                        onclick="onClickEdit(` + row.d_id + `)"><i class="fa fa-edit"></i>
                        </button>
                        `;
                }
            },
            {
                "data": null,
                "render": (data, type, row, meta) => {
                    return `
                        <label for="toggle-` + row.d_id + `" class="toggle-1">
                            <input type="checkbox" id="toggle-` + row.d_id + `" 
                            class="toggle-1__input"  ` + (row.d_status == 1 ? 'checked' : '') + `
                            onchange="onClickActivate(` + row.d_id + `)">
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
            var inputTH = document.getElementById("InputDiseaTH1").value;
            var inputEN = document.getElementById("InputDiseaEN1").value;
            if (inputTH == "") {
                document.getElementById("disea-errorTH1").style.display = "block";
                document.getElementById("InputDiseaTH1").style.border = "1px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("disea-errorTH1").style.display = "none";
                document.getElementById("InputDiseaTH1").style.border = "1px solid #ced4da";
            }
            if (inputEN == "") {
                document.getElementById("disea-errorEN1").style.display = "block";
                document.getElementById("InputDiseaEN1").style.border = "1px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("disea-errorEN1").style.display = "none";
                document.getElementById("InputDiseaEN1").style.border = "1px solid #ced4da";
            }
            if (checkError == true) {
                /********insert**********/
                $.post('<?php echo base_url('admin/diseased/create') ?>', {
                    d_nameTH: inputTH,
                    d_nameEN: inputEN
                }).done((res) => {
                    if (res == true) {
                        $('#InputDiseaTH1').val();
                        $('#InputDiseaEN1').val();
                        $('#insertDiseased').modal('hide');
                        toastr.success('เพิ่มข้อมูลสำเร็จ');
                        $('#diseased').DataTable().ajax.reload();
                    } else {
                        toastr.error('ไม่สามารถเพิ่มข้อมูลได้ โปรดลองใหม่ภายหลัง');
                    }
                }).fail((xhr, status, error) => {
                    toastr.error('ไม่สามารถเพิ่มข้อมูลได้ โปรดลองใหม่ภายหลัง');
                });
                console.log('Start Insert');
            }


        } else if (func == 'edit') {
            var inputTH = document.getElementById("InputDiseaTH2").value;
            var inputEN = document.getElementById("InputDiseaEN2").value;
            if (inputTH == "") {
                document.getElementById("disea-errorTH1").style.display = "block";
                document.getElementById("InputDiseaTH2").style.border = "1px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("disea-errorTH1").style.display = "none";
                document.getElementById("InputDiseaTH2").style.border = "1px solid #ced4da";
            }
            if (inputEN == "") {
                document.getElementById("disea-errorEN2").style.display = "block";
                document.getElementById("InputDiseaEN2").style.border = "1px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("disea-errorEN2").style.display = "none";
                document.getElementById("InputDiseaEN2").style.border = "1px solid #ced4da";
            }
            if (checkError == true) {
                /********update**********/
                var id = $('.edit_btn').attr('id');
                $.post('<?php echo base_url('admin/diseased/update') ?>/' + id, {
                    d_nameTH: inputTH,
                    d_nameEN: inputEN
                }).done((res) => {
                    if (res == true) {
                        $('#InputDiseaTH2').val();
                        $('#InputDiseaEN2').val();
                        $('#editPosition').modal('hide');
                        toastr.success('แก้ไขข้อมูลสำเร็จ');
                        $('#diseased').DataTable().ajax.reload();
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
        $.get('<?php echo base_url('admin/diseased/getById'); ?>/' + id).done((res) => {
            $('#InputDiseaTH2').val(res.d_nameTH);
            $('#InputDiseaEN2').val(res.d_nameEN);
            $('.edit_btn').attr('id', res.d_id);
        });
    }

    function onClickActivate(id) {
        if ($('#toggle-' + id).is(":checked")) {
            $.post('<?php echo base_url('admin/diseased/update'); ?>/' + id, {
                d_status: 1
            }).done((res) => {
                toastr.info('NO');
            }).fail((xhr, status, error) => {
                toastr.error('Error')
            })
        } else {
            $.post('<?php echo base_url('admin/diseased/update'); ?>/' + id, {
                d_status: 0
            }).done((res) => {
                toastr.info('OFF');
            }).fail((xhr, status, error) => {
                toastr.error('Error')
            })
        }
    }
</script>