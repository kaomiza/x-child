<div class="modal fade show" tabindex="-1" role="dialog" id="editPassword" style="display:none;">
    <div class="modal-dialog" role="admin">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-heading">แก้ไขรหัสผ่าน</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <label for="password1">Password</label>
                <div class="input-group mb-2">
                    <input id="password1" type="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    <span id="password1-error" class="error invalid-feedback"></span>
                </div>
                <label for="confirm_password1">Confirm Password</label>
                <div class="input-group mb-2">
                    <input id="confirm_password1" type="password" class="form-control" placeholder="Confirm Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    <span id="confirm_password1-error" class="error invalid-feedback"></span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary text_btn" data-dismiss="modal">ปิด</button>
                <button type="button" class="btn text_btn" style="background-color: #1e7e34; color:white;" onclick="onClickSave('add')">บันทึก</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade show" tabindex="-1" role="dialog" id="uploadImage" style="display:none;">
    <div class="modal-dialog" role="admin">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-heading">อัพโหลดรูปภาพ</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary text_btn" data-dismiss="modal">ปิด</button>
                <button type="button" class="btn text_btn" style="background-color: #1e7e34; color:white;" onclick="onClickSave('add')">บันทึก</button>
            </div>
        </div>
    </div>
</div>

<div class="container profile-bg p-0 profile-con mb-5">
    <form id="update_form" method="post" action="">
        <div class="row">

            <div class="col-lg-3">
                <div class="col-sm-3 col-md-12 m-0 p-2 pt-5 btn-r profile-user">
                    <img style="height: 250px;" id="IMG" class="profile-img" src="" alt="">

                    <ul class="profile-menu list-group">
                        <li><a class="text-light" href="#" data-toggle="modal" data-target="#myModal1"><i class="fas fa-file-image"></i><span>Upload image Profile</span></a></li>
                        <li><a class="text-light" href="#" data-toggle="modal" data-target="#myModal2"><i class="fas fa-key"></i><span>Change Password</span></a></li>
                    </ul>

                </div>
            </div>

            <div class="col-lg-7">
                <div class="col-sm-9 col-md-12 pb-0 pt-5 pr-5 pl-5">
                    <div class="row">
                        <div class="col-md-4 zmp">
                            <div class="form-group">
                                <span>คำนำหน้าชื่อภาษาไทย</span>
                                <select class="form-control" id="card_d" name="t_academic">
                                </select>
                                <span class="text-danger"></span>
                            </div>
                        </div>
                        <div class="col-md-4 zmp">
                            <div class="form-group">
                                <span>ชื่อภาษาไทย</span>
                                <input type="text" class="form-control" id="fname" name="t_fnameTH" value="">
                                <span class="text-danger"></span>
                            </div>
                        </div>
                        <div class="col-md-4 zmp">
                            <div class="form-group">
                                <span>นามสกุลภาษาไทย</span>
                                <input type="text" class="form-control" id="lname" name="t_lnameTH" value="">
                                <span class="text-danger"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 zmp">
                            <div class="form-group">
                                <span>คำนำหน้าชื่อภาษาอังกฤษ</span>
                                <select class="form-control" id="t_academicEN" name="t_academicEN" disabled="">
                                    <option value="1"></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 zmp">
                            <div class="form-group">
                                <span>ชื่อภาษาอังกฤษ</span>
                                <input type="text" class="form-control" id="t_fnameEN" name="t_fnameEN" value="">
                                <span class="text-danger"></span>
                            </div>
                        </div>
                        <div class="col-md-4 zmp">
                            <div class="form-group">
                                <span>นามสกุลภาษาอังกฤษ</span>
                                <input type="text" class="form-control" id="t_lnameEN" name="t_lnameEN" value="">
                                <span class="text-danger"></span>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12 zmp">
                            <div class="form-group">
                                <span>Mobile</span>
                                <input type="text" class="form-control" id="t_phone" name="t_phone" value="">
                                <span class="text-danger"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 zmp">
                            <div class="form-group">
                                <span>บ้านเลขที่</span>
                                <input type="text" class="form-control" id="address" name="no_house" value="">
                                <span class="text-danger"></span>
                            </div>
                        </div>
                        <div class="col-md-6 zmp">
                            <div class="form-group">
                                <span>หมู่ที่</span>
                                <input type="text" class="form-control" id="village" name="no_village" value="">
                                <span class="text-danger"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 zmp">
                            <div class="form-group">
                                <span>ซอย</span>
                                <input type="text" class="form-control" id="road" name="lane" value="">
                                <span class="text-danger"></span>
                            </div>
                        </div>
                        <div class="col-md-6 zmp">
                            <div class="form-group">
                                <span>ถนน</span>
                                <input type="text" class="form-control" id="road" name="road" value="">
                                <span class="text-danger"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 zmp">
                            <div class="form-group">
                                <span>จังหวัด</span>
                                <select class="form-control" id="province" name="province">
                                </select>
                                <span class="text-danger"></span>
                            </div>
                        </div>

                        <div class="col-md-6 zmp">
                            <div class="form-group">
                                <span>อำเภอ</span>
                                <select class="form-control" id="amphur" name="amphur">
                                </select>
                                <span class="text-danger"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 zmp">
                            <div class="form-group">
                                <span>ตำบล</span>
                                <select class="form-control" id="district" name="district">
                                </select>
                                <span class="text-danger"></span>
                            </div>
                        </div>
                        <div class="col-md-6 zmp">
                            <div class="form-group">
                                <span>หมายเลขไปรษณีย์</span>
                                <input type="text" class="form-control" id="zip" name="zip" value="">
                                <span class="text-danger"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 zmp">
                            <div class="form-group">
                                <input type="submit" class="form-control profile-btn btn-r" id="" name="update_profile" value="Save">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    <?php
    $type = $this->session->userdata('U_admin');
    $id = $this->session->userdata('U_id');
    ?>
    $.get('<?php echo base_url('Profile/getUser'); ?>?userType=' + <?php echo $type; ?> + '&userId=' + <?php echo $id; ?>)
        .done((res) => {
            console.log(res);
        });
</script>