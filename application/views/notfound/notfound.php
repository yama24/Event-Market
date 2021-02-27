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
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition">

	<div class="row mx-5 mt-5">
		<div class="col-lg mt-5">
			<section class="content mt-5">
				<div class="error-page">
					<h2 class="headline text-warning"> 404</h2>
					<div class="error-content">
						<h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Page not found.</h3>
						<p>
							We could not find the page you were looking for.
							Meanwhile, you may go back by pressing the button below <br><a class="btn btn-lg btn-warning mt-5" href="javascript:history.back()">Go back!</a>
						</p>
					</div>
					<!-- /.error-content -->
				</div>
				<!-- /.error-page -->
			</section>
		</div>
	</div>


	<!-- jQuery -->
	<script src="<?= base_url('assets/'); ?>plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="<?= base_url('assets/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?= base_url('assets/'); ?>dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="<?= base_url('assets/'); ?>dist/js/demo.js"></script>
</body>

</html>