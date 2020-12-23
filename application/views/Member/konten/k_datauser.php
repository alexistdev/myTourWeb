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
				<button type="button" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah User</button>
			</div>
		</div>
		<div class="card-body">
			<table class="table table-bordered table-hover table-striped">
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
							<button type="button" class="btn btn-primary"><i class="fas fa-eye"></i></button>
							<button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
						</td>
					</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
		<!-- /.card-body -->

	</div>
	<!-- /.card -->

</section>
<!-- /.content -->
