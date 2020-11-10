<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<div class="modal fade show" tabindex="-1" role="dialog" id="insertSchool" style="display:none;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-heading">เพิ่มโรงเรียน</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <label class="text-paragraph">ชื่อโรงเรียนภาษาไทย</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input onkeyup="isTHandNumchar(this.value,this)" id="NameSchoolTH1" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น โรงเรียนนครราชสีมาปัญญานุกูล จังหวัดนครราชสีมา">
                            <label class="text-paragraph" id="erNameSchoolTH1" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอกชื่อโรงเรียนภาษาไทย
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <label class="text-paragraph">ชื่อโรงเรียนภาษาอังกฤษ</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input onkeyup="isENandNumchar(this.value,this)" id="NameSchoolEN1" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น Nakhonratchasima Panyanukul School">
                            <label class="text-paragraph" id="erNameSchoolEN1" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอกชื่อโรงเรียนภาษาอังกฤษ
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <label class="text-paragraph">ประเภทโรงเรียน</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <select class="form-control text-paragraph" id="SelectTS1" required="">
                                <option selected="">--- กรุณาเลือก ---</option>
                                <option>โรงเรียนเฉพาะความพิการ</option>
                            </select>
                            <label class="text-paragraph" id="erSelectTS1" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกประเภทโรงเรียน
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <label class="text-paragraph">บ้านเลขที่</label>
                        </div>
                        <div>
                            <input onkeyup="isHomeNumchar(this.value,this)" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น 70/1">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <label class="text-paragraph">หมู่</label>
                        </div>
                        <div>
                            <input onkeyup="isNumAllchar(this.value,this)" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น 10">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <label class="text-paragraph">ถนน</label>
                        </div>
                        <div>
                            <input onkeyup="isRoadchar(this.value,this)" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น ถนนมิตรภาพ">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <label class="text-paragraph">จังหวัด</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <select class="form-control text-paragraph" id="SelectPro1" required="">
                                <option selected="">--- กรุณาเลือก ---</option>
                                <option>นครราชสีมา</option>
                            </select>
                            <label class="text-paragraph" id="erSelectPro1" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกจังหวัด
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <label class="text-paragraph">อำเภอ</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <select class="form-control text-paragraph" id="SelectAm1" required="">
                                <option selected="">--- กรุณาเลือก ---</option>
                                <option>อำเภอนครราชสีมา</option>
                            </select>
                            <label class="text-paragraph" id="erSelectAm1" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกอำเภอ
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <label class="text-paragraph">ตำบล</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <select class="form-control text-paragraph" id="SelectDist1" required="">
                                <option selected="">--- กรุณาเลือก ---</option>
                                <option>ในเมือง</option>
                            </select>
                            <label class="text-paragraph" id="erSelectDist1" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกตำบล
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <label class="text-paragraph">ไปรษณีย์</label>
                        </div>
                        <div>
                            <input style="font-family: 'Kanit';" type="text" class="form-control" disabled placeholder="30000">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <label class="text-paragraph">เว็บไซต์</label>
                        </div>
                        <div>
                            <input style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น http://www.nmpschool.net/    ">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <label class="text-paragraph">เบอร์โทรศัพท์</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input onkeyup="isNumEngchar(this.value,this)" id="NumPhone1" maxlength="10" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="044214983">
                            <label class="text-paragraph" id="erNumPhone1-1" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอกเบอร์โทรศัพท์
                            </label>
                            <label class="text-paragraph" id="erNumPhone1-2" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอกเบอร์โทรศัพท์ให้ถูกต้อง เช่น 044214xxx หรือ 091860xxxx
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <label class="text-paragraph">ละติจูด</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input onkeyup="isDoublechar(this.value,this)" id="Lat1" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="14.94954">
                            <label class="text-paragraph" id="erLat1-1" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอกละติจูด
                            </label>
                            <label class="text-paragraph" id="erLat1-2" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอกละติจูดให้ถูกต้อง เช่น 14.94954
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <label class="text-paragraph">ลองติจูด</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input onkeyup="isDoublechar(this.value,this)" id="Long1" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="102.038834">
                            <label class="text-paragraph" id="erLong1-1" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอกลองติจูด
                            </label>
                            <label class="text-paragraph" id="erLong1-2" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอกลองติจูดให้ถูกต้อง เช่น 102.038834
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary text_btn" data-dismiss="modal">ปิด</button>
                <button type="button" class="btn text_btn" style="background-color: #1e7e34; color:white;" onclick="onClickSave('insert')">บันทึก</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade show" tabindex="-1" role="dialog" id="editSchool" style="display:none;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-heading">แก้ไขโรงเรียน</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <label class="text-paragraph">ชื่อโรงเรียนภาษาไทย</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input onkeyup="isTHandNumchar(this.value,this)" id="NameSchoolTH2" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น โรงเรียนนครราชสีมาปัญญานุกูล จังหวัดนครราชสีมา">
                            <label class="text-paragraph" id="erNameSchoolTH2" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอกชื่อโรงเรียนภาษาไทย
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <label class="text-paragraph">ชื่อโรงเรียนภาษาอังกฤษ</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input onkeyup="isENandNumchar(this.value,this)" id="NameSchoolEN2" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น Nakhonratchasima Panyanukul School">
                            <label class="text-paragraph" id="erNameSchoolEN2" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอกชื่อโรงเรียนภาษาอังกฤษ
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <label class="text-paragraph">ประเภทโรงเรียน</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <select class="form-control text-paragraph" id="SelectTS2" required="">
                                <option selected="">--- กรุณาเลือก ---</option>
                                <option>โรงเรียนเฉพาะความพิการ</option>
                            </select>
                            <label class="text-paragraph" id="erSelectTS2" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกประเภทโรงเรียน
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <label class="text-paragraph">บ้านเลขที่</label>
                        </div>
                        <div>
                            <input onkeyup="isHomeNumchar(this.value,this)" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น 70/1">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <label class="text-paragraph">หมู่</label>
                        </div>
                        <div>
                            <input onkeyup="isNumAllchar(this.value,this)" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น 10">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <label class="text-paragraph">ถนน</label>
                        </div>
                        <div>
                            <input onkeyup="isRoadchar(this.value,this)" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น ถนนมิตรภาพ">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <label class="text-paragraph">จังหวัด</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <select class="form-control text-paragraph" id="SelectPro2" required="">
                                <option selected="">--- กรุณาเลือก ---</option>
                                <option>นครราชสีมา</option>
                            </select>
                            <label class="text-paragraph" id="erSelectPro2" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกจังหวัด
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <label class="text-paragraph">อำเภอ</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <select class="form-control text-paragraph" id="SelectAm2" required="">
                                <option selected="">--- กรุณาเลือก ---</option>
                                <option>อำเภอนครราชสีมา</option>
                            </select>
                            <label class="text-paragraph" id="erSelectAm2" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกอำเภอ
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <label class="text-paragraph">ตำบล</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <select class="form-control text-paragraph" id="SelectDist2" required="">
                                <option selected="">--- กรุณาเลือก ---</option>
                                <option>ในเมือง</option>
                            </select>
                            <label class="text-paragraph" id="erSelectDist2" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกตำบล
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <label class="text-paragraph">ไปรษณีย์</label>
                        </div>
                        <div>
                            <input style="font-family: 'Kanit';" type="text" class="form-control" disabled placeholder="30000">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <label class="text-paragraph">เว็บไซต์</label>
                        </div>
                        <div>
                            <input style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น http://www.nmpschool.net/    ">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <label class="text-paragraph">เบอร์โทรศัพท์</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input onkeyup="isNumEngchar(this.value,this)" maxlength="10" id="NumPhone2" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="044214983">
                            <label class="text-paragraph" id="erNumPhone2-1" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอกเบอร์โทรศัพท์
                            </label>
                            <label class="text-paragraph" id="erNumPhone2-2" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอกเบอร์โทรศัพท์ให้ถูกต้อง เช่น 044214xxx หรือ 091860xxxx
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <label class="text-paragraph">ละติจูด</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input onkeyup="isDoublechar(this.value,this)" id="Lat2" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="14.94954">
                            <label class="text-paragraph" id="erLat2-1" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอกละติจูด
                            </label>
                            <label class="text-paragraph" id="erLat2-2" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอกละติจูดให้ถูกต้อง เช่น 14.94954
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <label class="text-paragraph">ลองติจูด</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input onkeyup="isDoublechar(this.value,this)" id="Long2" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="102.038834">
                            <label class="text-paragraph" id="erLong2-1" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอกลองติจูด
                            </label>
                            <label class="text-paragraph" id="erLong2-2" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอกลองติจูดให้ถูกต้อง เช่น 102.038834
                            </label>
                        </div>
                    </div>

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
            <h1 class="h1-title">โรงเรียน</h1>
        </div>
        <div>
            <button class="btn_backend text_btn btn" id="btnInsert" data-toggle="modal" data-target="#insertSchool"><i class="fa fa-plus"></i>&nbsp;&nbsp;เพิ่มโรงเรียน</button>
        </div>
    </div>
    <div class="bgWhite padding_main mainBoxRadius">
        <div style="overflow-x:auto;">
            <table>
                <tr>
                    <th class="th_text">เลขที่</th>
                    <th class="th_text">ชื่อโรงเรียนภาษาไทย</th>
                    <th class="th_text">ชื่อโรงเรียนภาษาอังกฤษ</th>
                    <th class="th_text">ประเภทโรงเรียน</th>
                    <th class="th_text">ที่ตั้ง</th>
                    <th class="th_text">เว็บไซต์</th>
                    <th class="th_text">เบอร์โทรศัพท์</th>
                    <th class="th_text">ละติจูด</th>
                    <th class="th_text">ลองติจูด</th>
                    <th class="th_text">แก้ไข</th>
                    <th class="th_text">สถานะ</th>
                </tr>
                <tr>
                    <td class="td_text">1</td>
                    <td class="td_text">โรงเรียนนครราชสีมาปัญญานุกูล จังหวัดนครราชสีมา</td>
                    <td class="td_text">Nakhonratchasima Panyanukul School</td>
                    <td class="td_text">โรงเรียนเฉพาะความพิการ</td>
                    <td class="td_text">70 ถนนมิตรภาพ จ.นครราชสีมา ต.ในเมือง อ.เมืองนครราชสีมา 30000</td>
                    <td class="td_text">http://www.nmpschool.net/</td>
                    <td class="td_text">044214983</td>
                    <td class="td_text">14.94954</td>
                    <td class="td_text">102.038834</td>
                    <td class="td_text">
                        <button class="btn btn-success" data-toggle="modal" data-target="#editSchool">
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
        function isPhoneNo(input) {
            var regExp = /^0[0-9]{8,9}$/i;
            return regExp.test(input);
        }

        function onClickSave(func) {
            console.log(func);
            var checkError = true;
            if (func == 'insert') {
                var nameScTH = document.getElementById("NameSchoolTH1").value;
                var nameScEN = document.getElementById("NameSchoolEN1").value;
                var selectTC = document.getElementById("SelectTS1").value;
                var selectPro = document.getElementById("SelectPro1").value;
                var selectAm = document.getElementById("SelectAm1").value;
                var selectDist = document.getElementById("SelectDist1").value;
                var numPhone = document.getElementById("NumPhone1").value;
                var lat = document.getElementById("Lat1").value;
                var long = document.getElementById("Long1").value;

                if (nameScTH == "") {
                    document.getElementById("erNameSchoolTH1").style.display = "block";
                    document.getElementById("NameSchoolTH1").style.border = "1px solid #bd2130";
                    checkError = false;
                } else {
                    document.getElementById("erNameSchoolTH1").style.display = "none";
                    document.getElementById("NameSchoolTH1").style.border = "1px solid #ced4da";
                }
                if (nameScEN == "") {
                    document.getElementById("erNameSchoolEN1").style.display = "block";
                    document.getElementById("NameSchoolEN1").style.border = "1px solid #bd2130";
                    checkError = false;
                } else {
                    document.getElementById("erNameSchoolEN1").style.display = "none";
                    document.getElementById("NameSchoolEN1").style.border = "1px solid #ced4da";
                }
                if (selectTC == "--- กรุณาเลือก ---") {
                    document.getElementById("erSelectTS1").style.display = "block";
                    document.getElementById("SelectTS1").style.border = "1px solid #bd2130";
                    checkError = false;
                } else {
                    document.getElementById("erSelectTS1").style.display = "none";
                    document.getElementById("SelectTS1").style.border = "1px solid #ced4da";
                }
                if (selectPro == "--- กรุณาเลือก ---") {
                    document.getElementById("erSelectPro1").style.display = "block";
                    document.getElementById("SelectPro1").style.border = "1px solid #bd2130";
                    checkError = false;
                } else {
                    document.getElementById("erSelectPro1").style.display = "none";
                    document.getElementById("SelectPro1").style.border = "1px solid #ced4da";
                }
                if (selectAm == "--- กรุณาเลือก ---") {
                    document.getElementById("erSelectAm1").style.display = "block";
                    document.getElementById("SelectAm1").style.border = "1px solid #bd2130";
                    checkError = false;
                } else {
                    document.getElementById("erSelectAm1").style.display = "none";
                    document.getElementById("SelectAm1").style.border = "1px solid #ced4da";
                }
                if (selectDist == "--- กรุณาเลือก ---") {
                    document.getElementById("erSelectDist1").style.display = "block";
                    document.getElementById("SelectDist1").style.border = "1px solid #bd2130";
                    checkError = false;
                } else {
                    document.getElementById("erSelectDist1").style.display = "none";
                    document.getElementById("SelectDist1").style.border = "1px solid #ced4da";
                }
                if (numPhone == "") {
                    document.getElementById("erNumPhone1-1").style.display = "block";
                    document.getElementById("NumPhone1").style.border = "1px solid #bd2130";
                    checkError = false;
                } else {
                    document.getElementById("erNumPhone1-1").style.display = "none";
                    document.getElementById("NumPhone1").style.border = "1px solid #ced4da";
                    var checkNum = isPhoneNo(numPhone);
                    if (checkNum == false) {
                        document.getElementById("erNumPhone1-2").style.display = "block";
                        document.getElementById("NumPhone1").style.border = "1px solid #bd2130";
                        checkError = false;
                    } else {
                        document.getElementById("erNumPhone1-2").style.display = "none";
                        document.getElementById("NumPhone1").style.border = "1px solid #ced4da";
                    }
                }

                if (lat == "") {
                    document.getElementById("erLat1-1").style.display = "block";
                    document.getElementById("Lat1").style.border = "1px solid #bd2130";
                    checkError = false;
                } else {
                    document.getElementById("erLat1-1").style.display = "none";
                    document.getElementById("Lat1").style.border = "1px solid #ced4da";
                    var splitLat = lat.split(".");
                    if (splitLat.length != 2 && splitLat.length != 1) {
                        document.getElementById("erLat1-2").style.display = "block";
                        document.getElementById("Lat1").style.border = "1px solid #bd2130";
                        checkError = false;
                    } else {
                        document.getElementById("erLat1-2").style.display = "none";
                        document.getElementById("Lat1").style.border = "1px solid #ced4da";
                    }
                }
                if (long == "") {
                    document.getElementById("erLong1-1").style.display = "block";
                    document.getElementById("Long1").style.border = "1px solid #bd2130";
                    checkError = false;
                } else {
                    document.getElementById("erLong1-1").style.display = "none";
                    document.getElementById("Long1").style.border = "1px solid #ced4da";
                    var splitLong = long.split(".");
                    if (splitLong.length != 2 && splitLong.length != 1) {
                        document.getElementById("erLong1-2").style.display = "block";
                        document.getElementById("Long1").style.border = "1px solid #bd2130";
                        checkError = false;
                    } else {
                        document.getElementById("erLong1-2").style.display = "none";
                        document.getElementById("Long1").style.border = "1px solid #ced4da";
                    }
                }
                if (checkError == true) {
                    /********insert**********/
                    console.log('Start Insert');
                }


            } else if (func == 'edit') {
                var nameScTH = document.getElementById("NameSchoolTH2").value;
                var nameScEN = document.getElementById("NameSchoolEN2").value;
                var selectTC = document.getElementById("SelectTS2").value;
                var selectPro = document.getElementById("SelectPro2").value;
                var selectAm = document.getElementById("SelectAm2").value;
                var selectDist = document.getElementById("SelectDist2").value;
                var numPhone = document.getElementById("NumPhone2").value;
                var lat = document.getElementById("Lat2").value;
                var long = document.getElementById("Long2").value;

                if (nameScTH == "") {
                    document.getElementById("erNameSchoolTH2").style.display = "block";
                    document.getElementById("NameSchoolTH2").style.border = "2px solid #bd2230";
                    checkError = false;
                } else {
                    document.getElementById("erNameSchoolTH2").style.display = "none";
                    document.getElementById("NameSchoolTH2").style.border = "2px solid #ced4da";
                }
                if (nameScEN == "") {
                    document.getElementById("erNameSchoolEN2").style.display = "block";
                    document.getElementById("NameSchoolEN2").style.border = "2px solid #bd2230";
                    checkError = false;
                } else {
                    document.getElementById("erNameSchoolEN2").style.display = "none";
                    document.getElementById("NameSchoolEN2").style.border = "2px solid #ced4da";
                }
                if (selectTC == "--- กรุณาเลือก ---") {
                    document.getElementById("erSelectTS2").style.display = "block";
                    document.getElementById("SelectTS2").style.border = "2px solid #bd2230";
                    checkError = false;
                } else {
                    document.getElementById("erSelectTS2").style.display = "none";
                    document.getElementById("SelectTS2").style.border = "2px solid #ced4da";
                }
                if (selectPro == "--- กรุณาเลือก ---") {
                    document.getElementById("erSelectPro2").style.display = "block";
                    document.getElementById("SelectPro2").style.border = "2px solid #bd2230";
                    checkError = false;
                } else {
                    document.getElementById("erSelectPro2").style.display = "none";
                    document.getElementById("SelectPro2").style.border = "2px solid #ced4da";
                }
                if (selectAm == "--- กรุณาเลือก ---") {
                    document.getElementById("erSelectAm2").style.display = "block";
                    document.getElementById("SelectAm2").style.border = "2px solid #bd2230";
                    checkError = false;
                } else {
                    document.getElementById("erSelectAm2").style.display = "none";
                    document.getElementById("SelectAm2").style.border = "2px solid #ced4da";
                }
                if (selectDist == "--- กรุณาเลือก ---") {
                    document.getElementById("erSelectDist2").style.display = "block";
                    document.getElementById("SelectDist2").style.border = "2px solid #bd2230";
                    checkError = false;
                } else {
                    document.getElementById("erSelectDist2").style.display = "none";
                    document.getElementById("SelectDist2").style.border = "2px solid #ced4da";
                }
                if (numPhone == "") {
                    document.getElementById("erNumPhone2-1").style.display = "block";
                    document.getElementById("NumPhone2").style.border = "2px solid #bd2230";
                    checkError = false;
                } else {
                    document.getElementById("erNumPhone2-1").style.display = "none";
                    document.getElementById("NumPhone2").style.border = "2px solid #ced4da";
                    var checkNum = isPhoneNo(numPhone);
                    if (checkNum == false) {
                        document.getElementById("erNumPhone2-2").style.display = "block";
                        document.getElementById("NumPhone2").style.border = "2px solid #bd2230";
                        checkError = false;
                    } else {
                        document.getElementById("erNumPhone2-2").style.display = "none";
                        document.getElementById("NumPhone2").style.border = "2px solid #ced4da";
                    }
                }

                if (lat == "") {
                    document.getElementById("erLat2-1").style.display = "block";
                    document.getElementById("Lat2").style.border = "2px solid #bd2230";
                    checkError = false;
                } else {
                    document.getElementById("erLat2-1").style.display = "none";
                    document.getElementById("Lat2").style.border = "2px solid #ced4da";
                    var splitLat = lat.split(".");
                    if (splitLat.length != 2 && splitLat.length != 2) {
                        document.getElementById("erLat2-2").style.display = "block";
                        document.getElementById("Lat2").style.border = "2px solid #bd2230";
                        checkError = false;
                    } else {
                        document.getElementById("erLat2-2").style.display = "none";
                        document.getElementById("Lat2").style.border = "2px solid #ced4da";
                    }
                }
                if (long == "") {
                    document.getElementById("erLong2-1").style.display = "block";
                    document.getElementById("Long2").style.border = "2px solid #bd2230";
                    checkError = false;
                } else {
                    document.getElementById("erLong2-1").style.display = "none";
                    document.getElementById("Long2").style.border = "2px solid #ced4da";
                    var splitLong = long.split(".");
                    if (splitLong.length != 2 && splitLong.length != 2) {
                        document.getElementById("erLong2-2").style.display = "block";
                        document.getElementById("Long2").style.border = "2px solid #bd2230";
                        checkError = false;
                    } else {
                        document.getElementById("erLong2-2").style.display = "none";
                        document.getElementById("Long2").style.border = "2px solid #ced4da";
                    }
                }
                if (checkError == true) {
                    /********update**********/
                    console.log('Start Update');
                }
            }
        }
    </script>