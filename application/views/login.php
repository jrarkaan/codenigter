<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Rental - Login</title>
	<!-- Custom fonts for this template-->
	<link href="<?=base_url()?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<!-- Custom styles for this template-->
	<link href="<?=base_url()?>assets/css/sb-admin-2.min.css" rel="stylesheet">
	<style>
		.bg-login-image {
			background-image: url("<?= base_url('assets/img/30.jpg'); ?>");
			background-repeat: no-repeat;
			background-size: 150%;
		}
	</style>
</head>
<body class="bg-gradient-primary">
<form action="<?= site_url("auth/process")?>" method="post">
	<div class="container">
		<!-- Outer Row -->
		<div class="row justify-content-center mt-5 pt-lg-5">
			<div class="col-xl-10 col-lg-12 col-md-9">
				<div class="card o-hidden border-0 shadow-lg">
					<div class="card-body p-lg-5 p-0">
						<!-- Nested Row within Card Body -->
						<div class="row">
							<div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
							<div class="col-lg-6">
								<div class="p-5">
									<div class="text-center mb-4">
										<h1 class="h4 text-gray-900">Rental Mobil - V.beta 0.1</h1>
										<p class="text-muted">Login</p>
									</div>
									<div class="form-group">
										<input autofocus="autofocus" autocomplete="off" value="" type="text" name="username" class="form-control form-control-user" placeholder="Username" required autofocus>
									</div>
									<div class="form-group">
										<input type="password" name="password" class="form-control form-control-user" placeholder="Password" required>
									</div>
									<button type="submit" name="login" class="btn btn-primary btn-user btn-block">
										Login
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<!-- Bootstrap core JavaScript-->
<script src="<?=base_url()?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?=base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="<?=base_url()?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="<?=base_url()?>assets/js/sb-admin-2.min.js"></script>
</body>
</html>
