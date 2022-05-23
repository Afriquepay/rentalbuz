<!doctype html>
<html class="landing simple-sticky-header-enabled">
<?php include("homereusables/head.php"); ?>

	<body  class="alternative-font-4 loading-overlay-showing" data-plugin-page-transition data-loading-overlay data-plugin-options="{'hideDelay': 100}">
		<div class="loading-overlay">
			<div class="bounce-loader">
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>
		</div>
		
		<div class="body">
			<header id="header" class="header header-nav-links header-nav-menu header-transparent" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': false, 'stickyEnableOnMobile': true, 'stickyStartAt': 70, 'stickyChangeLogo': false, 'stickyHeaderContainerHeight': 70}">
				<div class="header-body border-top-0 bg-dark box-shadow-none">
					<div class="header-container container h-100">
						<div class="header-row h-100">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="#" class="goto-top"><img alt="Porto" width="102" height="45" data-sticky-width="82" data-sticky-height="36" data-sticky-top="0" src="<?=base_url();?>uploads/img/lazy.png" data-plugin-lazyload data-plugin-options="{'threshold': 500}" data-original="#"></a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<button class="btn header-btn-collapse-nav d-lg-none order-3 mt-0 ms-3 me-0" data-bs-toggle="collapse" data-bs-target=".header-nav">
										<i class="fas fa-bars"></i>
									</button>

									<!-- start: header nav menu -->
									<?php include('homereusables/headernav.php'); ?>
								</div>
							</div>
						</div> 

					</div>
				</div>
			</header>

			<div role="main" class="main">
				<section class="section section-concept section-no-border section-dark section-angled section-angled-reverse border-top-0 pt-5 m-0" id="section-concept" style="background-size: cover; background-position: center; animation-duration: 750ms; animation-delay: 300ms; animation-fill-mode: forwards;background-image:url('img/landing/homepage.png')" data-plugin-lazyload data-plugin-options="{'threshold': 500}" data-original="<?=base_url();?>uploads/landing/homepage.png">
					<div class="section-angled-layer-bottom bg-light" style="padding: 8rem 0;"></div>
					<div class="container pt-5 mt-lg-5">
						<div class="row align-items-center pt-3">
							<div class="col-lg-5 mb-5">
								<h5 class="text-primary font-weight-bold mb-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-duration="750">Everyday transaction made easier</h5>
								<h1 class="font-weight-bold text-color-light text-13 line-height-2 mt-0 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750">Afriquepay<span class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600" data-appear-animation-duration="800"></span></h1>
								<p class="custom-font-size-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900" data-appear-animation-duration="750"><span style = "color:#fff" >Send, and recieve a whole bouquet of godness on the Afriquepay app  and experience the true definition of seamless transactions.</span><a href="#intro" data-hash data-hash-offset="120" class="text-color-primary font-weight-semibold text-1 d-block">VIEW MORE <i class="fa fa-long-arrow-alt-right ms-1"></i></a></p>
								<p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200" data-appear-animation-duration="750">
									<!-- <a href="" target="_blank">
										<img src="<?=base_url();?>uploads/img/bs5-updated.png" class="img-fluid mt-2" alt="Bootstrap 5" width="200">
									</a> -->
								</p>

								<div id="popup-content-1" class="dialog dialog-lg zoom-anim-dialog rounded p-3 mfp-hide mfp-close-out">
									<div class="embed-responsive embed-responsive-4by3">
										<video width="100%" height="100%" autoplay muted loop controls>
										  	<source src="<?=base_url();?>uploads/video/presentation.mp4?r=2" type="video/mp4">
										</video>
									</div>
								</div>
							</div>
							<div class="col-lg-6 offset-lg-1 mb-5 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="1200" data-appear-animation-duration="750">
								<div class="border-width-10 border-color-light clearfix border border-radius">
									<video class="float-left" width="100%" height="100%" autoplay muted loop>
									  	<source src="<?=base_url();?>uploads/video/presentation.mp4?r=2" type="video/mp4">
									</video>
								</div>
							</div>

							<div class="col-md-8 col-lg-6 col-xl-5 custom-header-bar py-4 pe-5 appear-animation p-relative z-index-2" data-appear-animation="maskRight" data-appear-animation-delay="1200" data-appear-animation-duration="750">
								<div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1500">
									<!-- <div class="star-rating-wrap d-flex align-items-center justify-content-center position-relative text-color-dark text-5 py-2 mb-2">
										<i class="fas fa-star"></i><i class="fas fa-star ms-1"></i><i class="fas fa-star ms-1"></i><i class="fas fa-star ms-1"></i><i class="fas fa-star ms-1"></i>
									</div> -->
									<h4 class="position-relative text-center text-color-light font-weight-bold text-7 line-height-2 negative-ls-1 mt-0 mb-1"><img style = "width:50px;height:50px;border-radius:70px" src = "<?=base_url();?>uploads/landing/chat.png"> Group Chat</h4>
									<p class="position-relative text-color-light text-center font-weight-normal opacity-7 mb-1">Connect with loved ones</p>
								</div>
							</div>
						</div>
					</div>
				</section>

				<!-- <section id="intro" class="section section-no-border section-angled bg-light border-top-0 pt-0 pb-5 m-0">
					<div class="section-angled-layer-bottom section-angled-layer-increase-angle bg-color-light-scale-1" style="padding: 24rem 0;"></div>
					<div class="container pb-5" style="min-height: 1000px;">
						<div class="row counters justify-content-center">
							<div class="col-md-8 col-lg-6 col-xl-5 text-center">
								<h2 class="font-weight-bold text-color-dark text-9 mt-0mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-duration="750" data-plugin-options="{'accY': -200}">Fantastic Features</h2>
								<p class="sub-title text-primary text-4 font-weight-semibold positive-ls-2 mt-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750">Save valuable time with our powerful features, 

							<span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-2 highlighted-word-animation-1 pos-2 alternative-font-4 font-weight-semibold line-height-2 pb-3">helping you to transact the healthier way.</span></p>
							</div>
							<div class="col-lg-9 text-center">
								<p class="text-1rem text-color-default negative-ls-05 pt-2 pb-4 mb-4  appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750">Porto Admin is simply a better choice for your new project. The template is several years among the most popular in the world, being constantly improved and following the trends of design and best practices of code. Your search for the best solution is over, get your own copy and join our happy customers.</p>
							</div>
						</div>
						<div class="row text-center mb-5 pb-lg-3">
							<div class="col-md-6 col-lg-4 offset-lg-2 text-center mb-5 mb-md-0">
								<div class="appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="750" data-appear-animation-duration="750">
									<h3 class="font-weight-bold text-color-dark text-14 line-height-1 negative-ls-2 mb-2">20+</h3>
									<label class="font-weight-semibold negative-ls-1 text-6 text-color-dark mb-0">Included Dashboards</label>
									<p class="text-color-grey font-weight-semibold pb-1 mb-2">100+ HTML FILES</p>
									<p class="mb-0"><a href="#demos" data-hash data-hash-offset="120" class="text-color-primary d-flex align-items-center justify-content-center text-3 font-weight-semibold text-decoration-none">VIEW DEMOS <i class="fas fa-long-arrow-alt-right ms-2 text-3 mb-0"></i></a></p>
								</div>
							</div>
							<div class="col-md-6 col-lg-4 text-center divider-left-border">
								<div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="750" data-appear-animation-duration="750">
									<h3 class="font-weight-bold text-color-dark text-14 line-height-1 negative-ls-2 mb-2">7K+</h3>
									<label class="font-weight-semibold negative-ls-1 text-6 text-color-dark mb-0">Projects Using Porto Admin</label>
									<p class="text-color-grey font-weight-semibold pb-1 mb-2">100K+ IN ALL VERSIONS</p>
									<p class="mb-0"><a href="https://themeforest.net/item/porto-admin-responsive-html5-template/8539472" class="text-color-primary d-flex align-items-center justify-content-center text-3 font-weight-semibold text-decoration-none" target="_blank">BUILD PROJECT <i class="fas fa-long-arrow-alt-right ms-2 text-3 mb-0"></i></a></p>
								</div>
							</div>
						</div>
						<div class="intro row align-items-center justify-content-center justify-content-md-start pb-5 pb-md-0">
							<div class="col-3 pe-0 ps-3 z-index-2">
								<img src="<?=base_url();?>uploads/img/lazy.png" data-plugin-lazyload data-plugin-options="{'threshold': 500, 'effect':'fadeIn'}" data-original="<?=base_url();?>uploads/landing/intro2.jpg" class="img-fluid border border-width-10 border-color-light box-shadow-5 rounded d-none d-md-block appear-animation" alt="Screenshot 2" data-appear-animation="fadeInUp" data-appear-animation-delay="600">
								<div class="position-absolute d-none d-md-flex align-items-end appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="900" style="bottom: -60px; right: -90px;">
									<span class="arrow hlt" style="margin-right: -70px;"></span>
									<strong class="text-color-dark mb-4 pb-3">advanced features!</strong>
								</div>
							</div>
							<div class="col-10 col-md-9 ps-0 pe-5 pb-5 pb-md-0 mb-5 mb-md-0 p-relative">
								<div class="intro2 pt-5 pt-md-0 mt-5 mt-lg-0 appear-animation pe-5" data-appear-animation="fadeInUp" data-appear-animation-delay="400"><img src="<?=base_url();?>uploads/img/lazy.png" data-plugin-lazyload data-plugin-options="{'threshold': 500, 'effect':'fadeIn'}" data-original="<?=base_url();?>uploads/landing/intro1.jpg" class="img-fluid box-shadow-3 position-relative z-index-1 rounded d-none d-md-block" alt="Screenshot 1" style="left: -110px;"></div>
								<div class="intro3 z-index-3 position-absolute appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="800" style="top: 20%; right: 4%;">
									<img src="<?=base_url();?>uploads/img/lazy.png" data-plugin-lazyload data-plugin-options="{'threshold': 500, 'effect':'fadeIn'}" data-original="<?=base_url();?>uploads/landing/intro3.jpg" class="img-fluid border border-width-10 border-color-light box-shadow-6 rounded" alt="Screenshot 3">
									<div class="position-absolute d-none d-md-flex align-items-end appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100" style="bottom: -135px; right: -20px;">
										<strong class="text-color-dark mb-3">a lot of demos!</strong>
										<span class="arrow hru"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section> -->

				<section class="section section-no-border border-top-0 pt-0 pb-0 m-0">
					<div class="container">
						<div class="row align-items-center justify-content-between">
							<div class="col-lg-4 pe-lg-4 mb-5 mb-md-0">
								<h2 class="text-color-dark text-7 font-weight-semibold line-height-2 mb-2">The new generation of payment and connectedness</h2>
								<p class="pe-lg-5">A complete platform that allows you to chat ,connect at the same time pay without stress.</p>
							</div>
							<div class="col-md-4 col-lg-auto icon-box text-center mb-md-4">
								<i class="icon-bg icon-1"></i>
								<h4 class="font-weight-bold text-color-dark custom-font-size-2 line-height-3 my-0">Super High<br>Performance</h4>
							</div>
							<div class="col-md-4 col-lg-auto icon-box text-center mx-xl-5 my-5 my-md-0 pb-md-4">
								<i class="icon-bg icon-4"></i>
								<h4 class="font-weight-bold text-color-dark custom-font-size-2 line-height-3 my-0">Seamless<br> Transaction</h4>
							</div>
							<div class="col-md-4 col-lg-auto icon-box text-center mb-4">
								<i class="icon-bg icon-3"></i>
								<h4 class="font-weight-bold text-color-dark custom-font-size-2 line-height-3 my-0">New Genearation<br> Functionalities</h4>
							</div>
							<div class="col-sm-12">
								<hr class="solid opacity-7 my-5">
								<h2 class="font-weight-bold text-color-dark text-center text-10 pt-3 mb-3">What is Afriquepay ?</h2>
							</div>
							<div class="col-lg-8 offset-lg-2 px-lg-0 text-center mb-5 mb-sm-4 mb-lg-0">
								<p class="font-weight-500 text-4 mb-0">A cross platform socio-financial mobile 
									money application which allows money transfer online or in person at the 
									speed of instant messaging thus making it easier , cheaper and faster 
									to make everyday micro transactions, the app also features an inbuilt 
									escrow system to enhance trust in paying for goods and services online.
									 We can simply say we are building the Paypal for Africa. </p>
							</div>
						</div>
						<div class="image-wrapper position-relative z-index-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750" style="height: 0; padding-bottom: 16%; margin-top: -30px;">
							<img src="<?=base_url();?>uploads/img/lazy.png" data-plugin-lazyload data-plugin-options="{'threshold': 500, 'effect':'fadeIn'}" data-original="<?=base_url();?>uploads/landing/theme_options.png" class="img-fluid" alt="The Most Customizable Template">
						</div>
					</div>
				</section>

				<section class="section section-no-border section-angled section-dark border-top-0 pb-0 m-0" style="background-image:url('<?=base_url();?>uploads/img/landing/porto_headers.png');background-repeat: repeat-x; background-color: #0169fe !important;" data-plugin-lazyload data-plugin-options="{'threshold': 500}" data-original="<?=base_url();?>uploads/landing/reason_bg.png">
					<div class="section-angled-layer-top section-angled-layer-increase-angle bg-color-light-scale-1" style="padding: 4rem 0;"></div>
					<div class="spacer py-md-4 my-md-5"></div>
					<div class="container pt-lg-4 pt-xl-5 mt-xl-5">
						<div class="row align-items-center justify-content-center pt-lg-5 mt-5 p-relative">
							<div class="col-auto col-sm-12 col-lg-6 offset-lg-1 pt-5 mb-5">
								<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">
									<img  data-plugin-lazyload data-plugin-options="{'threshold': 500, 'effect':'fadeIn'}" src="<?=base_url();?>uploads/img/landing/porto_dots.png" width="154" height="146" class="position-absolute top-auto d-none d-lg-block" alt="6 reasons" data-plugin-float-element data-plugin-options="{'startPos': 'none', 'speed': 3, 'transition': true}" style="bottom: 204px; left: 70px;">
								</div>
								<div class="text-reasons ps-4 ps-sm-0">
									<label class="text-color-light appear-animation z-index-1" data-appear-animation="blurIn" data-appear-animation-delay="250" data-appear-animation-duration="750">5</label>
									<h3 class="text-color-light text-4 text-sm-6 text-md-9 text-lg-5 text-xl-7 px-5 py-sm-3 mt-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="450" data-appear-animation-duration="750">Reasons</h3>
									<h3 class="text-color-light text-4 text-sm-6 text-md-9 text-lg-5 text-xl-7 mt-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="750" data-appear-animation-duration="750">Why you should choose</h3>
									<h3 class="text-color-light text-4 text-sm-6 text-md-9 text-lg-5 text-xl-8 py-sm-3 px-sm-5 px-lg-4 mt-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="950" data-appear-animation-duration="750">Afriquepay <span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-light highlighted-word-animation-1-2 alternative-font-4 font-weight-extra-bold"></span></h3>
								</div>
							</div>
							<div class="col-10 col-sm-12 col-lg-5 col-xl-4 ps-lg-4 ps-xl-5">
								<h2 class="text-color-light text-7 font-weight-semibold line-height-2 mb-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1150" data-appear-animation-duration="750">With Afriquepay your satisfaction is guaranteed.</h2>
								<p class="custom-text-color-2 line-height-5 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1350" data-appear-animation-duration="750">We have selected the 5 top reasons to choose Afriquepay. Check below:</p>
							</div>
						</div>
						<div class="row justify-content-center mb-4 pt-lg-4">
							<div class="col-lg-11">	
								<div class="row justify-content-center">
									<div class="col-10 col-sm-6 col-lg-4 image-box appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" data-appear-animation-duration="750">
										<img class="img-fluid mb-2" alt="Speed Performance" src="<?=base_url();?>uploads/img/landing/reason1.png" data-plugin-lazyload data-plugin-options="{'threshold': 500, 'effect':'fadeIn'}" data-original="<?=base_url();?>uploads/landing/reason1.png">
										<div class="d-flex align-items-center mb-2">
											<span class="text-color-dark font-weight-extra-bold text-12 me-2 line-height-1">1</span>
											<h4 class="d-flex flex-column font-weight-bold text-color-light text-5 mt-0 mb-0"><small class="font-weight-semibold positive-ls-2 line-height-1"></small>Group Chat</h4>
										</div>
										<p class="pe-5 custom-text-color-2">Create and Invite users to group chats, Business owners network and brainstorm with each other also giving users the ability to create baskets useful for crowdfunding, donations and casual gifts.</p>
									</div>
									<div class="col-10 col-sm-6 col-lg-4 image-box appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" data-appear-animation-duration="750">
										<img class="img-fluid mb-2" alt="Speed Performance"  data-plugin-lazyload data-plugin-options="{'threshold': 500, 'effect':'fadeIn'}" src="<?=base_url();?>uploads/img/landing/reason2.png">
										<div class="d-flex align-items-center mb-2">
											<span class="text-color-dark font-weight-extra-bold text-12 me-2 line-height-1">2</span>
											<h4 class="d-flex flex-column font-weight-bold text-color-light text-5 mt-0 mb-0"><small class="font-weight-semibold positive-ls-2 line-height-1">Redefining Connection</small>Chatting</h4>
										</div>
										<p class="pe-5 custom-text-color-2">We believe communication is a core part of business. We believe in a level playing ground for networking, sales, marketing and deals closing and hence we have provided a platform for such.</p>
									</div>
									<div class="col-10 col-sm-6 col-lg-4 image-box appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" data-appear-animation-duration="750">
										<img class="img-fluid mb-2" alt="Speed Performance"  data-plugin-lazyload data-plugin-options="{'threshold': 500, 'effect':'fadeIn'}" src="<?=base_url();?>uploads/img/landing/reason3.png">
										<div class="d-flex align-items-center mb-2">
											<span class="text-color-dark font-weight-extra-bold text-12 me-2 line-height-1">3</span>
											<h4 class="d-flex flex-column font-weight-bold text-color-light text-5 mt-0 mb-0"><small class="font-weight-semibold positive-ls-2 line-height-1">Digital</small>Crowdfunding</h4>
										</div>
										<p class="pe-5 custom-text-color-2">We have re-imagined a traditional basket and made a digital replica. No more fear of someone dipping hands to steal from it. Planning a philanthropic campaign? Mosques, Churches & general contributions? We’ve got everyone covered.</p>
									</div>
									<div class="col-10 col-sm-6 col-lg-4 image-box appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" data-appear-animation-duration="750">
										<img class="img-fluid mb-2" alt="Speed Performance"  data-plugin-lazyload data-plugin-options="{'threshold': 500, 'effect':'fadeIn'}" src="<?=base_url();?>uploads/img/landing/reason4.png">
										<div class="d-flex align-items-center mb-2">
											<span class="text-color-dark font-weight-extra-bold text-12 me-2 line-height-1">4</span>
											<h4 class="d-flex flex-column font-weight-bold text-color-light text-5 mt-0 mb-0"><small class="font-weight-semibold positive-ls-2 line-height-1">Send gifts to loved ones in few clicks</small> Digital Envelopes</h4>
										</div>
										<p class="pe-5 custom-text-color-2">An easy method and cheaper means for transacting, paying your bills, shopping and whatsoever needs you might need to pay for.</p>
									</div>
									<div class="col-10 col-sm-6 col-lg-4 image-box appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750">
										<img class="img-fluid mb-2" alt="Speed Performance" data-plugin-lazyload data-plugin-options="{'threshold': 500, 'effect':'fadeIn'}" src="<?=base_url();?>uploads/img/landing/reason5.png">
										<div class="d-flex align-items-center mb-2">
											<span class="text-color-dark font-weight-extra-bold text-12 me-2 line-height-1">5</span>
											<h4 class="d-flex flex-column font-weight-bold text-color-light text-5 mt-0 mb-0"><small class="font-weight-semibold positive-ls-2 line-height-1">Easy method of transactions </small> ESCROW PAYMENT</h4>
										</div>
										<p class="pe-5 custom-text-color-2">With Porto Front-End you can create your site with same design as the admin. Learn more in the next section.</p>
									</div>
									<!-- <div class="col-10 col-sm-6 col-lg-4 image-box appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700" data-appear-animation-duration="750">
										<img class="img-fluid mb-2" alt="Speed Performance" src="<?=base_url();?>uploads/img/lazy.png" data-plugin-lazyload data-plugin-options="{'threshold': 500, 'effect':'fadeIn'}" data-original="<?=base_url();?>uploads/landing/reason6.png">
										<div class="d-flex align-items-center mb-2">
											<span class="text-color-dark font-weight-extra-bold text-12 me-2 line-height-1">6</span>
											<h4 class="d-flex flex-column font-weight-bold text-color-light text-5 mt-0 mb-0"><small class="font-weight-semibold positive-ls-2 line-height-1">ALWAYS KEEP</small>Template Updates</h4>
										</div>
										<p class="pe-5 custom-text-color-2">Lifetime regular update makes porto always "best" compared to other competitors.</p>
									</div> -->
								</div>
							</div>
						</div>
						<div class="text-center">
							<a href="https://themeforest.net/item/porto-admin-responsive-html5-template/8539472" class="btn btn-dark btn-rounded btn-modern btn-px-5 text-3 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300" target="_blank">Register Now</a>
						</div>
					</div>
				</section>

				<section class="section section-no-border section-angled bg-color-light-scale-1 border-top-0 m-0">
					<div class="section-angled-layer-top section-angled-layer-increase-angle" style="padding: 3.7rem 0; background-color: #0169fe;"></div>
					<div class="container py-5 my-5">
						<div class="row align-items-center text-center my-5">
							<div class="col-md-6">
								<h2 class="text-color-dark font-weight-bold text-9 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">Discover Our App</h2>
								<p class="font-weight-semibold text-primary text-4 fonts-weight-semibold positive-ls-2 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" data-appear-animation-duration="750">Enjoy even better benefits, Download our app on playstore and App store today.</p>
								<p class="font-weight-500 pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" data-appear-animation-duration="750">Tired of transactional headaches? Download our App and lets get you transacting wuthout Frustration.</p>
								<a href="https://themeforest.net/item/porto-admin-responsive-html5-template/8539472" class="btn btn-modern btn-gradient btn-rounded btn-px-5 py-3 text-3 mb-4 appear-animation" target="_blank" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" data-appear-animation-duration="750" target="_blank">Get Started V1</a>
								<!-- <p class="appear-animation text-4" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200">* Porto Front-End <strong class="text-dark">is not included</strong> in the admin and is available for $16.</p> -->
							</div>
							<div class="col-md-6 py-5">
								<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">
									<img class="porto-lz"src="<?=base_url();?>uploads/img/lazy.png" data-plugin-lazyload data-plugin-options="{'threshold': 500, 'effect':'fadeIn'}" data-original="<?=base_url();?>uploads/landing/porto_dots2.png" alt="" width="149" height="142" style="position: absolute; top: -60px; right: -8%;">
								</div>
								<div class="appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="0" data-appear-animation-duration="750">
									<div class="strong-shadow rounded strong-shadow-top-right">
										<img src="<?=base_url();?>uploads/img/landing/porto_front_end.jpg" data-plugin-lazyload data-plugin-options="{'threshold': 500, 'effect':'fadeIn'}" data-original="" class="img-fluid border border-width-10 border-color-light rounded box-shadow-3" alt="Porto Admin" />
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				

				<section class="section section-angled section-angled-reverse section-funnel border-0 m-0 section-dark">
					<div class="section-angled-layer-top section-angled-layer-increase-angle bg-light" style="padding: 4rem 0;"></div>
					<div class="container py-5 mt-4 mb-3">
						<div class="row align-items-center pt-2 pb-3 mt-4 mb-5">
							<div class="col-lg-6 pe-lg-5 position-relative text-center mb-5 mb-lg-0">
								<img alt="Porto Headers" src="<?=base_url();?>uploads/img/landing/porto_headers.png" data-plugin-lazyload data-plugin-options="{'threshold': 500, 'effect':'fadeIn'}" data-original="" class="img-fluid appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300" />
							</div>
							<div class="col-lg-5 text-center px-lg-0">
								<h1 class="text-primary font-weight-semibold positive-ls-2 text-4 mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250" data-appear-animation-duration="750">How it Works </h1>
								<h4 class="text-color-light font-weight-bold text-9 mt-0 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" data-appear-animation-duration="750"> Create an Account </h4>
								<p class="font-weight-500 custom-text-color-1 color-inherit appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" data-appear-animation-duration="750">Register with your email and phone number to gain access to our limitless transactional possibilities </p>
								<h2 class="text-color-light font-weight-bold text-9 mt-0 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" data-appear-animation-duration="750"> Share with Friends </h2>
								<p class="font-weight-500 custom-text-color-1 color-inherit appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" data-appear-animation-duration="750">Dont keep this  </p>
								<h2 class="text-color-light font-weight-bold text-9 mt-0 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" data-appear-animation-duration="750"> Send and Recieve </h2>
								<p class="font-weight-500 custom-text-color-1 color-inherit appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" data-appear-animation-duration="750">After installation via the google playstore </p>
								<!-- <p class="font-weight-500 custom-text-color-1 color-inherit pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" data-appear-animation-duration="750">Select any of the options we have giver you or create your own.</p> -->
								<div class="d-flex align-items-center justify-content-center">
									<!-- <i class="fa fa-check text-color-primary bg-light rounded-circle p-2 me-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1600" data-appear-animation-duration="750"></i>
									<p class="mb-0 line-height-5 ls-0 text-color-light font-weight-500 text-left appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1300" data-appear-animation-duration="750">Menus, Nav Icons, Search Icons, Alerts,<br>Account Items, Search and much more...</p> -->
								</div>
							</div>
						</div>
					</div>
					<div class="section-funnel-layer-bottom" style="bottom: -30px;">
						<div class="section-funnel-layer bg-color-light-scale-1"></div>
						<div class="section-funnel-layer bg-color-light-scale-1"></div>
					</div>
				</section>

				<section class="section section-funnel position-relative z-index-3 border-0 pt-0 m-0">
					<div class="container pb-5">
						<h2 class="fotn-weight-extra-bold text-center mt-0 mb-1">
							<b class="text-color-dark text-13 d-block line-height-1 font-weight-extra-bold appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="250" data-appear-animation-duration="750">1K+</b>
							<span class="font-weight-bold text-color-dark text-5 negative-ls-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" data-appear-animation-duration="750">People Already Using Afriquepay</span>
						</h2>
						<p class="font-weight-bold text-4 text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">100K+ in Revenue</p>
						<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="850" data-appear-animation-duration="850">
							<h5 class="font-weight-semibold positive-ls-2 text-4 text-primary text-center mb-0">TOP 5 STAR RATING</h5>
							<p class="font-weight-500 text-default text-center mb-4">Real people, real stories. Hear from our community.</p>

							<div class="owl-carousel owl-theme carousel-center-active-item-2 nav-style-4 mb-4 pb-3" data-plugin-carousel data-plugin-options='{ "items": 1, "dots": false, "loop": true, "nav": true }'>
								<div>
									<div class="d-flex flex-column flex-md-row justify-content-between mb-3">
										<div class="author">
											<h4 class="font-weight-500 text-5 mt-0 mb-0">Mr Oladapo</h4>
											<span class="opacity-7">Afriquepay User</span>
										</div>
										<span class="star-rating">
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
										</span>
									</div>
									<p class="font-weight-500 opacity-8 text-4 line-height-8 mb-0">There Exceptional Features make them stand out,Simple, Elegand and Seamless transaction and interface</p>
								</div>	
								<div>
									<div class="d-flex flex-column flex-md-row justify-content-between mb-3">
										<div class="author">
											<h4 class="font-weight-500 text-5 mt-0 mb-0">Oladipupo</h4>
											<span class="opacity-7">Afriquepay User</span>
										</div>
										<span class="star-rating">
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
										</span>
									</div>
									<p class="font-weight-500 opacity-8 text-4 line-height-8 mb-0">"Great customer service ,24/7 seamless transaction"</p>
								</div>
								<div>
									<div class="d-flex flex-column flex-md-row justify-content-between mb-3">
										<div class="author">
											<h4 class="font-weight-500 text-5 mt-0 mb-0">Denis</h4>
											<span class="opacity-7">Afriquepay User</span>
										</div>
										<span class="star-rating">
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
										</span>
									</div>
									<p class="font-weight-500 opacity-8 text-4 line-height-8 mb-0">"This theme continues to blow my mind! I can't believe how many features and layouts that are included and yet how elegantly it's all executed underneath."</p>
								</div>
								<div>
									<div class="d-flex flex-column flex-md-row justify-content-between mb-3">
										<div class="author">
											<h4 class="font-weight-500 text-5 mt-0 mb-0">alfvlx</h4>
											<span class="opacity-7">Themeforest User</span>
										</div>
										<span class="star-rating">
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
										</span>
									</div>
									<p class="font-weight-500 opacity-8 text-4 line-height-8 mb-0">"The best template i had work on!!!!!"</p>
								</div>
								<div>
									<div class="d-flex flex-column flex-md-row justify-content-between mb-3">
										<div class="author">
											<h4 class="font-weight-500 text-5 mt-0 mb-0">marcoss2009</h4>
											<span class="opacity-7">Themeforest User</span>
										</div>
										<span class="star-rating">
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
										</span>
									</div>
									<p class="font-weight-500 opacity-8 text-4 line-height-8 mb-0">"The best theme in Themeforest. I like it because I can customize it without problems."</p>
								</div>
								<div>
									<div class="d-flex flex-column flex-md-row justify-content-between mb-3">
										<div class="author">
											<h4 class="font-weight-500 text-5 mt-0 mb-0">moirajanetallen</h4>
											<span class="opacity-7">Themeforest User</span>
										</div>
										<span class="star-rating">
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
										</span>
									</div>
									<p class="font-weight-500 opacity-8 text-4 line-height-8 mb-0">"Very impressed with the great customer support."</p>
								</div>

								<div>
									<div class="d-flex flex-column flex-md-row justify-content-between mb-3">
										<div class="author">
											<h4 class="font-weight-500 text-5 mt-0 mb-0">majstro7</h4>
											<span class="opacity-7">Themeforest User</span>
										</div>
										<span class="star-rating">
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
											<i class="fas fa-star text-color-dark"></i>
										</span>
									</div>
									<p class="font-weight-500 opacity-8 text-4 line-height-8 mb-0">"Good code quality ! Very fast and good support ! I recommended it in 100% !"</p>
								</div>
							</div>
						</div>
						<p class="text-center mb-5"><a class="btn btn-dark btn-modern btn-rounded btn-px-5 py-3 text-1 ls-0 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="250" data-appear-animation-duration="600" href="https://themeforest.net/item/porto-admin-responsive-html5-template/8539472" target="_blank">Register Now</a></p>
					</div>
					<div class="section-funnel-layer-bottom" style="bottom: -30px">
						<div class="section-funnel-layer bg-light"></div>
						<div class="section-funnel-layer bg-light"></div>
					</div>
				</section>

				
				

				<section class="section bg-color-dark-scale-5 border-0 m-0 py-4">
					<div class="container">
						<div class="row">
							<div class="col">
								<ul class="list list-unstyled list-inline d-flex align-items-center justify-content-center flex-column flex-lg-row mb-0">
									<li class="list-inline-item custom-text-color-1 color-inherit mb-lg-0 text-2 pe-2">Porto Versions:</li>
									<li class="list-inline-item mb-lg-0"><a href="https://themeforest.net/item/porto-admin-responsive-html5-template/8539472?s_rank=2" class="btn btn-dark-darken btn-modern btn-rounded btn-px-4 py-3 border-0" target="_blank">HTML</a></li>
									<li class="list-inline-item mb-lg-0"><a href="https://themeforest.net/item/porto-ecommerce-shop-template/22685562" class="btn btn-dark-darken btn-modern btn-rounded btn-px-4 py-3 border-0" target="_blank">SHOP HTML</a></li>
									<li class="list-inline-item mb-lg-0"><a href="https://themeforest.net/item/porto-responsive-wordpress-ecommerce-theme/9207399" class="btn btn-dark-darken btn-modern btn-rounded btn-px-4 py-3 border-0" target="_blank">WORDPRESS</a></li>
									<li class="list-inline-item mb-lg-0"><a href="https://themeforest.net/item/porto-ultimate-responsive-magento-theme/9725864" class="btn btn-dark-darken btn-modern btn-rounded btn-px-4 py-3 border-0" target="_blank">MAGENTO</a></li>
									<li class="list-inline-item mb-lg-0"><a href="https://themeforest.net/item/porto-ultimate-responsive-shopify-theme/19162959" class="btn btn-dark-darken btn-modern btn-rounded btn-px-4 py-3 border-0" target="_blank">SHOPIFY</a></li>
									<li class="list-inline-item mb-lg-0"><a href="https://themeforest.net/item/porto-responsive-drupal-7-theme/5219986" class="btn btn-dark-darken btn-modern btn-rounded btn-px-4 py-3 border-0" target="_blank">DRUPAL</a></li>
								</ul>
							</div>
						</div>
					</div>
				</section>
			</div>

			<footer id="footer" class="bg-color-dark-scale-5 border border-end-0 border-start-0 border-bottom-0 border-color-light-3 mt-0">
				<div class="container text-center my-3 py-5">
					<a href="#" class="goto-top">
						<img src="<?=base_url();?>uploads/img/lazy.png" data-plugin-lazyload data-plugin-options="{'threshold': 500}" data-original="<?=base_url();?>uploads/logo-light.png" width="102" height="45" class="mb-4 appear-animation" alt="Porto" data-appear-animation="fadeIn" data-appear-animation-delay="300">
					</a>
					<p class="font-weight-500 text-4 ls-0 mb-4">Afriquepay <a href="https://themeforest.net/user/okler/" class="text-color-light" target="_blank">Okler.</a></p>
					<ul class="social-icons social-icons-big social-icons-dark-2">
						<li class="social-icons-instagram"><a href="http://www.instagram.com/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
						<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
						<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
						<li class="social-icons-youtube"><a href="http://www.youtube.com/" target="_blank" title="Youtube"><i class="fab fa-youtube"></i></a></li>
					</ul>
				</div>
				<div class="copyright bg-color-dark-scale-4 py-4">
					<div class="container text-center py-2">
						<p class="mb-0 text-2 ls-0">Copyright 2014 - 2021 Porto - All Rights Reserved</p>
					</div>
				</div>
			</footer>
		</div>

		<!-- Vendor -->
		<script src="<?=base_url();?>uploads/vendor/jquery/jquery.js"></script>
		<script src="<?=base_url();?>uploads/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="<?=base_url();?>uploads/vendor/popper/umd/popper.min.js"></script>
		<script src="<?=base_url();?>uploads/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="<?=base_url();?>uploads/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="<?=base_url();?>uploads/vendor/common/common.js"></script>
		<script src="<?=base_url();?>uploads/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="<?=base_url();?>uploads/vendor/magnific-popup/jquery.magnific-popup.js"></script>
		<script src="<?=base_url();?>uploads/vendor/jquery-placeholder/jquery.placeholder.js"></script>

		<!-- Specific Page Vendor -->
		<script src="<?=base_url();?>uploads/vendor/jquery-appear/jquery.appear.js"></script>
		<script src="<?=base_url();?>uploads/vendor/owl.carousel/owl.carousel.js"></script>
		<script src="<?=base_url();?>uploads/vendor/jquery.lazyload/jquery.lazyload.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="<?=base_url();?>uploads/js/theme.js"></script>

		<!-- Theme Custom -->
		<script src="<?=base_url();?>uploads/js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="<?=base_url();?>uploads/js/theme.init.js"></script>

	</body>
</html>