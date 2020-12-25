<div class="modal fade show" tabindex="-1" role="dialog" id="insertExpert" style="display:none;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-heading">เพิ่มผู้เชี่ยวชาญ</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4" style="text-align: center;">
                        <div>
                            <img style="width: 200px; height: 200px;" src="<?php echo base_url(); ?>assets/images/admin/DefualtUser.png" id="preview1" class="img-thumbnail">
                        </div>
                        <div>
                            <input id="inputFile1" type="file" style="visibility: hidden;position: absolute;" class="file1" accept="image/*">
                            <div class="input-group my-3">
                                <input type="text" class="form-control" disabled placeholder="เลือกรูปโปรไฟล์" id="file1">
                                <div class="input-group-append">
                                    <button type="button" id="browse1" class="browse btn btn-primary">เลือกไฟล์</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">คำนำหน้าชื่อภาษาไทย</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <select class="form-control text-paragraph select2bs4" id="prenameTH1" required="" onchange="auto_prename('add')">
                                <option selected="">--- กรุณาเลือก ---</option>
                            </select>
                            <label class="text-paragraph" id="erprenameTH1" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกคำนำหน้าชื่อภาษาไทย
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">ชื่อ (ภาษาไทย)</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input onkeyup="isThaichar(this.value,this)" id="fnameTH1" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น สวัสดี">
                            <label class="text-paragraph" id="erfnameTH1" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอกชื่อภาษาไทย
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">นามสกุล (ภาษาไทย)</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input onkeyup="isThaichar(this.value,this)" id="lnameTH1" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น สมมุติ">
                            <label class="text-paragraph" id="erlnameTH1" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอกชื่อภาษาไทย
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">คำนำหน้าชื่อภาษาอังกฤษ</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <select class="form-control text-paragraph select2bs4" id="prenameEN1" required="" disabled>
                                <option selected="">--- กรุณาเลือก ---</option>
                            </select>
                            <label class="text-paragraph" id="erprenameEN1" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกคำนำหน้าชื่อภาษาอังกฤษ
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">ชื่อ (ภาษาอังกฤษ)</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input onkeyup="isEngchar(this.value,this)" id="fnameEN1" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น สวัสดี">
                            <label class="text-paragraph" id="erfnameEN1" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอกชื่อภาษาอังกฤษ
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">นามสกุล (ภาษาอังกฤษ)</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input onkeyup="isEngchar(this.value,this)" id="lnameEN1" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น สมมุติ">
                            <label class="text-paragraph" id="erlnameEN1" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอกชื่อภาษาอังกฤษ
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">โรงเรียน</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <select class="form-control text-paragraph select2bs4" id="school1" required="">
                                <option selected="">--- กรุณาเลือก ---</option>
                            </select>
                            <label class="text-paragraph" id="erschool1" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกโรงเรียน
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">ตำแหน่งผู้เชี่ยวชาญ</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <select class="form-control text-paragraph select2bs4" id="poex1" required="">
                                <option selected="">--- กรุณาเลือก ---</option>
                            </select>
                            <label class="text-paragraph" id="erpoex1" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกตำแหน่งผู้เชี่ยวชาญ
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
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
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">อีเมลล์</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input id="email1" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="email@example.com">
                            <label class="text-paragraph" id="eremail1" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอกอีเมลล์ให้ถูกต้อง เช่น email@example.com
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">บ้านเลขที่</label>
                        </div>
                        <div>
                            <input id="HouseNo1" onkeyup="isHomeNumchar(this.value,this)" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น 70/1">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">หมู่</label>
                        </div>
                        <div>
                            <input id="VillageNo1" onkeyup="isNumAllchar(this.value,this)" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น 10">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">ถนน</label>
                        </div>
                        <div>
                            <input id="Road1" onkeyup="isRoadchar(this.value,this)" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น ถนนมิตรภาพ">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">จังหวัด</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <select class="form-control text-paragraph select2bs4" id="SelectPro1" required="" onchange="fetch_amphur('add')">
                                <option selected="">--- กรุณาเลือก ---</option>
                            </select>
                            <label class="text-paragraph" id="erSelectPro1" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกจังหวัด
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">อำเภอ</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <select class="form-control text-paragraph select2bs4" id="SelectAm1" required="" disabled onchange="fetch_district('add')">
                                <option selected="">--- กรุณาเลือก ---</option>
                            </select>
                            <label class="text-paragraph" id="erSelectAm1" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกอำเภอ
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">ตำบล</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <select class="form-control text-paragraph select2bs4" id="SelectDist1" required="" disabled>
                                <option selected="">--- กรุณาเลือก ---</option>
                            </select>
                            <label class="text-paragraph" id="erSelectDist1" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกตำบล
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">ไปรษณีย์</label>
                        </div>
                        <div>
                            <input id="Postcode1" style="font-family: 'Kanit';" type="text" class="form-control" disabled placeholder="30000">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">ชื่อผู้ใช้งาน</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input style="font-family: 'Kanit';" id="username1" type="text" class="form-control" maxlength="20" placeholder="เช่น username._123" onkeyup="heveUser()">
                            <label class="text-paragraph" id="erusername1" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอกชื่อผู้ใช้งานให้ถูกต้อง ชื่อผู้ใช้ต้องมีความยาวต้องอยู่ระหว่าง 8-20 ตัวอักษร และ ต้องมีเฉพาะตัวอักษรอักกฤษ ตัวเลข . และ _ เช่น username._123
                            </label>
                            <label class="text-paragraph" id="erhaveuser" style="color: red; display:none; padding-top:5px;">
                                ชื่อผู้ใช้งานถูกใช้แล้ว
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">รหัสผ่าน</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input style="font-family: 'Kanit';" id="password1" type="text" class="form-control" maxlength="20" placeholder="เช่น P@55w0rd">
                            <label class="text-paragraph" id="erpassword1" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอกรหัสผ่านความยาวต้อง 8-20 ตัวอักษร เช่น P@55w0rd
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
<div class="modal fade show" tabindex="-1" role="dialog" id="editExpert" style="display:none;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-heading">แก้ไขผู้เชี่ยวชาญ</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4" style="text-align: center;">
                        <div>
                            <img style="width: 200px; height: 200px;" src="<?php echo base_url(); ?>assets/images/admin/DefualtUser.png" id="preview2" class="img-thumbnail">
                        </div>
                        <div>
                            <input id="inputFile2" type="file" style="visibility: hidden;position: absolute;" class="file2" accept="image/*">
                            <div class="input-group my-3">
                                <input type="text" class="form-control" disabled placeholder="เลือกรูปโปรไฟล์" id="file2">
                                <div class="input-group-append">
                                    <button type="button" id="browse2" class="browse btn btn-primary">เลือกไฟล์</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">คำนำหน้าชื่อภาษาไทย</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <select class="form-control text-paragraph select2bs4" id="prenameTH2" required="">
                                <option selected="">--- กรุณาเลือก ---</option>
                            </select>
                            <label class="text-paragraph" id="erprenameTH2" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกคำนำหน้าชื่อภาษาไทย
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">ชื่อ (ภาษาไทย)</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input onkeyup="isThaichar(this.value,this)" id="fnameTH2" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น สวัสดี">
                            <label class="text-paragraph" id="erfnameTH2" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอกชื่อภาษาไทย
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">นามสกุล (ภาษาไทย)</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input onkeyup="isThaichar(this.value,this)" id="lnameTH2" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น สมมุติ">
                            <label class="text-paragraph" id="erlnameTH2" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอกชื่อภาษาไทย
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">คำนำหน้าชื่อภาษาอังกฤษ</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <select class="form-control text-paragraph select2bs4" id="prenameEN2" required="">
                                <option selected="">--- กรุณาเลือก ---</option>
                            </select>
                            <label class="text-paragraph" id="erprenameEN2" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกคำนำหน้าชื่อภาษาอังกฤษ
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">ชื่อ (ภาษาอังกฤษ)</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input onkeyup="isEngchar(this.value,this)" id="fnameEN2" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น สวัสดี">
                            <label class="text-paragraph" id="erfnameEN2" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอกชื่อภาษาอังกฤษ
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">นามสกุล (ภาษาอังกฤษ)</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input onkeyup="isEngchar(this.value,this)" id="lnameEN2" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น สมมุติ">
                            <label class="text-paragraph" id="erlnameEN2" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอกชื่อภาษาอังกฤษ
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">โรงเรียน</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <select class="form-control text-paragraph select2bs4" id="school2" required="">
                                <option selected="">--- กรุณาเลือก ---</option>
                            </select>
                            <label class="text-paragraph" id="erschool2" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกโรงเรียน
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">ตำแหน่งผู้เชี่ยวชาญ</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <select class="form-control text-paragraph select2bs4" id="poex2" required="">
                                <option selected="">--- กรุณาเลือก ---</option>
                            </select>
                            <label class="text-paragraph" id="erpoex2" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกตำแหน่งผู้เชี่ยวชาญ
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">เบอร์โทรศัพท์</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input onkeyup="isNumEngchar(this.value,this)" id="NumPhone2" maxlength="10" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="044224983">
                            <label class="text-paragraph" id="erNumPhone2-1" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอกเบอร์โทรศัพท์
                            </label>
                            <label class="text-paragraph" id="erNumPhone2-2" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอกเบอร์โทรศัพท์ให้ถูกต้อง เช่น 044224xxx หรือ 092860xxxx
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">อีเมลล์</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input id="email2" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="email@example.com">
                            <label class="text-paragraph" id="eremail2" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอกอีเมลล์ให้ถูกต้อง เช่น email@example.com
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">บ้านเลขที่</label>
                        </div>
                        <div>
                            <input id="HouseNo2" onkeyup="isHomeNumchar(this.value,this)" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น 70/2">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">หมู่</label>
                        </div>
                        <div>
                            <input id="VillageNo2" onkeyup="isNumAllchar(this.value,this)" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น 20">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">ถนน</label>
                        </div>
                        <div>
                            <input id="Road2" onkeyup="isRoadchar(this.value,this)" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น ถนนมิตรภาพ">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">จังหวัด</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <select class="form-control text-paragraph select2bs4" id="SelectPro2" required="" onchange="fetch_amphur('edit')">
                                <option selected="">--- กรุณาเลือก ---</option>
                            </select>
                            <label class="text-paragraph" id="erSelectPro2" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกจังหวัด
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">อำเภอ</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <select class="form-control text-paragraph select2bs4" id="SelectAm2" required="" onchange="fetch_district('edit')">
                                <option selected="">--- กรุณาเลือก ---</option>
                            </select>
                            <label class="text-paragraph" id="erSelectAm2" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกอำเภอ
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">ตำบล</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <select class="form-control text-paragraph select2bs4" id="SelectDist2" required="">
                                <option selected="">--- กรุณาเลือก ---</option>
                            </select>
                            <label class="text-paragraph" id="erSelectDist2" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกตำบล
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">ไปรษณีย์</label>
                        </div>
                        <div>
                            <input id="Postcode2" style="font-family: 'Kanit';" type="text" class="form-control" disabled placeholder="30000">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">ชื่อผู้ใช้งาน</label>
                        </div>
                        <div>
                            <input style="font-family: 'Kanit';" id="username2" disabled type="text" maxlength="20" class="form-control" placeholder="username._123">
                            <label class="text-paragraph" id="" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอกชื่อผู้ใช้งานให้ถูกต้อง ชื่อผู้ใช้ต้องมีความยาวต้องอยู่ระหว่าง 8-20 ตัวอักษร และ ต้องมีเฉพาะตัวอักษรอักกฤษ ตัวเลข . และ _ เช่น username._123
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">รหัสผ่านใหม่</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input style="font-family: 'Kanit';" id="password2" type="text" maxlength="20" class="form-control" placeholder="P@55w0rd">
                            <label class="text-paragraph" id="erpassword2" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอกรหัสผ่านความยาวต้อง 8-20 ตัวอักษร เช่น P@55w0rd
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph"></label>
                        </div>
                        <div>
                            <button type="button" class="browse btn btn-primary" onclick="changePassword()">เปลี่ยนรหัสผ่าน</button>
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
            <h1 class="h1-title">ผู้เชี่ยวชาญ</h1>
        </div>
    </div>
    <div class="bgWhite padding_main mainBoxRadius main-margin">
        <div>
            <button class="btn_backend text_btn btn" id="btnInsert" data-toggle="modal" data-target="#insertExpert" onclick="add_fetchData()"><i class="fa fa-plus"></i>&nbsp;&nbsp;เพิ่มผู้เชี่ยวชาญ</button>
        </div>
        <table id="expert" class="table table-bordered table-striped nowrap">
            <thead>
                <tr>
                    <th></th>
                    <th class="th_text">สถานะ</th>
                    <th class="th_text">ลำดับ</th>
                    <th class="th_text">รหัสผู้เชียวชาญ</th>
                    <th class="th_text">ชื่อ</th>
                    <th class="th_text">โรงเรียนที่สังกัด</th>
                    <th class="th_text">ตำแหน่ง</th>
                    <th class="th_text">เบอร์ติดต่อ</th>
                    <th class="th_text">อีเมลล์</th>
                    <th class="th_text">ที่อยู่</th>
                    <th class="th_text">แก้ไข</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
<!-- Datateble -->
<script>
    $("#expert").DataTable({
        "processing": true,
        "responsive": {
            details: {
                type: 'column'
            }
        },
        "autoWidth": false,
        "ajax": {
            url: "<?php echo base_url('admin/expert/getAll'); ?>",
            type: "GET"
        },
        "order": [
            [2, "asc"]
        ],
        "columns": [{
                data: null,
                width: 30,
                className: 'dtr-control',
                orderable: false,
                "defaultContent": ''
            },
            {
                "data": null,
                'orderable': false,
                "render": (data, type, row, meta) => {
                    return `
                            <label for="toggle-` + row.e_id + `" class="toggle-1">
                                <input type="checkbox" id="toggle-` + row.e_id + `" 
                                class="toggle-1__input"  ` + (row.e_status == 1 ? 'checked' : '') + `
                                onchange="onClickActivate(` + row.e_id + `)">
                                <span class="toggle-1__button"></span>
                            </label> 
                        `;
                },
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
                "data": "e_id",
                className: "td_text"
            },
            {
                data: null,
                className: "td_text",
                render: (data, type, row, meta) => {
                    return row.n_thainame + ' ' + row.e_fnameTH + ' ' + row.e_lnameTH;
                }
            },
            {
                "data": null,
                className: "td_text",
                render: (data, type, row, meta) => {
                    return row.sc_nameTH;
                }
            },
            {
                "data": "p_name",
                className: "td_text"
            },
            {
                "data": "e_phone",
                className: "td_text"
            },
            {
                "data": "e_email",
                className: "td_text"
            },
            {
                "data": null,
                className: "td_text",
                render: (data, type, row, meta) => {
                    return (row.e_house_no == '' ? ' - ' : row.e_house_no) + ' หมู่ ' +
                        (row.e_village_no == '' ? ' - ' : row.e_village_no) + ' ถนน ' +
                        row.e_road + ' จังหวัด ' + row.PROVINCE_NAME + ' ตำบล ' + row.DISTRICT_NAME +
                        ' อำเภอ ' + row.AMPHUR_NAME + row.POSTCODE;
                }
            },
            {
                "data": null,
                "render": (data, type, row, meta) => {
                    return `
                        <button class="btn btn-flat" style="padding: 2px .75rem; color: #199a6f;" data-toggle="modal" data-target="#editExpert"
                        onclick="onClickEdit(` + row.e_id + `)"><i class="fa fa-edit"></i>
                        </button>
                        `;
                }
            }
        ]
    });
</script>
<script>
    $('#insertExpert').on('hidden.bs.modal', function() {
        reset_form('add');
    })
    $('#editExpert').on('hidden.bs.modal', function() {
        reset_form('edit');
    })
</script>
<!-- Action function -->
<script>
    var prename = [];
    var path_image = null;

    async function hashPassword(pain_text) {
        var passh = null;
        await $.post('<?php echo base_url('Api/HashPassword/hashpass'); ?>', {
            password: pain_text
        }).done((res) => {
            passh = res.hasdata;
        });
        return passh;
    }

    function onClickEdit(id) {
        $.get('<?php echo base_url('admin/expert/getById'); ?>/' + id, (res) => {
            fetch_prename('edit', res.e_prename);
            fetch_school('edit', res.school_id);
            fetch_position_expert('edit', res.position_id);
            fetch_province('edit', res.e_province);
            fetch_amphur('edit', res.e_amphur);
            fetch_editAddress(res.e_district, res.e_province, res.e_amphur);
            $('#username2').val(res.e_user);
            $('#fnameTH2').val(res.e_fnameTH);
            $('#lnameTH2').val(res.e_lnameTH);
            $('#fnameEN2').val(res.e_fnameEN);
            $('#lnameEN2').val(res.e_lnameEN);
            $('#HouseNo2').val(res.e_house_no);
            $('#VillageNo2').val(res.e_village_no);
            $('#NumPhone2').val(res.e_phone);
            $('#email2').val(res.e_email);
            $('#Road2').val(res.e_road);
            $('#Postcode2').val(res.e_zip);
            $("#preview2").attr("src", "<?php echo base_url(); ?>" + res.e_img);
            path_image = res.e_img;
            $('.edit_btn').attr('id', res.e_id);
            $('#active').append(`
               <label for="toggle-` + res.e_id + `" class="toggle-1">
                    <input type="checkbox" id="toggle-` + res.e_id + `" 
                    class="toggle-1__input" ` + (res.e_status == 1 ? 'checked' : '') + ` 
                    onchange="onClickActivate(` + res.e_id + `)">
                    <span class="toggle-1__button"></span>
                </label>
            `);
        });
    }

    function onClickActivate(id) {
        if ($('#toggle-' + id).is(":checked")) {
            $.post('<?php echo base_url('admin/expert/update'); ?>/' + id, {
                e_status: 1
            }).done((res) => {
                toastr.info('เปิดการใช้งาน');
            }).fail((xhr, status, error) => {
                toastr.error('Error')
            })
        } else {
            $.post('<?php echo base_url('admin/expert/update'); ?>/' + id, {
                e_status: 0
            }).done((res) => {
                toastr.info('ปิดการใช้งาน');
            }).fail((xhr, status, error) => {
                toastr.error('Error')
            })
        }
    }

    async function fetch_editAddress(district_id, province_id, amphur_id) {
        await $.get('<?php echo base_url('Api/Address/province'); ?>', (res) => {
            res.forEach(element => {
                if (element.PROVINCE_ID == province_id) {
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
            await $.get('<?php echo base_url('Api/Address/amphur'); ?>/' + p, (res) => {
                res.forEach(element => {
                    if (element.AMPHUR_ID == amphur_id) {
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
            await $.get('<?php echo base_url('Api/Address/amphurById'); ?>/' + amphur, (res) => {
                $('#Postcode2').val(res.POSTCODE);
            })
            await $('#SelectDist2').prop('disabled', false);
            await $('#SelectDist2').empty();
            await $('#SelectDist2').append('<option selected="">--- กรุณาเลือก ---</option>');
            await $.get('<?php echo base_url('Api/Address/district'); ?>/' + amphur, (res) => {
                res.forEach(element => {
                    if (element.DISTRICT_ID == district_id) {
                        $('#SelectDist2').append('<option value="' + element.DISTRICT_ID + '" selected>' + element.DISTRICT_NAME + '</option>')
                    } else {
                        $('#SelectDist2').append('<option value="' + element.DISTRICT_ID + '">' + element.DISTRICT_NAME + '</option>');
                    }
                });
            });
        }
    }

    function add_fetchData() {
        fetch_prename('add');
        fetch_position_expert('add');
        fetch_school('add');
        fetch_province('add');
    }

    function reset_form(fn) {
        prename = [];
        drug1 = [];
        diseased1 = [];
        drug2 = [];
        diseased2 = [];
        if (fn == 'add') {
            $('#drug_add').empty();
            $('#diseased_add').empty();
            $("#preview1").attr("src", "<?php echo base_url(); ?>assets/images/admin/DefualtUser.png");
            elementInputAdd = [
                '#prenameTH1',
                '#prenameEN1',
                '#fnameTH1',
                '#lnameTH1',
                '#fnameEN1',
                '#lnameEN1',
                '#datepicker1',
                '#HouseNo1',
                '#VillageNo1',
                '#Road1',
                '#Postcode1',
                '#file1'
            ];
            elementInputAdd.forEach(element => {
                $(element).val('');
            });
            elementSelectAdd = [
                '#SelectPro1',
                '#SelectAm1',
                '#SelectDist1',
                '#tc1',
                '#parent1',
                '#expert1',
                '#school1',
                '#selectDrug1',
                '#selectDiseased1'
            ];
            elementSelectAdd.forEach(element => {
                $(element).empty();
                $(element).append('<option selected="">--- กรุณาเลือก ---</option>');
            });
        }
        if (fn == 'edit') {
            $('#active').empty();
            $('#drug_update').empty();
            $('#diseased_update').empty();
            $("#preview2").attr("src", "<?php echo base_url(); ?>assets/images/admin/DefualtUser.png");
            elementInputEdit = [
                '#prenameTH2',
                '#prenameEN2',
                '#fnameTH2',
                '#lnameTH2',
                '#fnameEN2',
                '#lnameEN2',
                '#datepicker2',
                '#HouseNo2',
                '#VillageNo2',
                '#Road2',
                '#Postcode2',
                '#file2',
                '#password2'
            ];
            elementInputEdit.forEach(element => {
                $(element).val('');
            });
            elementSelectEdit = [
                '#SelectPro2',
                '#SelectAm2',
                '#SelectDist2',
                '#school2',
            ];
            elementSelectEdit.forEach(element => {
                $(element).empty();
                $(element).append('<option selected="">--- กรุณาเลือก ---</option>');
            });
        }
        hideError();
        $('#expert').DataTable().ajax.reload();
    }

    function hideError() {
        editFormError = [
            'erprenameTH2',
            'erfnameTH2',
            'erlnameTH2',
            'erprenameEN2',
            'erfnameEN2',
            'erlnameEN2',
            'erschool2',
            'erNumPhone2-1',
            'erNumPhone2-2',
            'eremail2',
            'erSelectPro2',
            'erSelectAm2',
            'erSelectDist2',
            'erpassword2'
        ];
        editFormInput = [
            'prenameTH2',
            'fnameTH2',
            'lnameTH2',
            'prenameEN2',
            'fnameEN2',
            'lnameEN2',
            'school2',
            'NumPhone2',
            'email2',
            'SelectPro2',
            'SelectAm2',
            'SelectDist2',
            'password2'
        ];
        editFormError.forEach(element => {
            document.getElementById(element).style.display = "none";
        });
        editFormInput.forEach(element => {
            document.getElementById(element).style.border = "2px solid #ced4da";
        });

    }

    function fetch_position_expert(fn, id = null) {
        if (fn == 'add') {
            $.get('<?php echo base_url('admin/Position_expert/getlistselect'); ?>').done((res) => {
                $('#poex1').empty();
                $('#poex1').append('<option selected="">--- กรุณาเลือก ---</option>');
                res.data.forEach(element => {
                    $('#poex1').append('<option value="' + element.p_id + '">' + element.p_name + '</option>');
                });
            });
        }

        if (fn == 'edit') {
            $.get('<?php echo base_url('admin/Position_expert/getlistselect'); ?>').done((res) => {
                $('#poex2').empty();
                $('#poex2').append('<option>--- กรุณาเลือก ---</option>');
                res.data.forEach(element => {
                    if (element.p_id == id) {
                        $('#poex2').append('<option selected value="' + element.p_id + '">' + element.p_name + '</option>');
                    } else {
                        $('#poex2').append('<option value="' + element.p_id + '">' + element.p_name + '</option>');
                    }
                });
            });
        }
    }

    function fetch_prename(fn, id = null) {
        if (fn == 'add') {
            $('#prenameTH1').empty();
            $('#prenameTH1').append('<option selected="">--- กรุณาเลือก ---</option>');
            $('#prenameEN1').empty();
            $('#prenameEN1').append('<option selected="">--- select ---</option>');
            $.get('<?php echo base_url("admin/pre_name/getListSelect"); ?>').done((res) => {
                res.data.forEach(element => {
                    $('#prenameTH1').append('<option value="' + element.n_id + '">' + element
                        .n_thainame +
                        '</option>');
                });
                prename = res.data;
            });
        }

        if (fn == 'edit') {
            $('#prenameTH2').empty();
            $('#prenameTH2').append('<option>--- กรุณาเลือก ---</option>');
            $('#prenameEN2').empty();
            $('#prenameEN2').append('<option>--- select ---</option>');
            $.get('<?php echo base_url("admin/pre_name/getListSelect"); ?>').done((res) => {
                res.data.forEach(element => {
                    if (element.n_id == id) {
                        $('#prenameTH2').append('<option selected value="' + element.n_id + '">' + element
                            .n_thainame +
                            '</option>');
                        $('#prenameEN2').append('<option selected value="' + element.n_id + '">' + element
                            .n_engname +
                            '</option>');
                    } else {
                        $('#prenameTH2').append('<option value="' + element.n_id + '">' + element
                            .n_thainame +
                            '</option>');
                        $('#prenameEN2').append('<option value="' + element.n_id + '">' + element
                            .n_engname +
                            '</option>');
                    }
                });
                prename = res.data;
            });
        }
    }

    function auto_prename(fn) {
        if (fn == 'add') {
            var p_id = $('#prenameTH1').val();
            $('#prenameEN1').empty();
            $('#prenameEN1').append('<option selected="">--- select ---</option>');
            prename.forEach(element => {
                if (element.n_id == p_id) {
                    $('#prenameEN1').append('<option value="' + element.n_id + '" selected>' + element.n_engname +
                        '</option>');
                } else {
                    $('#prenameEN1').append('<option value="' + element.n_id + '">' + element.n_engname +
                        '</option>');
                }
            });
        }

        if (fn == 'edit') {
            var p_id = $('#prenameTH2').val();
            $('#prenameEN1').empty();
            $('#prenameEN2').append('<option selected="">--- select ---</option>');
            prename.forEach(element => {
                if (element.n_id == p_id) {
                    $('#prenameEN2').append('<option value="' + element.n_id + '" selected>' + element.n_engname +
                        '</option>');
                } else {
                    $('#prenameEN2').append('<option value="' + element.n_id + '">' + element.n_engname +
                        '</option>');
                }
            });
        }
    }

    function fetch_school(fn, id = null) {
        if (fn == 'add') {
            $('#school1').empty();
            $('#school1').append('<option selected="">--- กรุณาเลือก ---</option>');
            $.get('<?php echo base_url('admin/school/getListSelect'); ?>').done((res) => {
                res.data.forEach(element => {
                    $('#school1').append('<option value="' + element.sc_id + '">' + element.sc_nameTH +
                        '</option>');
                });
            });
        }
        if (fn == 'edit') {
            $('#school2').empty();
            $('#school2').append('<option>--- กรุณาเลือก ---</option>');
            $.get('<?php echo base_url('admin/school/getListSelect'); ?>').done((res) => {
                res.data.forEach(element => {
                    if (element.sc_id == id) {
                        $('#school2').append('<option selected value="' + element.sc_id + '">' + element.sc_nameTH +
                            '</option>');
                    } else {
                        $('#school2').append('<option value="' + element.sc_id + '">' + element.sc_nameTH +
                            '</option>');
                    }
                });
            });
        }

    }

    function fetch_province(type) {
        if (type == 'add') {
            $('#SelectPro1').empty();
            $('#SelectPro1').append('<option selected="">--- กรุณาเลือก ---</option>');
            $.get('<?php echo base_url('Api/Address/province'); ?>', (res) => {
                res.forEach(element => {
                    $('#SelectPro1').append('<option value="' + element.PROVINCE_ID + '">' + element.PROVINCE_NAME + '</option>')
                });
            })
        }
        if (type == 'edit') {
            $('#SelectPro2').empty();
            $('#SelectPro2').append('<option selected="">--- กรุณาเลือก ---</option>');
            $.get('<?php echo base_url('Api/Address/province'); ?>', (res) => {
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
                $.get('<?php echo base_url('Api/Address/amphur'); ?>/' + p, (res) => {
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
                $('#SelectDist2').empty();
                $('#SelectDist2').append('<option selected="">--- กรุณาเลือก ---</option>');
                $('#SelectAm2').prop('disabled', false);
                $('#SelectDist2').prop('disabled', true);
                $.get('<?php echo base_url('Api/Address/amphur'); ?>/' + p, (res) => {
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
                $.get('<?php echo base_url('Api/Address/amphurById'); ?>/' + amphur, (res) => {
                    $('#Postcode1').val(res.POSTCODE);
                })
                $('#SelectDist1').prop('disabled', false);
                $('#SelectDist1').empty();
                $('#SelectDist1').append('<option selected="">--- กรุณาเลือก ---</option>');
                $.get('<?php echo base_url('Api/Address/district'); ?>/' + amphur, (res) => {
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
                $.get('<?php echo base_url('Api/Address/amphurById'); ?>/' + amphur, (res) => {
                    $('#Postcode2').val(res.POSTCODE);
                })
                $('#SelectDist2').prop('disabled', false);
                $('#SelectDist2').empty();
                $('#SelectDist2').append('<option selected="">--- กรุณาเลือก ---</option>');
                $.get('<?php echo base_url('Api/Address/district'); ?>/' + amphur, (res) => {
                    res.forEach(element => {
                        $('#SelectDist2').append('<option value="' + element.DISTRICT_ID + '">' + element.DISTRICT_NAME + '</option>')
                    });
                });
            }
        }
    }
</script>
<!-- summit function -->
<script>
    userUse = true;
    $(document).on("click", ".cardUser", function() {
        $('.toggle').css("width", "100px");
    });
    //*********start datepickker************ */
    $('#datepicker1').datepicker({
        format: 'dd/mm/yyyy',
        uiLibrary: 'bootstrap4'
    });
    $('#datepicker2').datepicker({
        format: 'dd/mm/yyyy',
        uiLibrary: 'bootstrap4'
    });
    //*********end datepickker************ */
    //*********start chooseImg************ */
    /*** choose IMG for insert ****/
    $(document).on("click", "#browse1", function() {
        var file = $(this).parents().find(".file1");
        file.trigger("click");
    });
    $('#inputFile1').change(function(e) {
        var fileName = e.target.files[0].name;
        var file = e.target.files[0];
        $("#file1").val(fileName);
        var allowedExtensions =
            /(\.jpg|\.jpeg|\.png|\.gif)$/i;
        if (!allowedExtensions.exec(fileName)) {
            alert('Invalid file type');
            $("#file1").val('');
            $("#preview1").attr("src", "<?php echo base_url(); ?>assets/images/admin/DefualtUser.png");
            return false;
        } else {
            if (file) {
                if (e.target.files[0].size <= 2000000) {

                    var reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById("preview1").src = e.target.result;
                    };
                    reader.readAsDataURL(this.files[0]);

                    var formData = new FormData();
                    formData.append('file', file);
                    $.ajax({
                        url: '<?php echo base_url('admin/expert/storeImage'); ?>',
                        type: "post",
                        data: formData,
                        processData: false,
                        contentType: false,
                        cache: false,
                        async: true,
                        success: (res) => {
                            path_image = 'upload/images/' + res.image_metadata.file_name
                            console.log(path_image);
                        }
                    });
                } else {
                    $("#file1").val('');
                    alert('ขนาดรูปภาพต้องไม่เกิน 2 mb');
                    return false;
                }
            }
        }
    });
    /*** choose IMG for update ****/
    $(document).on("click", "#browse2", function() {
        var file = $(this).parents().find(".file2");
        file.trigger("click");
    });
    $('#inputFile2').change(function(e) {
        var fileName = e.target.files[0].name;
        var file = e.target.files[0];
        $("#file1").val(fileName);
        var allowedExtensions =
            /(\.jpg|\.jpeg|\.png|\.gif)$/i;
        if (!allowedExtensions.exec(fileName)) {
            alert('Invalid file type');
            $("#file2").val('');
            $("#preview2").attr("src", "<?php echo base_url(); ?>assets/images/admin/DefualtUser.png");
            return false;
        } else {
            if (file) {
                if (e.target.files[0].size <= 2000000) {

                    var reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById("preview2").src = e.target.result;
                    };
                    reader.readAsDataURL(this.files[0]);

                    var formData = new FormData();
                    formData.append('file', file);
                    $.ajax({
                        url: '<?php echo base_url('admin/expert/storeImage'); ?>',
                        type: "post",
                        data: formData,
                        processData: false,
                        contentType: false,
                        cache: false,
                        async: true,
                        success: (res) => {
                            path_image = 'upload/images/' + res.image_metadata.file_name
                            console.log(path_image);
                        }
                    });
                } else {
                    $("#file2").val('');
                    alert('ขนาดรูปภาพต้องไม่เกิน 2 mb');
                    return false;
                }
            }
        }
    });
    //********end chooseImg************* */
    function isPhoneNo(input) {
        var regExp = /^0[0-9]{8,9}$/i;
        return regExp.test(input);
    }

    function isEmail(email) {
        const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }

    function isUsername(input) {
        var regExp = /^[a-zA-Z0-9\.\_]{8,20}$/i;
        return regExp.test(input);
    }

    async function onClickSave(func) {
        var checkError = true;
        if (func == 'insert') {
            var prenameTH1 = document.getElementById("prenameTH1").value;
            var fnameTH1 = document.getElementById("fnameTH1").value;
            var lnameTH1 = document.getElementById("lnameTH1").value;
            var prenameEN1 = document.getElementById("prenameEN1").value;
            var fnameEN1 = document.getElementById("fnameEN1").value;
            var lnameEN1 = document.getElementById("lnameEN1").value;
            var school1 = document.getElementById("school1").value;
            var poex1 = document.getElementById("poex1").value;
            var numPhone1 = document.getElementById("NumPhone1").value;
            var email1 = document.getElementById("email1").value;
            var SelectPro1 = document.getElementById("SelectPro1").value;
            var SelectAm1 = document.getElementById("SelectAm1").value;
            var SelectDist1 = document.getElementById("SelectDist1").value;
            var username1 = document.getElementById("username1").value;
            var password1 = document.getElementById("password1").value;
            if (prenameTH1 == '--- กรุณาเลือก ---') {
                document.getElementById("erprenameTH1").style.display = "block";
                document.getElementById("prenameTH1").style.border = "2px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("erprenameTH1").style.display = "none";
                document.getElementById("prenameTH1").style.border = "2px solid #ced4da";
            }
            if (fnameTH1 == '') {
                document.getElementById("erfnameTH1").style.display = "block";
                document.getElementById("fnameTH1").style.border = "2px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("erfnameTH1").style.display = "none";
                document.getElementById("fnameTH1").style.border = "2px solid #ced4da";
            }
            if (lnameTH1 == '') {
                document.getElementById("erlnameTH1").style.display = "block";
                document.getElementById("lnameTH1").style.border = "2px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("erlnameTH1").style.display = "none";
                document.getElementById("lnameTH1").style.border = "2px solid #ced4da";
            }
            if (prenameEN1 == '--- กรุณาเลือก ---') {
                document.getElementById("erprenameEN1").style.display = "block";
                document.getElementById("prenameEN1").style.border = "2px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("erprenameEN1").style.display = "none";
                document.getElementById("prenameEN1").style.border = "2px solid #ced4da";
            }
            if (fnameEN1 == '') {
                document.getElementById("erfnameEN1").style.display = "block";
                document.getElementById("fnameEN1").style.border = "2px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("erfnameEN1").style.display = "none";
                document.getElementById("fnameEN1").style.border = "2px solid #ced4da";
            }
            if (lnameEN1 == '') {
                document.getElementById("erlnameEN1").style.display = "block";
                document.getElementById("lnameEN1").style.border = "2px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("erlnameEN1").style.display = "none";
                document.getElementById("lnameEN1").style.border = "2px solid #ced4da";
            }
            if (school1 == '--- กรุณาเลือก ---') {
                document.getElementById("erschool1").style.display = "block";
                document.getElementById("school1").style.border = "2px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("erschool1").style.display = "none";
                document.getElementById("school1").style.border = "2px solid #ced4da";
            }
            if (poex1 == '--- กรุณาเลือก ---') {
                document.getElementById("erpoex1").style.display = "block";
                document.getElementById("poex1").style.border = "2px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("erpoex1").style.display = "none";
                document.getElementById("poex1").style.border = "2px solid #ced4da";
            }
            if (numPhone1 == "") {
                document.getElementById("erNumPhone1-1").style.display = "block";
                document.getElementById("NumPhone1").style.border = "2px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("erNumPhone1-1").style.display = "none";
                document.getElementById("NumPhone1").style.border = "2px solid #ced4da";
                var checkNum = isPhoneNo(numPhone1);
                if (checkNum == false) {
                    document.getElementById("erNumPhone1-2").style.display = "block";
                    document.getElementById("NumPhone1").style.border = "2px solid #bd2130";
                    checkError = false;
                } else {
                    document.getElementById("erNumPhone1-2").style.display = "none";
                    document.getElementById("NumPhone1").style.border = "2px solid #ced4da";
                }
            }
            if (email1 == "") {
                document.getElementById("eremail1").style.display = "block";
                document.getElementById("email1").style.border = "2px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("eremail1").style.display = "none";
                document.getElementById("email1").style.border = "2px solid #ced4da";
                var checkEmail = isEmail(email1);
                if (checkEmail == false) {
                    document.getElementById("eremail1").style.display = "block";
                    document.getElementById("email1").style.border = "2px solid #bd2130";
                    checkError = false;
                } else {
                    document.getElementById("eremail1").style.display = "none";
                    document.getElementById("email1").style.border = "2px solid #ced4da";
                }
            }
            if (SelectPro1 == "--- กรุณาเลือก ---") {
                document.getElementById("erSelectPro1").style.display = "block";
                document.getElementById("SelectPro1").style.border = "2px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("erSelectPro1").style.display = "none";
                document.getElementById("SelectPro1").style.border = "2px solid #ced4da";
            }
            if (SelectAm1 == "--- กรุณาเลือก ---") {
                document.getElementById("erSelectAm1").style.display = "block";
                document.getElementById("SelectAm1").style.border = "2px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("erSelectAm1").style.display = "none";
                document.getElementById("SelectAm1").style.border = "2px solid #ced4da";
            }
            if (SelectDist1 == "--- กรุณาเลือก ---") {
                document.getElementById("erSelectDist1").style.display = "block";
                document.getElementById("SelectDist1").style.border = "2px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("erSelectDist1").style.display = "none";
                document.getElementById("SelectDist1").style.border = "2px solid #ced4da";
            }
            if (username1.length < 8 && username1.length <= 20) {
                document.getElementById("erusername1").style.display = "block";
                document.getElementById("username1").style.border = "2px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("erusername1").style.display = "none";
                document.getElementById("username1").style.border = "2px solid #ced4da";
                var checkUsername = isUsername(username1);
                if (checkUsername == false) {
                    document.getElementById("erusername1").style.display = "block";
                    document.getElementById("username1").style.border = "2px solid #bd2130";
                    checkError = false;
                } else {
                    document.getElementById("erusername1").style.display = "none";
                    document.getElementById("username1").style.border = "2px solid #ced4da";
                }
                if (userUse == false) {
                    document.getElementById("username1").style.border = null;
                    $('#username1').addClass('is-invalid');
                    checkError = false;
                }
            }
            if (password1.length < 8 && password1.length <= 20) {
                document.getElementById("erpassword1").style.display = "block";
                document.getElementById("password1").style.border = "2px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("erpassword1").style.display = "none";
                document.getElementById("password1").style.border = "2px solid #ced4da";
            }

            if (checkError == true) {
                /********insert**********/
                var HouseNo = document.getElementById("HouseNo1").value;
                var VillageNo = document.getElementById("VillageNo1").value;
                var Road = document.getElementById("Road1").value;
                var Postcode = document.getElementById("Postcode1").value;
                var ph = await hashPassword(password1);
                $.post('<?php echo base_url('admin/expert/create'); ?>', {
                    e_prename: prenameTH1,
                    e_fnameTH: fnameTH1,
                    e_lnameTH: lnameTH1,
                    e_fnameEN: fnameEN1,
                    e_lnameEN: lnameEN1,
                    school_id: school1,
                    position_id: poex1,
                    e_phone: numPhone1,
                    e_email: email1,
                    e_house_no: HouseNo,
                    e_village_no: VillageNo,
                    e_road: Road,
                    e_province: SelectPro1,
                    e_amphur: SelectAm1,
                    e_district: SelectDist1,
                    e_zip: Postcode,
                    e_user: username1,
                    e_pass: ph,
                    e_img: path_image != null ? path_image : 'assets/images/admin/DefualtUser.png',
                }).done((res) => {
                    $('#insertExpert').modal('hide');
                    toastr.success('เพิ่มข้อมูลสำเร็จ');
                }).fail((xhr, status, error) => {
                    toastr.error('ไม่สามารถเพิ่มข้อมูลได้ โปรดลองใหม่ภายหลัง');
                });

                console.log('Start Insert');
            }
        } else if (func == 'edit') {
            var prenameTH2 = document.getElementById("prenameTH2").value;
            var fnameTH2 = document.getElementById("fnameTH2").value;
            var lnameTH2 = document.getElementById("lnameTH2").value;
            var prenameEN2 = document.getElementById("prenameEN2").value;
            var fnameEN2 = document.getElementById("fnameEN2").value;
            var lnameEN2 = document.getElementById("lnameEN2").value;
            var school2 = document.getElementById("school2").value;
            var poex2 = document.getElementById("poex2").value;
            var numPhone2 = document.getElementById("NumPhone2").value;
            var email2 = document.getElementById("email2").value;
            var SelectPro2 = document.getElementById("SelectPro2").value;
            var SelectAm2 = document.getElementById("SelectAm2").value;
            var SelectDist2 = document.getElementById("SelectDist2").value;
            var username2 = document.getElementById("username2").value;
            var password2 = document.getElementById("password2").value;
            if (prenameTH2 == '--- กรุณาเลือก ---') {
                document.getElementById("erprenameTH2").style.display = "block";
                document.getElementById("prenameTH2").style.border = "2px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("erprenameTH2").style.display = "none";
                document.getElementById("prenameTH2").style.border = "2px solid #ced4da";
            }
            if (fnameTH2 == '') {
                document.getElementById("erfnameTH2").style.display = "block";
                document.getElementById("fnameTH2").style.border = "2px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("erfnameTH2").style.display = "none";
                document.getElementById("fnameTH2").style.border = "2px solid #ced4da";
            }
            if (lnameTH2 == '') {
                document.getElementById("erlnameTH2").style.display = "block";
                document.getElementById("lnameTH2").style.border = "2px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("erlnameTH2").style.display = "none";
                document.getElementById("lnameTH2").style.border = "2px solid #ced4da";
            }
            if (prenameEN2 == '--- กรุณาเลือก ---') {
                document.getElementById("erprenameEN2").style.display = "block";
                document.getElementById("prenameEN2").style.border = "2px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("erprenameEN2").style.display = "none";
                document.getElementById("prenameEN2").style.border = "2px solid #ced4da";
            }
            if (fnameEN2 == '') {
                document.getElementById("erfnameEN2").style.display = "block";
                document.getElementById("fnameEN2").style.border = "2px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("erfnameEN2").style.display = "none";
                document.getElementById("fnameEN2").style.border = "2px solid #ced4da";
            }
            if (lnameEN2 == '') {
                document.getElementById("erlnameEN2").style.display = "block";
                document.getElementById("lnameEN2").style.border = "2px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("erlnameEN2").style.display = "none";
                document.getElementById("lnameEN2").style.border = "2px solid #ced4da";
            }
            if (school2 == '--- กรุณาเลือก ---') {
                document.getElementById("erschool2").style.display = "block";
                document.getElementById("school2").style.border = "2px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("erschool2").style.display = "none";
                document.getElementById("school2").style.border = "2px solid #ced4da";
            }
            if (poex2 == '--- กรุณาเลือก ---') {
                document.getElementById("erpoex2").style.display = "block";
                document.getElementById("poex2").style.border = "2px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("erpoex2").style.display = "none";
                document.getElementById("poex2").style.border = "2px solid #ced4da";
            }
            if (numPhone2 == "") {
                document.getElementById("erNumPhone2-1").style.display = "block";
                document.getElementById("NumPhone2").style.border = "2px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("erNumPhone2-1").style.display = "none";
                document.getElementById("NumPhone2").style.border = "2px solid #ced4da";
                var checkNum = isPhoneNo(numPhone2);
                if (checkNum == false) {
                    document.getElementById("erNumPhone2-2").style.display = "block";
                    document.getElementById("NumPhone2").style.border = "2px solid #bd2130";
                    checkError = false;
                } else {
                    document.getElementById("erNumPhone2-2").style.display = "none";
                    document.getElementById("NumPhone2").style.border = "2px solid #ced4da";
                }
            }
            if (email2 == "") {
                document.getElementById("eremail2").style.display = "block";
                document.getElementById("email2").style.border = "2px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("eremail2").style.display = "none";
                document.getElementById("email2").style.border = "2px solid #ced4da";
                var checkEmail = isEmail(email2);
                if (checkEmail == false) {
                    document.getElementById("eremail2").style.display = "block";
                    document.getElementById("email2").style.border = "2px solid #bd2130";
                    checkError = false;
                } else {
                    document.getElementById("eremail2").style.display = "none";
                    document.getElementById("email2").style.border = "2px solid #ced4da";
                }
            }
            if (SelectPro2 == "--- กรุณาเลือก ---") {
                document.getElementById("erSelectPro2").style.display = "block";
                document.getElementById("SelectPro2").style.border = "2px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("erSelectPro2").style.display = "none";
                document.getElementById("SelectPro2").style.border = "2px solid #ced4da";
            }
            if (SelectAm2 == "--- กรุณาเลือก ---") {
                document.getElementById("erSelectAm2").style.display = "block";
                document.getElementById("SelectAm2").style.border = "2px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("erSelectAm2").style.display = "none";
                document.getElementById("SelectAm2").style.border = "2px solid #ced4da";
            }
            if (SelectDist2 == "--- กรุณาเลือก ---") {
                document.getElementById("erSelectDist2").style.display = "block";
                document.getElementById("SelectDist2").style.border = "2px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("erSelectDist2").style.display = "none";
                document.getElementById("SelectDist2").style.border = "2px solid #ced4da";
            }

            if (checkError == true) {
                /********insert**********/
                var id_user = $('.edit_btn').attr('id');
                var HouseNo = document.getElementById("HouseNo2").value;
                var VillageNo = document.getElementById("VillageNo2").value;
                var Road = document.getElementById("Road2").value;
                var Postcode = document.getElementById("Postcode2").value;
                $.post('<?php echo base_url('admin/expert/update'); ?>/' + id_user, {
                    e_prename: prenameTH2,
                    e_fnameTH: fnameTH2,
                    e_lnameTH: lnameTH2,
                    e_fnameEN: fnameEN2,
                    e_lnameEN: lnameEN2,
                    school_id: school2,
                    position_id: poex2,
                    e_phone: numPhone2,
                    e_email: email2,
                    e_house_no: HouseNo,
                    e_village_no: VillageNo,
                    e_road: Road,
                    e_province: SelectPro2,
                    e_amphur: SelectAm2,
                    e_district: SelectDist2,
                    e_zip: Postcode,
                    e_img: path_image != null ? path_image : 'assets/images/admin/DefualtUser.png',
                }).done((res) => {
                    $('#editExpert').modal('hide');
                    toastr.success('แก้ไขข้อมูลสำเร็จ');
                }).fail((xhr, status, error) => {
                    toastr.error('ไม่สามารถแก้ไขข้อมูลได้ โปรดลองใหม่ภายหลัง');
                });
                console.log('Start Insert');
            }
        }
    }

    function heveUser() {
        user = $('#username1').val();
        if (user.length >= 8 && user.length <= 20) {
            $.post('<?php echo base_url('Login/haveUser'); ?>', {
                username: user
            }).done((res) => {
                document.getElementById("erusername1").style.display = "none";
                document.getElementById("username1").style.border = null;
                if (res.hasUser) {
                    document.getElementById("erhaveuser").style.display = "none";
                    $('#username1').removeClass('is-invalid');
                    userUse = true;
                } else {
                    userUse = false;
                    document.getElementById("erhaveuser").style.display = "block";
                    $('#username1').addClass('is-invalid');
                }
            });
        } else {
            document.getElementById("erhaveuser").style.display = "none";
            $('#username1').removeClass('is-invalid');
        }
    }

    async function changePassword() {
        var checkError = true;
        var password2 = document.getElementById("password2").value;
        if (password2.length < 8 && password2.length <= 20) {
            document.getElementById("erpassword2").style.display = "block";
            document.getElementById("password2").style.border = "2px solid #bd2130";
            checkError = false;
        } else {
            document.getElementById("erpassword2").style.display = "none";
            document.getElementById("password2").style.border = "2px solid #ced4da";
        }
        if (checkError == true) {
            var ph = await hashPassword(password2);
            var id_user = $('.edit_btn').attr('id');
            $.post('<?php echo base_url('admin/expert/update'); ?>/' + id_user, {
                e_pass: ph
            }).done((res) => {
                toastr.success('แก้ไขรหัสผ่านสำเร็จ');
                $('#password2').val('');
            }).fail((xhr, status, error) => {
                toastr.error('ไม่สามารถแก้ไขข้อมูลได้ โปรดลองใหม่ภายหลัง');
            });
        }
    }
</script>