<div class="modal fade show" tabindex="-1" role="dialog" id="insertSchool" style="display:none;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-heading">เพิ่มโรงเรียน</h4>
                <button type="button" class="close" data-dismiss="modal" onclick="reset_form('add')">×</button>
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
                            <input id="HouseNo1" onkeyup="isHomeNumchar(this.value,this)" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น 70/1">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <label class="text-paragraph">หมู่</label>
                        </div>
                        <div>
                            <input id="VillageNo1" onkeyup="isNumAllchar(this.value,this)" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น 10">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <label class="text-paragraph">ถนน</label>
                        </div>
                        <div>
                            <input id="Road1" onkeyup="isRoadchar(this.value,this)" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น ถนนมิตรภาพ">
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
                            <select class="form-control text-paragraph" id="SelectPro1" required="" onchange="fetch_amphur('add')">
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
                            <select class="form-control text-paragraph" id="SelectAm1" disabled required="" onchange="fetch_district('add')">
                                <option selected="">--- กรุณาเลือก ---</option>
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
                            <select class="form-control text-paragraph" id="SelectDist1" disabled required="">
                                <option selected="">--- กรุณาเลือก ---</option>
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
                            <input id="Postcode1" style="font-family: 'Kanit';" type="text" class="form-control" disabled placeholder="30000">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <label class="text-paragraph">เว็บไซต์</label>
                        </div>
                        <div>
                            <input id="Website1" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น http://www.nmpschool.net/    ">
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
                <button type="button" class="btn btn-secondary text_btn" data-dismiss="modal" onclick="reset_form('add')">ปิด</button>
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
                            <input id="HouseNo2" onkeyup="isHomeNumchar(this.value,this)" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น 70/1">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <label class="text-paragraph">หมู่</label>
                        </div>
                        <div>
                            <input id="VillageNo2" onkeyup="isNumAllchar(this.value,this)" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น 10">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <label class="text-paragraph">ถนน</label>
                        </div>
                        <div>
                            <input id="Road2" onkeyup="isRoadchar(this.value,this)" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น ถนนมิตรภาพ">
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
                            <select class="form-control text-paragraph" id="SelectPro2" required="" onchange="fetch_amphur('edit')">
                                <option selected="">--- กรุณาเลือก ---</option>
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
                            <select class="form-control text-paragraph" id="SelectAm2" required="" disabled onchange="fetch_district('edit')">
                                <option selected="">--- กรุณาเลือก ---</option>
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
                            <select class="form-control text-paragraph" id="SelectDist2" required="" disabled>
                                <option selected="">--- กรุณาเลือก ---</option>
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
                            <input id="Postcode2" style="font-family: 'Kanit';" type="text" class="form-control" disabled placeholder="30000">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <label class="text-paragraph">เว็บไซต์</label>
                        </div>
                        <div>
                            <input id="Website2" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น http://www.nmpschool.net/    ">
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
                <button type="button" class="btn text_btn edit_btn" style="background-color: #1e7e34; color:white;" onclick="onClickSave('edit')">บันทึก</button>
            </div>
        </div>
    </div>
</div>

<div class="main-margin padding_main">
    <div class="padding_main bgWhite mainBoxRadius boxHeader">
        <div>
            <h1 class="h1-title">โรงเรียน</h1>
        </div>
    </div>
    <div class="bgWhite padding_main mainBoxRadius main-margin">
        <div>
            <button onclick="fetch_add()" class="btn_backend text_btn btn" id="btnInsert" data-toggle="modal" data-target="#insertSchool" <i class="fa fa-plus"></i>&nbsp;&nbsp;เพิ่มโรงเรียน
            </button>
        </div>
        <table id="school" class="table table-bordered table-striped nowrap" style="width:100%">
            <thead>
                <tr>
                    <th class="th_text">สถานะ</th>
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
                </tr>
            </thead>
        </table>
    </div>
</div>
<script>
    $("#school").DataTable({
        "processing": true,
        "responsive": true,
        "autoWidth": false,
        "ajax": {
            url: "<?php echo base_url('admin/school/getAll'); ?>",
            type: "GET"
        },
        "columns": [{
                "data": null,
                "render": (data, type, row, meta) => {
                    return `
                            <label for="toggle-` + row.sc_id + `" class="toggle-1">
                                <input type="checkbox" id="toggle-` + row.sc_id + `" 
                                class="toggle-1__input"  ` + (row.sc_status == 1 ? 'checked' : '') + `
                                onchange="onClickActivate(` + row.sc_id + `)">
                                <span class="toggle-1__button"></span>
                            </label> 
                        `;
                },
            },
            {
                "data": "sc_id",
                className: "td_text"
            },
            {
                "data": "sc_nameTH",
                className: "td_text"
            },
            {
                "data": "sc_nameEN",
                className: "td_text"
            },
            {
                "data": "tsc_name",
                className: "td_text"
            },
            {
                "data": null,
                className: "td_text",
                render: (data, type, row, meta) => {
                    return (row.sc_house_no == '' ? ' - ' : row.sc_house_no) + ' หมู่ ' +
                        (row.sc_village_no == '' ? ' - ' : row.sc_village_no) + ' ถนน ' +
                        row.sc_road + ' จังหวัด ' + row.PROVINCE_NAME + ' ตำบล ' + row.DISTRICT_NAME +
                        ' อำเภอ ' + row.AMPHUR_NAME + row.POSTCODE;
                }
            },
            {
                "data": "website",
                className: "td_text"
            },
            {
                "data": "phone",
                className: "td_text"
            },
            {
                "data": "latitude",
                className: "td_text"
            },
            {
                "data": "longitude",
                className: "td_text"
            },
            {
                "data": null,
                "render": (data, type, row, meta) => {
                    return `
                        <button class="btn btn-flat" style="padding: 2px .75rem; color: #199a6f;" data-toggle="modal" data-target="#editSchool"
                        onclick="onClickEdit(` + row.sc_id + `)"><i class="fa fa-edit"></i>
                        </button>
                        `;
                }
            }
        ]
    });
</script>
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
                var HouseNo = document.getElementById("HouseNo1").value;
                var VillageNo = document.getElementById("VillageNo1").value;
                var Road = document.getElementById("Road1").value;
                var Postcode = document.getElementById("Postcode1").value;
                var Website = document.getElementById("HouseNo1").value;
                $.post('<?php echo base_url('admin/school/create') ?>', {
                    sc_nameTH: nameScTH,
                    sc_nameEN: nameScEN,
                    sc_type: selectTC,
                    sc_house_no: HouseNo,
                    sc_village_no: VillageNo,
                    sc_road: Road,
                    sc_province: selectPro,
                    sc_district: selectDist,
                    sc_amphur: selectAm,
                    sc_zip: Postcode,
                    website: Website,
                    phone: numPhone,
                    latitude: lat,
                    longitude: long
                }).done((res) => {
                    if (res == true) {
                        reset_form('add');
                        $('#insertSchool').modal('hide');
                        toastr.success('เพิ่มข้อมูลสำเร็จ');
                        $('#school').DataTable().ajax.reload();
                    } else {
                        toastr.error('ไม่สามารถเพิ่มข้อมูลได้ โปรดลองใหม่ภายหลัง');
                    }
                }).fail((xhr, status, error) => {
                    toastr.error('ไม่สามารถเพิ่มข้อมูลได้ โปรดลองใหม่ภายหลัง');
                });

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
                var id = $('.edit_btn').attr('id');
                var HouseNo = document.getElementById("HouseNo2").value;
                var VillageNo = document.getElementById("VillageNo2").value;
                var Road = document.getElementById("Road2").value;
                var Postcode = document.getElementById("Postcode2").value;
                var Website = document.getElementById("HouseNo2").value;
                $.post('<?php echo base_url('admin/school/update') ?>/' + id, {
                    sc_nameTH: nameScTH,
                    sc_nameEN: nameScEN,
                    sc_type: selectTC,
                    sc_house_no: HouseNo,
                    sc_village_no: VillageNo,
                    sc_road: Road,
                    sc_province: selectPro,
                    sc_district: selectDist,
                    sc_amphur: selectAm,
                    sc_zip: Postcode,
                    website: Website,
                    phone: numPhone,
                    latitude: lat,
                    longitude: long
                }).done((res) => {
                    if (res == true) {
                        reset_form('edit');
                        $('#editSchool').modal('hide');
                        toastr.success('แก้ไขข้อมูลสำเร็จ');
                        $('#school').DataTable().ajax.reload();
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

    async function onClickEdit(id) {
        await $.get('<?php echo base_url('admin/school/getbyid'); ?>/' + id, async (data) => {
            await $('.edit_btn').attr('id', data.sc_id);
            await $('#NameSchoolTH2').val(data.sc_nameTH);
            await $('#NameSchoolEN2').val(data.sc_nameEN);
            await $('#HouseNo2').val(data.sc_house_no);
            await $('#VillageNo2').val(data.sc_village_no);
            await $('#Road2').val(data.sc_road);
            await $('#Postcode2').val(data.sc_zip);
            await $('#Website2').val(data.website);
            await $('#NumPhone2').val(data.phone);
            await $('#Lat2').val(data.latitude);
            await $('#Long2').val(data.longitude);

            await $('#SelectTS2').empty();
            await $('#SelectTS2').append('<option selected="">--- กรุณาเลือก ---</option>');
            await $.get('<?php echo base_url('admin/type_school/getall'); ?>', (res) => {
                res.data.forEach(element => {
                    if (element.tsc_id == data.sc_type) {
                        $('#SelectTS2').append('<option value="' + element.tsc_id + '" selected>' + element.tsc_name + '</option>')
                    } else {
                        $('#SelectTS2').append('<option value="' + element.tsc_id + '">' + element.tsc_name + '</option>')
                    }
                });
            })

            await $.get('<?php echo base_url('api/address/province'); ?>', (res) => {
                res.forEach(element => {
                    if (element.PROVINCE_ID == data.sc_province) {
                        $('#SelectPro2').append('<option value="' + element.PROVINCE_ID + '" selected>' + element.PROVINCE_NAME + '</option>')
                    } else {
                        $('#SelectPro2').append('<option value="' + element.PROVINCE_ID + '">' + element.PROVINCE_NAME + '</option>')
                    }
                });
            })


            var p = await $('#SelectPro2').val();
            if (p == '--- กรุณาเลือก ---') {
                await $('#SelectAm2').prop('disabled', true);
            } else {
                await $('#SelectAm2').empty();
                await $('#SelectAm2').append('<option selected="">--- กรุณาเลือก ---</option>');
                await $('#SelectAm2').prop('disabled', false);
                await $('#SelectDist2').prop('disabled', true);
                await $.get('<?php echo base_url('api/address/amphur'); ?>/' + p, (res) => {
                    res.forEach(element => {
                        if (element.AMPHUR_ID == data.sc_amphur) {
                            $('#SelectAm2').append('<option value="' + element.AMPHUR_ID + '" selected>' + element.AMPHUR_NAME + '</option>')
                        } else {
                            $('#SelectAm2').append('<option value="' + element.AMPHUR_ID + '">' + element.AMPHUR_NAME + '</option>')
                        }
                    });
                })
            }

            var amphur = await $('#SelectAm2').val();
            if (amphur == '--- กรุณาเลือก ---') {
                await $('#SelectDist2').append('<option selected="">--- กรุณาเลือก ---</option>');
                await $('#SelectDist2').prop('disabled', true);
            } else {
                await $.get('<?php echo base_url('api/address/amphurById'); ?>/' + amphur, (res) => {
                    $('#Postcode2').val(res.POSTCODE);
                })
                await $('#SelectDist2').prop('disabled', false);
                await $('#SelectDist2').empty();
                await $('#SelectDist2').append('<option selected="">--- กรุณาเลือก ---</option>');
                await $.get('<?php echo base_url('api/address/district'); ?>/' + amphur, (res) => {
                    res.forEach(element => {
                        if (element.DISTRICT_ID == data.sc_district) {
                            $('#SelectDist2').append('<option value="' + element.DISTRICT_ID + '" selected>' + element.DISTRICT_NAME + '</option>')
                        } else {
                            $('#SelectDist2').append('<option value="' + element.DISTRICT_ID + '">' + element.DISTRICT_NAME + '</option>');
                        }
                    });
                });
            }

        });
    }

    function onClickActivate(id) {
        if ($('#toggle-' + id).is(":checked")) {
            $.post('<?php echo base_url('admin/school/update'); ?>/' + id, {
                sc_status: 1
            }).done((res) => {
                toastr.info('NO');
            }).fail((xhr, status, error) => {
                toastr.error('Error')
            })
        } else {
            $.post('<?php echo base_url('admin/school/update'); ?>/' + id, {
                sc_status: 0
            }).done((res) => {
                toastr.info('OFF');
            }).fail((xhr, status, error) => {
                toastr.error('Error')
            })
        }
    }


    function fetch_add() {
        fetch_type_school('add');
        fetch_province('add');
    }

    function reset_form(ref) {
        if (ref == 'add') {
            var form_id = [
                '#NameSchoolTH1',
                '#NameSchoolEN1',
                '#SelectTS1',
                '#HouseNo1',
                '#VillageNo1',
                '#Road1',
                '#Postcode1',
                '#Website1',
                '#NumPhone1',
                '#Lat1',
                '#Long1',
            ];
            form_id.forEach(element => {
                $(element).val('');
            });
        }
        if (ref == 'edit') {
            var form_id = [
                '#NameSchoolTH2',
                '#NameSchoolEN2',
                '#SelectTS2',
                '#HouseNo2',
                '#VillageNo2',
                '#Road2',
                '#Postcode2',
                '#Website2',
                '#NumPhone2',
                '#Lat2',
                '#Long2',
            ];
            form_id.forEach(element => {
                $(element).val('');
            });
        }

        $('#SelectTS1,#SelectTS2').empty();
        $('#SelectTS1,#SelectTS2').append('<option selected="">--- กรุณาเลือก ---</option>');
        $('#SelectPro1,#SelectPro2').empty();
        $('#SelectPro1,#SelectPro2').append('<option selected="">--- กรุณาเลือก ---</option>');
        $('#SelectAm1,#SelectAm2').empty();
        $('#SelectAm1,#SelectAm2').append('<option selected="">--- กรุณาเลือก ---</option>');
        $('#SelectDist1,#SelectDist2').append('<option selected="">--- กรุณาเลือก ---</option>');
        $('#SelectDist1,#SelectDist2').prop('disabled', true);
        $('#SelectAm1,#SelectAm2').prop('disabled', true);
    }

    function fetch_type_school(type) {
        if (type == 'add') {
            $('#SelectTS1').empty();
            $('#SelectTS1').append('<option selected="">--- กรุณาเลือก ---</option>');
            $.get('<?php echo base_url('admin/type_school/getall'); ?>', (res) => {
                res.data.forEach(element => {
                    $('#SelectTS1').append('<option value="' + element.tsc_id + '">' + element.tsc_name + '</option>')
                });
            })
        }

        if (type == 'edit') {
            $('#SelectTS2').empty();
            $('#SelectTS2').append('<option selected="">--- กรุณาเลือก ---</option>');
            $.get('<?php echo base_url('admin/type_school/getall'); ?>', (res) => {
                res.data.forEach(element => {
                    $('#SelectTS2').append('<option value="' + element.tsc_id + '">' + element.tsc_name + '</option>')
                });
            })
        }
    }

    function fetch_province(type) {
        if (type == 'add') {
            $('#SelectPro1').empty();
            $('#SelectPro1').append('<option selected="">--- กรุณาเลือก ---</option>');
            $.get('<?php echo base_url('api/address/province'); ?>', (res) => {
                res.forEach(element => {
                    $('#SelectPro1').append('<option value="' + element.PROVINCE_ID + '">' + element.PROVINCE_NAME + '</option>')
                });
            })
        }
        if (type == 'edit') {
            $('#SelectPro2').empty();
            $('#SelectPro2').append('<option selected="">--- กรุณาเลือก ---</option>');
            $.get('<?php echo base_url('api/address/province'); ?>', (res) => {
                res.forEach(element => {
                    $('#SelectPro2').append('<option value="' + element.PROVINCE_ID + '">' + element.PROVINCE_NAME + '</option>')
                });
            })
        }
    }

    function fetch_amphur(type) {
        if (type == 'add') {
            var p = $('#SelectPro1').val();
            if (p == '--- กรุณาเลือก ---') {
                $('#SelectAm1').prop('disabled', true);
                $('#SelectDist1').prop('disabled', true);
                $('#SelectAm1').empty();
                $('#SelectAm1').append('<option selected="">--- กรุณาเลือก ---</option>');
                $('#SelectDist1').empty();
                $('#SelectDist1').append('<option selected="">--- กรุณาเลือก ---</option>');
            } else {
                $('#SelectAm1').empty();
                $('#SelectAm1').append('<option selected="">--- กรุณาเลือก ---</option>');
                $('#SelectAm1').prop('disabled', false);
                $('#SelectDist1').prop('disabled', true);
                $.get('<?php echo base_url('api/address/amphur'); ?>/' + p, (res) => {
                    res.forEach(element => {
                        $('#SelectAm1').append('<option value="' + element.AMPHUR_ID + '">' + element.AMPHUR_NAME + '</option>')
                    });
                })
            }
        }
        if (type == 'edit') {
            var p = $('#SelectPro2').val();
            if (p == '--- กรุณาเลือก ---') {
                $('#SelectAm2').prop('disabled', true);
                $('#SelectDist2').prop('disabled', true);
                $('#SelectAm2').empty();
                $('#SelectAm2').append('<option selected="">--- กรุณาเลือก ---</option>');
                $('#SelectDist2').empty();
                $('#SelectDist2').append('<option selected="">--- กรุณาเลือก ---</option>');
            } else {
                $('#SelectAm2').empty();
                $('#SelectAm2').append('<option selected="">--- กรุณาเลือก ---</option>');
                $('#SelectAm2').prop('disabled', false);
                $('#SelectDist2').prop('disabled', true);
                $.get('<?php echo base_url('api/address/amphur'); ?>/' + p, (res) => {
                    res.forEach(element => {
                        $('#SelectAm2').append('<option value="' + element.AMPHUR_ID + '">' + element.AMPHUR_NAME + '</option>')
                    });
                })
            }
        }
    }

    function fetch_district(type) {
        if (type == 'add') {
            var amphur = $('#SelectAm1').val();
            if (amphur == '--- กรุณาเลือก ---') {
                $('#SelectDist1').append('<option selected="">--- กรุณาเลือก ---</option>');
                $('#SelectDist1').prop('disabled', true);
            } else {
                $.get('<?php echo base_url('api/address/amphurById'); ?>/' + amphur, (res) => {
                    $('#Postcode1').val(res.POSTCODE);
                })
                $('#SelectDist1').prop('disabled', false);
                $('#SelectDist1').empty();
                $('#SelectDist1').append('<option selected="">--- กรุณาเลือก ---</option>');
                $.get('<?php echo base_url('api/address/district'); ?>/' + amphur, (res) => {
                    res.forEach(element => {
                        $('#SelectDist1').append('<option value="' + element.DISTRICT_ID + '">' + element.DISTRICT_NAME + '</option>')
                    });
                });
            }
        }
        if (type == 'edit') {
            var amphur = $('#SelectAm2').val();
            if (amphur == '--- กรุณาเลือก ---') {
                $('#SelectDist2').append('<option selected="">--- กรุณาเลือก ---</option>');
                $('#SelectDist2').prop('disabled', true);
            } else {
                $.get('<?php echo base_url('api/address/amphurById'); ?>/' + amphur, (res) => {
                    $('#Postcode2').val(res.POSTCODE);
                })
                $('#SelectDist2').prop('disabled', false);
                $('#SelectDist2').empty();
                $('#SelectDist2').append('<option selected="">--- กรุณาเลือก ---</option>');
                $.get('<?php echo base_url('api/address/district'); ?>/' + amphur, (res) => {
                    res.forEach(element => {
                        $('#SelectDist2').append('<option value="' + element.DISTRICT_ID + '">' + element.DISTRICT_NAME + '</option>')
                    });
                });
            }
        }
    }
</script>