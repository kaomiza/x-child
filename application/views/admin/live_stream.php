<style>
    .status_box {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .status_red {
        width: 18px;
        height: 18px;
        border-radius: 50%;
        background-color: red;
        margin: 0px 10px;
    }

    .status_orange {
        width: 18px;
        height: 18px;
        border-radius: 50%;
        background-color: orange;
        margin: 0px 10px;
    }

    .status_green {
        width: 18px;
        height: 18px;
        border-radius: 50%;
        background-color: #0ce40c;
        margin: 0px 10px;
    }

    @media (min-width: 200px) and (max-width: 767px) {
        .status_box {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .status_box>div {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    }
</style>

<div class="modal fade show" tabindex="-1" role="dialog" id="insertLive" style="display:none;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-heading">เพิ่มการถ่ายทอดสด</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <label class="text-paragraph">ชื่อเรื่อง</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input id="namelive1" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น การถ่ายทอดสดเกี่ยวกับการเรียนรู้ของเด็กตาบอด">
                            <label class="text-paragraph" id="ernamelive1" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอกชื่อเรื่องให้ถูกต้อง
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <label class="text-paragraph">วันและเวลาเริ่มการถ่ายทอดสด</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input id="start_date_1" placeholder="วัน/เดือน/ปี เวลา" readonly>
                            <label class="text-paragraph" id="erstart_date_1" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกเวลาเริ่มให้ถูกต้อง เช่น เลือกวันและเวลาให้มากกว่าปัจจุบัน
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <label class="text-paragraph">วันและเวลาจบการถ่ายทอดสด</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input id="end_date_1" placeholder="วัน/เดือน/ปี เวลา" readonly>
                            <label class="text-paragraph" id="erend_date_1" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกเวลาจบให้ถูกต้อง เช่น เลือกวันและเวลาให้มากกว่าเวลาเริ่มการถ่ายทอดสด
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <label class="text-paragraph">URL Youtube</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input id="url1" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น www.youtube.com/watch?v=xxxxxx">
                            <label class="text-paragraph" id="erurl1" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอก URL Youtube ให้ถูกต้อง เช่น https://www.youtube.com/watch?v=ไอดี หรือ www.youtube.com/watch?v=ไอดี
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <label class="text-paragraph">รายละเอียดของการถ่ายทอดสด</label>
                        </div>
                        <div>
                            <textarea class="form-control"></textarea>
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

<div class="modal fade show" tabindex="-1" role="dialog" id="editLive" style="display:none;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-heading">แก้ไขการถ่ายทอดสด</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <label class="text-paragraph">ชื่อเรื่อง</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input id="namelive2" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น การถ่ายทอดสดเกี่ยวกับการเรียนรู้ของเด็กตาบอด">
                            <label class="text-paragraph" id="ernamelive2" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอกชื่อเรื่องให้ถูกต้อง
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <label class="text-paragraph">วันและเวลาเริ่มการถ่ายทอดสด</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input id="start_date_2" placeholder="วัน/เดือน/ปี เวลา" readonly>
                            <label class="text-paragraph" id="erstart_date_2" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกเวลาเริ่มให้ถูกต้อง เช่น เลือกวันและเวลาให้มากกว่าปัจจุบัน
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <label class="text-paragraph">วันและเวลาจบการถ่ายทอดสด</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input id="end_date_2" placeholder="วัน/เดือน/ปี เวลา" readonly>
                            <label class="text-paragraph" id="erend_date_2" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกเวลาจบให้ถูกต้อง เลือกวันและเวลาให้มากกว่าเวลาเริ่มการถ่ายทอดสด
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <label class="text-paragraph">URL Youtube</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input id="url2" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น www.youtube.com/watch?v=xxxxxx">
                            <label class="text-paragraph" id="erurl2" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอก URL Youtube ให้ถูกต้อง เช่น https://www.youtube.com/watch?v=ไอดี หรือ www.youtube.com/watch?v=ไอดี
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <label class="text-paragraph">รายละเอียดของการถ่ายทอดสด</label>
                        </div>
                        <div>
                            <textarea class="form-control"></textarea>
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

<div class="modal fade show" tabindex="-1" role="dialog" id="previewLive" style="display:none;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-heading">หน้าจอทดสอบการแสดงผลการถ่ายทอดสด</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <label class="text-paragraph">ชื่อเรื่อง : </label>
                            <label class="text-paragraph">xxxxxxxx</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <label class="text-paragraph">URL Youtube : </label>
                            <label class="text-paragraph">xxxxxxxx</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/aX86T1XBGFk" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <label class="text-paragraph">รายละเอียดของการถ่ายทอดสด</label>
                        </div>
                        <div>
                            <label class="text-paragraph">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</label>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary text_btn" data-dismiss="modal">ปิด</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade show" tabindex="-1" role="dialog" id="statusLive" style="display:none;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-heading">สถานะการถ่ายทอดสด</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/aX86T1XBGFk" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <div style="display: flex; align-items: center; justify-content: center;">
                                <div>
                                    <label>Status :</label>
                                </div>
                                <div style="display: flex;">
                                    <div class="status_orange"></div>
                                    <label>รอดำเนินการ</label>
                                </div>
                                <div style="display: flex;">
                                    <div class="status_green"></div>
                                    <label>ออนไลน์</label>
                                </div>
                                <div style="display: flex;">
                                    <div class="status_red"></div>
                                    <label>เสร็จสิ้น</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div style="display: flex;align-items: center;justify-content: center;flex-direction: column;">
                            <div>
                                <label class="text-paragraph">กรุณาเลือกสถานะ</label>
                            </div>
                            <div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="status_radio" id="pending" checked>รอดำเนินการ
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="status_radio" id="online">ออนไลน์
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="status_radio" id="finish">เสร็จสิ้น
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div>

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
            <h1 class="h1-title">จัดการถ่ายทอดสด</h1>
        </div>
    </div>
    <div class="bgWhite padding_main mainBoxRadius main-margin">
        <div class="status_box">
            <div><button class="btn_backend text_btn btn" id="btnInsert" data-toggle="modal" data-target="#insertLive">เพิ่มการถ่ายทอดสด</button></div>
            <div class="status_box">
                <div>
                    <label>Status :</label>
                </div>
                <div style="display: flex;">
                    <div class="status_orange"></div>
                    <label>รอดำเนินการ</label>
                </div>
                <div style="display: flex;">
                    <div class="status_green"></div>
                    <label>ออนไลน์</label>
                </div>
                <div style="display: flex;">
                    <div class="status_red"></div>
                    <label>เสร็จสิ้น</label>
                </div>
            </div>
        </div>
        <table id="Live" class="table table-bordered table-striped nowrap" style="width:100%">
            <thead>
                <tr>
                    <th class="th_text">ลำดับ</th>
                    <th class="th_text">ชื่อเรื่อง</th>
                    <th class="th_text">ผู้สร้าง</th>
                    <th class="th_text">ช่วงเวลา</th>
                    <th class="th_text">แก้ไข</th>
                    <th class="th_text">สถานะ</th>
                </tr>
            </thead>
        </table>

    </div>
</div>
<!-- datepickker -->
<script>
    //*********start datepickker************ */
    $('#start_date_1').datetimepicker({
        format: 'dd/mm/yyyy HH:MM',
        footer: true,
        uiLibrary: 'bootstrap4'
    });
    $('#end_date_1').datetimepicker({
        format: 'dd/mm/yyyy HH:MM',
        footer: true,
        uiLibrary: 'bootstrap4'
    });
    $('#start_date_2').datetimepicker({
        format: 'dd/mm/yyyy HH:MM',
        footer: true,
        uiLibrary: 'bootstrap4'
    });
    $('#end_date_2').datetimepicker({
        format: 'dd/mm/yyyy HH:MM',
        footer: true,
        uiLibrary: 'bootstrap4'
    });
</script>
<!-- summit function -->
<script>
    function datetimeToDate(datetime) {
        var splitD = datetime.split(' ');
        var date = splitD[0];
        var time = splitD[1];
        var splitdate = date.split('/');
        var dateselect = new Date(splitdate[1] + "/" + splitdate[0] + "/" + splitdate[2] + " " + time);
        return dateselect;
    }

    function onClickSave(func) {
        console.log(func);
        var checkError = true;
        if (func == 'insert') {
            var namelive1 = document.getElementById("namelive1").value;
            var start_date_1 = document.getElementById("start_date_1").value;
            var end_date_1 = document.getElementById("end_date_1").value;
            var url1 = document.getElementById("url1").value;
            if (namelive1 == "") {
                document.getElementById("ernamelive1").style.display = "block";
                document.getElementById("namelive1").style.border = "1px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("ernamelive1").style.display = "none";
                document.getElementById("namelive1").style.border = "1px solid #ced4da";
            }
            if (start_date_1 == 'วัน/เดือน/ปี เวลา' || start_date_1 == '') {
                document.getElementById("erstart_date_1").style.display = "block";
                document.getElementById("start_date_1").style.border = "1px solid #bd2130";
                checkError = false;
            } else {
                var start_date_1 = document.getElementById("start_date_1").value;
                var dateselect = datetimeToDate(start_date_1)
                var currentDate = new Date();
                if (dateselect <= currentDate) {
                    document.getElementById("erstart_date_1").style.display = "block";
                    document.getElementById("start_date_1").style.border = "1px solid #bd2130";
                    checkError = false;
                } else {
                    document.getElementById("erstart_date_1").style.display = "none";
                    document.getElementById("start_date_1").style.border = "1px solid #ced4da";
                }
            }
            if (end_date_1 == 'วัน/เดือน/ปี เวลา' || end_date_1 == '') {
                document.getElementById("erend_date_1").style.display = "block";
                document.getElementById("end_date_1").style.border = "1px solid #bd2130";
                checkError = false;
            } else {
                var end_date_1 = document.getElementById("end_date_1").value;
                var start_date_1 = document.getElementById("start_date_1").value;
                var dateselect = datetimeToDate(end_date_1);
                var datestart = datetimeToDate(start_date_1);
                if (dateselect <= datestart) {
                    document.getElementById("erend_date_1").style.display = "block";
                    document.getElementById("end_date_1").style.border = "1px solid #bd2130";
                    checkError = false;
                } else {
                    document.getElementById("erend_date_1").style.display = "none";
                    document.getElementById("end_date_1").style.border = "1px solid #ced4da";
                }
            }

            if (url1 == "") {
                document.getElementById("erurl1").style.display = "block";
                document.getElementById("url1").style.border = "1px solid #bd2130";
                checkError = false;
            } else {
                var urlHTTPSAccept = url1.startsWith("https://www.youtube.com/watch?v=");
                var urlAccept = url1.startsWith("www.youtube.com/watch?v=");
                if (urlHTTPSAccept == false || urlAccept == false) {
                    document.getElementById("erurl1").style.display = "block";
                    document.getElementById("url1").style.border = "1px solid #bd2130";
                    checkError = false;
                }
                if (urlHTTPSAccept == true || urlAccept == true) {
                    document.getElementById("erurl1").style.display = "none";
                    document.getElementById("url1").style.border = "1px solid #ced4da";
                    checkError = true;
                }
            }
            if (checkError == true) {

            }
        } else if (func == 'edit') {
            var namelive2 = document.getElementById("namelive2").value;
            var start_date_2 = document.getElementById("start_date_2").value;
            var end_date_2 = document.getElementById("end_date_2").value;
            var url2 = document.getElementById("url2").value;
            if (namelive2 == "") {
                document.getElementById("ernamelive2").style.display = "block";
                document.getElementById("namelive2").style.border = "1px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("ernamelive2").style.display = "none";
                document.getElementById("namelive2").style.border = "1px solid #ced4da";
            }
            if (start_date_2 == 'วัน/เดือน/ปี เวลา' || start_date_2 == '') {
                document.getElementById("erstart_date_2").style.display = "block";
                document.getElementById("start_date_2").style.border = "1px solid #bd2130";
                checkError = false;
            } else {
                var start_date_2 = document.getElementById("start_date_2").value;
                var dateselect = datetimeToDate(start_date_2)
                var currentDate = new Date();
                if (dateselect <= currentDate) {
                    document.getElementById("erstart_date_2").style.display = "block";
                    document.getElementById("start_date_2").style.border = "1px solid #bd2130";
                    checkError = false;
                } else {
                    document.getElementById("erstart_date_2").style.display = "none";
                    document.getElementById("start_date_2").style.border = "1px solid #ced4da";
                }
            }
            if (end_date_2 == 'วัน/เดือน/ปี เวลา' || end_date_2 == '') {
                document.getElementById("erend_date_2").style.display = "block";
                document.getElementById("end_date_2").style.border = "1px solid #bd2130";
                checkError = false;
            } else {
                var end_date_2 = document.getElementById("end_date_2").value;
                var start_date_2 = document.getElementById("start_date_2").value;
                var dateselect = datetimeToDate(end_date_2);
                var datestart = datetimeToDate(start_date_2);
                if (dateselect <= datestart) {
                    document.getElementById("erend_date_2").style.display = "block";
                    document.getElementById("end_date_2").style.border = "1px solid #bd2130";
                    checkError = false;
                } else {
                    document.getElementById("erend_date_2").style.display = "none";
                    document.getElementById("end_date_2").style.border = "1px solid #ced4da";
                }
            }

            if (url2 == "") {
                document.getElementById("erurl2").style.display = "block";
                document.getElementById("url2").style.border = "1px solid #bd2130";
                checkError = false;
            } else {
                var urlHTTPSAccept = url2.startsWith("https://www.youtube.com/watch?v=");
                var urlAccept = url2.startsWith("www.youtube.com/watch?v=");
                if (urlHTTPSAccept == false || urlAccept == false) {
                    document.getElementById("erurl2").style.display = "block";
                    document.getElementById("url2").style.border = "1px solid #bd2130";
                    checkError = false;
                }
                if (urlHTTPSAccept == true || urlAccept == true) {
                    document.getElementById("erurl2").style.display = "none";
                    document.getElementById("url2").style.border = "1px solid #ced4da";
                    checkError = true;
                }
            }
            if (checkError == true) {
                
            }
        }

    }
</script>