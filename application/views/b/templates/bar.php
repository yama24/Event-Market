<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
	<!-- Left navbar links -->
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
		</li>
	</ul>
	<!-- Right navbar links -->
	<ul class="navbar-nav ml-auto">
		<li class="nav-item">
			<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i class="fas fa-th-large"></i></a>
		</li>
	</ul>

</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="<?= base_url('admin'); ?>" class="brand-link">
		<img src="<?= base_url('assets/'); ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light"><?= $this->config->item('app_name'); ?></span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="<?= base_url('assets/dist/img/profile/') . $this->session->userdata('user_image'); ?>" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="<?= base_url('profile'); ?>" class="d-block"><?= $this->session->userdata('user_name'); ?></a>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
				<li class="nav-item">
					<a href="<?= base_url('admin/index'); ?>" class="nav-link <?php if ($title == 'Dashboard') {
																					echo 'active';
																				}; ?>">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Dashboard
						</p>
					</a>
				</li>
				<li class="nav-header">Event</li>
				<li class="nav-item">
					<a href="<?= base_url('event'); ?>" class="nav-link <?php if ($title == 'Event List') {
																			echo 'active';
																		}; ?>">
						<i class="nav-icon fas fa-calendar-day"></i>
						<p>
							Event List
						</p>
					</a>
				</li>
				<li class="nav-header">User</li>
				<li class="nav-item">
					<a href="<?= base_url('profile'); ?>" class="nav-link <?php if ($title == 'My Profile') {
																				echo 'active';
																			}; ?>">
						<i class="nav-icon fas fa-user-edit"></i>
						<p>
							My Profile
						</p>
					</a>
				</li>
				<li class="nav-item mt-3">
					<a href="<?= base_url('auth/logout'); ?>" onclick="return confirm('Do you want to log out?')" class="nav-link">
						<i class="nav-icon fas fa-sign-out-alt"></i>
						<p>
							Logout
						</p>
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark"><?= $title; ?></h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><?= ucwords($this->uri->segment(1)); ?></li>
						<li class="breadcrumb-item active"><?= $title; ?></li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->