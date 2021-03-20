<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Rental Beta V.01</title>
	<!-- Custom fonts for this template-->
	<link href="<?=base_url()?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<!-- Custom styles for this template-->
	<link href="<?=base_url()?>assets/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body id="page-top">
<!-- Page Wrapper -->
<div id="wrapper">
	<!-- Sidebar -->
	<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
		<!-- Sidebar - Brand -->
		<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= site_url('dashboard') ?>">
			<div class="sidebar-brand-icon rotate-n-15">
				<i class="fa fa-car"></i>
			</div>
			<div class="sidebar-brand-text mx-3">Rental Beta V.0<sup>1</sup></div>
		</a>
		<!-- Divider -->
		<hr class="sidebar-divider my-0">
		<!-- Nav Item - Dashboard -->
		<li class="nav-item">
			<a class="nav-link" href="<?= site_url('dashboard'); ?>">
				<i class="fas fa-fw fa-tachometer-alt"></i>
				<span>Dashboard</span></a>
		</li>
		<!-- Divider -->
		<hr class="sidebar-divider">
		<!-- Heading -->
		<div class="sidebar-heading">
			Menu
		</div>
		<!-- Nav Item - Pages Collapse Menu -->
		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
				<i class="fas fa-fw fa-folder"></i>
				<span>Data-data</span>
			</a>
			<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<h3 class="collapse-header">Data Terkait:</h3>
					<a class="collapse-item" href="<?= site_url('car') ?>">Mobil</a>
					<a class="collapse-item" href="<?= site_url('category') ?>">Kategori Mobil</a>
					<a class="collapse-item" href="<?= site_url('customer') ?>">Pelanggan</a>
				</div>
			</div>
		</li>
		<!-- Nav Item - Utilities Collapse Menu -->
		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
				<i class="fas f-w fa-download"></i>
				<span> Transaksi Rental</span>
			</a>
			<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<h3 class="collapse-header">Transaksi Terkait:</h3>
					<a class="collapse-item" href="utilities-color.html">Data Peminjaman</a>
					<a class="collapse-item" href="#">Data Pengembalian</a>
				</div>
			</div>
		</li>
		<?php if($this->session->userdata('level') == 1) { ?>
		<!-- Divider -->
		<hr class="sidebar-divider">
		<!-- Heading -->
		<div class="sidebar-heading">
			Pengaturan Hak Akses
		</div>
		<!-- Nav Item - Pemakai -->
		<li class="nav-item" <?= $this->uri->segment(1) == 'user' ? 'class="active"' : ''?>>
			<a class="nav-link" href="<?= site_url('user'); ?>">
				<i class="fas fa-fw fa-user"></i>
				<span>Pemakai</span></a>
		</li>
		<!-- Divider -->
		<hr class="sidebar-divider d-none d-md-block">
		<?php } ?>
		<!-- Sidebar Toggler (Sidebar) -->
		<div class="text-center d-none d-md-inline">
			<button class="rounded-circle border-0" id="sidebarToggle"></button>
		</div>
	</ul>
	<!-- End of Sidebar -->
	<!-- Content Wrapper -->
	<div id="content-wrapper" class="d-flex flex-column">
		<!-- Main Content -->
		<div id="content">
			<!-- Topbar -->
			<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
				<!-- Sidebar Toggle (Topbar) -->
				<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
					<i class="fa fa-bars"></i>
				</button>
				<!-- Topbar Navbar -->
				<ul class="navbar-nav ml-auto">
					<div class="topbar-divider d-none d-sm-block"></div>
					<!-- Nav Item - User Information -->
					<li class="nav-item dropdown no-arrow">
						<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $this->fungsi->user_login()->name?></span>
							<img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
						</a>
						<!-- Dropdown - User Information -->
						<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
							<a class="dropdown-item" href="#">
								<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
								Profile
							</a>
							<a class="dropdown-item" href="#">
								<i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
								Settings
							</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
								<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
								Logout
							</a>
						</div>
					</li>
				</ul>
			</nav>
			<!-- End of Topbar -->
			<!-- Begin Page Content -->
			<div class="container-fluid">
				<?= $contents; ?>
			</div>
			<!-- /.container-fluid -->
		</div>
		<!-- End of Main Content -->
		<!-- Footer -->
		<footer class="sticky-footer bg-white">
			<div class="container my-auto">
				<div class="copyright text-center my-auto">
					<span>Copyright &copy; Under Develop <b>J</b>Arkaan 2020 </span>
				</div>
			</div>
		</footer>
		<!-- End of Footer -->
	</div>
	<!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Yakin untuk keluar?</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Pilih tombol "keluar" dibawah, apabila anda ingin mengakhiri sesi ini.</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Batalkan</button>
				<a class="btn btn-primary" href="<?= site_url("auth/logout")?>">Keluar</a>
			</div>
		</div>
	</div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="<?=base_url()?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?=base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="<?=base_url()?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="<?=base_url()?>assets/js/sb-admin-2.min.js"></script>
</body>
</html>
