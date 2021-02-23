<!-- add modal -->
<div class="modal fade show" tabindex="-1" role="dialog" id="insertAdmin" style="display:none;">
    <div class="modal-dialog" role="admin">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-heading">เพิ่มผู้ดูแลระบบ</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <label for="username1">Username</label>
                <div class="input-group mb-2">
                    <input id="username1" type="text" class="form-control" placeholder="username" onkeyup="userIsUse()" maxlength="20">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                    <span id="username1-error" class="error invalid-feedback"></span>
                </div>
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

<!-- edit modal -->
<div class="modal fade show" tabindex="-1" role="dialog" id="editAdmin" style="display:none;">
    <div class="modal-dialog" role="admin">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-heading">แก้ไขรหัสผ่านผู้ดูแลระบบ</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <label for="username2">Username</label>
                <div class="input-group mb-2">
                    <input id="username2" type="text" class="form-control" placeholder="username" disabled>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                    <span id="username2-error" class="error invalid-feedback"></span>
                </div>
                <label for="password2">Password</label>
                <div class="input-group mb-2">
                    <input id="password2" type="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    <span id="password2-error" class="error invalid-feedback"></span>
                </div>
                <label for="confirm_password2">Confirm Password</label>
                <div class="input-group mb-2">
                    <input id="confirm_password2" type="password" class="form-control" placeholder="Confirm Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    <span id="confirm_password2-error" class="error invalid-feedback"></span>
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
            <h1 class="h1-title">จัดการผู้ดูแลระบบ</h1>
        </div>
    </div>
    <div class="bgWhite padding_main mainBoxRadius main-margin">
        <div>
            <button class="btn_backend text_btn btn" id="btnInsert" data-toggle="modal" data-target="#insertAdmin"><i class="fa fa-plus"></i>&nbsp;&nbsp;เพิ่มผู้ดูแล</button>
        </div>
        <table id="admin" class="table table-bordered table-striped nowrap">
            <thead>
                <tr>
                    <th></th>
                    <th class="th_text">สภานะ</th>
                    <th class="th_text">ลำดับ</th>
                    <th class="th_text">ชื่อผู้ใช้</th>
                    <th class="th_text">แก้ไขรหัสผ่าน</th>
                </tr>
            </thead>
        </table>
    </div>
</div>

<!-- datateble -->
<script>
    $("#admin").DataTable({
        "processing": true,
        "autoWidth": false,
        "responsive": {
            details: {
                type: 'column'
            }
        },
        "ajax": {
            url: "<?php echo base_url('admin/Manage/getAll'); ?>",
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
                width: 50,
                "render": (data, type, row, meta) => {
                    return `
                            <label for="toggle-` + row.id_admin + `" class="toggle-1">
                                <input type="checkbox" id="toggle-` + row.id_admin + `" value="` + (row.admin_status == 1 ? 1 : 0) + `" 
                                class="toggle-1__input"  ` + (row.admin_status == 1 ? 'checked' : '') + `
                                onchange="onClickActivate(` + row.id_admin + `)">
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
                data: 'admin_user',
                className: 'td_text'
            },
            {
                "data": null,
                width: 50,
                orderable: false,
                "render": (data, type, row, meta) => {
                    return `
                        <button class="btn btn-flat" style="padding: 2px .75rem; color: #199a6f;" data-toggle="modal" data-target="#editAdmin"
                        onclick="onClickEdit(` + row.id_admin + `)"><i class="fa fa-edit"></i>
                        </button>
                        `;
                }
            }
        ]
    });
</script>

<!-- reset form -->
<script>
    $('#insertAdmin').on('hidden.bs.modal', function() {
        reset_form('add');
    })
    $('#editAdmin').on('hidden.bs.modal', function() {
        reset_form('edit');
    })

    function reset_form(func) {
        if (func == 'add') {
            $('#username1').removeClass('is-invalid');
            $('#password1').removeClass('is-invalid');
            $('#confirm_password1').removeClass('is-invalid');
            $('#username1').val('');
            $('#password1').val('');
            $('#confirm_password1').val('');
            $('#username1-error').empty();
            $('#password1-error').empty();
            $('#confirm_password1-error').empty();
        }
        if (func == 'edit') {
            $('#password2').removeClass('is-invalid');
            $('#confirm_password2').removeClass('is-invalid');
            $('#password2').val('');
            $('#confirm_password2').val('');
            $('#password2-error').empty();
            $('#confirm_password2-error').empty();
        }
        $('#admin').DataTable().ajax.reload();
    }
</script>

<!-- Action function -->
<script>
    userUser = true;

    function userIsUse() {
        user = $('#username1').val();
        if (user.length >= 8 && user.length <= 20) {
            $('#username-error').empty();
            $.post('<?php echo base_url('Login/haveUser'); ?>', {
                username: user
            }).done((res) => {
                if (res.hasUser) {
                    $('#username1').removeClass('is-invalid');
                    userUse = true;
                } else {
                    userUse = false;
                    $('#username1').addClass('is-invalid');
                    $('#username1-error').html('มีผู้ใช้นี้แล้ว');
                }
            });
        } else {
            $('#username1').removeClass('is-invalid');
        }
    }

    function onClickEdit(id) {
        $.get('<?php echo base_url('admin/Manage/getById'); ?>/' + id).done((res) => {
            $('#username2').val(res.admin_user);
            $('.edit_btn').attr('id', res.id_admin);
        });
    }

    function onClickActivate(id) {
        if ($('#toggle-' + id).is(":checked")) {
            $('#toggle-' + id).val(1)
        } else {
            $('#toggle-' + id).val(0)
        }
        var status = $('#toggle-' + id).val();
        $.post('<?php echo base_url('admin/Manage/update'); ?>/' + id, {
            admin_status: status
        }).done((res) => {
            if (status == 0) {
                toastr.info('OFF');
            } else {
                toastr.info('ON');
            }
        });
    }
</script>

<!-- save Action -->
<script>
    function isUsername(input) {
        var regExp = /^[a-zA-Z0-9\.\_]{8,20}$/i;
        return regExp.test(input);
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

    async function onClickSave(func) {
        if (func == 'add') {
            var username = $('#username1').val();
            var password = $('#password1').val();
            var passwordC = $('#confirm_password1').val();
            var passHash = await hashPassword(password);
            $('#username1').removeClass('is-invalid');
            $('#password1').removeClass('is-invalid');
            $('#confirm_password1').removeClass('is-invalid');
            $('#username1-error').empty();
            $('#password1-error').empty();
            $('#confirm_password1-error').empty();

            if (isUsername(username) == false) {
                $('#username1').addClass('is-invalid');
                $('#username1-error').html('กรุณากรอกชื่อผู้ใช้งานให้ถูกต้อง ชื่อผู้ใช้ต้องมีความยาวต้องอยู่ระหว่าง 8-20 ตัวอักษร และ ต้องมีเฉพาะตัวอักษรอักกฤษ ตัวเลข . และ _ เช่น username._123');
                return false;
            }
            if (password.length < 8) {
                $('#password1').val('');
                $('#confirm_password1').val('');
                $('#password1').addClass('is-invalid');
                $('#password1-error').html('กรุณากรอกรหัสผ่านความยาวต้องอย่างน้อย 8 ตัวอักษร เช่น P@55w0rd');
                return false;
            }
            if (password != passwordC) {
                $('#password1').val('');
                $('#confirm_password1').val('');
                $('#password1').addClass('is-invalid');
                $('#confirm_password1').addClass('is-invalid');
                $('#confirm_password1-error').html('รหัสผ่านไม่ตรงกัน');
                return false;
            }

            await $.post('<?php echo base_url('admin/Manage/create') ?>', {
                admin_user: username,
                admin_pass: passHash,
            }).done((res) => {
                $('#insertAdmin').modal('hide');
                toastr.success('เพิ่มข้อมูลสำเร็จ');
            }).fail((error) => {
                toastr.error('ไม่สามารถเพิ่มข้อมูลได้ โปรดลองใหม่ภายหลัง');
            });
        }

        if (func == 'edit') {
            var id = $('.edit_btn').attr('id');
            var password = $('#password2').val();
            var passwordC = $('#confirm_password2').val();
            var passHash = await hashPassword(password);
            $('#password2').removeClass('is-invalid');
            $('#confirm_password2').removeClass('is-invalid');
            $('#password2-error').empty();
            $('#confirm_password2-error').empty();

            if (password.length < 8) {
                $('#password2').val('');
                $('#confirm_password2').val('');
                $('#password2').addClass('is-invalid');
                $('#password2-error').html('กรุณากรอกรหัสผ่านความยาวต้องอย่างน้อย 8 ตัวอักษร เช่น P@55w0rd');
                return false;
            }
            if (password != passwordC) {
                $('#password2').val('');
                $('#confirm_password2').val('');
                $('#password2').addClass('is-invalid');
                $('#confirm_password2').addClass('is-invalid');
                $('#confirm_password2-error').html('รหัสผ่านไม่ตรงกัน');
                return false;
            }
            await $.post('<?php echo base_url('admin/Manage/update') ?>/' + id, {
                admin_pass: passHash,
            }).done((res) => {
                $('#editAdmin').modal('hide');
                toastr.success('แก้ไขข้อมูลสำเร็จ');
            }).fail((error) => {
                toastr.error('ไม่สามารถแก้ไขข้อมูลได้ โปรดลองใหม่ภายหลัง');
            });
        }
    }
</script>