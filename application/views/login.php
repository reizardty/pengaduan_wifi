<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" type="image" href="<?= base_url('assets/'); ?>img/wifi_icon.png">

	<title>
		<?= $title; ?>
	</title>

	<!-- Custom fonts for this template-->
	<link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-primary">
	<div class="container">

		<!-- Outer Row -->
		<div class="row justify-content-center">

			<div class="col-xl-9 col-lg-12 col-md-9" style="padding-top: 50px;">

				<div class="card o-hidden border-0 shadow-lg my-5">
					<div class="card-body p-0">
						<!-- Nested Row within Card Body -->
						<div class="row">
							<div class="col-lg-6 d-none d-lg-block bg-login-image" style="background-image: url('assets/img/ilus-login2.png')"></div>
							<div class="col-lg-6">
								<div class="p-5">
									<div class="text-center">
										<h1 class="h6 text-gray-900 mb-4"><i class="fas fa-wifi" style="font-size: 52px; color: #4e73df;"></i></h1>
										<h2 class="h3 text-primary mb-4"><b>Login Page</b></h2>
									</div>

									<?= $this->session->flashdata('message'); ?>

									<form class="Sign_in" method="post" action="<?= base_url('AuthLogin'); ?>">
										<div class="form-group">
											<input type="text" class="form-control" id="username" name="username" placeholder="Username">
											<?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<div class="form-group">
											<input type="password" class="form-control" id="password" name="password" placeholder="Password">
											<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<button type="submit" class="btn btn-primary btn-user btn-block">
											Login
										</button>
									</form>
									<hr>
									<div class="text-center">
										<a class="small text-primary" href="<?= base_url('AuthLogin/register'); ?>" style="font-size:14px;">Daftar Pasang Baru!</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Bootstrap core JavaScript-->
	<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

	<!-- Page level plugins -->
	<script src="<?= base_url('assets/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
	<script src="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

	<!-- Page level custom scripts -->
	<script src="<?= base_url('assets/'); ?>js/demo/datatables-demo.js"></script>
</body>

</html>
