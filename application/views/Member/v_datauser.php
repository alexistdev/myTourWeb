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
		<?php $this->load->view('Member/konten/k_datauser');?>
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

<!-- DataTables -->
<script src="<?= base_url('vendor/almasaeed2010/adminlte/'); ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('vendor/almasaeed2010/adminlte/'); ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('vendor/almasaeed2010/adminlte/'); ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('vendor/almasaeed2010/adminlte/'); ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<!-- Jquery untuk memvalidasi hapus data -->
<script>
	$(document).on("click", "#tombolHapus", function () {
		var userId = $(this).data('id');
		var newUrl = "<?= base_url('/Masteruser/hapus/'); ?>" + userId;
		$("#urlHapus").attr('href', newUrl);
	});
	/** After window Load */
	$(window).bind("load", function() {
		window.setTimeout(function() {
			$(".alert").fadeTo(500, 0).slideUp(500, function() {
				$(this).remove();
			});
		}, 2000);
	});

	/** Jquery AJax untuk mengecek Ketersediaan Email */
	$(document).ready(function() {

		$('#email').blur(function(){
			var email = $('#email').val();
			$.ajax({
				type: "POST",
				url: "<?php echo base_url('api/User/cekEmail');?>",
				data:{
					email:email
				},
				success: function (data){
					if(data=="ok"){
						$('#email_result').html('<img src="<?php echo base_url('assets/gambar/not.png');?>" width="5%"> email sudah pernah terdaftar');
						$("#email").removeClass("form-control is-valid").addClass("form-control is-invalid");
						$('#email').focus();
					} else {
						if (email.length == 0){
							$('#email_result').html('');
							$("#email").removeClass("form-control is-invalid").addClass("form-control is-valid");
						} else {
							$('#email_result').html('');
							$("#email").removeClass("form-control is-invalid").addClass("form-control is-valid");

						}
					}
				}
			});
		});
	});
	//Datatable
	$(function () {
		$("#tabelUser").DataTable({
			"responsive": true,
			"autoWidth": false,
		});
	});
</script>
</body>
</html>
