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
			<header id="header" class="header header-nav-links header-nav-menu " data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': false, 'stickyEnableOnMobile': true, 'stickyStartAt': 70, 'stickyChangeLogo': false, 'stickyHeaderContainerHeight': 70}">
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
									<?php include("homereusables/headernav.php"); ?>
								</div>
							</div>
						</div> 

					</div>
				</div>
			</header>
            
            <style> 
    
    div.back {
        background-image:url('<?=base_url();?>uploads/img/landing/contact.png');

    }
    .jumbotron{
    background-color:#0088CC;
    text-align:center;
    border-radius:10%;
}
.carousel-item {
  height: 123vh;
  min-height: 350px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
        </style>

	<div role="main" class="main pt-5 mt-lg-5">
        <div class="container">
            <div class="row">
            <div class="jumbotron jumbotron-fluid">
                
                <h2 class="display-4 text-center text-white">Reach Us Today</h2>
                <p class="lead text-center text-white"> There's always an Outlet Assistant eager to help you. </p>
                
                </div>
            </div>
        </div>
        <section class="container pt-5 mt-lg-5">
			<div class="row">
                <div class="col-sm-6">
                <!-- <header> -->

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" style="background-image: url('<?=base_url();?>uploads/img/landing/homepage3.png')">
      <div class="carousel-caption">
        <!-- <h3 class = "" style = "color:#0088CC">jjkjkejjekjjjjk</h3>
        <p > kjjkdjkejkj</p> -->
      </div>
    </div>
    <div class="carousel-item" style="background-image: url('<?=base_url();?>uploads/img/landing/envelope.png')">
      <div class="carousel-caption">
        <!-- <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p> -->
      </div>
    </div>
    <div class="carousel-item" style="background-image: url('<?=base_url();?>uploads/img/landing/escrow.png')">
      <div class="carousel-caption">
        <!-- <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p> -->
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- </header> -->
                </div>
                <div class="col-sm-6">
                <section class="body-sign">
			<div class="center-sign">
				<!-- <a href="/" class="logo float-left">
					<img src="<?=base_url();?>uploads/img/logo.png" height="70" alt="Porto Admin" />
				</a> -->

				<div class="panel card-sign">
					<div class="card-title-sign mt-3 ">
						<h4 class=" m-0">Leave a message</h4>
                        <p>Tell us your request, complain or enquiries. We'll reach out to you as soon as possible.</p>
					</div>
					<div class="card-body">
						<form action="index.html" method="post">
							<div class="form-group mb-3">
								<label>Tell us your name</label>
								<div class="input-group">
									<input name="username" type="text" class="form-control form-control-lg" />
									<!-- <span class="input-group-text">
										<i class="bx bx-user text-4"></i>
									</span> -->
								</div>
							</div>

							<div class="form-group mb-3">
								<div class="clearfix">
									<label class="float-left">Provide your email Address</label>
									<!-- <a href="#" class="float-end">Lost Password?</a> -->
								</div>
								<div class="input-group">
									<input name="pwd" type="email" class="form-control form-control-lg" />
									<!-- <span class="input-group-text">
										<i class="bx bx-lock text-4"></i>
									</span> -->
								</div>
                                
							</div>
                            <div class="form-group mb-3">
								<div class="clearfix">
									<label class="float-left">Message Subect</label>
									<!-- <a href="#" class="float-end">Lost Password?</a> -->
								</div>
								<div class="input-group">
									<input name="pwd" type="text" class="form-control form-control-lg" />
									<!-- <span class="input-group-text">
										<i class="bx bx-lock text-4"></i>
									</span> -->
								</div>
                                
							</div>

                            <div class="form-group mb-3">
								<div class="clearfix">
									<label class="float-left">Type your message</label>
									<!-- <a href="#" class="float-end">Lost Password?</a> -->
								</div>
								<div class="input-group">
									<textarea name="" class = "form-control" id="" cols="20" rows="5"></textarea>
								</div>
                                
							</div>

							<!-- <div class="row">
								<div class="col-sm-8">
									<div class="checkbox-custom checkbox-default">
										<input id="RememberMe" name="rememberme" type="checkbox"/>
										<label for="RememberMe">Remember Me</label>
									</div>
								</div>
								<div class="col-sm-4 text-end">
									<button type="submit" class="btn btn-primary mt-2">Sign In</button>
								</div>
							</div> -->

							<!-- <span class="mt-3 mb-3 line-thru text-center text-uppercase">
								<span>or</span>
							</span> -->

							<!-- <div class="mb-1 text-center">
								<a class="btn btn-facebook mb-3 ms-1 me-1" href="#">Connect with <i class="fab fa-facebook-f"></i></a>
								<a class="btn btn-twitter mb-3 ms-1 me-1" href="#">Connect with <i class="fab fa-twitter"></i></a>
							</div> -->

							<p class="text-center"><a href="#">Click here to view privacy policy?</a></p>
                            <div class="col-sm-4 text-end">
									<button type="submit" class="btn btn-primary mt-2">Send Now</button>
                            </div>

						</form>
					</div>
				</div>

				<p class="text-center text-muted mt-3 mb-3">&copy; Copyright 2021. All Rights Reserved.</p>
			</div>
		</section>
                </div>

            </div>
		<!-- end: page -->
        </section>
    </div>

<br><br>

<footer id="footer" class="bg-color-dark-scale-5 border border-end-0 border-start-0 border-bottom-0 border-color-light-3 mt-0">
				<div class="container text-center my-3 py-5">
					<a href="#" class="goto-top">
						<img src="<?=base_url();?>uploads/img/lazy.png" data-plugin-lazyload data-plugin-options="{'threshold': 500}" data-original="img/logo-light.png" width="102" height="45" class="mb-4 appear-animation" alt="Porto" data-appear-animation="fadeIn" data-appear-animation-delay="300">
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