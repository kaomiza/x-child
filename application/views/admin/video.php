<div class="modal fade show" tabindex="-1" role="dialog" id="insertVideo" style="display:none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-heading">เพิ่มวิดีโอความรู้</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <div>
                    <label class="text-paragraph">ชื่อวิดีโอความรู้</label>
                    <label class="text-paragraph" style="color: red;">*</label>
                </div>
                <div>
                    <input id="InputVDO1" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น กระต่ายกับเต่า" maxlength="150">
                    <label class="text-paragraph" id="DOC-error1" style="color: red; display:none; padding-top:5px;">
                        กรุณากรอกชื่อวิดีโอความรู้
                    </label>
                </div>
                <div>
                    <label class="text-paragraph">ประเภทวิดีโอความรู้</label>
                    <label class="text-paragraph" style="color: red;">*</label>
                </div>
                <div>
                    <select class="form-control text-paragraph" id="SelectTV1" required="">
                        <option selected="">--- กรุณาเลือก ---</option>
                    </select>
                    <label class="text-paragraph" id="erSelectTV1" style="color: red; display:none; padding-top:5px;">
                        กรุณาเลือกประเภทวิดีโอความรู้
                    </label>
                </div>
                <div>
                    <label class="text-paragraph">ลิงค์วิดีโอความรู้</label>
                    <label class="text-paragraph" style="color: red;">*</label>
                </div>
                <div>
                    <input style="font-family: 'Kanit';" type="text" class="form-control" id="file_VDO1" placeholder="ลิงค์ URL Youtube">
                    <label class="text-paragraph" id="erfile_VDO1" style="color: red; display:none; padding-top:5px;">
                        กรุณากรอก URL ให้ถูกต้อง
                    </label>
                </div>
                <div>
                    <label class="text-paragraph">รายละเอียด</label>
                </div>
                <div>
                    <textarea class="form-control" rows="3" id="detail_TV1" maxlength="255"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary text_btn" data-dismiss="modal">ปิด</button>
                <button type="button" class="btn text_btn" style="background-color: #1e7e34; color:white;" onclick="onClickSave('insert')">บันทึก</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade show" tabindex="-1" role="dialog" id="editVideo" style="display:none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-heading">แก้ไขวิดีโอความรู้</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <div>
                    <label class="text-paragraph">ชื่อวิดีโอความรู้</label>
                    <label class="text-paragraph" style="color: red;">*</label>
                </div>
                <div>
                    <input id="InputVDO2" style="font-family: 'Kanit';" type="text" class="form-control" maxlength="150" placeholder="เช่น เด็กที่มีความบกพร่องทางสติปัญญา">
                    <label class="text-paragraph" id="DOC-error2" style="color: red; display:none; padding-top:5px;">
                        กรุณากรอกชื่อวิดีโอความรู้
                    </label>
                </div>
                <div>
                    <label class="text-paragraph">ประเภทวิดีโอความรู้</label>
                    <label class="text-paragraph" style="color: red;">*</label>
                </div>
                <div>
                    <select class="form-control text-paragraph" id="SelectTV2" required="">
                        <option selected="">--- กรุณาเลือก ---</option>
                    </select>
                    <label class="text-paragraph" id="erSelectTV2" style="color: red; display:none; padding-top:5px;">
                        กรุณาเลือกประเภทวิดีโอความรู้
                    </label>
                </div>
                <div>
                    <label class="text-paragraph">ลิงค์วิดีโอความรู้</label>
                    <label class="text-paragraph" style="color: red;">*</label>
                </div>
                <div>
                    <input style="font-family: 'Kanit';" type="text" class="form-control" id="file_VDO2" placeholder="ลิงค์ URL Youtube">
                    <label class="text-paragraph" id="erfile_VDO2" style="color: red; display:none; padding-top:5px;">
                        กรุณากรอก URL ให้ถูกต้อง
                    </label>
                </div>
                <div>
                    <label class="text-paragraph">รายละเอียด</label>
                </div>
                <div>
                    <textarea class="form-control" rows="3" id="detail_TV2" maxlength="255"></textarea>
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
            <h1 class="h1-title">วิดีโอความรู้</h1>
        </div>
    </div>
    <div class="bgWhite padding_main mainBoxRadius main-margin">
        <div>
            <button class="btn_backend text_btn btn" id="btnInsert" data-toggle="modal" data-target="#insertVideo" onclick="fetch_type_video('add')"><i class="fa fa-plus"></i>&nbsp;&nbsp;เพิ่มวิดีโอความรู้</button>
        </div>
        <div>
            <table id="video" class="table table-bordered table-striped nowrap" style="width: 100%;">
                <thead>
                    <tr>
                        <th class="th_text">สถานะ</th>
                        <th class="th_text">ลำดับ</th>
                        <th class="th_text">รหัสวิดีโอความรู้</th>
                        <th class="th_text">ประเภทวิดีโอความรู้</th>
                        <th class="th_text">ชื่อวิดีโอความรู้</th>
                        <th class="th_text">แก้ไข</th>
                    </tr>
                </thead>
            </table>
        </div>

    </div>
</div>
<!-- datateble -->
<script>
    $("#video").DataTable({
        "processing": true,
        "responsive": {
            details: {
                type: 'column'
            }
        },
        "autoWidth": false,
        "ajax": {
            url: "<?php echo base_url('admin/video/getAll'); ?>",
            type: "GET"
        },
        "order": [
            [1, "asc"]
        ],
        "columns": [{
                "data": null,
                'orderable': false,
                "render": (data, type, row, meta) => {
                    return `
                        <label for="toggle-` + row.v_id + `" class="toggle-1">
                            <input type="checkbox" id="toggle-` + row.v_id + `" 
                            class="toggle-1__input"  ` + (row.v_status == 1 ? 'checked' : '') + `
                            onchange="onClickActivate(` + row.v_id + `)">
                            <span class="toggle-1__button"></span>
                        </label>
                        `;
                },
                width: 10
            },
            {
                "data": null,
                className: "td_text",
                width: 50,
                "render": (data, type, row, meta) => {
                    return meta.row + 1;
                }
            },
            {
                "data": "v_id",
                className: "td_text"
            },
            {
                "data": "tv_name",
                className: "td_text"
            },
            {
                "data": "v_name",
                className: "td_text"
            },
            {
                "data": null,
                "render": (data, type, row, meta) => {
                    return `
                        <button class="btn" style="padding: 2px .75rem; color: #199a6f;" data-toggle="modal" data-target="#editVideo"
                        onclick="onClickEdit(` + row.v_id + `)"><i class="fa fa-edit"></i>
                        </button>
                        `;
                }
            }
        ]
    });
</script>

<!-- modal reset form -->
<script>
    $('#insertVideo').on('hidden.bs.modal', function() {
        reset_form('add');
    })
    $('#editVideo').on('hidden.bs.modal', function() {
        reset_form('edit');
    })

    function reset_form(fn) {
        if (fn == 'add') {
            $('#SelectTV1').empty();
            $('#SelectTV1').append('<option selected="">--- กรุณาเลือก ---</option>');
            $('#InputVDO1').val('');
            $('#file_VDO1').val('');
            $('#detail_TV1').val('');
        }
        if (fn == 'edit') {
            $('#SelectTV2').empty();
            $('#SelectTV2').append('<option selected="">--- กรุณาเลือก ---</option>');
            $('#InputVDO2').val('');
            $('#file_VDO2').val('');
            $('#detail_TV2').val('');
        }
        $('#video').DataTable().ajax.reload();
    }
</script>

<!-- Action function -->
<script>
    function onClickEdit(id) {
        $.get('<?php echo base_url('admin/video/getById'); ?>/' + id).done((res) => {
            $('.edit_btn').attr('id', res.v_id);
            $('#InputVDO2').val(res.v_name);
            fetch_type_video('edit', res.tv_id);
            $('#file_VDO2').val('https://www.youtube.com/watch?v=' + res.v_path_video);
            $('#detail_TV2').val(res.v_detail);
        });
    }

    function onClickActivate(id) {
        if ($('#toggle-' + id).is(":checked")) {
            $.post('<?php echo base_url('admin/video/update'); ?>/' + id, {
                tv_status: 1
            }).done((res) => {
                toastr.info('NO');
            }).fail((xhr, status, error) => {
                toastr.error('Error')
            })
        } else {
            $.post('<?php echo base_url('admin/video/update'); ?>/' + id, {
                tv_status: 0
            }).done((res) => {
                toastr.info('OFF');
            }).fail((xhr, status, error) => {
                toastr.error('Error')
            })
        }
    }

    function fetch_type_video(fn, id = null) {
        if (fn == 'add') {
            $.get('<?php echo base_url('admin/type_video/getListSelect'); ?>').done((res) => {
                res.data.forEach(element => {
                    $('#SelectTV1').append('<option value="' + element.tv_id + '">' + element.tv_name + '</option>')
                });
            });
        }

        if (fn == 'edit') {
            $.get('<?php echo base_url('admin/type_video/getListSelect'); ?>').done((res) => {
                res.data.forEach(element => {
                    if (element.tv_id == id) {
                        $('#SelectTV2').append('<option selected value="' + element.tv_id + '">' + element.tv_name + '</option>')
                    } else {
                        $('#SelectTV2').append('<option value="' + element.tv_id + '">' + element.tv_name + '</option>')
                    }
                });
            });
        }
    }
</script>
<!-- submit funtion -->
<script>
    function youtube_parser(url) {
        var regExp = /^https?\:\/\/(?:www\.youtube(?:\-nocookie)?\.com\/|m\.youtube\.com\/|youtube\.com\/)?(?:ytscreeningroom\?vi?=|youtu\.be\/|vi?\/|user\/.+\/u\/\w{1,2}\/|embed\/|watch\?(?:.*\&)?vi?=|\&vi?=|\?(?:.*\&)?vi?=)([^#\&\?\n\/<>"']*)/i;
        var match = url.match(regExp);
        return (match && match[1].length == 11) ? match[1] : false;
    }

    function onClickSave(func) {
        console.log(func);
        var checkError = true;
        if (func == 'insert') {
            var id_youtube;
            var input = document.getElementById("InputVDO1").value;
            var SelectTD = document.getElementById("SelectTV1").value;
            var file_vdo = document.getElementById("file_VDO1").value;
            var detail = document.getElementById("detail_TV1").value;
            if (input == "") {
                document.getElementById("DOC-error1").style.display = "block";
                document.getElementById("InputVDO1").style.border = "1px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("DOC-error1").style.display = "none";
                document.getElementById("InputVDO1").style.border = "1px solid #ced4da";
            }
            if (SelectTD == "--- กรุณาเลือก ---") {
                document.getElementById("erSelectTV1").style.display = "block";
                document.getElementById("SelectTV1").style.border = "1px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("erSelectTV1").style.display = "none";
                document.getElementById("SelectTV1").style.border = "1px solid #ced4da";
            }
            if (file_vdo == "") {
                document.getElementById("erfile_VDO1").style.display = "block";
                document.getElementById("file_VDO1").style.border = "1px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("erfile_VDO1").style.display = "none";
                document.getElementById("file_VDO1").style.border = "1px solid #ced4da";
                if (youtube_parser(file_vdo)) {
                    id_youtube = youtube_parser(file_vdo);
                } else {
                    document.getElementById("erfile_VDO1").style.display = "block";
                    document.getElementById("file_VDO1").style.border = "1px solid #bd2130";
                    checkError = false;
                }
            }
            if (checkError == true) {
                var date = $.datepicker.formatDate('yy-mm-dd', new Date())
                console.log(date);
                $.post('<?php echo base_url('admin/video/create'); ?>', {
                    tv_id: SelectTD,
                    v_name: input,
                    v_user_upload: '<?php echo $this->session->userdata('U_id'); ?>',
                    v_path_video: id_youtube,
                    v_register_date: date,
                    v_detail: detail
                }).done((res) => {
                    $('#insertVideo').modal('hide');
                    toastr.success('เพิ่มข้อมูลสำเร็จ');
                }).fail((xhr, status, error) => {
                    toastr.error('ไม่สามารถเพิ่มข้อมูลได้ โปรดลองใหม่ภายหลัง');
                });
            }
        } else if (func == 'edit') {
            var input = document.getElementById("InputVDO2").value;
            var SelectTD = document.getElementById("SelectTV2").value;
            var file_vdo = document.getElementById("file_VDO2").value;
            if (input == "") {
                document.getElementById("DOC-error2").style.display = "block";
                document.getElementById("InputVDO2").style.border = "1px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("DOC-error2").style.display = "none";
                document.getElementById("InputVDO2").style.border = "1px solid #ced4da";
            }
            if (SelectTD == "--- กรุณาเลือก ---") {
                document.getElementById("erSelectTV2").style.display = "block";
                document.getElementById("SelectTV2").style.border = "1px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("erSelectTV2").style.display = "none";
                document.getElementById("SelectTV2").style.border = "1px solid #ced4da";
            }
            if (file_vdo == "") {
                document.getElementById("erfile_VDO2").style.display = "block";
                document.getElementById("file_VDO2").style.border = "1px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("erfile_VDO2").style.display = "none";
                document.getElementById("file_VDO2").style.border = "1px solid #ced4da";
                if (youtube_parser(file_vdo)) {
                    id_youtube = youtube_parser(file_vdo);
                } else {
                    document.getElementById("erfile_VDO2").style.display = "block";
                    document.getElementById("file_VDO2").style.border = "1px solid #bd2130";
                    checkError = false;
                }
            }
            if (checkError == true) {
                var id = $('.edit_btn').attr('id');
                $.post('<?php echo base_url('admin/video/update') ?>/' + id, {
                    tv_id: SelectTD,
                    v_name: input,
                    v_path_video: id_youtube,
                    v_detail: detail
                }).done((res) => {
                    $('#editVideo').modal('hide');
                    toastr.success('แก้ไขข้อมูลสำเร็จ');
                }).fail((xhr, status, error) => {
                    toastr.error('ไม่สามารถแก้ไขข้อมูลได้ โปรดลองใหม่ภายหลัง');
                });
            }
        }
    }
</script>