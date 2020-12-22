<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="<?= base_url('/'); ?>" class="brand-link">

		<img src="<?= base_url('assets/gambar/'); ?>mytour_icon.png" alt="MyTour" style="opacity: .8" />
		<span class="brand-text font-weight-light">My Tour V.1.0</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img alt="Adminstrator Gambar" class="brand-image img-circle elevation-3"  src="<?= base_url('assets/gambar/'); ?>user.png">
			</div>
			<div class="info">
				<a href="<?= base_url('Member'); ?>" class="d-block">Adminstrator</a>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
					 with font-awesome or any other icon font library -->
				<li class="nav-item">
					<a href="<?= base_url('Member'); ?>" class="nav-link">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Dashboard
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('Member'); ?>" class="nav-link">
						<i class="nav-icon fas fa-th"></i>
						<p>
							Widgets
							<span class="right badge badge-danger">New</span>
						</p>
					</a>
				</li>
				<li class="nav-item has-treeview">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-copy"></i>
						<p>
							Layout Options
							<i class="fas fa-angle-left right"></i>
							<span class="badge badge-info right">6</span>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="../layout/top-nav.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Top Navigation</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../layout/top-nav-sidebar.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Top Navigation + Sidebar</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../layout/boxed.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Boxed</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../layout/fixed-sidebar.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Fixed Sidebar</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../layout/fixed-topnav.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Fixed Navbar</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../layout/fixed-footer.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Fixed Footer</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../layout/collapsed-sidebar.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Collapsed Sidebar</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item has-treeview">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-chart-pie"></i>
						<p>
							Charts
							<i class="right fas fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="../charts/chartjs.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>ChartJS</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../charts/flot.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Flot</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../charts/inline.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Inline</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item has-treeview">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-tree"></i>
						<p>
							UI Elements
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="../UI/general.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>General</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../UI/icons.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Icons</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../UI/buttons.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Buttons</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../UI/sliders.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Sliders</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../UI/modals.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Modals & Alerts</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../UI/navbar.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Navbar & Tabs</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../UI/timeline.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Timeline</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../UI/ribbons.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Ribbons</p>
							</a>
						</li>
					</ul>
				</li>
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>
