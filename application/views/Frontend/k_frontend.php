<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="slider-container rev_slider_wrapper" style="height: 100%;">
	<div id="revolutionSlider" class="slider rev_slider manual" data-version="5.4.8">
		<ul>
			<li data-transition="fade">
				<img src="<?= base_url('assets/gambar/'); ?>slider.png"
					 alt=""
					 data-bgposition="center center"
					 data-bgfit="cover"
					 data-bgrepeat="no-repeat"
					 data-bgparallax="1"
					 class="rev-slidebg">

				<h1 class="tp-caption custom-secondary-font font-weight-bold text-color-light text-color-hover-dark"
					data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
					data-y="center" data-voffset="['-80','-80','-80','-40']"
					data-start="800"
					data-transform_in="y:[-300%];opacity:0;s:500;" style="font-size: 32px;">Lengkapi Perjalanan Wisata Anda</h1>

				<div class="tp-caption custom-secondary-font font-weight-bold text-color-dark text-color-hover-secondary"
					 data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
					 data-y="center" data-voffset="['-42','-42','-42','2']"
					 data-start="800"
					 data-transform_in="y:[-300%];opacity:0;s:500;" style="font-size: 42px;">Kunjungi Pantai-pantai indah di Lampung</div>

				<a href="#about-us" class="btn btn-primary tp-caption text-uppercase text-color-light custom-border-radius"
				   data-hash
				   data-hash-offset="85"
				   data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
				   data-y="center" data-voffset="['60','60','60','100']"
				   data-start="1500"
				   style="font-size: 12px; padding: 15px 6px;"
				   data-transform_in="y:[-300%];opacity:0;s:500;">Mulai Berwisata</a>
			</li>
			<li data-transition="fade">
				<img src="<?= base_url('assets/gambar/'); ?>slider2.png"
					 alt=""
					 data-bgposition="center center"
					 data-bgfit="cover"
					 data-bgrepeat="no-repeat"
					 data-bgparallax="1"
					 class="rev-slidebg">

				<h1 class="tp-caption custom-secondary-font font-weight-bold text-color-light text-color-hover-primary"
					data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
					data-y="center" data-voffset="['-80','-80','-80','-40']"
					data-start="800"
					data-transform_in="y:[-300%];opacity:0;s:500;" style="color: #1b1b1c; font-size: 32px;">Dapatkan</h1>

				<div class="tp-caption custom-secondary-font font-weight-bold text-color-light"
					 data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
					 data-y="center" data-voffset="['-42','-42','-42','2']"
					 data-start="800"
					 data-transform_in="y:[-300%];opacity:0;s:500;" style="font-size: 42px;">Paket Wisata Liburan</div>

				<a href="#about-us" class="btn btn-primary tp-caption text-uppercase text-color-light custom-border-radius"
				   data-hash
				   data-hash-offset="85"
				   data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
				   data-y="center" data-voffset="['60','60','60','100']"
				   data-start="1500"
				   style="font-size: 12px; padding: 15px 6px;"
				   data-transform_in="y:[-300%];opacity:0;s:500;">Lihat Paket Wisata</a>
			</li>
		</ul>
	</div>
</div>



<section class="about-us custom-section-padding" id="about-us">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-6">
				<h2 class="font-weight-bold text-color-dark">- Tentang Kami</h2>
				<p class="pl-4">Kami selalu bergerak menuju ke arah pelayanan yang lebih baik dari tahun ke tahun. Dengan selalu memperhatikan aspek kepuasaan para pelanggan dan juga berusaha memberikan pengalaman yang tak terlupakan selama berwisata dengan kami.</p>
				<div class="pl-4">
					<div class="row">
						<div class="col-lg-6">
							<ul class="list list-icons list-icons-style-3 list-tertiary">
								<li><i class="fas fa-chevron-right"></i> Kami memiliki sertifikasi</li>
								<li><i class="fas fa-chevron-right"></i> Berpengalaman lebih 5 tahun</li>
								<li><i class="fas fa-chevron-right"></i> Mudah dan Efisien</li>
							</ul>
						</div>
						<div class="col-lg-6">
							<ul class="list list-icons list-icons-style-3 list-tertiary">
								<li><i class="fas fa-chevron-right"></i> Harga yang kompetitif</li>
								<li><i class="fas fa-chevron-right"></i> Banyak pilihan paket wisata</li>

							</ul>
						</div>
					</div>
					<a class="btn btn-outline custom-border-width btn-primary mt-3 mb-2 custom-border-radius font-weight-semibold text-uppercase" href="demo-business-consulting-about-us.html">Read More</a>
				</div>
			</div>
			<div class="col-md-6 col-lg-6">
				<div class="content-grid custom-content-grid mt-5 mb-4">
					<div class="row content-grid-row">
						<div class="content-grid-item col-lg-6 bg-color-light p-4">
							<div class="counters">
								<div class="counter custom-sm-counter-style">
									<img class="counter-icon" src="img/demos/business-consulting/icons/icon-1.png" alt />
									<strong class="text-color-primary custom-primary-font" data-to="5" data-append="+">0</strong>
									<label>Tahun Pengalaman</label>
								</div>
							</div>
						</div>
						<div class="content-grid-item col-lg-6 p-4">
							<div class="counters">
								<div class="counter margin-style-2 custom-sm-counter-style">
									<img class="counter-icon" src="img/demos/business-consulting/icons/icon-2.png" alt />
									<strong class="text-color-primary custom-primary-font" data-to="2000" data-append="+">0</strong>
									<label>Perjalanan</label>
								</div>
							</div>
						</div>
					</div>
					<div class="row content-grid-row">
						<div class="content-grid-item col-lg-6 p-4">
							<div class="counters">
								<div class="counter custom-sm-counter-style">
									<img class="counter-icon" src="img/demos/business-consulting/icons/icon-3.png" alt />
									<strong class="text-color-primary custom-primary-font" data-to="3571" data-append="+">0</strong>
									<label>Pelanggan</label>
								</div>
							</div>
						</div>
						<div class="content-grid-item col-lg-6 bg-color-light p-4">
							<div class="counters">
								<div class="counter margin-style-2 custom-sm-counter-style">
									<img class="counter-icon" src="img/demos/business-consulting/icons/icon-4.png" alt />
									<strong class="text-color-primary custom-primary-font" data-to="130" data-append="+">0</strong>
									<label>Destinasi Wisata</label>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section-secondary custom-section-padding">
	<div class="container">
		<div class="row mb-4">
			<div class="col">
				<h2 class="font-weight-bold text-color-dark mb-3">- Expertises</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4">
				<a href="demo-business-consulting-expertise-detail.html" class="text-decoration-none appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
					<div class="feature-box custom-feature-box feature-box-style-2">
						<div class="feature-box-icon">
							<img src="img/demos/business-consulting/expertise/expertise-1.jpg" alt="">
						</div>
						<div class="feature-box-info ml-3">
							<h4 class="font-weight-normal text-5">Agen Berpengalaman</h4>
							<p class="text-2">Pengalaman dan jam terbang kami, telah membuktikan bahwa kepuasan pelanggan adalah tujuan atau goal utama kami.</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4">
				<a href="demo-business-consulting-expertise-detail.html" class="text-decoration-none appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="100">
					<div class="feature-box custom-feature-box feature-box-style-2">
						<div class="feature-box-icon">
							<img src="img/demos/business-consulting/expertise/expertise-2.jpg" alt="">
						</div>
						<div class="feature-box-info ml-3">
							<h4 class="font-weight-normal text-5">Corp Restructuring</h4>
							<p class="text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna.</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4">
				<a href="demo-business-consulting-expertise-detail.html" class="text-decoration-none appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="200">
					<div class="feature-box custom-feature-box feature-box-style-2">
						<div class="feature-box-icon">
							<img src="img/demos/business-consulting/expertise/expertise-3.jpg" alt="">
						</div>
						<div class="feature-box-info ml-3">
							<h4 class="font-weight-normal text-5">Economic Consulting</h4>
							<p class="text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna.</p>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4">
				<a href="demo-business-consulting-expertise-detail.html" class="text-decoration-none appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
					<div class="feature-box custom-feature-box feature-box-style-2">
						<div class="feature-box-icon">
							<img src="img/demos/business-consulting/expertise/expertise-4.jpg" alt="">
						</div>
						<div class="feature-box-info ml-3">
							<h4 class="font-weight-normal text-5">Litigation Consulting</h4>
							<p class="text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna.</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4">
				<a href="demo-business-consulting-expertise-detail.html" class="text-decoration-none appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="400">
					<div class="feature-box custom-feature-box feature-box-style-2">
						<div class="feature-box-icon">
							<img src="img/demos/business-consulting/expertise/expertise-5.jpg" alt="">
						</div>
						<div class="feature-box-info ml-3">
							<h4 class="font-weight-normal text-5">Strategic Consulting</h4>
							<p class="text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consectetur diam id urna.</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4">
				<a href="demo-business-consulting-expertise-detail.html" class="text-decoration-none appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="500">
					<div class="feature-box custom-feature-box feature-box-style-2">
						<div class="feature-box-icon">
							<img src="img/demos/business-consulting/expertise/expertise-6.jpg" alt="">
						</div>
						<div class="feature-box-info ml-3">
							<h4 class="font-weight-normal text-5">Tech Consulting</h4>
							<p class="text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consectetur diam id urna.</p>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 text-center">
				<a class="btn btn-outline custom-border-width btn-primary custom-border-radius font-weight-semibold text-uppercase mb-3" href="demo-business-consulting-expertise.html" title="View All">View All</a>
			</div>
		</div>
	</div>
</section>

<section class="custom-section-padding">
	<div class="container">
		<div class="row mb-3">
			<div class="col-lg-6">
				<h2 class="font-weight-bold text-color-dark">- Our Strategy</h2>
				<div class="owl-carousel owl-theme nav-bottom rounded-nav numbered-dots pl-1 pr-1" data-plugin-options="{'items': 1, 'loop': false, 'dots': true, 'nav': false}">
					<div>
						<div class="custom-step-item">
											<span class="step text-uppercase">
												Step
												<span class="step-number text-color-primary">
													01
												</span>
											</span>
							<div class="step-content">
								<h4 class="mb-3">The first meeting<br> <strong>Understanding the Problem</strong></h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus. Nunc et feugiat arcu, in placerat risus. Phasellus condimentum sapien vitae odio.</p>
							</div>
						</div>
					</div>
					<div>
						<div class="custom-step-item">
											<span class="step text-uppercase">
												Step
												<span class="step-number text-color-primary">
													02
												</span>
											</span>
							<div class="step-content">
								<h4 class="mb-3">The second meeting<br> <strong>Business Plan Consultant</strong></h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus. Nunc et feugiat arcu, in placerat risus. Phasellus condimentum sapien vitae odio.</p>
							</div>
						</div>
					</div>
					<div>
						<div class="custom-step-item">
											<span class="step text-uppercase">
												Step
												<span class="step-number text-color-primary">
													03
												</span>
											</span>
							<div class="step-content">
								<h4 class="mb-3">The final meeting<br> <strong>Problem Solved</strong></h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus. Nunc et feugiat arcu, in placerat risus. Phasellus condimentum sapien vitae odio.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<h2 class="font-weight-bold text-color-dark">- Frequently asked questions</h2>
				<div class="accordion without-bg custom-accordion-style-1" id="accordion7">
					<div class="card card-default">
						<div class="card-header">
							<h4 class="card-title m-0">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion7" href="#collapse7One" aria-expanded="true">
									Praesent sit amet quam a lorem commodo tincidunt.
									<span class="custom-accordion-plus"></span>
								</a>
							</h4>
						</div>
						<div id="collapse7One" class="collapse show" aria-expanded="true">
							<div class="card-body">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus.</p>
							</div>
						</div>
					</div>
					<div class="card card-default">
						<div class="card-header">
							<h4 class="card-title m-0">
								<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion7" href="#collapse7Two" aria-expanded="false">
									Integer ac elit id est euismod pellentesque.
									<span class="custom-accordion-plus"></span>
								</a>
							</h4>
						</div>
						<div id="collapse7Two" class="collapse" aria-expanded="false" style="height: 0px;">
							<div class="card-body">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus.</p>
							</div>
						</div>
					</div>
					<div class="card card-default">
						<div class="card-header">
							<h4 class="card-title m-0">
								<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion7" href="#collapse7Three" aria-expanded="false">
									Cras interdum neque sit amet justo maximus, ut sollicitudin eros.
									<span class="custom-accordion-plus"></span>
								</a>
							</h4>
						</div>
						<div id="collapse7Three" class="collapse" aria-expanded="false" style="height: 0px;">
							<div class="card-body">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus.</p>
							</div>
						</div>
					</div>
					<div class="card card-default">
						<div class="card-header">
							<h4 class="card-title m-0">
								<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion7" href="#collapse7Four" aria-expanded="false">
									Pellentesque in ex molestie, convallis nulla ut, ornare erat.
									<span class="custom-accordion-plus"></span>
								</a>
							</h4>
						</div>
						<div id="collapse7Four" class="collapse" aria-expanded="false" style="height: 0px;">
							<div class="card-body">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<section class="custom-section-padding">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="font-weight-bold text-color-dark">- Testimonials</h2>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="owl-carousel show-nav-title custom-dots-style-1 custom-dots-position custom-xs-arrows-style-2 mb-0" data-plugin-options="{'items': 1, 'autoHeight': true, 'loop': false, 'nav': false, 'dots': true}">
					<div class="row">
						<div class="col-8 col-sm-4 col-lg-2 text-center pt-5">
							<img src="img/demos/business-consulting/testimonials/testimonial-author-2.jpg" alt class="img-fluid custom-rounded-image" />
						</div>
						<div class="col-12 col-sm-12 col-lg-10">
							<div class="testimonial custom-testimonial-style-1 testimonial-with-quotes mb-0">
								<blockquote class="pb-2">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce ante tellus, convallis non consectetur sed, pharetra nec ex. Aliquam et tortor nisi. Duis mollis diam nec elit volutpat suscipit.</p>
								</blockquote>
								<div class="testimonial-author float-left">
									<p><strong>John Smith</strong><span class="text-color-primary">CEO &amp; Founder - Okler</span></p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-8 col-sm-4 col-lg-2 text-center pt-5">
							<img src="img/demos/business-consulting/testimonials/testimonial-author-3.jpg" alt class="img-fluid custom-rounded-image" />
						</div>
						<div class="col-12 col-sm-12 col-lg-10">
							<div class="testimonial custom-testimonial-style-1 testimonial-with-quotes mb-0">
								<blockquote class="pb-2">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce ante tellus, convallis non consectetur sed, pharetra nec ex. Aliquam et tortor nisi. Duis mollis diam nec elit volutpat suscipit.</p>
								</blockquote>
								<div class="testimonial-author float-left">
									<p><strong>John Smith</strong><span class="text-color-primary">CEO &amp; Founder - Okler</span></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<section class="looking-for section-primary">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6 col-lg-7">
				<div class="looking-for-box">
					<h2>- <span class="text-1 custom-secondary-font">Are you looking for a</span><br>
						Business plan Consultant?</h2>
					<p class="mb-4 mb-md-0">Schedule your company strategy right session now</p>
				</div>
			</div>
			<div class="col-md-3 d-flex justify-content-md-end mb-4 mb-md-0">
				<a class="text-decoration-none" href="tel:+00112304567" target="_blank" title="Call Us Now">
									<span class="custom-call-to-action white-border text-color-light">
										<span class="action-title">Call Us Now</span>
										<span class="action-info">+001 1230 4567</span>
									</span>
				</a>
			</div>
			<div class="col-md-3 col-lg-2">
				<a class="text-decoration-none" href="mail:mail@example.com" target="_blank" title="Email Us Now">
									<span class="custom-call-to-action white-border text-color-light">
										<span class="action-title">Email Us Now</span>
										<span class="action-info">mail@example.com</span>
									</span>
				</a>
			</div>
		</div>
	</div>
</section>

<section class="custom-section-padding">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="font-weight-bold text-color-dark">- Our Blog</h2>
			</div>
		</div>
		<div class="row">
			<article class="blog-post col">
				<div class="row">
					<div class="col-sm-8 col-lg-5">
						<div class="blog-post-image-wrapper">
							<img src="img/demos/business-consulting/blog/blog-1.jpg" alt class="img-fluid mb-4" />
							<span class="blog-post-date bg-color-primary text-color-light font-weight-bold">
												20
												<span class="month-year font-weight-light">
													Oct-16
												</span>
											</span>
						</div>
					</div>
					<div class="col-sm-12 col-lg-7">
						<h2> Global Opportunities</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus. Nunc et feugiat arcu, in placerat risus. Phasellus condimentum sapien vi.</p>
						<hr class="solid">
						<div class="post-infos d-flex">
											<span class="info posted-by">
												Posted by:
												<span class="post-author font-weight-semibold text-color-dark">
													John Doe
												</span>
											</span>
							<span class="info comments ml-5">
												Comments:
												<span class="comments-number text-color-primary font-weight-semibold">
													15
												</span>
											</span>
							<span class="info like ml-5">
												Like:
												<span class="like-number font-weight-semibold custom-color-red">
													38
												</span>
											</span>
						</div>
						<a class="btn btn-outline custom-border-width btn-primary custom-border-radius font-weight-semibold text-uppercase mt-4" href="demo-business-consulting-blog-detail.html" title="Read More">Read More</a>
					</div>
				</div>
			</article>
		</div>
	</div>
</section>



