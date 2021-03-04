</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
	<!-- Control sidebar content goes here -->
	<div class="p-3">
		<!-- Profile Image -->
		<div class="text-center">
			<img class="profile-user-img img-fluid img-circle" src="<?= base_url('assets/dist/img/profile/') . $this->session->userdata('user_image'); ?>">
		</div>

		<h3 class="profile-username text-center"><?= $this->session->userdata('user_name'); ?></h3>

		<p class="text-muted text-center"><?= $this->session->userdata('user_email'); ?></p>
		<p class="text-muted text-center">Member since :<br><?= date('d F Y', $this->session->userdata('user_date_created')); ?></p>

		<a href="#" class="btn btn-success btn-block"><b>Edit Profile</b></a>
		<a href="<?= base_url('auth/logout'); ?>" class="btn btn-danger btn-block" onclick="return confirm('Do you want to log out?')"><b>Logout</b></a>
	</div>
</aside>
<!-- /.control-sidebar -->


<!-- Main Footer -->
<footer class="main-footer">
	<!-- To the right -->
	<!-- <div class="float-right d-none d-sm-inline">
				Anything you want
			</div> -->
	<!-- Default to the left -->
	<strong>Copyright &copy; <?= date('Y') . " " . $this->config->item('app_name'); ?>.</strong> All rights reserved.
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= base_url('assets/'); ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/'); ?>dist/js/adminlte.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url('assets/'); ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url('assets/'); ?>plugins/summernote/summernote-bs4.min.js"></script>
<script>
	$('.custom-file-input').on('change', function() {
		let fileName = $(this).val().split('\\').pop();
		$(this).next('.custom-file-label').addClass("selected").html(fileName);
	});

	function previewImage() {
		document.getElementById("image-preview").style.display = "block";
		var oFReader = new FileReader();
		oFReader.readAsDataURL(document.getElementById("event_image").files[0]);

		oFReader.onload = function(oFREvent) {
			document.getElementById("image-preview").src = oFREvent.target.result;
		};
	};


	$("input[id=event_status]").on("change", function(evt) {
		if ($(this).prop("checked")) {
			$("div[id=price]").show();
		} else {
			$("div[id=price]").hide();
		}
	});

	$(function() {
		$("#datatable1").DataTable({
			"responsive": true,
			"autoWidth": false,
		});
		$('#datatable2').DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": false,
			"ordering": true,
			"info": true,
			"autoWidth": false,
			"responsive": true,
		});
	});
</script>
<script>
	$(function() {
		// Summernote
		$('#event_description').summernote()
	})
</script>

</body>

</html>
