<style type="text/css" media="screen">
    body {
        background-image: url('assets/images/bg_login.jpg');
        margin: 0;
        width: 100%;
    }

    .center {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
    }

    label {
        font-size: 16px;
    }
</style>

<div class="center">
    <div class="row">
        <div class="card rounded p-3">
            <div class="row align-items-center">
                <div id="login-box1" class="col-md-6">
                    <img src="<?php echo base_url('assets/images/logo.png'); ?>" class="img-fluid">
                </div>
                <div id="login-box2" class="col-md-6">
                    <form id="form-login" action="<?= base_url('login/auth') ?>" method="post">
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" class="form-control 
                            <?php echo $this->session->flashdata('is-invalid'); ?>
                            <?php echo $this->session->flashdata('is-invalid username'); ?>
                            " id="login-username" value="<?php echo $this->session->flashdata('v_user'); ?>" name="username" placeholder="Username" autocomplete="off">
                            <div class="invalid-feedback">
                                <?php echo $this->session->flashdata('error'); ?>
                                <?php echo $this->session->flashdata('error user'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control 
                            <?php echo $this->session->flashdata('is-invalid'); ?>
                            <?php echo $this->session->flashdata('is-invalid password'); ?>
                            " id="login-password" name="password" placeholder="Password">
                            <div class="invalid-feedback">
                                <?php echo $this->session->flashdata('error'); ?>
                                <?php echo $this->session->flashdata('error pass'); ?>
                            </div>
                        </div>
                        <div class="login-btn margin-bottom-5">
                            <input type="submit" value="Login" class="form-control btn btn-primary btn-block">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('#footer').hide();
        var pathUrl = window.location.href;
        const urlParams = new URLSearchParams(window.location.search);
        const user = urlParams.get('username');
        const pass = urlParams.get('password');
        const path = urlParams.get('pathUrl');
        if (user == '' && pass == '' && path == '') {
            window.location.href = "<?php echo base_url('login'); ?>";
        } else {
            if (user != null || pass != null || path != null) {
                // console.log(user, pass, path);
                $.post('<?php echo base_url('login/AuthMobile'); ?>', {
                    username: user,
                    password: pass
                }).done((res) => {
                    console.log(res.authen);
                    if (res.authen == 'pass') {
                        var pathUrl = window.location.origin +"/x-child/"+path
                        window.location.href = pathUrl;
                    }
                });
            }
        }



    });
</script>
<?php
if ($this->session->flashdata('error-login')) {
    echo "
    <script>
    Swal.fire(
        '" . $this->session->flashdata('error-login') . "',
        '',
        'error'
    )
    </script>
    ";
}
?>