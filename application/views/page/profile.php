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
                    <input id="password" type="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    <span id="password-error" class="invalid-feedback"></span>
                </div>
                <label for="confirm_password">Confirm Password</label>
                <div class="input-group mb-2">
                    <input id="confirm_password" type="password" class="form-control" placeholder="Confirm Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    <span id="confirm_password-error" class="invalid-feedback"></span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary text_btn" data-dismiss="modal">ปิด</button>
                <button type="button" class="btn text_btn" style="background-color: #1e7e34; color:white;" onclick="changePassword()">บันทึก</button>
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
                <div class="mb-3">
                    <img style="width: 100%;" src="<?php echo base_url('assets/images/user-null.png'); ?>" id="preview1" class="img-thumbnail">
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputFile" accept="image/*">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary text_btn" data-dismiss="modal">ปิด</button>
                <button type="button" class="btn text_btn" style="background-color: #1e7e34; color:white;" id="upload" onclick="uploadImage()" disabled="">บันทึก</button>
            </div>
        </div>
    </div>
</div>

<?php
$type = $this->session->userdata('U_admin');
$id = $this->session->userdata('U_id');
?>
<?php
if ($this->session->flashdata('error')) {
    echo "
    <script>
    Swal.fire(
        '" . $this->session->flashdata('error') . "',
        '',
        'error'
    )
    </script>
    ";
}
?>
<?php
if ($this->session->flashdata('success')) {
    echo "
    <script>
    Swal.fire(
        '" . $this->session->flashdata('success') . "',
        '',
        'success'
    )
    </script>
    ";
}
?>
<style>
    .breadcrumb {
        background-color: #fff;
    }
</style>

<div class="container align-content-center">
    <div class="container profile-bg mt-3">
        <div class="row p-3">
            <ol class="breadcrumb float-sm-left m-0">
                <li class="breadcrumb-item"><a href="<?= base_url();?>">Home</a></li>
                <li class="breadcrumb-item active">Profile</li>
            </ol>
        </div>
    </div>

    <div class="container profile-bg mt-3" style="margin-bottom: 3%;">
        <div class="row">
            <div class="col-lg-4 p-2">
                <div class="col-12 p-3 btn-r profile-user">
                    <img id="IMG" class="img-fluid profile-img rounded" src="<?php echo base_url('assets/images/user-null.png'); ?>" alt="image-profile">
                    <ul class="profile-menu list-group">
                        <li><a class="text-light" href="#" data-toggle="modal" data-target="#uploadImage"><i class="fas fa-file-image"></i><span>Upload image Profile</span></a></li>
                        <li><a class="text-light" href="#" data-toggle="modal" data-target="#editPassword"><i class="fas fa-key"></i><span>Change Password</span></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-8 p-2">
                <form id="update_form" enctype="multipart/form-data" method="POST" action="<?php echo base_url('Profile/update') . '/' . $type . '/' . $id; ?>" onsubmit="return save_profile()">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-4 zmp">
                                <div class="form-group">
                                    <span>คำนำหน้าชื่อภาษาไทย</span><span style="color: red;">*</span>
                                    <select class="form-control select2bs4" id="prenameTH" name="prenameTH" onchange="fecth_AutoPrename()">
                                    </select>
                                    <div class="invalid-feedback"> กรุณาเลือกคำนำหน้าชื่อ </div>
                                </div>
                            </div>
                            <div class="col-md-4 zmp">
                                <div class="form-group">
                                    <span>ชื่อภาษาไทย</span><span style="color: red;">*</span>
                                    <input onkeyup="isThaichar(this.value,this)" type="text" class="form-control" id="fnameTH" name="fnameTH" maxlength="100">
                                    <div class="invalid-feedback"> กรุณากรอกชื่อภาษาไทย </div>
                                </div>
                            </div>
                            <div class="col-md-4 zmp">
                                <div class="form-group">
                                    <span>นามสกุลภาษาไทย</span><span style="color: red;">*</span>
                                    <input onkeyup="isThaichar(this.value,this)" type="text" class="form-control" id="lnameTH" name="lnameTH" maxlength="100">
                                    <div class="invalid-feedback"> กรุณากรอกนามสกุลภาษาไทย </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 zmp">
                                <div class="form-group">
                                    <span>คำนำหน้าชื่อภาษาอังกฤษ</span>
                                    <select class="form-control select2bs4" id="prenameEN" name="prenameEN" disabled="">
                                        <option value="1"></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 zmp">
                                <div class="form-group">
                                    <span>ชื่อภาษาอังกฤษ</span><span style="color: red;">*</span>
                                    <input onkeyup="isEngchar(this.value,this)" type="text" class="form-control" id="fnameEN" name="fnameEN" maxlength="100">
                                    <div class="invalid-feedback"> กรุณากรอกชื่อภาษาอังกฤษ </div>
                                </div>
                            </div>
                            <div class="col-md-4 zmp">
                                <div class="form-group">
                                    <span>นามสกุลภาษาอังกฤษ</span><span style="color: red;">*</span>
                                    <input onkeyup="isEngchar(this.value,this)" type="text" class="form-control" id="lnameEN" name="lnameEN" maxlength="100">
                                    <div class="invalid-feedback"> กรุณากรอกนามสกุลภาษาอังกฤษ </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-4 zmp">
                                <div class="form-group">
                                    <span>เบอร์ติดต่อ</span><span style="color: red;">*</span>
                                    <input onkeyup="isNumEngchar(this.value,this)" type="text" class="form-control" id="phone" name="phone" maxlength="10">
                                    <div class="invalid-feedback" id="phone-error"></div>
                                </div>
                            </div>

                            <div class="col-md-4 zmp">
                                <div class="form-group">
                                    <span>อีเมล์</span><span style="color: red;">*</span>
                                    <input type="text" class="form-control" id="email" name="email" maxlength="30">
                                    <div class="invalid-feedback" id="email-error"></div>
                                </div>
                            </div>

                            <div class="col-md-4 zmp">
                                <div class="form-group">
                                    <span>บ้านเลขที่</span>
                                    <input type="text" class="form-control" id="no_house" name="no_house" maxlength="10" onkeyup="isHomeNumchar(this.value,this)">
                                    <span class="text-danger"></span>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-4 zmp">
                                <div class="form-group">
                                    <span>หมู่ที่</span>
                                    <input type="text" class="form-control" id="village" name="no_village" maxlength="5" onkeyup="isNumAllchar(this.value,this)">
                                </div>
                            </div>

                            <div class="col-md-4 zmp">
                                <div class="form-group">
                                    <span>ถนน</span>
                                    <input type="text" class="form-control" id="road" name="road" maxlength="20" onkeyup="isRoadchar(this.value,this)">
                                </div>
                            </div>

                            <div class="col-md-4 zmp">
                                <div class="form-group">
                                    <span>จังหวัด</span><span style="color: red;">*</span>
                                    <select class="form-control select2bs4" id="province" name="province" onchange="change_amphur()">
                                    </select>
                                    <div class="invalid-feedback"> กรุณาเลือกจังหวัด </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-4 zmp">
                                <div class="form-group">
                                    <span>อำเภอ</span><span style="color: red;">*</span>
                                    <select class="form-control select2bs4" id="amphur" name="amphur" onchange="change_district()">
                                    </select>
                                    <div class="invalid-feedback"> กรุณาเลือกอำเภอ </div>
                                </div>
                            </div>

                            <div class="col-md-4 zmp">
                                <div class="form-group">
                                    <span>ตำบล</span><span style="color: red;">*</span>
                                    <select class="form-control select2bs4" id="district" name="district">
                                    </select>
                                    <div class="invalid-feedback"> กรุณาเลือกตำบล </div>
                                </div>
                            </div>

                            <div class="col-md-4 zmp">
                                <div class="form-group">
                                    <span>หมายเลขไปรษณีย์</span>
                                    <input type="text" class="form-control" id="zip" name="zip" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 zmp">
                                <div class="col-md-6 p-0 float-right">
                                    <button type="submit" class="btn btn-primary btn-block btn-r" disabled="" id="submit-data">Save</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

<script>
    var prename = [];
    var path_image;
    var user_type = <?php echo $type; ?>;

    $.get('<?php echo base_url('Profile/getUser'); ?>?userType=' + <?php echo $type; ?> + '&userId=' + <?php echo $id; ?>)
        .done(async (res) => {
            if (user_type == 0) {
                $('#IMG').attr('src', res.pa_img);
                $('#fnameTH').val(res.pa_fnameTH);
                $('#lnameTH').val(res.pa_lnameTH);
                $('#fnameEN').val(res.pa_fnameEN);
                $('#lnameEN').val(res.pa_lnameEN);
                $('#phone').val(res.phone);
                $('#email').val(res.email);
                $('#no_house').val(res.pa_house_no);
                $('#village').val(res.pa_village_no);
                $('#road').val(res.pa_road);
                $('#zip').val(res.pa_zip);
                fecth_prename(res.pa_prename);
                await fetch_editAddress(res.pa_district, res.pa_province, res.pa_amphur);
            }
            if (user_type == 1) {
                $('#IMG').attr('src', res.e_img);
                $('#fnameTH').val(res.e_fnameTH);
                $('#lnameTH').val(res.e_lnameTH);
                $('#fnameEN').val(res.e_fnameEN);
                $('#lnameEN').val(res.e_lnameEN);
                $('#phone').val(res.e_phone);
                $('#email').val(res.e_email);
                $('#no_house').val(res.e_house_no);
                $('#village').val(res.e_village_no);
                $('#road').val(res.e_road);
                $('#zip').val(res.e_zip);
                fecth_prename(res.e_prename);
                await fetch_editAddress(res.e_district, res.e_province, res.e_amphur);
            }
            // console.log(res);
        });

    $('#inputFile').change(function(e) {
        var fileName = $(this).val().split("\\").pop();
        var allowedExtensions =
            /(\.jpg|\.jpeg|\.png|\.gif`)$/i;
        if (!allowedExtensions.exec(fileName)) {
            alert('Invalid file type');
            $(this).siblings(".custom-file-label").addClass("selected").html('Choose file');
            $('#upload').attr('disabled', true);
        } else {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById("preview1").src = e.target.result;
            };
            reader.readAsDataURL(this.files[0]);
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            $('#upload').attr('disabled', false);
        }
    });

    function uploadImage() {
        var e = $('#inputFile');
        var fileName = e[0].files[0].name;
        var file = e[0].files[0];
        var url = null;
        if (user_type == 0) {
            url = '<?php echo base_url('admin/parents/storeImage'); ?>'
        } else {
            url = '<?php echo base_url('admin/expert/storeImage'); ?>';
        }
        if (file) {
            if (file.size <= 2000000) {
                var formData = new FormData();
                formData.append('file', file);
                $.ajax({
                    url: url,
                    type: "post",
                    data: formData,
                    processData: false,
                    contentType: false,
                    cache: false,
                    async: true,
                    success: (res) => {
                        path_image = 'upload/images/' + res.image_metadata.file_name
                        document.getElementById("IMG").src = '<?php echo base_url() ?>' + path_image;
                        if (user_type == 0) {
                            $.post('<?php echo base_url('admin/Parents/update'); ?>/' + '<?php echo $id; ?>/' + user_type, {
                                pa_img: path_image
                            }).done((res) => {
                                console.log(res);
                            });
                        } else {
                            $.post('<?php echo base_url('admin/Expert/update'); ?>/' + '<?php echo $id; ?>/' + user_type, {
                                e_img: path_image
                            }).done((res) => {
                                console.log(res);
                            });
                        }
                        $('#uploadImage').modal('hide');
                        $('#preview1').attr('src', '<?php echo base_url('assets/images/user-null.png'); ?>');
                        toastr.success('อัพโหลดรูปภาพเสร็จสิ้น');
                    }
                });
            } else {
                $(".custom-file-label").addClass("selected").html('Choose file');
                alert('ขนาดรูปภาพต้องไม่เกิน 2 mb');
                return false;
            }
        }
    }

    function save_profile() {

        var prenameTH = $('#prenameTH').val();
        var fnameTH = $('#fnameTH').val();
        var lnameTH = $('#lnameTH').val();
        var fnameEN = $('#fnameEN').val();
        var lnameEN = $('#lnameEN').val();
        var phone = $('#phone').val();
        var email = $('#email').val();
        var no_house = $('#no_house').val();
        var village = $('#village').val();
        var road = $('#road').val();
        var district = $('#district').val();
        var province = $('#province').val();
        var amphur = $('#amphur').val();

        var reg_number = /^0[0-9]{8,9}$/i;
        var reg_email = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        $('#email').removeClass('is-invalid');
        $('#pnone').removeClass('is-invalid');
        var success = true

        if (district == '--- กรุณาเลือก ---') {
            $('#district').addClass('is-invalid');
            success = false;
        }

        if (province == '--- กรุณาเลือก ---') {
            $('#province').addClass('is-invalid');
            success = false;
        }
        if (amphur == '--- กรุณาเลือก ---') {
            $('#amphur').addClass('is-invalid');
            success = false;
        }

        if (prenameTH == '--- กรุณาเลือก ---') {
            $('#prenameTH').addClass('is-invalid');
            success = false;
        }

        if (fnameTH == '') {
            $('#fnameTH').addClass('is-invalid');
            success = false;
        }

        if (lnameTH == '') {
            $('#lnameTH').addClass('is-invalid');
            success = false;
        }

        if (fnameEN == '') {
            $('#fnameEN').addClass('is-invalid');
            success = false;
        }

        if (lnameEN == '') {
            $('#lnameEN').addClass('is-invalid');
            success = false;
        }

        // **************************** //
        if (phone == '') {
            $('#phone').addClass('is-invalid');
            $('#phone-error').html('กรุณากรอกเลขโทรศัพท์มือถือ')
            success = false;
        } else {
            if (!reg_number.test(phone)) {
                $('#phone').addClass('is-invalid');
                $('#phone-error').html('กรุณากรอกเบอร์โทรศัพท์ให้ถูกต้อง')
                success = false;
            }
        }

        if (email == '') {
            $('#email').addClass('is-invalid');
            $('#email-error').html('กรุณากรอกอีเมล์');
            success = false;
        } else {
            if (!reg_email.test(email)) {
                $('#email').addClass('is-invalid');
                $('#email-error').html('กรุณากรอกอีเมล์ให้ถูกต้อง')
                success = false;
            }
        }

        return success;

    }

    function change_district() {
        var amphur = $('#amphur').val();
        if (amphur == '--- กรุณาเลือก ---') {
            $('#district').append('<option selected="">--- กรุณาเลือก ---</option>');
            $('#district').prop('disabled', true);
        } else {
            $.get('<?php echo base_url('Api/Address/amphurById'); ?>/' + amphur, (res) => {
                $('#zip').val(res.POSTCODE);
            })
            $('#district').prop('disabled', false);
            $('#district').empty();
            $('#district').append('<option selected="">--- กรุณาเลือก ---</option>');
            $.get('<?php echo base_url('Api/Address/district'); ?>/' + amphur, (res) => {
                res.forEach(element => {
                    $('#district').append('<option value="' + element.DISTRICT_ID + '">' + element.DISTRICT_NAME + '</option>')
                });
            });
        }
    }

    function change_amphur() {
        var p = $('#province').val();
        $('#zip').val('');
        if (p == '--- กรุณาเลือก ---') {
            $('#amphur').prop('disabled', true);
            $('#district').prop('disabled', true);
            $('#amphur').empty();
            $('#amphur').append('<option selected="">--- กรุณาเลือก ---</option>');
            $('#district').empty();
            $('#district').append('<option selected="">--- กรุณาเลือก ---</option>');
        } else {
            $('#amphur').empty();
            $('#amphur').append('<option selected="">--- กรุณาเลือก ---</option>');
            $('#district').empty();
            $('#district').append('<option selected="">--- กรุณาเลือก ---</option>');
            $('#amphur').prop('disabled', false);
            $('#district').prop('disabled', true);
            $.get('<?php echo base_url('Api/Address/amphur'); ?>/' + p, (res) => {
                res.forEach(element => {
                    $('#amphur').append('<option value="' + element.AMPHUR_ID + '">' + element.AMPHUR_NAME + '</option>')
                });
            })
        }
    }

    function fecth_prename(id) {
        $('#prenameTH').empty();
        $('#prenameTH').append('<option>--- กรุณาเลือก ---</option>');
        $('#prenameEN').empty();
        $('#prenameEN').append('<option>--- select ---</option>');
        $.get('<?php echo base_url("admin/pre_name/getListSelect"); ?>').done((res) => {
            res.data.forEach(element => {
                if (element.n_id == id) {
                    $('#prenameTH').append('<option selected value="' + element.n_id + '">' + element
                        .n_thainame +
                        '</option>');
                    $('#prenameEN').append('<option selected value="' + element.n_id + '">' + element
                        .n_engname +
                        '</option>');
                } else {
                    $('#prenameTH').append('<option value="' + element.n_id + '">' + element
                        .n_thainame +
                        '</option>');
                    $('#prenameEN').append('<option value="' + element.n_id + '">' + element
                        .n_engname +
                        '</option>');
                }
            });
            prename = res.data;
        });
    }

    function fecth_AutoPrename() {
        var p_id = $('#prenameTH').val();
        $('#prenameEN').empty();
        $('#prenameEN').append('<option selected="">--- select ---</option>');
        prename.forEach(element => {
            if (element.n_id == p_id) {
                $('#prenameEN').append('<option value="' + element.n_id + '" selected>' + element.n_engname +
                    '</option>');
            } else {
                $('#prenameEN').append('<option value="' + element.n_id + '">' + element.n_engname +
                    '</option>');
            }
        });
    }
</script>
<script>
    async function changePassword() {
        var checkError = true;
        var password = $("#password").val();
        var cpassword = $("#confirm_password").val();
        $("#password").removeClass('is-invalid');
        $("#confirm_password").removeClass('is-invalid');
        if (password.length < 8 && password.length <= 20) {
            $("#password").addClass('is-invalid');
            $('#password-error').html('กรุณากรอกรหัสผ่านความยาวต้อง 8-20 ตัวอักษร เช่น P@55w0rd');
            checkError = false;
        } else {
            if (password != cpassword) {
                $("#password").addClass('is-invalid');
                $("#confirm_password").addClass('is-invalid');
                $('#confirm_password-error').html('รหัสผ่านไม่ตรงกัน');
                checkError = false;
            }
        }
        if (checkError == true) {
            var ph = await hashPassword(password);
            var id_user = '<?php echo $id; ?>';
            var type = '<?php echo $type; ?>'
            var url = null;
            var obj = {};
            if (type == 0) {
                url = '<?php echo base_url('admin/Parents/update'); ?>/' + id_user
                obj = {
                    pa_pass: ph
                }
            }
            if (type == 1) {
                url = '<?php echo base_url('admin/Expert/update'); ?>/' + id_user
                obj = {
                    e_pass: ph
                }
            }
            $.post(url, obj).done((res) => {
                toastr.success('แก้ไขรหัสผ่านสำเร็จ');
                $('#password').val('');
                $('#confirm_password').val('');
            }).fail((xhr, status, error) => {
                toastr.error('ไม่สามารถแก้ไขข้อมูลได้ โปรดลองใหม่ภายหลัง');
            });
        }
        $("#password").val('');
        $("#confirm_password").val('');
        if (checkError == true) {
            $("#password").removeClass('is-invalid');
            $("#confirm_password").removeClass('is-invalid');
            $('#editPassword').modal('hide');
        }
    }

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
        await $('#province').empty();
        await $('#province').append('<option>--- กรุณาเลือก ---</option>');
        await $.get('<?php echo base_url('Api/Address/province'); ?>', (res) => {
            res.forEach(element => {
                if (element.PROVINCE_ID == province_id) {
                    $('#province').append('<option value="' + element.PROVINCE_ID + '" selected>' + element.PROVINCE_NAME + '</option>')
                } else {
                    $('#province').append('<option value="' + element.PROVINCE_ID + '">' + element.PROVINCE_NAME + '</option>')
                }
            });
        })


        var p = await $('#province').val();
        if (p == '--- กรุณาเลือก ---') {
            await $('#amphur').prop('disabled', true);
        } else {
            await $('#amphur').empty();
            await $('#amphur').append('<option selected="">--- กรุณาเลือก ---</option>');
            await $('#amphur').prop('disabled', false);
            await $('#district').prop('disabled', true);
            await $.get('<?php echo base_url('Api/Address/amphur'); ?>/' + p, (res) => {
                res.forEach(element => {
                    if (element.AMPHUR_ID == amphur_id) {
                        $('#amphur').append('<option value="' + element.AMPHUR_ID + '" selected>' + element.AMPHUR_NAME + '</option>')
                    } else {
                        $('#amphur').append('<option value="' + element.AMPHUR_ID + '">' + element.AMPHUR_NAME + '</option>')
                    }
                });
            })
        }

        var amphur = await $('#amphur').val();
        if (amphur == '--- กรุณาเลือก ---') {
            await $('#district').append('<option selected="">--- กรุณาเลือก ---</option>');
            await $('#district').prop('disabled', true);
        } else {
            await $.get('<?php echo base_url('Api/Address/amphurById'); ?>/' + amphur, (res) => {
                $('#zip').val(res.POSTCODE);
            })
            await $('#district').prop('disabled', false);
            await $('#district').empty();
            await $('#district').append('<option selected="">--- กรุณาเลือก ---</option>');
            await $.get('<?php echo base_url('Api/Address/district'); ?>/' + amphur, (res) => {
                res.forEach(element => {
                    if (element.DISTRICT_ID == district_id) {
                        $('#district').append('<option value="' + element.DISTRICT_ID + '" selected>' + element.DISTRICT_NAME + '</option>')
                    } else {
                        $('#district').append('<option value="' + element.DISTRICT_ID + '">' + element.DISTRICT_NAME + '</option>');
                    }
                });
            });
        }
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