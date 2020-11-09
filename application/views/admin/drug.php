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
                    <select class="form-control text-paragraph" id="inputSelect1" required="">
                        <option selected="">--- กรุณาเลือก ---</option>
                        <option>ยาระงับปวดและลดไข้</option>
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
                        <option selected="">--- กรุณาเลือก ---</option>
                        <option>ยาระงับปวดและลดไข้</option>
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
                <button type="button" class="btn text_btn" style="background-color: #1e7e34; color:white;" onclick="onClickSave('edit')">บันทึก</button>
            </div>
        </div>
    </div>
</div>
<div class="main-margin padding_main">
    <div class="padding_main bgWhite mainBoxRadius boxHeader">
        <div>
            <h1 class="h1-title">ยา</h1>
        </div>
        <div>
            <button class="btn_backend text_btn btn" id="btnInsert" data-toggle="modal" data-target="#insertDrug">
                <i class="fa fa-plus"></i>&nbsp;&nbsp;
                เพิ่มยา
            </button>
        </div>
    </div>
    <div class="bgWhite padding_main mainBoxRadius">
        <div style="overflow-x:auto;">
            <table id="drug" class="table table-bordered table-striped">
                <tr>
                    <th class="th_text">เลขที่</th>
                    <th class="th_text">กลุ่มยา</th>
                    <th class="th_text">ชื่อยาภาษาไทย</th>
                    <th class="th_text">ชื่อยาภาษาอังกฤษ</th>
                    <th class="th_text">แก้ไข</th>
                    <th class="th_text">สถานะ</th>
                </tr>

            </table>
        </div>
    </div>
</div>
<div>
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
                    console.log('Start Update');
                }
            }
        }
    </script>