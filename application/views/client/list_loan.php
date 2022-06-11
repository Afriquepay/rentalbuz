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
							<div class="col">
								<section class="card">
									<header class="card-header">
										<div class="card-actions">
											<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
											<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
										</div>

										<h2 class="card-title">Applied Loan List</h2>
									</header>
									<div class="card-body">

										<table class="table table-bordered table-striped mb-0" id="datatable-tabletools">

											<thead>
												<tr>
													<th>#</th>
													<th>Loan Type</th>
													<th>Amount</th>
													<th>Description</th>
													<th>Agent</th>
													<th>Released Date</th>
													<th>Elapse Date</th>
													<th>Approval Status</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
                                        <?php
                                        foreach($loan_lists as $loan_list){?>
												<tr>
													<td>#<?php echo $loan_list['loan_hash']?></td>
													<td><?php echo $loan_list['loan_type']?></td>
													<td><?php echo $loan_list['amount']?></td>
													<td><?php echo $loan_list['loan_purpose']?></td>
													<td><?php echo $loan_list['agent_id'] ? $loan_list['agent_id'] : "Not Assigned"?></td>
													<td><?php echo $loan_list['date_release']?></td>
													<td><?php echo $loan_list['payment_date']?></td>
													<td><button class="btn btn-danger btn-small">Pending</button></td>
													<td>
                                                        <a href="viewloan/<?php echo $loan_list['id']?>"><li class="fa fa-eye"></li></a>
                                                        <li class="fa fa-trash ml-1"></li>
                                                    </td>
                                            </tr>
                                        <?php } ?>

											</tbody>
										</table>
									</div>
								</section>
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