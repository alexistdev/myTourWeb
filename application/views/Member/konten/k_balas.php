<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Balas Inbox</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?= base_url('Member'); ?>">Dashboard</a></li>
					<li class="breadcrumb-item"><a href="<?= base_url('Inbox'); ?>">Inbox</a></li>
					<li class="breadcrumb-item active">Balas</li>
				</ol>
			</div>

		</div>
	</div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<?php
			echo $this->session->flashdata('pesan');
			echo $this->session->flashdata('pesan2'); ?>
			<!-- Timeline	-->
			<div class="timeline">
				<!--	Tanggal Dibuat	-->
				<div class="time-label">
					<span class="bg-red"><?= date("d-M-Y",sanitasi($waktuPembuatan)); ?></span>
				</div>

				<!-- timeline item pesan pertama -->
				<div>
					<i class="fas fa-envelope bg-blue"></i>
					<div class="timeline-item">
						<span class="time"><i class="fas fa-clock"></i> <?= date("H:s",sanitasi($waktuPembuatan)); ?></span>
						<h3 class="timeline-header"><span class="text-primary font-weight-bold"><?= sanitasi($pengirim); ?></span> - <span class="font-weight-bold"><?= ucwords(sanitasi($judul)); ?></span></h3>

						<div class="timeline-body">
							<?= sanitasi($pesanAwal); ?>
						</div>
					</div>

				</div>
				<!-- END timeline item pesan pertama -->

				<!--		Pesan Balasan		-->
				<?php foreach($dataBalas as $row) : ;?>

					<div>
						<?php if($row['is_admin'] ==1) { ?>
							<i class="fas fa-comments bg-yellow"></i>
						<?php } else { ?>
							<i class="fas fa-envelope bg-blue"></i>
						<?php } ?>
						<div class="timeline-item">
							<span class="time"><i class="fas fa-clock"></i> <?= date("H:s",sanitasi($row['time'])); ?></span>
							<?php if($row['is_admin'] ==1) { ?>
								<h3 class="timeline-header"><span class="text-danger font-weight-bold">Anda</span></h3>
							<?php } else { ?>
								<h3 class="timeline-header"><span class="text-blue font-weight-bold"><?= sanitasi($pengirim); ?></span> - <span class="font-weight-bold">Membalas</span></h3>
							<?php } ?>
							<div class="timeline-body">
								<?= sanitasi($row['pesan']); ?>
							</div>
						</div>

					</div>


				<?php endforeach; ?>
				<!--		/End Pesan Balasan		-->
				<!-- Batas Akhir -->
				<div>
					<i class="fas fa-clock bg-gray"></i>
				</div>
			</div>
			<!-- /Timeline	-->
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<form action="<?= base_url('Inbox/AdminBalas/'.sanitasi($token)); ?>" method="post" class="form-horizontal">
				<div class="form-floating">
					<textarea name="pesan" class="form-control" placeholder="Tulis pesan disini" style="height: 100px" required="required"></textarea>
				</div>
				<div class="form-group clearfix mt-3">
					<a href="<?= base_url('Inbox'); ?>" class="btn btn-danger">Kembali</a>
					<button type="submit" class="btn btn-primary">Balas</button>
				</div
			</form>
		</div>
	</div>

</section>
<!-- /.content -->

