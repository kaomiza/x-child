<div class="modal fade show" tabindex="-1" role="dialog" id="insertChildren" style="display:none;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-heading">เพิ่มเด็กพิเศษ</h4>
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
                            <label class="text-paragraph">วัน/เดือน/ปี เกิด</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input id="datepicker1" style="font-family: 'Kanit';" disabled value="วัน/เดือน/ปี" class="datepicker form-control" />
                            <label class="text-paragraph" id="erdatepicker1" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกวันเกิดให้ถูกต้อง
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">ประเภทเด็กพิเศษ</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <select class="form-control text-paragraph" id="tc1" required="">
                                <option selected="">--- กรุณาเลือก ---</option>
                            </select>
                            <label class="text-paragraph" id="ertc1" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกประเภทเด็กพิเศษ
                            </label>
                        </div>
                    </div>
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
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">ผู้ปกครอง</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <select class="form-control text-paragraph" id="parent1" required="">
                                <option selected="">--- กรุณาเลือก ---</option>
                            </select>
                            <label class="text-paragraph" id="erparent1" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกผู้ปกครอง
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">ผู้เชียวชาญ</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <select class="form-control text-paragraph" id="expert1" required="">
                                <option selected="">--- กรุณาเลือก ---</option>
                            </select>
                            <label class="text-paragraph" id="erexpert1" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกผู้เชี่ยวชาญ
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">บ้านเลขที่</label>
                        </div>
                        <div>
                            <input onkeyup="isHomeNumchar(this.value,this)" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น 70/1">
                        </div>
                    </div>
                </div>
                <div class="row">
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
                </div>
                <div class="row">
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
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">ไปรษณีย์</label>
                        </div>
                        <div>
                            <input style="font-family: 'Kanit';" type="text" class="form-control" disabled placeholder="30000">
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
<div class="modal fade show" tabindex="-1" role="dialog" id="editChildren" style="display:none;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-heading">แก้ไขเด็กพิเศษ</h4>
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
                            <label class="text-paragraph">วัน/เดือน/ปี เกิด</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input id="datepicker2" style="font-family: 'Kanit';" value="วัน/เดือน/ปี" disabled class="datepicker form-control" />
                            <label class="text-paragraph" id="erdatepicker2" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกวันเกิดให้ถูกต้อง
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">ประเภทเด็กพิเศษ</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <select class="form-control text-paragraph" id="tc2" required="">
                                <option selected="">--- กรุณาเลือก ---</option>
                            </select>
                            <label class="text-paragraph" id="ertc2" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกประเภทเด็กพิเศษ
                            </label>
                        </div>
                    </div>
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
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">ผู้ปกครอง</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <select class="form-control text-paragraph" id="parent2" required="">
                                <option selected="">--- กรุณาเลือก ---</option>
                            </select>
                            <label class="text-paragraph" id="erparent2" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกผู้ปกครอง
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">ผู้เชียวชาญ</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <select class="form-control text-paragraph" id="expert2" required="">
                                <option selected="">--- กรุณาเลือก ---</option>
                            </select>
                            <label class="text-paragraph" id="erexpert2" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกผู้เชี่ยวชาญ
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">บ้านเลขที่</label>
                        </div>
                        <div>
                            <input onkeyup="isHomeNumchar(this.value,this)" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น 70/2">
                        </div>
                    </div>
                </div>
                <div class="row">
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
                </div>
                <div class="row">
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
                    <div class="col-md-4">
                        <div>
                            <label class="text-paragraph">ไปรษณีย์</label>
                        </div>
                        <div>
                            <input style="font-family: 'Kanit';" type="text" class="form-control" disabled placeholder="30000">
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
                            <label style="width: 100%;" for="toggle-1" class="toggle-1">
                                <input type="checkbox" id="toggle-1" class="toggle-1__input" checked> 
                                <span class="toggle-1__button"></span>
                            </label>
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
            <h1 class="h1-title">เด็กพิเศษ</h1>
        </div>
        <div>
            <button class="btn_backend text_btn btn" id="btnInsert" data-toggle="modal" data-target="#insertChildren"><i class="fa fa-plus"></i>&nbsp;&nbsp;เพิ่มเด็กพิเศษ</button>
        </div>
    </div>
    <div class="bgWhite padding_main mainBoxRadius">
        <div class="row">
            <div class="col-md-3 main-margin" style="text-align: center;">
                <div class="cardUser cardBox main-margin" style="cursor: pointer;" data-toggle="modal" data-target="#editChildren">
                    <div class="main-margin">
                        <div>
                            <img style="width: 80%; height: 80%;" src="<?php echo base_url(); ?>assets/images/admin/DefualtUser.png">
                        </div>
                        <div>
                            <label style="cursor: pointer;" class="text-paragraph">นาย เกียรติศักดิ์ เลือดใหม่<br>Mr. kattisack radmai</label>
                        </div>
                        <div>
                            <label style="cursor: pointer;" class="text-paragraph">สถานะการใช้งาน : <span style="color: #1ebb63;">เปิดใช้งาน</span></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div style="overflow-x:auto;">
            <table>
                <tr>
                    <th class="th_text">เลขที่</th>
                    <th class="th_text">ชื่อ-นามสกุล</th>
                    <th class="th_text">ผู้ปกครอง</th>
                    <th class="th_text">ผู้เชี่ยวชาญ</th>
                    <th class="th_text">ประเภทเด็กพิเศษ</th>
                    <th class="th_text">โรงเรียน</th>
                    <th class="th_text">ที่อยู่อาศัย</th>
                    <th class="th_text">แก้ไข</th>
                    <th class="th_text">สถานะ</th>
                </tr>
                <tr>
                    <td class="td_text">1</td>
                    <td class="td_text">นาย เกียรติศักดิ์ เลือดใหม่<br>Mr. kattisack radmai</td>
                    <td class="td_text">นาย สารัช ธนภัทรภักดี<br>Mr. sarat thanabhatbhakdi</td>
                    <td class="td_text">นาย แอดมิน แอดมิน<br>Mr. admin admin</td>
                    <td class="td_text">เด็กที่มีความบกพร่องทางการมองเห็น</td>
                    <td class="td_text">โรงเรียนนครราชสีมาปัญญานุกูล จังหวัดนครราชสีมา<br>Nakhonratchasima Panyanukul School</td>
                    <td class="td_text">บ้านเลขที่ หมู่ ถนน ตำบล พระบรมมหาราชวัง อำเภอ เขตพระนคร จังหวัดกรุงเทพมหานคร</td>
                    <td class="td_text">
                        <button class="btn btn-success" data-toggle="modal" data-target="#editChildren">
                            <i class="fa fa-edit"></i>
                        </button>
                    </td>
                    <td class="td_text">
                        <label class="switch" id="status">
                            <input type="checkbox" checked>
                            <span class="slider round"></span>
                        </label>
                    </td>

                </tr>
            </table>
        </div> -->
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
                var birthday1 = document.getElementById("datepicker1").value;
                var tc1 = document.getElementById("tc1").value;
                var parent1 = document.getElementById("parent1").value;
                var expert1 = document.getElementById("expert1").value;
                var school1 = document.getElementById("school1").value;
                var SelectPro1 = document.getElementById("SelectPro1").value;
                var SelectAm1 = document.getElementById("SelectAm1").value;
                var SelectDist1 = document.getElementById("SelectDist1").value;
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

                if (birthday1 == 'วัน/เดือน/ปี' || birthday1 == '') {
                    document.getElementById("erdatepicker1").style.display = "block";
                    document.getElementById("datepicker1").style.border = "2px solid #bd2130";
                    checkError = false;
                } else {
                    birthday1 = document.getElementById("datepicker1").value;
                    var splitBD = birthday1.split('/');
                    var currentDate = new Date();
                    var dateSelect = new Date(splitBD[1] + "/" + splitBD[0] + "/" + splitBD[2]);
                    console.log(currentDate);
                    console.log(dateSelect);
                    if (dateSelect >= currentDate) {
                        document.getElementById("erdatepicker1").style.display = "block";
                        document.getElementById("datepicker1").style.border = "2px solid #bd2130";
                        checkError = false;
                    } else {
                        document.getElementById("erdatepicker1").style.display = "none";
                        document.getElementById("datepicker1").style.border = "2px solid #ced4da";
                    }
                }
                if (tc1 == '--- กรุณาเลือก ---') {
                    document.getElementById("ertc1").style.display = "block";
                    document.getElementById("tc1").style.border = "2px solid #bd2130";
                    checkError = false;
                } else {
                    document.getElementById("ertc1").style.display = "none";
                    document.getElementById("tc1").style.border = "2px solid #ced4da";
                }
                if (parent1 == '--- กรุณาเลือก ---') {
                    document.getElementById("erparent1").style.display = "block";
                    document.getElementById("parent1").style.border = "2px solid #bd2130";
                    checkError = false;
                } else {
                    document.getElementById("erparent1").style.display = "none";
                    document.getElementById("parent1").style.border = "2px solid #ced4da";
                }
                if (expert1 == '--- กรุณาเลือก ---') {
                    document.getElementById("erexpert1").style.display = "block";
                    document.getElementById("expert1").style.border = "2px solid #bd2130";
                    checkError = false;
                } else {
                    document.getElementById("erexpert1").style.display = "none";
                    document.getElementById("expert1").style.border = "2px solid #ced4da";
                }
                if (school1 == '--- กรุณาเลือก ---') {
                    document.getElementById("erschool1").style.display = "block";
                    document.getElementById("school1").style.border = "2px solid #bd2130";
                    checkError = false;
                } else {
                    document.getElementById("erschool1").style.display = "none";
                    document.getElementById("school1").style.border = "2px solid #ced4da";
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
                var birthday2 = document.getElementById("datepicker2").value;
                var tc2 = document.getElementById("tc2").value;
                var parent2 = document.getElementById("parent2").value;
                var expert2 = document.getElementById("expert2").value;
                var school2 = document.getElementById("school2").value;
                var SelectPro2 = document.getElementById("SelectPro2").value;
                var SelectAm2 = document.getElementById("SelectAm2").value;
                var SelectDist2 = document.getElementById("SelectDist2").value;
                if (prenameTH2 == '--- กรุณาเลือก ---') {
                    document.getElementById("erprenameTH2").style.display = "block";
                    document.getElementById("prenameTH2").style.border = "2px solid #bd2230";
                    checkError = false;
                } else {
                    document.getElementById("erprenameTH2").style.display = "none";
                    document.getElementById("prenameTH2").style.border = "2px solid #ced4da";
                }
                if (fnameTH2 == '') {
                    document.getElementById("erfnameTH2").style.display = "block";
                    document.getElementById("fnameTH2").style.border = "2px solid #bd2230";
                    checkError = false;
                } else {
                    document.getElementById("erfnameTH2").style.display = "none";
                    document.getElementById("fnameTH2").style.border = "2px solid #ced4da";
                }
                if (lnameTH2 == '') {
                    document.getElementById("erlnameTH2").style.display = "block";
                    document.getElementById("lnameTH2").style.border = "2px solid #bd2230";
                    checkError = false;
                } else {
                    document.getElementById("erlnameTH2").style.display = "none";
                    document.getElementById("lnameTH2").style.border = "2px solid #ced4da";
                }
                if (prenameEN2 == '--- กรุณาเลือก ---') {
                    document.getElementById("erprenameEN2").style.display = "block";
                    document.getElementById("prenameEN2").style.border = "2px solid #bd2230";
                    checkError = false;
                } else {
                    document.getElementById("erprenameEN2").style.display = "none";
                    document.getElementById("prenameEN2").style.border = "2px solid #ced4da";
                }
                if (fnameEN2 == '') {
                    document.getElementById("erfnameEN2").style.display = "block";
                    document.getElementById("fnameEN2").style.border = "2px solid #bd2230";
                    checkError = false;
                } else {
                    document.getElementById("erfnameEN2").style.display = "none";
                    document.getElementById("fnameEN2").style.border = "2px solid #ced4da";
                }
                if (lnameEN2 == '') {
                    document.getElementById("erlnameEN2").style.display = "block";
                    document.getElementById("lnameEN2").style.border = "2px solid #bd2230";
                    checkError = false;
                } else {
                    document.getElementById("erlnameEN2").style.display = "none";
                    document.getElementById("lnameEN2").style.border = "2px solid #ced4da";
                }
                if (birthday2 == 'วัน/เดือน/ปี' || birthday2 == '') {
                    document.getElementById("erdatepicker2").style.display = "block";
                    document.getElementById("datepicker2").style.border = "2px solid #bd2130";
                    checkError = false;
                } else {
                    birthday2 = document.getElementById("datepicker2").value;
                    var splitBD = birthday2.split('/');
                    var currentDate = new Date();
                    var dateSelect = new Date(splitBD[1] + "/" + splitBD[0] + "/" + splitBD[2]);
                    console.log(currentDate);
                    console.log(dateSelect);
                    if (dateSelect >= currentDate) {
                        document.getElementById("erdatepicker2").style.display = "block";
                        document.getElementById("datepicker2").style.border = "2px solid #bd2130";
                        checkError = false;
                    } else {
                        document.getElementById("erdatepicker2").style.display = "none";
                        document.getElementById("datepicker2").style.border = "2px solid #ced4da";
                    }
                }
                if (tc2 == '--- กรุณาเลือก ---') {
                    document.getElementById("ertc2").style.display = "block";
                    document.getElementById("tc2").style.border = "2px solid #bd2130";
                    checkError = false;
                } else {
                    document.getElementById("ertc2").style.display = "none";
                    document.getElementById("tc2").style.border = "2px solid #ced4da";
                }
                if (parent2 == '--- กรุณาเลือก ---') {
                    document.getElementById("erparent2").style.display = "block";
                    document.getElementById("parent2").style.border = "2px solid #bd2230";
                    checkError = false;
                } else {
                    document.getElementById("erparent2").style.display = "none";
                    document.getElementById("parent2").style.border = "2px solid #ced4da";
                }
                if (expert2 == '--- กรุณาเลือก ---') {
                    document.getElementById("erexpert2").style.display = "block";
                    document.getElementById("expert2").style.border = "2px solid #bd2230";
                    checkError = false;
                } else {
                    document.getElementById("erexpert2").style.display = "none";
                    document.getElementById("expert2").style.border = "2px solid #ced4da";
                }
                if (school2 == '--- กรุณาเลือก ---') {
                    document.getElementById("erschool2").style.display = "block";
                    document.getElementById("school2").style.border = "2px solid #bd2230";
                    checkError = false;
                } else {
                    document.getElementById("erschool2").style.display = "none";
                    document.getElementById("school2").style.border = "2px solid #ced4da";
                }
                if (SelectPro2 == "--- กรุณาเลือก ---") {
                    document.getElementById("erSelectPro2").style.display = "block";
                    document.getElementById("SelectPro2").style.border = "2px solid #bd2230";
                    checkError = false;
                } else {
                    document.getElementById("erSelectPro2").style.display = "none";
                    document.getElementById("SelectPro2").style.border = "2px solid #ced4da";
                }
                if (SelectAm2 == "--- กรุณาเลือก ---") {
                    document.getElementById("erSelectAm2").style.display = "block";
                    document.getElementById("SelectAm2").style.border = "2px solid #bd2230";
                    checkError = false;
                } else {
                    document.getElementById("erSelectAm2").style.display = "none";
                    document.getElementById("SelectAm2").style.border = "2px solid #ced4da";
                }
                if (SelectDist2 == "--- กรุณาเลือก ---") {
                    document.getElementById("erSelectDist2").style.display = "block";
                    document.getElementById("SelectDist2").style.border = "2px solid #bd2230";
                    checkError = false;
                } else {
                    document.getElementById("erSelectDist2").style.display = "none";
                    document.getElementById("SelectDist2").style.border = "2px solid #ced4da";
                }

                if (checkError == true) {
                    /********insert**********/
                    console.log('Start Insert');
                }
            }
        }
    </script>