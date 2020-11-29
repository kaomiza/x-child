<link href="https://giDOCdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://giDOCdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<div class="modal fade show" tabindex="-1" role="dialog" id="insertTypeChild" style="display:none;">
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
                    <input onkeyup="isAllchar(this.value,this)" id="InputVDO1" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น กระต่ายกับเต่า">
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
                        <option value="1">นิทานปรำปรา</option>
                    </select>
                    <label class="text-paragraph" id="erSelectTV1" style="color: red; display:none; padding-top:5px;">
                        กรุณาเลือกประเภทวิดีโอความรู้
                    </label>
                </div>
                <div>
                    <label class="text-paragraph">ไฟล์วิดีโอความรู้</label>
                    <label class="text-paragraph" style="color: red;">*</label>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" accept="video/*" id="file_VDO1">
                    <label class="custom-file-label" for="file_VDO1">เลือกไฟล์</label>
                    <label class="text-paragraph" id="erfile_VDO1" style="color: red; display:none; padding-top:5px;">
                        กรุณาเลือกไฟล์วิดีโอความรู้ให้ถูกต้อง เช่น สื่อการเรียนการสอน.mp4 สื่อการเรียนการสอน.mov สื่อการเรียนการสอน.flv เป็นต้น
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
                <h4 class="modal-title text-heading">แก้ไขวิดีโอความรู้</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <div>
                    <label class="text-paragraph">ชื่อวิดีโอความรู้</label>
                    <label class="text-paragraph" style="color: red;">*</label>
                </div>
                <div>
                    <input onkeyup="isAllchar(this.value,this)" id="InputVDO2" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น เด็กที่มีความบกพร่องทางสติปัญญา">
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
                        <option value="1">นิทานปรำปรา</option>
                    </select>
                    <label class="text-paragraph" id="erSelectTV2" style="color: red; display:none; padding-top:5px;">
                        กรุณาเลือกประเภทวิดีโอความรู้
                    </label>
                </div>
                <div>
                    <label class="text-paragraph">ไฟล์วิดีโอความรู้</label>
                    <label class="text-paragraph" style="color: red;">*</label>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" accept="video/*" id="file_VDO2">
                    <label class="custom-file-label" for="file_VDO2">เลือกไฟล์</label>
                    <label class="text-paragraph" id="erfile_VDO2" style="color: red; display:none; padding-top:5px;">
                        กรุณาเลือกไฟล์วิดีโอความรู้ให้ถูกต้อง เช่น สื่อการเรียนการสอน.mp4 สื่อการเรียนการสอน.mov สื่อการเรียนการสอน.flv เป็นต้น
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
            <h1 class="h1-title">วิดีโอความรู้</h1>
        </div>
    </div>
    <div class="bgWhite padding_main mainBoxRadius main-margin">
        <div>
            <button class="btn_backend text_btn btn" id="btnInsert" data-toggle="modal" data-target="#insertTypeChild"><i class="fa fa-plus"></i>&nbsp;&nbsp;เพิ่มวิดีโอความรู้</button>
        </div>
        <div>
            <table id="type_children" class="table table-bordered table-striped nowrap" style="width: 100%;">
                <thead>
                    <tr>
                        <th class="th_text">สถานะ</th>
                        <th class="th_text">เลขที่</th>
                        <th class="th_text">ประเภทวิดีโอความรู้</th>
                        <th class="th_text">ชื่อวิดีโอความรู้</th>
                        <th class="th_text">แก้ไข</th>
                    </tr>
                </thead>
            </table>
        </div>

    </div>
</div>
<script>
    $('#file_VDO1').on('change', function() {
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
            var input = document.getElementById("InputVDO1").value;
            var SelectTD = document.getElementById("SelectTV1").value;
            var file_doc = document.getElementById("file_VDO1").value;
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
            if (file_doc == "") {
                document.getElementById("erfile_VDO1").style.display = "block";
                document.getElementById("file_VDO1").style.border = "1px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("erfile_VDO1").style.display = "none";
                document.getElementById("file_VDO1").style.border = "1px solid #ced4da";
                if (file_doc.endsWith(".txt")) {
                    document.getElementById("erfile_VDO1").style.display = "none";
                    document.getElementById("file_VDO1").style.border = "1px solid #ced4da";
                } else {
                    document.getElementById("erfile_VDO1").style.display = "block";
                    document.getElementById("file_VDO1").style.border = "1px solid #bd2130";
                    checkError = false;
                }
            }
        } else if (func == 'edit') {
            var input = document.getElementById("InputVDO2").value;
            var SelectTD = document.getElementById("SelectTV2").value;
            var file_doc = document.getElementById("file_VDO2").value;
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
            if (file_doc == "") {
                document.getElementById("erfile_VDO2").style.display = "block";
                document.getElementById("file_VDO2").style.border = "1px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("erfile_VDO2").style.display = "none";
                document.getElementById("file_VDO2").style.border = "1px solid #ced4da";
                if (file_doc.endsWith(".txt")) {
                    document.getElementById("erfile_VDO2").style.display = "none";
                    document.getElementById("file_VDO2").style.border = "1px solid #ced4da";
                } else {
                    document.getElementById("erfile_VDO2").style.display = "block";
                    document.getElementById("file_VDO2").style.border = "1px solid #bd2130";
                    checkError = false;
                }
            }
        }
    }
</script>