<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<!doctype html>
<html lang="en">
<head>
	<?php $this->load->view('Member/layout/v_header');?>
</head>

<body class="hold-transition sidebar-mini">
<!-- Wrapper-->
<div class="wrapper">
	<!-- Navbar	-->
	<?php $this->load->view('Member/layout/v_navbar');?>
	<!-- /Navbar	-->
	<!--	Sidebar	-->
	<?php $this->load->view('Member/layout/v_sidebar');?>
	<!--	/sidebar	-->

	<!--	Konten	-->
	<div class="content-wrapper">
		<?php $this->load->view('Member/konten/k_detail_user');?>
	</div>
	<!--	/Konten	-->
	<!--	Footer	-->
	<?php $this->load->view('Member/layout/v_footer');?>
	<!--	Footer	-->
</div>
<!-- /Wrapper-->

<!-- jQuery -->
<script src="<?= base_url('vendor/almasaeed2010/adminlte/'); ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('vendor/almasaeed2010/adminlte/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('vendor/almasaeed2010/adminlte/'); ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('vendor/almasaeed2010/adminlte/'); ?>dist/js/demo.js"></script>

<!-- File javascript untuk fungsi2 khusus -->
<script>
	/** After window Load */
	$(window).bind("load", function() {
		window.setTimeout(function() {
			$(".alert").fadeTo(500, 0).slideUp(500, function() {
				$(this).remove();
			});
		}, 2000);
	});
</script>
</body>
</html>
