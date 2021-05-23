<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= $this->config->item('app_name') . " | " . $title; ?></title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
			<a href="#"><b><?= $this->config->item('app_name'); ?></b> <?= $title; ?></a>
		</div>
		<!-- /.login-logo -->
		<div class="card">
			<div class="card-body login-card-body">
				<p class="login-box-msg">Sign in to start your session</p>
				<?= $this->session->flashdata('message'); ?>
				<form action="<?= base_url('auth/index'); ?>" method="post">
					<div class="input-group mb-0">
						<input type="email" class="form-control" name="user_email" id="user_email" placeholder="Email">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-envelope"></span>
							</div>
						</div>
					</div>
					<?= form_error('user_email', '<small class="text-danger pl-3">', '</small>'); ?>
					<div class="input-group mt-3">
						<input type="password" class="form-control" name="user_password" id="user_email" placeholder="Password">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
					<?= form_error('user_password', '<small class="text-danger pl-3">', '</small>'); ?>
					<div class="row mt-3">
						<!-- /.col -->
						<div class="col-12">
							<button type="submit" class="btn btn-primary btn-block">Sign In</button>
						</div>
						<!-- /.col -->
					</div>
				</form>
				<div class="row mt-3">
					<div class="col-12">
						<p class="mb-0">
							<small><a href="forgot-password.html">I forgot my password</a></small>
						</p>
						<p class="mb-0">
							<small><a href="<?= base_url('auth/signup'); ?>" class="text-center">Register a new membership</a></small>
						</p>
					</div>
				</div>
			</div>
			<!-- /.login-card-body -->
		</div>
	</div>
	<!-- /.login-box -->

	<!-- jQuery -->
	<script src="<?= base_url('assets/'); ?>plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="<?= base_url('assets/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?= base_url('assets/'); ?>dist/js/adminlte.min.js"></script>

</body>

</html>