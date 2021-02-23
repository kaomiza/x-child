<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title><?php echo $title; ?></title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/logo/favicon.ico">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Kanit|Roboto" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/owl/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/owl/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/plugins/select2/css/select2.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/icomoon/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/dist/css/adminlte.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/aos/aos.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-rfs/bootstrap-rfs.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/paginationjs/dist/pagination.css') ?>">

	<script src="<?php echo base_url(); ?>assets/admin_init/validateCheck.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/jquery/dist/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/owl/owl.carousel.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/plugins/toastr/toastr.min.css">
	<script src="<?php echo base_url(); ?>assets/adminlte/plugins/toastr/toastr.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.20/lodash.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/string-similarity@4.0.4/umd/string-similarity.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/locale/th.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/jquery/timer/jquery.timer.js"></script>
	<script src="<?php echo base_url(); ?>assets/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
	<script src="<?php echo base_url('assets/paginationjs/dist/pagination.js') ?>"></script>
	<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>

	<script>
		moment().format('LL');
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
	<style>
		body {
			background-color: #c9d6df;
		}

		.raimg {
			border-radius: 1.5rem;
			width: 100%;
			background-color: gray;
		}

		.site-navbar .site-navigation .site-menu .has-children .dropdown {
			z-index: 1025;
		}

		@media (max-width: 1200px) {
			legend {
				font-size: calc(1.275rem + 0.3vw);
			}

			h1,
			.h1 {
				font-size: calc(1.375rem + 1.5vw);
			}

			h2,
			.h2 {
				font-size: calc(1.325rem + 0.9vw);
			}

			h3,
			.h3 {
				font-size: calc(1.3rem + 0.6vw);
			}

			h4,
			.h4 {
				font-size: calc(1.275rem + 0.3vw);
			}

			.display-1 {
				font-size: calc(1.725rem + 5.7vw);
			}

			.display-2 {
				font-size: calc(1.675rem + 5.1vw);
			}

			.display-3 {
				font-size: calc(1.575rem + 3.9vw);
			}

			.display-4 {
				font-size: calc(1.475rem + 2.7vw);
			}

			.close {
				font-size: calc(1.275rem + 0.3vw);
			}
		}
	</style>
</head>

<body>
	<div class="site-wrap">
		<!-- HEADER: MENU + HEROE SECTION -->
		<header>
			<div class="site-navbar" id="menu-nav">
				<div class="container">
					<div class="d-flex align-items-center justify-content-between">
						<div class="logo">
							<div class="site-logo">
								<a href="<?php echo base_url(); ?>" class="js-logo-clone"><img src="<?php echo base_url(); ?>assets/images/logo/logo-menu.png" alt="logo x-child"></a>
							</div>
						</div>
						<div class="main-nav d-none d-lg-block">
							<nav class="site-navigation text-right text-md-center" role="navigation">
								<ul class="site-menu js-clone-nav d-none d-lg-block">
									<li><a href="<?php echo base_url(); ?>">หน้าแรก</a></li>
									<li><a href="<?php echo base_url('contact/about'); ?>">เกี่ยวกับเรา</a></li>
									<?php if ($this->session->has_userdata('U_id')) { ?>
										<?php
										if ($this->session->U_status == 1 && ($this->session->U_admin == 1 || $this->session->U_admin == 2)) {
										?>
											<li><a href="<?php echo base_url('admin'); ?>" class="color-w">จัดการข้อมูล</a></li>
										<?php }  ?>
									<?php } ?>
									<?php
									if ($this->session->has_userdata('U_id')) {
									?>
										<?php if ($this->session->U_admin == 0 || $this->session->U_admin == 1) { ?>
											<li class="has-children">
												<a data-toggle="dropdown" href="#"><i class="fas fa-user-circle i-size-user"></i>
													<?php echo ($this->session->U_admin == 0) ? '<span>(ผู้ปกครอง)</span>' : ''; ?>
													<?php echo ($this->session->U_admin == 1) ? '<span>(ผู้เชียวชาญ)</span>' : ''; ?>
													<?php echo $this->session->U_user; ?>
												</a>
												<ul class="dropdown">
													<li><a href="<?php echo base_url('profile'); ?>" class="color-w">จัดการข้อมูลส่วนตัว</a></li>
													<?php if ($this->session->U_admin == 0) { ?>
														<li><a href="<?php echo base_url('Children'); ?>" class="color-w">จัดการข้อมูลเด็กพิเศษ</a></li>
													<?php } ?>
												</ul>
											</li>
										<?php } ?>

										<?php if ($this->session->U_admin == 2) { ?>
											<li>
												<i class="fas fa-user-circle i-size-user"></i>
												<span>(ผู้ดูแล)</span>
												<?php echo $this->session->U_user; ?>
											</li>
										<?php } ?>
									<?php
									}
									?>
								</ul>

							</nav>
						</div>
						<div class="icons row align-items-center">
							<?php
							if ($this->session->has_userdata('U_id')) {
							?>
								<a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
								<button type="button" class="btn btn-primary btn-block" data-toggle="collapse" data-target="" aria-expanded="false" style="width:100px;height:34px;padding:0;" onclick="window.location.href='<?= base_url('logout') ?>'">
									<span><i class="fas fa-sign-out-alt"></i> signout </span>
								</button>
							<?php
							} else {
							?>
								<a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
								<button type="button" class="btn btn-primary btn-block" data-toggle="collapse" data-target="" aria-expanded="false" style="width:100px;height:34px;padding:0;" onclick="window.location.href='<?= base_url('login') ?>'">
									<span>signin <i class="fas fa-sign-in-alt"></i></span>
								</button>
							<?php
							}
							?>
						</div>
					</div>
				</div>

			</div>
		</header>

		<!-- CONTENT -->

		<section>
			<?php echo $main_content; ?>
		</section>

		<footer id="footer" class="site-footer" style="background-color: #eeeeee;">
			<div class="container">
				<div class="row">

					<div class="col-md-6 col-lg-6">
						<div class="block-7">
							<h3 class="footer-heading">LOCATION</h3>
							<p>Mahasarakham University , Faculty of Informatics , IT-107
								Thailand</p>
						</div>
					</div>

					<div class="col-md-6 col-lg-6">
						<div class="block-5 mb-5">
							<h3 class="footer-heading mb-4">Contact Info</h3>
							<div class="row">
								<div class="col">
									<ul class="list-unstyled">
										<li class="user"> นายคุณัฐญ์ คำพรมมาภิรักษ์</li>
										<li class="phone">096-8105815</li>
										<li class="email">60011212017@msu.ac.th</li>
									</ul>
								</div>
								<div class="col">
									<ul class="list-unstyled mb-4">
										<li class="user"> นายสารัช ธนภัทรภักดี</li>
										<li class="phone">080-1764154</li>
										<li class="email">60011212116@msu.ac.th</li>
									</ul>
								</div>
							</div>
						</div>
					</div>


				</div>
				<div class="row text-center">
					<div class="col-md-12">
						<p>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							&copy; Intellect Laboratory
							<script>
								document.write(new Date().getFullYear());
							</script>
							Faculty of Informatics, Mahasarakham University, Thailand
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
					</div>

				</div>
			</div>
		</footer>
	</div>
	<!-- SCRIPTS -->
	<script src="<?php echo base_url(); ?>assets/adminlte/plugins/select2/js/select2.full.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/aos/aos.js"></script>
	<script src="<?php echo base_url(); ?>assets/main.js"></script>
	<script>
		jQuery(function($) {
			$('.select2bs4').select2({
				theme: 'bootstrap4'
			})
		});
	</script>
	<!-- -->
</body>

</html>