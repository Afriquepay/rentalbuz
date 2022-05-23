<!doctype html>
<html class="fixed">
    <?php include('homereusables/head.php')?>
	
    <body class="bg-light">
		<section class="body">

			<?php include('homereusables/navbar.php')?>
			
			<div class="tabs tabs-bottom tabs-primary">
				<div class="tab-content d-flex justify-content-center align-items-center">
					<div id="sendPacket" class="w-100 tab-pane active flex-column align-items-center justify-content-center">
						
						<!-- Desktop view starts -->
						<div class="mt-5 w-100 d-none d-md-flex justify-content-between modal-basic" href="#sendPacketModal" style="padding-left: 300px; padding-right: 300px;">
							<div class="d-flex justify-content-center align-items-center">
								<img src="<?=base_url();?>uploads/img/timi.jpg" class="rounded" style="max-height: 70px; max-width: auto;"/>
								<div class="d-flex flex-column mx-5">
									<span style="font-weight: bold;">Mature Minds</span>
									<span>09079615867: Ok</span>
								</div>
							</div>
							<div class="d-flex flex-column justify-content-center align-items-center">
								<span style="font-weight: bold;">25 Jan</span>
								<div class="d-flex justify-content-between">
									<i class='bx bx-bell' style="font-size: 20px;"></i>
									<span class="float-end badge badge-primary d-flex justify-content-center align-items-center">4</span>
								</div>
							</div>
						</div>
						<div class="mt-2 mb-5 mb w-100 d-none d-md-flex justify-content-between modal-basic" href="#sendPacketModal" style="padding-left: 300px; padding-right: 300px;">
							<div class="d-flex justify-content-center align-items-center">
								<img src="<?=base_url();?>uploads/img/timi.jpg" class="rounded" style="max-height: 70px; max-width: auto;"/>
								<div class="d-flex flex-column mx-5">
									<span style="font-weight: bold;">Mature Minds</span>
									<span>09079615867: Ok</span>
								</div>
							</div>
							<div class="d-flex flex-column justify-content-center align-items-center">
								<span style="font-weight: bold;">25 Jan</span>
								<div class="d-flex justify-content-between">
									<i class='bx bx-bell' style="font-size: 20px;"></i>
									<span class="float-end badge badge-primary d-flex justify-content-center align-items-center">4</span>
								</div>
							</div>
						</div>
						<!-- Desktop view ends -->

						<!-- Mobile View starts -->
						<div class="d-flex d-md-none justify-content-between w-100 mt-3 modal-basic" href="#sendPacketModal">
							<div class="d-flex justify-content-between align-items-center">
								<img src="<?=base_url();?>uploads/img/timi.jpg" class="rounded" style="max-height: 50px; max-width: auto;"/>
								<div class="d-flex flex-column mx-2">
									<span style="font-weight: bold;">Mature Minds</span>
									<span>09079615867: Ok</span>
								</div>
							</div>
							<div class="d-flex flex-column justify-content-center align-items-center">
								<span style="font-weight: bold;">25 Jan</span>
								<div class="d-flex justify-content-between">
									<i class='bx bx-bell' style="font-size: 20px;"></i>
									<span class="float-end badge badge-primary d-flex justify-content-center align-items-center">4</span>
								</div>
							</div>
						</div>
						<div class="d-flex d-md-none justify-content-between w-100 mt-3 mb-5 modal-basic" href="#sendPacketModal">
							<div class="d-flex justify-content-between align-items-center">
								<img src="<?=base_url();?>uploads/img/timi.jpg" class="rounded" style="max-height: 50px; max-width: auto;"/>
								<div class="d-flex flex-column mx-2">
									<span style="font-weight: bold;">Mature Minds</span>
									<span>09079615867: Ok</span>
								</div>
							</div>
							<div class="d-flex flex-column justify-content-center align-items-center">
								<span style="font-weight: bold;">25 Jan</span>
								<div class="d-flex justify-content-between">
									<i class='bx bx-bell' style="font-size: 20px;"></i>
									<span class="float-end badge badge-primary d-flex justify-content-center align-items-center">4</span>
								</div>
							</div>
						</div>
						<!-- Mobile view ends -->
						
						<!-- Modal Packet -->
						<div id="sendPacketModal" class="modal-block modal-header-color modal-block-primary mfp-hide">
							<section class="card">
								<header class="card-header">
									<h2 class="card-title">Send Packet</h2>
								</header>
								<div class="card-body">
									<div class="form-group row pb-3">
										<label class="col-sm-4 control-label text-sm-end pt-2">Phone number: </label>
										<div class="col-sm-8">
											<input type="text" name="phone" class="form-control" placeholder="08123456789" value="08026332541">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 control-label text-sm-end pt-2">Amount: </label>
										<div class="col-sm-8">
											<input type="email" name="email" class="form-control" placeholder="1000">
										</div>
									</div>
								</div>
								<footer class="card-footer">
									<div class="row">
										<div class="col-md-12 text-end">
											<button id="sticky-success" class="btn btn-primary modal-dismiss">Confirm</button>
											<button class="btn btn-default modal-dismiss">Cancel</button>
										</div>
									</div>
								</footer>
							</section>
						</div>
						
					</div>
					<div id="wallet" class="tab-pane">
						<div class="d-flex justify-content-center align-items-center" style="height: 400px; padding-top: 100px;">
							<section class="card card-featured card-featured-primary">
								<header class="card-header">
									<!-- <div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div> -->

									<h2 class="card-title">Wallet</h2>
									<p class="card-subtitle">Account Balance</p>
								</header>
								<div class="card-body" style="width: 350px;">
									<div class="m-5 d-flex justify-content-center align-items-center">
										<i class='bx bxs-wallet mx-3' style="font-size: 30px"></i>
										<h3 class="text-center">N 200,000</h3>
									</div>
									
									<div class="form-group row">
										<div class="col-6 text-center">
											<a class="btn btn-primary btn-sm mt-2" href="fund-packet" id="sticky-success">Fund now</a>
										</div>
										<div class="col-6 text-center">
											<a class="btn btn-success btn-sm mt-2" href="withdraw" id="sticky-success">Withdraw</a>
										</div>
									</div>
								</div>
							</section>
						</div>
					</div>
					<div id="game" class="tab-pane">
						<h3>Game</h3>
					</div>
					<div id="basket" class="w-100 tab-pane flex-column align-items-center justify-content-center">
						<!-- Desktop view starts -->
						<div class="mt-5 w-100 d-none d-md-flex justify-content-between" style="padding-left: 300px; padding-right: 300px;">
							<div class="d-flex justify-content-center align-items-center">
								<img src="<?=base_url();?>uploads/img/timi.jpg" class="rounded" style="max-height: 70px; max-width: auto;"/>
								<div class="d-flex flex-column mx-5">
									<span style="font-weight: bold;">Mature Minds</span>
								</div>
							</div>
							<div class="d-flex flex-column justify-content-center align-items-center">
								<div class="d-flex justify-content-between">
									<i class='bx bxs-plus-square plus1' style="font-size: 20px; color: #6D50F8;"></i>
									<i class='bx bxs-minus-square minus1' style="font-size: 20px; display: none; color: #FF7A42;"></i>
								</div>
							</div>
						</div>
						<div class="mt-2 mb-5 mb w-100 d-none d-md-flex justify-content-between" style="padding-left: 300px; padding-right: 300px;">
							<div class="d-flex justify-content-center align-items-center">
								<img src="<?=base_url();?>uploads/img/timi.jpg" class="rounded" style="max-height: 70px; max-width: auto;"/>
								<div class="d-flex flex-column mx-5">
									<span style="font-weight: bold;">Mature Minds</span>
								</div>
							</div>
							<div class="d-flex flex-column justify-content-center align-items-center">
								<div class="d-flex justify-content-between">
									<i class='bx bxs-plus-square plus2' style="font-size: 20px; color: #6D50F8;"></i>
									<i class='bx bxs-minus-square minus2' style="font-size: 20px; display: none; color: #FF7A42;"></i>
								</div>
							</div>
						</div>
						<!-- Desktop view ends -->

						<!-- Mobile View starts -->
						<div class="d-flex d-md-none justify-content-between w-100 mt-3">
							<div class="d-flex justify-content-between align-items-center">
								<img src="<?=base_url();?>uploads/img/timi.jpg" class="rounded" style="max-height: 50px; max-width: auto;"/>
								<div class="d-flex flex-column mx-2">
									<span style="font-weight: bold;">Mature Minds</span>
								</div>
							</div>
							<div class="d-flex flex-column justify-content-center align-items-center">
								<div class="d-flex justify-content-between">
									<i class='bx bxs-plus-square plus1' style="font-size: 20px; color: #6D50F8;"></i>
									<i class='bx bxs-minus-square minus1' style="font-size: 20px; display: none; color: #FF7A42;"></i>
								</div>
							</div>
						</div>
						<div class="d-flex d-md-none justify-content-between w-100 mt-3 mb-5">
							<div class="d-flex justify-content-between align-items-center">
								<img src="<?=base_url();?>uploads/img/timi.jpg" class="rounded" style="max-height: 50px; max-width: auto;"/>
								<div class="d-flex flex-column mx-2">
									<span style="font-weight: bold;">Mature Minds</span>
								</div>
							</div>
							<div class="d-flex flex-column justify-content-center align-items-center">
								<div class="d-flex justify-content-between">
									<i class='bx bxs-plus-square plus2' style="font-size: 20px; color: #6D50F8;"></i>
									<i class='bx bxs-minus-square minus2' style="font-size: 20px; display: none; color: #FF7A42;"></i>
								</div>
							</div>
						</div>
						<!-- Mobile view ends -->
						<div class="fixed-bottom text-center" style="margin-bottom: 65px;">
							<a class="btn btn-primary w-100 mt-2 modal-basic" href="#basketModal">Proceed</a>
						</div>

						<!-- Modal Basket -->
						<div id="basketModal" class="modal-block modal-header-color modal-block-primary mfp-hide">
							<section class="card">
								<header class="card-header">
									<h2 class="card-title">Create Basket</h2>
								</header>
								<div class="card-body">
									<div class="form-group row">
										<label class="col-sm-4 control-label text-sm-end pt-2">Amount: </label>
										<div class="col-sm-8">
											<input type="text" name="text" class="form-control" placeholder="0">
											<span style="font-size: 10px; color: #FF7A42;">Enter the amount of money you are requesting</span>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 control-label text-sm-end pt-2">Description: </label>
										<div class="col-sm-8">
											<input type="text" name="desc" class="form-control" placeholder="Description">
											<span style="font-size: 10px; color: #FF7A42;">Describe why you want the money</span>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 control-label text-sm-end pt-2">Lifespan: </label>
										<div class="col-sm-8">
											<input type="text" name="desc" class="form-control" placeholder="number of days">
											<span style="font-size: 10px; color: #FF7A42;">Enter the period of expiry for your basket</span>
										</div>
									</div>
								</div>
								<footer class="card-footer">
									<div class="row">
										<div class="col-md-12 text-end">
											<button id="sticky-success" class="btn btn-primary modal-dismiss">Send</button>
											<button class="btn btn-default modal-dismiss">Cancel</button>
										</div>
									</div>
								</footer>
							</section>
						</div>
					</div>
				</div>
				<?php include('homereusables/bottomNav.php')?>
			</div>

		</section>

		<?php include('homereusables/scripts.php')?>

	</body>
</html>