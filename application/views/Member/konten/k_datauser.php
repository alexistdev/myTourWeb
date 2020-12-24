<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Master Data User</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?= base_url('Member'); ?>">Dashboard</a></li>
					<li class="breadcrumb-item active">Master Data User</li>
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
			<h3 class="card-title">Daftar User</h3>
			<div class="card-tools">
				<button type="button" data-toggle="modal" data-target="#modalTambah" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah User</button>
			</div>
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
						<th class="text-center">Nama</th>
						<th class="text-center">Email</th>
						<th class="text-center">No.Telp</th>
						<th class="text-center">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach($dataUser as $row): ?>
					<tr>
						<td class="text-center"><?= $no++; ?></td>
						<td class="text-center"><?= sanitasi($row['nama_lengkap']); ?></td>
						<td class="text-center"><?= sanitasi($row['email']); ?></td>
						<td class="text-center"><?= sanitasi($row['no_telp']); ?></td>
						<td class="text-center">
							<a href="<?= base_url('Masteruser/detail/'. sanitasi($row['idUser'])); ?>"><button type="button"  class="btn btn-primary"><i class="fas fa-eye"></i></button></a>
							<button type="button" id="tombolHapus" class="btn btn-danger" data-toggle="modal" data-target="#modalHapus" data-id="<?= $row['idUser']; ?>"><i class="fas fa-trash"></i></button>
						</td>
					</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>

		<!-- /.card-body -->
		<!--	Modal Hapus	-->
		<div class="modal fade" id="modalHapus" tabindex="-1" aria-labelledby="modalHapusLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
					</div>
					<div class="modal-body">
						Apakah anda yakin ingin menghapus data ini <span id="dataID"></span> ?
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<a href="" id="urlHapus"><button type="button" class="btn btn-danger">Hapus</button></a>
					</div>
				</div>
			</div>
		</div>
		<!--	/Modal Hapus	-->
		<!--	Modal Tambah Data	-->
		<div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalHapusLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
					</div>
					<div class="modal-body">
						<!-- Form Mulai	-->
						<?= form_open('Masteruser/tambah') ?>
						<!-- Nama Lengkap User -->
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Nama Lengkap <span class="text-danger">*</span></label>
									<?= form_input(['name' => 'namaLengkap', 'type' => 'text', 'class' => 'form-control', 'placeholder' => 'Nama Lengkap', 'maxlength' => 80, 'value' => set_value('namaLengkap'), 'required'=>'required']); ?>
								</div>
							</div>
						</div>
						<!-- Email -->
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Email User <span class="text-danger">*</span></label>
									<?= form_input(['name' => 'email', 'id'=>'email','type' => 'text', 'class' => 'form-control', 'placeholder' => 'Email', 'maxlength' => 80, 'value' => set_value('email'),'required'=>'required']); ?>
									<span id="email_result" class="text-danger"></span>
								</div>
							</div>
						</div>
						<!-- Nama Lengkap User -->
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Nomor Telepon</label>
									<?= form_input(['name' => 'nomorTelepon', 'type' => 'text', 'class' => 'form-control', 'placeholder' => 'Nomor Telepon', 'maxlength' => 30, 'value' => set_value('nomorTelepon')]); ?>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12 card-dark">
								<div class="card-header">
									<p class="text-white">Password otomatis akan digenerate : 123456789</p>
								</div>

							</div>
						</div>
						<!-- Tombol Simpan -->
						<div class="row mt-3">
							<div class="col-md-12">
								<button name="submit" type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Simpan</button>
								<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
							</div>
						</div>
						<?= form_close() ?>
						<!-- /Form Berakhir	-->
					</div>
				</div>
			</div>
		</div>
		<!--	/Modal Tambah Data	-->
	</div>
	<!-- /.card -->

</section>
<!-- /.content -->

