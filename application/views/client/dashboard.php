<!doctype html>
<html class="fixed sidebar-light">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Light Sidebar Layout | Porto Admin - Responsive HTML5 Template</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<?php include('homereusables/head.php')?>

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<?php include('homereusables/navbar.php')?>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<?php include('homereusables/sidenav.php')?>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2><marquee>Please Complete your profile to apply for loan</marquee></h2>

					</header>

					<!-- start: page -->
					<div class="row">
						<div class="col-lg-12 mb-3">
						<section class="card">
										<div class="card-body">
											<div class="circular-bar circular-bar-xs m-0 mt-1 me-4 mb-0 float-end">
												<div class="circular-bar-chart" data-percent="45" data-plugin-options='{ "barColor": "#2baab1", "delay": 300, "size": 70, "lineWidth": 7 }'>
													<strong>Average</strong>
													<label><span class="percent">45</span>%</label>
												</div>
											</div>
											<div class="h4 font-weight-bold mb-0">Profile Level</div>
											<p class="text-3 text-muted mb-0">Please Complete your Profile to apply for Loan</p>
										</div>
									</section>
							
						</div>
						<div class="col-lg-12">
							<div class="row mb-3">
								<div class="col-xl-6">
									<section class="card card-featured-left card-featured-primary mb-3">
										<div class="card-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-primary">
														<i class="fas fa-life-ring"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Active loan</h4>
														<div class="info">
															<strong class="amount">1</strong>
														</div>
													</div>
													<div class="summary-footer">
														<a class="text-muted text-uppercase" href="#">view</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
								<div class="col-xl-6">
									<section class="card card-featured-left card-featured-secondary">
										<div class="card-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-secondary">
														#
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Loan Amount</h4>
														<div class="info">
															<strong class="amount">NGN 14,890.30</strong>
														</div>
													</div>
													<div class="summary-footer">
														<a class="text-muted text-uppercase" href="#">Pay Now</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
							</div>
							<div class="row">
								<div class="col-xl-6">
									<section class="card card-featured-left card-featured-tertiary mb-3">
										<div class="card-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-tertiary">
														<i class="fas fa-dollar-bag"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Today's Orders</h4>
														<div class="info">
															<strong class="amount">38</strong>
														</div>
													</div>
													<div class="summary-footer">
														<a class="text-muted text-uppercase" href="#">(statement)</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
								<div class="col-xl-6">
									<section class="card card-featured-left card-featured-quaternary">
										<div class="card-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-quaternary">
														<i class="fas fa-user"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Today's Visitors</h4>
														<div class="info">
															<strong class="amount">3765</strong>
														</div>
													</div>
													<div class="summary-footer">
														<a class="text-muted text-uppercase" href="#">(report)</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
							</div>
						</div>
					</div>

					
					<!-- end: page -->
				</section>
			</div>

			<?php include('homereusables/collapsible-right-nav.php')?>

		</section>

		<!-- Vendor -->
	
		<?php include('homereusables/scripts.php')?>

		<!-- Specific Page Vendor -->
		<script src="<?=base_url();?>uploads/vendor/jquery-ui/jquery-ui.js"></script>
		<script src="<?=base_url();?>uploads/vendor/jqueryui-touch-punch/jquery.ui.touch-punch.js"></script>
		<script src="<?=base_url();?>uploads/vendor/jquery-appear/jquery.appear.js"></script>
		<script src="<?=base_url();?>uploads/vendor/bootstrapv5-multiselect/js/bootstrap-multiselect.js"></script>
		<script src="<?=base_url();?>uploads/vendor/jquery.easy-pie-chart/jquery.easypiechart.js"></script>
		<script src="<?=base_url();?>uploads/vendor/flot/jquery.flot.js"></script>
		<script src="<?=base_url();?>uploads/vendor/flot.tooltip/jquery.flot.tooltip.js"></script>
		<script src="<?=base_url();?>uploads/vendor/flot/jquery.flot.pie.js"></script>
		<script src="<?=base_url();?>uploads/vendor/flot/jquery.flot.categories.js"></script>
		<script src="<?=base_url();?>uploads/vendor/flot/jquery.flot.resize.js"></script>
		<script src="<?=base_url();?>uploads/vendor/jquery-sparkline/jquery.sparkline.js"></script>
		<script src="<?=base_url();?>uploads/vendor/raphael/raphael.js"></script>
		<script src="<?=base_url();?>uploads/vendor/morris/morris.js"></script>
		<script src="<?=base_url();?>uploads/vendor/gauge/gauge.js"></script>
		<script src="<?=base_url();?>uploads/vendor/snap.svg/snap.svg.js"></script>
		<script src="<?=base_url();?>uploads/vendor/liquid-meter/liquid.meter.js"></script>
		<script src="<?=base_url();?>uploads/vendor/jqvmap/jquery.vmap.js"></script>
		<script src="<?=base_url();?>uploads/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
		<script src="<?=base_url();?>uploads/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
		<script src="<?=base_url();?>uploads/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
		<script src="<?=base_url();?>uploads/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
		<script src="<?=base_url();?>uploads/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
		<script src="<?=base_url();?>uploads/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
		<script src="<?=base_url();?>uploads/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
		<script src="<?=base_url();?>uploads/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="<?=base_url();?>uploads/js/theme.js"></script>

		<!-- Theme Custom -->
		<script src="<?=base_url();?>uploads/js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="<?=base_url();?>uploads/js/theme.init.js"></script>

		<!-- Examples -->
		<script src="<?=base_url();?>uploads/js/examples/examples.dashboard.js"></script>

	</body>
</html>