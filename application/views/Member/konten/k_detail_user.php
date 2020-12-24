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
								<form class="form-horizontal">
									<div class="form-group row">
										<label for="inputName" class="col-sm-2 col-form-label">Name</label>
										<div class="col-sm-10">
											<input type="email" class="form-control" id="inputName" placeholder="Name">
										</div>
									</div>
									<div class="form-group row">
										<label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
										<div class="col-sm-10">
											<input type="email" class="form-control" id="inputEmail" placeholder="Email">
										</div>
									</div>
									<div class="form-group row">
										<label for="inputName2" class="col-sm-2 col-form-label">Name</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="inputName2" placeholder="Name">
										</div>
									</div>
									<div class="form-group row">
										<label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
										<div class="col-sm-10">
											<textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
										</div>
									</div>
									<div class="form-group row">
										<label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="inputSkills" placeholder="Skills">
										</div>
									</div>
									<div class="form-group row">
										<div class="offset-sm-2 col-sm-10">
											<div class="checkbox">
												<label>
													<input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
												</label>
											</div>
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
		<!-- /.row -->
	</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
			</div>
		</div>
	</div>

</section>
<!-- /.content -->
