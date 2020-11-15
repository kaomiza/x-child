<div class="modal fade show" tabindex="-1" role="dialog" id="insertPrename" style="display:none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-heading">เพิ่มคำนำหน้าชื่อ</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <div>
                    <label class="text-paragraph">คำนำหน้าชื่อภาษาไทย</label>
                    <label class="text-paragraph" style="color: red;">*</label>
                </div>
                <div>
                    <input style="font-family: 'Kanit';" type="text" id="InputprenameTH1" onkeyup="isPrenameTHchar(this.value,this)" class="form-control" placeholder="เช่น นาย">
                    <label class="text-paragraph" id="prenameTH1" style="color: red; display:none; padding-top:5px;">
                        กรุณากรอกคำนำหน้าชื่อภาษาไทย
                    </label>
                </div>
                <div>
                    <label class="text-paragraph">คำนำหน้าชื่อภาษาอังกฤษ</label>
                    <label class="text-paragraph" style="color: red;">*</label>
                </div>
                <div>
                    <input style="font-family: 'Kanit';" type="text" id="InputprenameEN1" onkeyup="isPrenameENchar(this.value,this)" class="form-control" placeholder="เช่น Mr.">
                    <label class="text-paragraph" id="prenameEN1" style="color: red; display:none; padding-top:5px;">
                        กรุณากรอกคำนำหน้าชื่อภาษาอังกฤษ
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
<div class="modal fade show" tabindex="-1" role="dialog" id="editPrename" style="display:none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-heading">แก้ไขคำนำหน้าชื่อ</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <div>
                    <label class="text-paragraph">คำนำหน้าชื่อภาษาไทย</label>
                    <label class="text-paragraph" style="color: red;">*</label>
                </div>
                <div>
                    <input style="font-family: 'Kanit';" type="text" id="InputprenameTH2" onkeyup="isPrenameTHchar(this.value,this)" class="form-control" placeholder="เช่น นาย">
                    <label class="text-paragraph" id="prenameTH2" style="color: red; display:none; padding-top:5px;">
                        กรุณากรอกคำนำหน้าชื่อภาษาไทย
                    </label>
                </div>
                <div>
                    <label class="text-paragraph">คำนำหน้าชื่อภาษาอังกฤษ</label>
                    <label class="text-paragraph" style="color: red;">*</label>
                </div>
                <div>
                    <input style="font-family: 'Kanit';" type="text" id="InputprenameEN2" onkeyup="isPrenameENchar(this.value,this)" class="form-control" placeholder="เช่น Mr.">
                    <label class="text-paragraph" id="prenameEN2" style="color: red; display:none; padding-top:5px;">
                        กรุณากรอกคำนำหน้าชื่อภาษาอังกฤษ
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
    <div class="form-inline mb-0">
        <ol class="breadcrumb float-sm-left">
            <li class="breadcrumb-item">จัดการข้อมูลพื้นฐาน</li>
            <li class="breadcrumb-item active">คำนำหน้าชื่อ</li>
        </ol>
    </div>
    <div class="padding_main bgWhite mainBoxRadius boxHeader">
        <div>
            <h1 class="h1-title">คำนำหน้าชื่อ</h1>
        </div>
    </div>
    <div class="bgWhite padding_main mainBoxRadius main-margin">
        <div>
            <button class="btn_backend text_btn btn" id="btnInsert" data-toggle="modal" data-target="#insertPrename"><i class="fa fa-plus"></i>&nbsp;&nbsp;เพิ่มคำนำหน้าชื่อ</button>
        </div>
        <div>
            <table id="prename" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="th_text">สถานะ</th>
                        <th class="th_text">เลขที่</th>
                        <th class="th_text">คำนำหน้าชื่อไทย</th>
                        <th class="th_text">คำนำหน้าชื่ออังกฤษ</th>
                        <th class="th_text">แก้ไข</th>
                    </tr>
                </thead>
            </table>
        </div>

    </div>
</div>
<div>
    <script>
        var table = $("#prename").DataTable({
            "processing": true,
            "responsive": true,
            "autoWidth": false,
            "ajax": {
                url: "<?php echo base_url('admin/pre_name/getAll'); ?>",
                type: "GET"
            },
            "columns": [{
                    "data": null,
                    "render": (data, type, row, meta) => {
                        return `
                            <label for="toggle-` + row.n_id + `" class="toggle-1">
                                <input type="checkbox" id="toggle-` + row.n_id + `" 
                                class="toggle-1__input"  ` + (row.n_status == 1 ? 'checked' : '') + `
                                onchange="onClickActivate(` + row.n_id + `)">
                                <span class="toggle-1__button"></span>
                            </label>
                        `;
                    },
                    width: 10
                }, {
                    "data": "n_id",
                    className: "td_text"
                },
                {
                    "data": "n_thainame",
                    className: "td_text"
                },
                {
                    "data": "n_engname",
                    className: "td_text"
                },
                {
                    "data": null,
                    "render": (data, type, row, meta) => {
                        return `
                        <button class="btn btn-flat" style="padding: 2px .75rem; color: #199a6f;" id="` + row.n_id + `" 
                        data-toggle="modal" data-target="#editPrename" onclick="onClickEdit(` + row.n_id + `)">
                            <i class="fa fa-edit"></i>
                        </button>`;
                    }
                }
            ]
        });
    </script>
    <script>
        function isPrenameTHchar(str, obj) {
            var orgi_text = "ๅภถุึคตจขชๆไำพะัีรนยบลฃฟหกดเ้่าสวงผปแอิืทมใฝู฿ฎฑธํ๊ณฯญฐฅฤฆฏโฌ็๋ษศซฉฮฺ์ฒฬฦ. ";
            var str_length = str.length;
            var str_length_end = str_length - 1;
            var isThai = true;
            var Char_At = "";
            for (i = 0; i < str_length; i++) {
                Char_At = str.charAt(i);
                if (orgi_text.indexOf(Char_At) == -1) {
                    isThai = false;
                }
            }
            if (str_length >= 1) {
                if (isThai == false) {
                    obj.value = str.substr(0, str_length_end);
                }
            }
            return isThai; // ถ้าเป็น true แสดงว่าเป็นภาษาไทยทั้งหมด
        }

        function isPrenameENchar(str, obj) {
            var orgi_text = "AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz. ";
            var str_length = str.length;
            var str_length_end = str_length - 1;
            var isThai = true;
            var Char_At = "";
            for (i = 0; i < str_length; i++) {
                Char_At = str.charAt(i);
                if (orgi_text.indexOf(Char_At) == -1) {
                    isThai = false;
                }
            }
            if (str_length >= 1) {
                if (isThai == false) {
                    obj.value = str.substr(0, str_length_end);
                }
            }
            return isThai; // ถ้าเป็น true แสดงว่าเป็นภาษาไทยทั้งหมด
        }

        function onClickSave(func) {
            console.log(func);
            var checkError = true;
            if (func == 'insert') {
                var inputTH = document.getElementById("InputprenameTH1").value;
                var inputEN = document.getElementById("InputprenameEN1").value;
                if (inputTH == "") {
                    document.getElementById("prenameTH1").style.display = "block";
                    document.getElementById("InputprenameTH1").style.border = "1px solid #bd2130";
                    checkError = false;
                } else {
                    document.getElementById("prenameTH1").style.display = "none";
                    document.getElementById("InputprenameTH1").style.border = "1px solid #ced4da";
                }
                if (inputEN == "") {
                    document.getElementById("prenameEN1").style.display = "block";
                    document.getElementById("InputprenameEN1").style.border = "1px solid #bd2130";
                    checkError = false;
                } else {
                    document.getElementById("prenameEN1").style.display = "none";
                    document.getElementById("InputprenameEN1").style.border = "1px solid #ced4da";
                }
                if (checkError == true) {
                    /********insert**********/
                    $.post('<?php echo base_url('admin/pre_name/create') ?>', {
                        n_thainame: inputTH,
                        n_engname: inputEN
                    }).done((res) => {
                        if (res == true) {
                            $('#InputprenameTH1').val('');
                            $('#InputprenameEN1').val('');
                            $('#insertPrename').modal('hide');
                            toastr.success('เพิ่มข้อมูลสำเร็จ');
                            $('#prename').DataTable().ajax.reload();
                        } else {
                            toastr.error('ไม่สามารถเพิ่มข้อมูลได้ โปรดลองใหม่ภายหลัง');
                        }
                    }).fail((xhr, status, error) => {
                        toastr.error('ไม่สามารถเพิ่มข้อมูลได้ โปรดลองใหม่ภายหลัง')
                    });
                    console.log('Start Insert');
                }


            } else if (func == 'edit') {
                var inputTH = document.getElementById("InputprenameTH2").value;
                var inputEN = document.getElementById("InputprenameEN2").value;
                if (inputTH == "") {
                    document.getElementById("prenameTH2").style.display = "block";
                    document.getElementById("InputprenameTH2").style.border = "1px solid #bd2130";
                    checkError = false;
                } else {
                    document.getElementById("prenameTH2").style.display = "none";
                    document.getElementById("InputprenameTH2").style.border = "1px solid #ced4da";
                }
                if (inputEN == "") {
                    document.getElementById("prenameEN2").style.display = "block";
                    document.getElementById("InputprenameEN2").style.border = "1px solid #bd2130";
                    checkError = false;
                } else {
                    document.getElementById("prenameEN2").style.display = "none";
                    document.getElementById("InputprenameEN2").style.border = "1px solid #ced4da";
                }
                if (checkError == true) {
                    /********update**********/
                    var id = $('.edit_btn').attr('id');
                    $.post('<?php echo base_url('admin/pre_name/update'); ?>/' + id, {
                        n_thainame: inputTH,
                        n_engname: inputEN
                    }).done((res) => {
                        if (res == true) {
                            $('#InputprenameTH2').val('');
                            $('#InputprenameEN2').val('');
                            $('#editPrename').modal('hide');
                            toastr.success('แก้ไขข้อมูลสำเร็จ');
                            $('#prename').DataTable().ajax.reload();
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
            $.get('<?php echo base_url('admin/pre_name/getById'); ?>/' + id).done((res) => {
                $('#InputprenameTH2').val(res.n_thainame);
                $('#InputprenameEN2').val(res.n_engname);
                $('.edit_btn').attr('id', res.n_id);
            })
        }

        function onClickActivate(id) {
            if ($('#toggle-' + id).is(":checked")) {
                $.post('<?php echo base_url('admin/pre_name/update'); ?>/' + id, {
                    n_status: 1
                }).done((res) => {
                    toastr.info('NO');
                }).fail((xhr, status, error) => {
                    toastr.error('Error')
                })
            } else {
                $.post('<?php echo base_url('admin/pre_name/update'); ?>/' + id, {
                    n_status: 0
                }).done((res) => {
                    toastr.info('OFF');
                }).fail((xhr, status, error) => {
                    toastr.error('Error')
                })
            }
        }
    </script>