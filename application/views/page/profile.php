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

<?php
$type = $this->session->userdata('U_admin');
$id = $this->session->userdata('U_id');
?>
<div class="container profile-bg">
    <div class="row">

        <div class="col-lg-3 p-1">
            <div class="col-12 p-3 btn-r profile-user">
                <img id="IMG" class="img-fluid profile-img rounded" src="<?php echo base_url('upload/images/admin.png'); ?>" alt="image-profile">
                <ul class="profile-menu list-group">
                    <li><a class="text-light" href="#" data-toggle="modal" data-target="#myModal1"><i class="fas fa-file-image"></i><span>Upload image Profile</span></a></li>
                    <li><a class="text-light" href="#" data-toggle="modal" data-target="#myModal2"><i class="fas fa-key"></i><span>Change Password</span></a></li>
                </ul>
            </div>
        </div>

        <div class="col-lg-8 p-1">
            <form id="update_form" method="post" action="">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-4 zmp">
                            <div class="form-group">
                                <span>คำนำหน้าชื่อภาษาไทย</span>
                                <select class="form-control" id="prenameTH" name="prenameTH">
                                </select>
                                <span class="text-danger"></span>
                            </div>
                        </div>
                        <div class="col-md-4 zmp">
                            <div class="form-group">
                                <span>ชื่อภาษาไทย</span>
                                <input type="text" class="form-control" id="fname" name="fnameTH">
                                <span class="text-danger"></span>
                            </div>
                        </div>
                        <div class="col-md-4 zmp">
                            <div class="form-group">
                                <span>นามสกุลภาษาไทย</span>
                                <input type="text" class="form-control" id="lname" name="lnameTH">
                                <span class="text-danger"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 zmp">
                            <div class="form-group">
                                <span>คำนำหน้าชื่อภาษาอังกฤษ</span>
                                <select class="form-control" id="prenameEN" name="prenameEN" disabled="">
                                    <option value="1"></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 zmp">
                            <div class="form-group">
                                <span>ชื่อภาษาอังกฤษ</span>
                                <input type="text" class="form-control" id="fnameEN" name="fnameEN">
                                <span class="text-danger"></span>
                            </div>
                        </div>
                        <div class="col-md-4 zmp">
                            <div class="form-group">
                                <span>นามสกุลภาษาอังกฤษ</span>
                                <input type="text" class="form-control" id="lnameEN" name="lnameEN">
                                <span class="text-danger"></span>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12 zmp">
                            <div class="form-group">
                                <span>Mobile</span>
                                <input type="text" class="form-control" id="phone" name="phone">
                                <span class="text-danger"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 zmp">
                            <div class="form-group">
                                <span>บ้านเลขที่</span>
                                <input type="text" class="form-control" id="address" name="no_house">
                                <span class="text-danger"></span>
                            </div>
                        </div>
                        <div class="col-md-6 zmp">
                            <div class="form-group">
                                <span>หมู่ที่</span>
                                <input type="text" class="form-control" id="village" name="no_village">
                                <span class="text-danger"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 zmp">
                            <div class="form-group">
                                <span>ซอย</span>
                                <input type="text" class="form-control" id="lane" name="lane">
                                <span class="text-danger"></span>
                            </div>
                        </div>
                        <div class="col-md-6 zmp">
                            <div class="form-group">
                                <span>ถนน</span>
                                <input type="text" class="form-control" id="road" name="road">
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
                                <input type="text" class="form-control" id="zip" name="zip">
                                <span class="text-danger"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 zmp">
                            <div class="form-group">
                                <input type="submit" class="form-control profile-btn btn-r" disabled="" id="submit-data" name="update_profile" value="Save">
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>

    </div>
</div>

<script>
    var prename = [];
    var path_image;


    $.get('<?php echo base_url('Profile/getUser'); ?>?userType=' + <?php echo $type; ?> + '&userId=' + <?php echo $id; ?>)
        .done((res) => {
            console.log(res);

        });

    function fecth_prename(id) {

    }

    function fecth_AutoPrename(id) {

    }
</script>
<script>
    async function hashPassword(pain_text) {
        var passh = null;
        await $.post('<?php echo base_url('Api/HashPassword/hashpass'); ?>', {
            password: pain_text
        }).done((res) => {
            passh = res.hasdata;
        });
        return passh;
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

    function saveProfile() {
        $.post('<?php echo base_url(''); ?>').done((res) => {

        }).fail((error) => {

        });
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

    function uploadImage() {
        $.post().done().fail();
    }
</script>
<script>
    var button = $('#submit-data');
    var orig = [];

    $.fn.getType = function() {
        return this[0].tagName == "INPUT" ? $(this[0]).attr("type").toLowerCase() : this[0].tagName.toLowerCase();
    }

    $("form :input").each(function() {
        var type = $(this).getType();
        var tmp = {
            'type': type,
            'value': $(this).val()
        };
        if (type == 'radio') {
            tmp.checked = $(this).is(':checked');
        }
        orig[$(this).attr('id')] = tmp;
    });

    $('form').bind('change keyup', function() {

        var disable = true;
        $("form :input").each(function() {
            var type = $(this).getType();
            var id = $(this).attr('id');

            if (type == 'text' || type == 'select') {
                disable = (orig[id].value == $(this).val());
            } else if (type == 'radio') {
                disable = (orig[id].checked == $(this).is(':checked'));
            }

            if (!disable) {
                return false; // break out of loop
            }
        });

        button.prop('disabled', disable);
    });
</script>