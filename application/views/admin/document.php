<div class="modal fade show" tabindex="-1" role="dialog" id="insertDoc" style="display:none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-heading">เพิ่มเอกสารความรู้</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <div>
                    <label class="text-paragraph">ชื่อเอกสารความรู้</label>
                    <label class="text-paragraph" style="color: red;">*</label>
                </div>
                <div>
                    <input onkeyup="isAllchar(this.value,this)" id="InputDOC1" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น กระต่ายกับเต่า">
                    <label class="text-paragraph" id="DOC-error1" style="color: red; display:none; padding-top:5px;">
                        กรุณากรอกชื่อเอกสารความรู้
                    </label>
                </div>
                <div>
                    <label class="text-paragraph">ประเภทเอกสารความรู้</label>
                    <label class="text-paragraph" style="color: red;">*</label>
                </div>
                <div>
                    <select class="form-control text-paragraph" id="SelectTD1" required="">
                        <option selected="">--- กรุณาเลือก ---</option>
                    </select>
                    <label class="text-paragraph" id="erSelectTD1" style="color: red; display:none; padding-top:5px;">
                        กรุณาเลือกประเภทเอกสารความรู้
                    </label>
                </div>
                <div>
                    <label class="text-paragraph">ไฟล์เอกสารความรู้</label>
                    <label class="text-paragraph" style="color: red;">*</label>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" accept=".txt" id="file_doc1">
                    <label class="custom-file-label" for="file_doc1" id="label_doc1">เลือกไฟล์</label>
                    <label class="text-paragraph" id="erfile_doc1" style="color: red; display:none; padding-top:5px;">
                        กรุณาเลือกไฟล์เอกสารความรู้ให้ถูกต้อง เช่น นิทานกระต่ายกับเต่า.txt
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
<div class="modal fade show" tabindex="-1" role="dialog" id="editDoc" style="display:none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-heading">แก้ไขเอกสารความรู้</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <div>
                    <label class="text-paragraph">ชื่อเอกสารความรู้</label>
                    <label class="text-paragraph" style="color: red;">*</label>
                </div>
                <div>
                    <input onkeyup="isAllchar(this.value,this)" id="InputDOC2" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น เด็กที่มีความบกพร่องทางสติปัญญา">
                    <label class="text-paragraph" id="DOC-error2" style="color: red; display:none; padding-top:5px;">
                        กรุณากรอกชื่อเอกสารความรู้
                    </label>
                </div>
                <div>
                    <label class="text-paragraph">ประเภทเอกสารความรู้</label>
                    <label class="text-paragraph" style="color: red;">*</label>
                </div>
                <div>
                    <select class="form-control text-paragraph" id="SelectTD2" required="">
                        <option selected="">--- กรุณาเลือก ---</option>
                        <option value="1">นิทานปรำปรา</option>
                    </select>
                    <label class="text-paragraph" id="erSelectTD2" style="color: red; display:none; padding-top:5px;">
                        กรุณาเลือกประเภทเอกสารความรู้
                    </label>
                </div>
                <div>
                    <label class="text-paragraph">ไฟล์เอกสารความรู้</label>
                    <label class="text-paragraph" style="color: red;">*</label>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" accept=".txt" id="file_doc2">
                    <label class="custom-file-label" id="label_doc2" for="file_doc2">เลือกไฟล์</label>
                    <label class="text-paragraph" id="erfile_doc2" style="color: red; display:none; padding-top:5px;">
                        กรุณาเลือกไฟล์เอกสารความรู้ให้ถูกต้อง เช่น นิทานกระต่ายกับเต่า.txt
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
            <h1 class="h1-title">เอกสารความรู้</h1>
        </div>
    </div>
    <div class="bgWhite padding_main mainBoxRadius main-margin">
        <div>
            <button class="btn_backend text_btn btn" id="btnInsert" data-toggle="modal" data-target="#insertDoc" onclick="fetch_type_document('add')"><i class="fa fa-plus"></i>&nbsp;&nbsp;เพิ่มเอกสารความรู้</button>
        </div>
        <div>
            <table id="document" class="table table-bordered table-striped nowrap" style="width: 100%;">
                <thead>
                    <tr>
                        <th class="th_text">สถานะ</th>
                        <th class="th_text">ลำดับ</th>
                        <th class="th_text">รหัสประเภทเอกสาร</th>
                        <th class="th_text">ประเภทเอกสารความรู้</th>
                        <th class="th_text">ชื่อเอกสารความรู้</th>
                        <th class="th_text">แก้ไข</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
<!-- datateble -->
<script>
    $("#document").DataTable({
        "processing": true,
        "responsive": {
            details: {
                type: 'column'
            }
        },
        "autoWidth": false,
        "ajax": {
            url: "<?php echo base_url('admin/document/getAll'); ?>",
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
                        <label for="toggle-` + row.doc_id + `" class="toggle-1">
                            <input type="checkbox" id="toggle-` + row.doc_id + `" 
                            class="toggle-1__input"  ` + (row.doc_status == 1 ? 'checked' : '') + `
                            onchange="onClickActivate(` + row.doc_id + `)">
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
                "data": "doc_id",
                className: "td_text"
            },
            {
                "data": "td_name",
                className: "td_text"
            },
            {
                "data": "doc_name",
                className: "td_text"
            },
            {
                "data": null,
                "render": (data, type, row, meta) => {
                    return `
                        <button class="btn" style="padding: 2px .75rem; color: #199a6f;" data-toggle="modal" data-target="#editDoc"
                        onclick="onClickEdit(` + row.doc_id + `)"><i class="fa fa-edit"></i>
                        </button>
                        `;
                }
            }
        ]
    });
</script>
<!-- file input -->
<script>
    var path_file;
    $('#file_doc1').on('change', function(e) {
        //get the file name
        if (e.target.files[0]) {
            var fileName = e.target.files[0].name;
            var file = e.target.files[0];
            var allowedExtensions = /(\.txt)$/i;
            $(this).next("#label_doc1").html(fileName);
            if (!allowedExtensions.exec(fileName)) {
                alert('Invalid file type');
                $("#file_doc1").val('');
                $(this).next("#label_doc1").html('เลือกไฟล์');
                return false;
            } else {
                if (e.target.files[0].size <= 5000000) {
                    var formData = new FormData();
                    formData.append('file', file);
                    $.ajax({
                        url: '<?php echo base_url('admin/document/storeFileDoc'); ?>',
                        type: "post",
                        data: formData,
                        processData: false,
                        contentType: false,
                        cache: false,
                        async: true,
                        success: (res) => {
                            path_file = 'upload/document/' + res.doc_metadata.file_name;
                        }
                    });
                } else {
                    $("#file_doc1").val('');
                    alert('ขนาดไฟล์ต้องไม่เกิน 5 mb');
                    $(this).next("#label_doc1").html('เลือกไฟล์');
                    return false;
                }
            }
        } else {
            $(this).next("#label_doc1").html('เลือกไฟล์');
        }
    })

    $('#file_doc2').on('change', function() {
        //get the file name
        var fileName = e.target.files[0].name;
        //replace the "Choose a file" label
        $(this).next('.custom-file-label').html(fileName);
    })
</script>
<!-- modal reset form -->
<script>
    $('#insertDoc').on('hidden.bs.modal', function() {
        reset_form('add');
    })
    $('#editDoc').on('hidden.bs.modal', function() {
        reset_form('edit');
    })

    function reset_form(fn) {
        if (fn == 'add') {
            $('#InputDOC1').val('');
            $('#file_doc1').val('');
            $('#label_doc1').html('เลือกไฟล์');
            $('#SelectTD1').empty();
            $('#SelectTD1').append('<option selected="">--- กรุณาเลือก ---</option>');
            path_file = '';
        }
        if (fn == 'edit') {
            $('#InputDOC2').val('');
            $('#file_doc2').val('');
            $('#label_doc2').html('เลือกไฟล์');
            $('#SelectTD2').empty();
            $('#SelectTD2').append('<option selected="">--- กรุณาเลือก ---</option>');
            path_file = '';
        }
        $('#document').DataTable().ajax.reload();
    }
</script>

<script>
    function onClickSave(func) {
        console.log(func);
        var checkError = true;
        if (func == 'insert') {
            var input = document.getElementById("InputDOC1").value;
            var SelectTD = document.getElementById("SelectTD1").value;
            var file_doc = document.getElementById("file_doc1").value;
            if (input == "") {
                document.getElementById("DOC-error1").style.display = "block";
                document.getElementById("InputDOC1").style.border = "1px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("DOC-error1").style.display = "none";
                document.getElementById("InputDOC1").style.border = "1px solid #ced4da";
            }
            if (SelectTD == "--- กรุณาเลือก ---") {
                document.getElementById("erSelectTD1").style.display = "block";
                document.getElementById("SelectTD1").style.border = "1px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("erSelectTD1").style.display = "none";
                document.getElementById("SelectTD1").style.border = "1px solid #ced4da";
            }
            if (file_doc == "") {
                document.getElementById("erfile_doc1").style.display = "block";
                document.getElementById("file_doc1").style.border = "1px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("erfile_doc1").style.display = "none";
                document.getElementById("file_doc1").style.border = "1px solid #ced4da";
                if (file_doc.endsWith(".txt")) {
                    document.getElementById("erfile_doc1").style.display = "none";
                    document.getElementById("file_doc1").style.border = "1px solid #ced4da";
                } else {
                    document.getElementById("erfile_doc1").style.display = "block";
                    document.getElementById("file_doc1").style.border = "1px solid #bd2130";
                    checkError = false;
                }
            }
            if (checkError == true) {
                // insert
                $.post('<?php echo base_url('admin/document/create'); ?>', {
                    td_id: SelectTD,
                    doc_name: input,
                    doc_path: path_file
                }).done((res) => {
                    $('#insertDoc').modal('hide');
                    toastr.success('เพิ่มข้อมูลสำเร็จ');
                }).fail((xhr, status, error) => {
                    toastr.error('ไม่สามารถเพิ่มข้อมูลได้ โปรดลองใหม่ภายหลัง');
                });
            }
        } else if (func == 'edit') {
            var input = document.getElementById("InputDOC2").value;
            var SelectTD = document.getElementById("SelectTD2").value;
            var file_doc = document.getElementById("file_doc2").value;
            if (input == "") {
                document.getElementById("DOC-error2").style.display = "block";
                document.getElementById("InputDOC2").style.border = "1px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("DOC-error2").style.display = "none";
                document.getElementById("InputDOC2").style.border = "1px solid #ced4da";
            }
            if (SelectTD == "--- กรุณาเลือก ---") {
                document.getElementById("erSelectTD2").style.display = "block";
                document.getElementById("SelectTD2").style.border = "1px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("erSelectTD2").style.display = "none";
                document.getElementById("SelectTD2").style.border = "1px solid #ced4da";
            }
            if (checkError == true) {
                var id_doc = $('.edit_btn').attr('id');
                $.post('<?php echo base_url('admin/document/update'); ?>/' + id_doc, {
                    td_id: SelectTD,
                    doc_name: input,
                    doc_path: path_file
                }).done((res) => {
                    $('#editDoc').modal('hide');
                    toastr.success('แก้ไขข้อมูลสำเร็จ');
                }).fail((xhr, status, error) => {
                    toastr.error('ไม่สามารถแก้ไขข้อมูลได้ โปรดลองใหม่ภายหลัง');
                });
            }
        }
    }

    function fetch_type_document(fn, id = null) {
        if (fn == 'add') {
            $.get('<?php echo base_url('admin/type_document/getListSelect'); ?>').done((res) => {
                res.data.forEach(element => {
                    $('#SelectTD1').append('<option value="' + element.td_id + '">' + element.td_name + '</option>')
                });
            });
        }

        if (fn == 'edit') {
            $.get('<?php echo base_url('admin/type_document/getListSelect'); ?>').done((res) => {
                res.data.forEach(element => {
                    if (element.td_id == id) {
                        $('#SelectTD2').append('<option selected value="' + element.td_id + '">' + element.td_name + '</option>')
                    } else {
                        $('#SelectTD2').append('<option value="' + element.td_id + '">' + element.td_name + '</option>')
                    }
                });
            });
        }
    }

    function onClickEdit(id) {
        $.get('<?php echo base_url('admin/document/getById'); ?>/' + id).done((res) => {
            $('.edit_btn').attr('id', res.doc_id);
            $('#InputDOC2').val(res.doc_name);
            fetch_type_document('edit', res.td_id);
            path_file = res.doc_path;
            $('#label_doc2').html(res.doc_path);
        });
    }

    function onClickActivate(id) {
        if ($('#toggle-' + id).is(":checked")) {
            $.post('<?php echo base_url('admin/document/update'); ?>/' + id, {
                doc_status: 1
            }).done((res) => {
                toastr.info('NO');
            }).fail((xhr, status, error) => {
                toastr.error('Error')
            })
        } else {
            $.post('<?php echo base_url('admin/document/update'); ?>/' + id, {
                doc_status: 0
            }).done((res) => {
                toastr.info('OFF');
            }).fail((xhr, status, error) => {
                toastr.error('Error')
            })
        }
    }
</script>