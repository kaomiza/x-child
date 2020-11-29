<link href="https://giDOCdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://giDOCdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<div class="modal fade show" tabindex="-1" role="dialog" id="insertTypeChild" style="display:none;">
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
                        <option value="1">นิทานปรำปรา</option>
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
                    <label class="custom-file-label" for="file_doc1">เลือกไฟล์</label>
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
<div class="modal fade show" tabindex="-1" role="dialog" id="editTypeChild" style="display:none;">
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
                    <label class="custom-file-label" for="file_doc2">เลือกไฟล์</label>
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
            <button class="btn_backend text_btn btn" id="btnInsert" data-toggle="modal" data-target="#insertTypeChild"><i class="fa fa-plus"></i>&nbsp;&nbsp;เพิ่มเอกสารความรู้</button>
        </div>
        <div>
            <table id="type_children" class="table table-bordered table-striped nowrap" style="width: 100%;">
                <thead>
                    <tr>
                        <th class="th_text">สถานะ</th>
                        <th class="th_text">เลขที่</th>
                        <th class="th_text">ประเภทเอกสารความรู้</th>
                        <th class="th_text">ชื่อเอกสารความรู้</th>
                        <th class="th_text">แก้ไข</th>
                    </tr>
                </thead>
            </table>
        </div>

    </div>
</div>
<script>
    $('#file_doc1').on('change', function() {
        //get the file name
        var fileName = $(this).val();
        //replace the "Choose a file" label
        $(this).next('.custom-file-label').html(fileName);
    })
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
            if (file_doc == "") {
                document.getElementById("erfile_doc2").style.display = "block";
                document.getElementById("file_doc2").style.border = "1px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("erfile_doc2").style.display = "none";
                document.getElementById("file_doc2").style.border = "1px solid #ced4da";
                if (file_doc.endsWith(".txt")) {
                    document.getElementById("erfile_doc2").style.display = "none";
                    document.getElementById("file_doc2").style.border = "1px solid #ced4da";
                } else {
                    document.getElementById("erfile_doc2").style.display = "block";
                    document.getElementById("file_doc2").style.border = "1px solid #bd2130";
                    checkError = false;
                }
            }
        }
    }
</script>