<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Inbox</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?= base_url('Member'); ?>">Dashboard</a></li>
					<li class="breadcrumb-item active">Inbox</li>
				</ol>
			</div>

		</div>
	</div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

	<!-- Default box -->
	<div class="card card-dark">
		<div class="card-header">
			<h3 class="card-title">Daftar Inbox User</h3>

		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-md-12">
					<?php
					echo $this->session->flashdata('pesan');
					echo $this->session->flashdata('pesan2'); ?>
				</div>
			</div>
			<table id="tabelUser" class="table table-bordered table-hover table-striped">
				<thead>
				<tr>
					<th class="text-center">No.</th>
					<th class="text-center">Judul</th>
					<th class="text-center">Pengguna</th>
					<th class="text-center">Dibuat</th>
					<th class="text-center">Aksi</th>
				</tr>
				</thead>
				<tbody>
					<?php $no=1;
						foreach($dataInbox as $row):
							$time = sanitasi($row['time']);
							$status = sanitasi($row['status']);
					?>
				<tr>
					<td class="text-center"><?= sanitasi($no++); ?></td>
					<td class="text-center"><?= sanitasi($row['judul']); ?></td>
					<td class="text-center"><?= sanitasi($row['nama_lengkap']); ?></td>
					<td class="text-center"><?= date("d-m-Y H:i:s", $time); ?></td>
					<td class="text-center">
						<?php if($status == 1) { ?>
								<a href="<?= base_url('Inbox/balas/'.sanitasi($row['key_token'])); ?>"><button type="button"  class="btn btn-primary"><i class="fas fa-comments"></i></button></a>
								<button type="button" id="tombolKunci" data-toggle="modal" data-target="#modalKunci" class="btn btn-danger" data-id="<?= sanitasi($row['key_token']); ?>"><i class="fas fa-lock"></i></button>
						<?php } else { ?>
							<span data-toggle="modal" id="tombolBuka" data-target="#modalBuka" data-id="<?= sanitasi($row['key_token']); ?>">
    							<a href="#" class="btn btn-success" role="button" data-toggle="tooltip" data-placement="left" title="Lepas Kunci"><i class="fas fa-unlock"></i></a>
  							</span>
						<?php } ?>
					</td>
				</tr>
						<?php endforeach ?>
				</tbody>
			</table>
		</div>

		<!-- /.card-body -->

		<!--	Modal Buka Kunci Pesan	-->
		<div class="modal fade" id="modalBuka" tabindex="-1" aria-labelledby="modalBukaLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Kunci Pesan</h5>
					</div>
					<div class="modal-body">
						Apakah anda yakin ingin membuka kembali pesan ini ?
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
						<a href="" id="urlBuka"><button type="button" class="btn btn-danger">Kunci</button></a>
					</div>
				</div>
			</div>
		</div>
		<!--	/Modal Buka Kunci Pesan	-->

		<!--	Modal Kunci Pesan	-->
		<div class="modal fade" id="modalKunci" tabindex="-1" aria-labelledby="modalHapusLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Kunci Pesan</h5>
					</div>
					<div class="modal-body">
						Apakah anda yakin ingin mengunci pesan ini ?
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
						<a href="" id="urlKunci"><button type="button" class="btn btn-danger">Kunci</button></a>
					</div>
				</div>
			</div>
		</div>
		<!--	/Modal Kunci Pesan	-->
	</div>
	<!-- /.card -->

</section>
<!-- /.content -->

