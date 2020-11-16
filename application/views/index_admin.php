<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/logo/favicon.ico">
    <meta name="description"
        content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title><?php echo $title; ?></title>
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href='https://fonts.googleapis.com/css?family=Kanit' rel='stylesheet'>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/plugins/select2/css/select2.min.css">
    <link rel="stylesheet"
        href="<?php echo base_url(); ?>assets/adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/dist/css/adminlte.min.css">
    <link rel="stylesheet"
        href="<?php echo base_url(); ?>assets/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="<?php echo base_url(); ?>assets/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet"
        href="<?php echo base_url(); ?>assets/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin_init/navbar.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin_init/layout.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet"
        href="<?php echo base_url(); ?>assets/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

    <script src="<?php echo base_url(); ?>assets/admin_init/validateCheck.js"></script>
    <script src="<?php echo base_url(); ?>assets/adminlte/plugins/jquery/jquery.min.js"></script>

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/plugins/toastr/toastr.min.css">
    <script src="<?php echo base_url(); ?>assets/adminlte/plugins/toastr/toastr.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js">
    </script>
    <script
        src="<?php echo base_url(); ?>assets/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js">
    </script>
    <script src="<?php echo base_url(); ?>assets/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js">
    </script>
    <script src="<?php echo base_url(); ?>assets/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js">
    </script>
    <script
        src="<?php echo base_url(); ?>assets/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js">
    </script>

    <script src="<?php echo base_url(); ?>assets/adminlte/plugins/moment/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/adminlte/plugins/inputmask/min/jquery.inputmask.bundle.min.js">
    </script>
    <script src="<?php echo base_url(); ?>assets/adminlte/plugins/daterangepicker/daterangepicker.js"></script>
    <script
        src="<?php echo base_url(); ?>assets/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js">
    </script>
    <script>
    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "2000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    </script>
</head>

<body style="background-color: #f3f3f3;">
    <div class="page-wrapper chiller-theme toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-bars"></i>
        </a>
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a href="<?php echo base_url(); ?>">X-Child</a>
                    <div id="close-sidebar">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <div class="sidebar-header">
                    <div class="user-pic">
                        <img class="img-responsive img-rounded"
                            src="https://scontent.fkkc4-1.fna.fbcdn.net/v/t1.0-9/119981968_3387716788121026_883271897146650157_o.jpg?_nc_cat=102&ccb=2&_nc_sid=09cbfe&_nc_eui2=AeHlJ0JzkmMi8NJmarzWpfufCjSt-rTfjkUKNK36tN-OReGQmDdnxwxQLHEsCeTzqnvaXd2rPFsFIuibOjqceNrv&_nc_ohc=BlYDGQoTg5cAX_RBSHv&_nc_ht=scontent.fkkc4-1.fna&oh=a1ee52bd5935e2dfbf92be7f0c6f7117&oe=5FC4F91F"
                            alt="User picture">
                    </div>
                    <div class="user-info">
                        <span class="user-name">Kunat
                            <strong>Kamprommapirak</strong>
                        </span>
                        <span class="user-role">Administrator</span>
                        <span class="user-status">
                            <i class="fa fa-circle"></i>
                            <span>Online</span>
                        </span>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span>Dashboard</span>
                        </li>
                        <li>
                            <a href="<?php echo base_url('admin'); ?>">
                                <i class="fas fa-tachometer-alt"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="header-menu">
                            <span>Information Management</span>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-info-circle"></i>
                                <span>จัดการข้อมูลพื้นฐาน</span>
                                <!-- <span class="badge badge-pill badge-warning">New</span> -->
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="<?php echo base_url('admin/pre_name'); ?>">คำนำหน้าชื่อ
                                            <!-- <span class="badge badge-pill badge-success">Pro</span> -->
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('admin/type_school'); ?>">ประเภทโรงเรียน</a>
                                    </li>
                                    <li>
                                        <a
                                            href="<?php echo base_url('admin/position_expert'); ?>">ตำแหน่งผู้เชี่ยวชาญ</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('admin/group_drug'); ?>">กลุ่มยา</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('admin/drug'); ?>">ยา</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('admin/diseased'); ?>">โรคประจำตัว</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('admin/type_document'); ?>">ประเภทเอกสารความรู้</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('admin/type_video'); ?>">ประเภทวิดีโอความรู้</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('admin/school'); ?>">ข้อมูลโรงเรียนเด็กพิเศษ</a>
                                    </li>
                                    <li>
                                        <a
                                            href="<?php echo base_url('admin/type_children'); ?>">ข้อมูลประเภทเด็กพิการ</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>จัดการจังหวัด</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>จัดการอำเภอ</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>จัดการตำบล</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="header-menu">
                            <span>User Management</span>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fas fa-baby"></i>
                                <span>จัดการข้อมูลเด็กพิเศษ</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="<?php echo base_url('admin/Children'); ?>">จัดการเด็กพิเศษ</a>
                                    </li>
                                    <li>
                                        <a href="#">การแพ้ยาของเด็ก</a>
                                    </li>
                                    <li>
                                        <a href="#">โรคประจำตัวของเด็ก</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="<?php echo base_url('admin/Parents'); ?>">
                                <i class="fas fa-users"></i>
                                <span>จัดการข้อมูลผู้ปกครอง</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('admin/Expert'); ?>">
                                <i class="fas fa-users-cog"></i>
                                <span>จัดการข้อมูลผู้เชี่ยวชาญ</span>
                            </a>
                        </li>
                        <li class="header-menu">
                            <span>Document & Video</span>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-book"></i>
                                <span>จัดการเอกสารความรู้</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-video"></i>
                                <span>จัดการวีดิโอความรู้</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-podcast"></i>
                                <span>ถ่ายทอดสด</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
        </nav>
        <!-- sidebar-wrapper  -->
        <main class="page-content">
            <!-- <div class="container-fluid">

            </div> -->
            <section>
                <?php echo $admin_content; ?>
            </section>
        </main>

        <!-- page-content" -->
    </div>
    <!-- page-wrapper -->
    <script src="<?php echo base_url(); ?>assets/adminlte/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/adminlte/plugins/select2/js/select2.full.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/adminlte/dist/js/adminlte.js"></script>
    <script>
    jQuery(function($) {
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
        $(".dtr-details ul li").click(function() {
            return false;
        });
        $(".sidebar-dropdown > a").click(function() {
            $(".sidebar-submenu").slideUp(200);
            if (
                $(this)
                .parent()
                .hasClass("active")
            ) {
                $(".sidebar-dropdown").removeClass("active");
                $(this)
                    .parent()
                    .removeClass("active");
            } else {
                $(".sidebar-dropdown").removeClass("active");
                $(this)
                    .next(".sidebar-submenu")
                    .slideDown(200);
                $(this)
                    .parent()
                    .addClass("active");
            }
        });
        $("#close-sidebar").click(function() {
            $(".page-wrapper").removeClass("toggled");
        });
        $("#show-sidebar").click(function() {
            $(".page-wrapper").addClass("toggled");
        });
    });
    </script>
</body>

</html>