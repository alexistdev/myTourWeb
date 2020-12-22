<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<header id="header" class="header-transparent header-transparent-dark-bottom-border header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
	<div class="header-body border-top-0 bg-dark box-shadow-none">
		<div class="header-container container">
			<div class="header-row">
				<div class="header-column">
					<div class="header-row">
						<div class="header-logo mt-5">
							<a href="demo-business-consulting.html">
								<img alt="Porto" width="222"  src="<?= base_url('assets/gambar/'); ?>logo.png">
							</a>
						</div>
					</div>
				</div>
				<div class="header-column justify-content-end">
					<div class="header-row">
						<div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
							<div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
								<nav class="collapse">
									<ul class="nav nav-pills" id="mainNav">
										<li>
											<a class="nav-link active" href="demo-business-consulting.html">
												Home
											</a>
										</li>
										<li>
											<a class="nav-link" href="demo-business-consulting-about-us.html">
												Tentang kami
											</a>
										</li>
										<li class="dropdown dropdown-primary">
											<a class="dropdown-toggle nav-link" href="demo-business-consulting-expertise.html">
												Paket Wisata
											</a>
										</li>
										<li>
											<a class="nav-link" href="demo-business-consulting-cases.html">
												Promo
											</a>
										</li>
										<li>
											<a class="nav-link" href="demo-business-consulting-tertimonials.html">
												Testimonials
											</a>
										</li>
										<li>
											<a class="nav-link" href="demo-business-consulting-team.html">
												Gallery
											</a>
										</li>
										<li>
											<a class="nav-link" href="demo-business-consulting-blog.html">
												Blog
											</a>
										</li>
										<li>
											<a class="nav-link" href="demo-business-consulting-contact-us.html">
												Kontak
											</a>
										</li>
									</ul>
								</nav>
							</div>
							<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
								<i class="fas fa-bars"></i>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
