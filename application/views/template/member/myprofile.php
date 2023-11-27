<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" type="image/png" href="<?= base_url('assets/'); ?>img/wifi_icon.png">
	<title>PENJAWI</title>
	<!-- Custom fonts for this template-->
	<link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
	<link href="<?php echo base_url('assets'); ?>/vendor/sweetalert/sweetalert.css" rel="stylesheet">

</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">
	<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
	<a class="sidebar-brand d-flex align-items-center justify-content-center"
		href="<?= base_url('AdminControl/dashboard'); ?>">
		<div class="sidebar-brand-icon">
			<!-- <img class="img-profile rounded-circle " src="<?= base_url('assets/img/profile/') . $user['image']; ?>"> -->
			<i class="fas fa-wifi"></i>
		</div>
		<div class="sidebar-brand-text mx-1">PENJAWI</div>
	</a>
	<hr class="sidebar-divider">

	<!-- Heading -->
	<div class="sidebar-heading">
		User
	</div>

	<!-- Nav Item - Charts -->
	<li class="nav-item">
		<a class="nav-link" href="<?php echo site_url('MemberControl/dashboard'); ?>">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Dashboard</span></a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="<?= base_url('MemberControl/myprofile'); ?>">
			<i class="fas fa-fw fa-user"></i>
			<span>Profile Pelanggan</span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="<?= base_url('MemberControl/pengaduan'); ?>">
			<i class="fas fa-fw fa-edit"></i>
			<span>Pengaduan Keluhan</span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="<?= base_url('MemberControl/rekap_keluhan'); ?>">
			<i class="fas fa-fw fa-edit"></i>
			<span>Rekap Keluhan</span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="<?= base_url('MemberControl/pengumuman'); ?>">
			<i class="fas fa-fw fa-bullhorn"></i>
			<span>Info Pengumuman</span>
		</a>
	</li>
	<hr class="sidebar-divider d-none d-md-block">

	<li class="nav-item">
		<a class="nav-link" href="<?= base_url('MainControl/logout'); ?>">
			<i class="fas fa-fw fa-sign-out-alt"></i>
			<span>Log Out</span>
		</a>
	</li>
	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>
</ul>
<!-- penutup sidebar  -->
<!-- pembuka topbar  -->
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
						<span class="mr-2 d-none d-lg-inline text-gray-600"><?= $session['name'] ?></span>
							<i class="h2 fas fa-fw fa-user"></i>
						<!-- <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $session['image']; ?>"> -->
					</a>
					<!-- Dropdown - User Information -->
					<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
						<a class="dropdown-item" href="<?= base_url('MemberControl/myprofile'); ?>">
							<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
							Profile
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="<?= base_url('MainControl/logout'); ?>">
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
	<div class="col-xl-12">
		<div class="card shadow h-10">
			<div class="card-header py-2">
				<h1 class="h3" align="center">Profile Pelanggan</h1>
			</div>
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col-sm-1"></div>
					<div class="col-sm-2">
						<i class="far fa-user fa-8x text-gray-300"></i>
					</div>
					<div class="col-sm-9">
						<table cellpadding="2">
							<tr>
								<td class="h6 font-weight-bold text-primary" width="220">Nama</td>
								<td class="h6 font-weight-bold text-primary">: <?= $session['name']; ?></td>
							</tr>
							<tr>
								<td class="h6 font-weight-bold text-primary">ID Pelanggan</td>
								<td class="h6 font-weight-bold text-primary">: <?= $session['no_kontrol']; ?></td>
							</tr>
							<tr>
								<td class="h6 font-weight-bold text-primary">Tanggal Pasang Baru</td>
								<td class="h6 font-weight-bold text-primary">: <?= $session['date_created']; ?></td>
							</tr>

							<tr>
								<td class="h6 font-weight-bold text-primary">Alamat</td>
								<td class="h6 font-weight-bold text-primary">: <?= $session['alamat']; ?></td>
							</tr>

						</table>
						<!-- <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $session['name']; ?></div>
					<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
					<?= $session['nik']; ?></div>
					<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
						<?= $session['email']; ?></div>
					<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
						<?= $session['pekerjaan']; ?></div>
					<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
						<?= $session['alamat']; ?></div>
					<div class="h6 mb-0 font-weight-bold text-gray-800"><small>Member since
							<?= date('d F Y', $session['date_created']); ?></small></div>
					</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /.container-fluid -->

</div>
<!-- Footer -->
<footer class="sticky-footer bg-white">
	<div class="container my-auto" rows="3">
		<div class="copyright text-center my-auto">
			<span>Copyright &copy; PENJAWI <?= date('Y'); ?>
			</span>
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
				<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				<a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
			</div>
		</div>
	</div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

<!-- Page Another plugins -->
<script src="<?= base_url('assets/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>


<!-- Sweetalert -->
<script src="<?php echo base_url('assets'); ?>/vendor/sweetalert/sweetalert.min.js"></script>

<!-- Page Script Admin -->
<script>
	$(document).ready(function() {
		$('#laporan_pelayanan').DataTable();
		//$('#laporan_konsultasi').DataTable();
	});
</script>


</body>

</html>

<!-- End of Main Content -->