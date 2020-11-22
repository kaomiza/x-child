<div class="modal fade show" tabindex="-1" role="dialog" id="insertParents" style="display:none;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-heading">เพิ่มผู้ปกครอง</h4>
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
                            <select class="form-control text-paragraph" id="prenameTH1" required="">
                                <option selected="">--- กรุณาเลือก ---</option>
                                <option>นาย</option>
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
                            <select class="form-control text-paragraph" id="prenameEN1" required="">
                                <option selected="">--- กรุณาเลือก ---</option>
                                <option>Mr.</option>
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
                            <select class="form-control text-paragraph" id="school1" required="">
                                <option selected="">--- กรุณาเลือก ---</option>
                            </select>
                            <label class="text-paragraph" id="erschool1" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกโรงเรียน
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
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">บ้านเลขที่</label>
                        </div>
                        <div>
                            <input onkeyup="isHomeNumchar(this.value,this)" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น 70/1">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">หมู่</label>
                        </div>
                        <div>
                            <input onkeyup="isNumAllchar(this.value,this)" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น 10">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">ถนน</label>
                        </div>
                        <div>
                            <input onkeyup="isRoadchar(this.value,this)" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น ถนนมิตรภาพ">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
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
                    <div class="col-md-4">
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
                    <div class="col-md-4">
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
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">ไปรษณีย์</label>
                        </div>
                        <div>
                            <input style="font-family: 'Kanit';" type="text" class="form-control" disabled placeholder="30000">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">ชื่อผู้ใช้งาน</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input style="font-family: 'Kanit';" id="username1" type="text" class="form-control" maxlength="20" placeholder="เช่น username._123">
                            <label class="text-paragraph" id="erusername1" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอกชื่อผู้ใช้งานให้ถูกต้อง ชื่อผู้ใช้ต้องมีความยาวต้องอยู่ระหว่าง 8-20 ตัวอักษร และ ต้องมีเฉพาะตัวอักษรอักกฤษ ตัวเลข . และ _ เช่น username._123
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
<div class="modal fade show" tabindex="-1" role="dialog" id="editParents" style="display:none;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-heading">แก้ไขผู้ปกครอง</h4>
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
                            <select class="form-control text-paragraph" id="prenameTH2" required="">
                                <option selected="">--- กรุณาเลือก ---</option>
                                <option>นาย</option>
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
                            <select class="form-control text-paragraph" id="prenameEN2" required="">
                                <option selected="">--- กรุณาเลือก ---</option>
                                <option>Mr.</option>
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
                            <select class="form-control text-paragraph" id="school2" required="">
                                <option selected="">--- กรุณาเลือก ---</option>
                            </select>
                            <label class="text-paragraph" id="erschool2" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกโรงเรียน
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
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">อีเมลล์</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input onkeyup="isNumEngchar(this.value,this)" id="email2" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="email@example.com">
                            <label class="text-paragraph" id="eremail2" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอกอีเมลล์ให้ถูกต้อง เช่น email@example.com
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">บ้านเลขที่</label>
                        </div>
                        <div>
                            <input onkeyup="isHomeNumchar(this.value,this)" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น 70/2">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">หมู่</label>
                        </div>
                        <div>
                            <input onkeyup="isNumAllchar(this.value,this)" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น 20">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">ถนน</label>
                        </div>
                        <div>
                            <input onkeyup="isRoadchar(this.value,this)" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น ถนนมิตรภาพ">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
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
                    <div class="col-md-4">
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
                    <div class="col-md-4">
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
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">ไปรษณีย์</label>
                        </div>
                        <div>
                            <input style="font-family: 'Kanit';" type="text" class="form-control" disabled placeholder="30000">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">ชื่อผู้ใช้งาน</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input style="font-family: 'Kanit';" id="username2" type="text" maxlength="20" class="form-control" placeholder="username._123">
                            <label class="text-paragraph" id="erusername2" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอกชื่อผู้ใช้งานให้ถูกต้อง ชื่อผู้ใช้ต้องมีความยาวต้องอยู่ระหว่าง 8-20 ตัวอักษร และ ต้องมีเฉพาะตัวอักษรอักกฤษ ตัวเลข . และ _ เช่น username._123
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">รหัสผ่าน</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input style="font-family: 'Kanit';" id="password2" type="text" maxlength="20" class="form-control" placeholder="P@55w0rd">
                            <label class="text-paragraph" id="erpassword2" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอกรหัสผ่านความยาวต้อง 8-20 ตัวอักษร เช่น P@55w0rd
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">

                    </div>
                    <div class="col-md-6" style="text-align: center;">
                        <div style="margin-bottom: 5px;">
                            <label>
                                สถานะการใช้งาน
                            </label>
                        </div>
                        <div>
                            <input type="checkbox" style="width: 100%;" data-toggle="toggle" data-on="เปิด" data-off="ปิด" checked>
                        </div>
                    </div>
                    <div class="col-md-3">

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
            <h1 class="h1-title">ผู้ปกครอง</h1>
        </div>
        <div>
            <button class="btn_backend text_btn btn" id="btnInsert" data-toggle="modal" data-target="#insertParents"><i class="fa fa-plus"></i>&nbsp;&nbsp;เพิ่มผู้ปกครอง</button>
        </div>
    </div>
    <div class="bgWhite padding_main mainBoxRadius">
        <div class="row">
            <div class="col-md-3 main-margin" style="text-align: center;">
                <div class="cardUser cardBox main-margin" style="cursor: pointer;" data-toggle="modal" data-target="#editParents">
                    <div class="main-margin">
                        <div>
                            <img style="width: 80%; height: 80%;" src="<?php echo base_url(); ?>assets/images/admin/DefualtUser.png">
                        </div>
                        <div>
                            <label style="cursor: pointer;" class="text-paragraph">นาย สารัช ธนภัทรภักดี<br>Mr. sarat thanabhatbhakdi</label>
                        </div>
                        <div>
                            <label style="cursor: pointer;" class="text-paragraph">สถานะการใช้งาน : <span style="color: #1ebb63;">เปิดใช้งาน</span></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    <script>
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
            $("#file1").val(fileName);

            var reader = new FileReader();
            reader.onload = function(e) {
                // get loaded data and render thumbnail.
                document.getElementById("preview1").src = e.target.result;
            };
            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        });
        /*** choose IMG for update ****/
        $(document).on("click", "#browse2", function() {
            var file = $(this).parents().find(".file2");
            file.trigger("click");
        });
        $('#inputFile2').change(function(e) {
            var fileName = e.target.files[0].name;
            $("#file2").val(fileName);

            var reader = new FileReader();
            reader.onload = function(e) {
                // get loaded data and render thumbnail.
                document.getElementById("preview2").src = e.target.result;
            };
            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
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

        function onClickSave(func) {
            console.log(func);
            var checkError = true;
            if (func == 'insert') {
                var prenameTH1 = document.getElementById("prenameTH1").value;
                var fnameTH1 = document.getElementById("fnameTH1").value;
                var lnameTH1 = document.getElementById("lnameTH1").value;
                var prenameEN1 = document.getElementById("prenameEN1").value;
                var fnameEN1 = document.getElementById("fnameEN1").value;
                var lnameEN1 = document.getElementById("lnameEN1").value;
                var school1 = document.getElementById("school1").value;
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
                if (username2.length < 8 && username2.length <= 20) {
                    document.getElementById("erusername2").style.display = "block";
                    document.getElementById("username2").style.border = "2px solid #bd2130";
                    checkError = false;
                } else {
                    document.getElementById("erusername2").style.display = "none";
                    document.getElementById("username2").style.border = "2px solid #ced4da";
                    var checkUsername = isUsername(username2);
                    if (checkUsername == false) {
                        document.getElementById("erusername2").style.display = "block";
                        document.getElementById("username2").style.border = "2px solid #bd2130";
                        checkError = false;
                    } else {
                        document.getElementById("erusername2").style.display = "none";
                        document.getElementById("username2").style.border = "2px solid #ced4da";
                    }
                }
                if (password2.length < 8 && password2.length <= 20) {
                    document.getElementById("erpassword2").style.display = "block";
                    document.getElementById("password2").style.border = "2px solid #bd2130";
                    checkError = false;
                } else {
                    document.getElementById("erpassword2").style.display = "none";
                    document.getElementById("password2").style.border = "2px solid #ced4da";
                }

                if (checkError == true) {
                    /********insert**********/
                    console.log('Start Insert');
                }
            }
        }
    </script>