<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Detail Informasi User</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?= base_url('Member'); ?>">Dashboard</a></li>
					<li class="breadcrumb-item"><a href="<?= base_url('Masteruser'); ?>">Master Data User</a></li>
					<li class="breadcrumb-item active">Detail User</li>
				</ol>
			</div>

		</div>
	</div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<!--	Profil Ruas Kiri		-->
			<div class="col-md-3">
				<!-- Profile Image -->
				<div class="card card-primary card-outline">
					<div class="card-body box-profile">
						<div class="text-center">
							<img class="profile-user-img img-fluid img-circle"
								 src="<?= base_url('assets/gambar/default.png'); ?>"
								 alt="User profile picture">
						</div>
						<h3 class="profile-username text-center"><?= ucwords(sanitasi($namaUser)); ?></h3>
						<ul class="list-group list-group-unbordered mb-3">
							<li class="list-group-item">
								<b>No Telepon</b> <a class="float-right"><?= (sanitasi($telpUser)=='')? "NA": sanitasi($telpUser) ; ?></a>
							</li>
							<li class="list-group-item">
								<b>Email</b> <a class="float-right"><?= sanitasi($emailUser); ?></a>
							</li>
							<li class="list-group-item">
								<b>Alamat</b> <a class="float-right"><?= (sanitasi($alamatUser)=='')? "NA": sanitasi($alamatUser); ?></a>
							</li>
						</ul>
					</div>
					<!-- /.card-body -->
				</div>
				<!-- /.card -->
			</div>
			<div class="col-md-9">
				<div class="card">
					<div class="card-header p-2">
						<ul class="nav nav-pills">
							<li class="nav-item"><a class="nav-link active" href="#chart" data-toggle="tab">Chart</a></li>
							<li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>
							<li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
						</ul>
					</div><!-- /.card-header -->
					<div class="card-body">
						<div class="tab-content">
							<div class="active tab-pane" id="chart">

							</div>
							<!-- /.tab-pane -->
							<div class="tab-pane" id="timeline">

							</div>
							<!-- /.tab-pane -->

							<div class="tab-pane" id="settings">
								<div class="col-md-12">
									<?php
									echo $this->session->flashdata('pesan');
									echo $this->session->flashdata('pesan2'); ?>
								</div>
								<form action="<?= base_url('Masteruser/update'); ?>" method="post" class="form-horizontal">
									<!-- ID USER	-->
									<input type="hidden" name="idUser" value="<?= sanitasi($idUser); ?>">
									<!-- Nama Lengkap	-->
									<div class="form-group row">
										<label for="NamaLengkap" class="col-sm-2 col-form-label">Name</label>
										<div class="col-sm-10">
											<input type="text" name="NamaLengkap" class="form-control" id="NamaLengkap"  value="<?= sanitasi($namaUser); ?>" maxlength="80" placeholder="Nama Lengkap" required="required">
										</div>
									</div>
									<!-- Email -->
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Email</label>
										<div class="col-sm-10">
											<input type="email" class="form-control" value="<?= sanitasi($emailUser); ?>" readonly="readonly">
											<small class="text-danger"> * Email tidak dapat diganti</small>
										</div>
									</div>
									<!-- password -->
									<div class="form-group row">
										<label for="passBaru" class="col-sm-2 col-form-label">Password Baru</label>
										<div class="col-sm-10">
											<input type="text" name="passBaru" class="form-control" id="passBaru" maxlength="30" placeholder="*******">
											<small class="text-danger"> * Kosongkan password jika tidak ingin merubah password sebelumnya !</small>
										</div>
									</div>
									<!-- Nomor Telepon -->
									<div class="form-group row">
										<label for="NomorTelepon" class="col-sm-2 col-form-label">Nomor Telepon</label>
										<div class="col-sm-10">
											<input type="text" name="NomorTelepon" class="form-control" id="NomorTelepon" value="<?= sanitasi($telpUser); ?>" maxlength="30" placeholder="Nomor Telepon">
										</div>
									</div>
									<!-- Nomor KTP -->
									<div class="form-group row">
										<label for="NomorKtp" class="col-sm-2 col-form-label">No.KTP</label>
										<div class="col-sm-10">
											<input type="text" name="NomorKtp" class="form-control" id="NomorKtp" value="<?= sanitasi($noKtp); ?>" maxlength="50" placeholder="Nomor KTP">
										</div>
									</div>

									<!-- Alamat -->
									<div class="form-group row">
										<label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
										<div class="col-sm-10">
											<textarea class="form-control" name="alamat" id="alamat" placeholder="Alamat Lengkap" maxlength="300"><?= sanitasi($alamatUser); ?></textarea>
										</div>
									</div>

									<div class="form-group row">
										<div class="offset-sm-2 col-sm-10">
											<button type="submit" class="btn btn-danger">Submit</button>
										</div>
									</div>
								</form>
							</div>
							<!-- /.tab-pane -->
						</div>
						<!-- /.tab-content -->
					</div><!-- /.card-body -->
				</div>
				<!-- /.nav-tabs-custom -->
			</div>
			<!-- /.col -->
		</div>
		<!--	/row	-->
	</div>

</section>
<!-- /.content -->

