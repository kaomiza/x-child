<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<div class="modal fade show" tabindex="-1" role="dialog" id="insertTypeChild" style="display:none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-heading">เพิ่มประเภทเด็กพิเศษ</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <div>
                    <label class="text-paragraph">ชื่อประเภทเด็กพิเศษ</label>
                    <label class="text-paragraph" style="color: red;">*</label>
                </div>
                <div>
                    <input onkeyup="isAllchar(this.value,this)" id="InputTC1" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น เด็กที่มีความบกพร่องทางสติปัญญา">
                    <label class="text-paragraph" id="TC-error1" style="color: red; display:none; padding-top:5px;">
                        กรุณากรอกชื่อประเภทเด็กพิเศษ
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
                <h4 class="modal-title text-heading">แก้ไขประเภทเด็กพิเศษ</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <div>
                    <label class="text-paragraph">ชื่อประเภทเด็กพิเศษ</label>
                    <label class="text-paragraph" style="color: red;">*</label>
                </div>
                <div>
                    <input onkeyup="isAllchar(this.value,this)" id="InputTC2" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น เด็กที่มีความบกพร่องทางสติปัญญา">
                    <label class="text-paragraph" id="TC-error2" style="color: red; display:none; padding-top:5px;">
                        กรุณากรอกชื่อประเภทเด็กพิเศษ
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
            <h1 class="h1-title">ประเภทเด็กพิเศษ</h1>
        </div>
        <div>
            <button class="btn_backend text_btn btn" id="btnInsert" data-toggle="modal" data-target="#insertTypeChild"><i class="fa fa-plus"></i>&nbsp;&nbsp;เพิ่มประเภทเด็กพิเศษ</button>
        </div>
    </div>
    <div class="bgWhite padding_main mainBoxRadius">
        <div style="overflow-x:auto;">
            <table>
                <tr>
                    <th class="th_text">เลขที่</th>
                    <th class="th_text">ชื่อประเภทเด็กพิเศษ</th>
                    <th class="th_text">แก้ไข</th>
                    <th class="th_text">สถานะ</th>
                </tr>
                <tr>
                    <td class="td_text">1</td>
                    <td class="td_text">เด็กที่มีความบกพร่องทางสติปัญญา</td>
                    <td class="td_text">
                        <button class="btn btn-success" data-toggle="modal" data-target="#editTypeChild">
                            <i class="fa fa-edit"></i>
                        </button>
                    </td>
                    <td class="td_text">
                        <label class="switch">
                            <input type="checkbox" checked>
                            <span class="slider round"></span>
                        </label>
                    </td>

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
                var input = document.getElementById("InputTC1").value;
                if (input == "") {
                    document.getElementById("TC-error1").style.display = "block";
                    document.getElementById("InputTC1").style.border = "1px solid #bd2130";
                    checkError = false;
                } else {
                    document.getElementById("TC-error1").style.display = "none";
                    document.getElementById("InputTC1").style.border = "1px solid #ced4da";
                }
                if (checkError == true) {
                    /********insert**********/
                    console.log('Start Insert');
                }


            } else if (func == 'edit') {
                var input = document.getElementById("InputTC2").value;
                if (input == "") {
                    document.getElementById("TC-error2").style.display = "block";
                    document.getElementById("InputTC2").style.border = "1px solid #bd2130";
                    checkError = false;
                } else {
                    document.getElementById("TC-error2").style.display = "none";
                    document.getElementById("InputTC2").style.border = "1px solid #ced4da";
                }
                if (checkError == true) {
                    /********update**********/
                    console.log('Start Update');
                }
            }
        }
    </script>