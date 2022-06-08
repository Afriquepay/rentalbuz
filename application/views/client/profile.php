<!doctype html>
<html class="fixed">
    <?php include('homereusables/head.php')?>
	
    <body class="bg-light">
		<section class="body">

			<?php include('homereusables/navbar.php')?>
			
			<div class="inner-wrapper">
				<aside id="sidebar-left" class="sidebar-left d-none d-md-block">
					<?php include('homereusables/sidenav.php')?>
				</aside>

				<section role="main" class="content-body">
					<?php include('homereusables/breadcrumb.php')?>

					<div class="row">
						<div class="col-md-6">
							<div class="w-100 p-5 shadow d-flex flex-column justify-content-between" style="padding-left: 100px; padding-right: 100px;">
								<div class="d-flex justify-content-center align-items-center" style="padding-left: 100px; padding-right: 100px;">
									<img src="<?=base_url();?>uploads/img/user.png" class="rounded-circle">
								</div>
								<div class="d-flex flex-column justify-content-between align-items-center m-3">
									<div class="d-flex justify-content-between align-items-center w-75">
										<i class="fa fa-user" style="font-size: 20px;"></i>
										<h5 style="font-weight: bold;"><?=$this->session->userdata(SESS_PRE . "userFullname") ?></h5>
									</div>
									<div class="d-flex justify-content-between align-items-center w-75">
										<i class="fa fa-envelope" style="font-size: 20px;"></i>
										<h5 style="font-weight: bold;"><?=$this->session->userdata(SESS_PRE . "userEmail") ?></h5>
									</div>
									<div class="d-flex justify-content-between align-items-center w-75">
										<i class="fa fa-phone" style="font-size: 20px;"></i>
										<h5 style="font-weight: bold;"><?=$this->session->userdata(SESS_PRE . "userMobile") ?></h5>
									</div>
<?php 
if($this->session->userdata(SESS_PRE . "userWalletaccountno") != ""){ ?>
<br><br><h4>Fund Your Account</h4><br>
									<div class="d-flex justify-content-between align-items-center w-75">
										<b>BVN</b>
										<h5 style="font-weight: bold;"><?=$this->session->userdata(SESS_PRE . "userWalletbvn") ?></h5>
									</div>

									<div class="d-flex justify-content-between align-items-center w-75">
										<b>Account No</b>
										<h5 style="font-weight: bold;"><?=$this->session->userdata(SESS_PRE . "userWalletaccountno") ?></h5>
									</div>

									<div class="d-flex justify-content-between align-items-center w-75">
										<b>Bank Name</b>
										<h5 style="font-weight: bold;"><?=$this->session->userdata(SESS_PRE . "userWalletbank") ?></h5>
									</div>
<?php } ?>

								</div>
								<div class="d-flex flex-column justify-content-center align-items-center">
									<form action="<?=base_url();?>client/update_user" method="post" class="d-flex flex-column justify-content-center align-items-center">
										<input name="userMobile" style="font-size: 14px; display: none;" type="tel" class="form-control form-control-lg m-2 userMobile" placeholder="Phone number"/>
										<button class="btn btn-sm btn-primary saveProfile" style="display: none;">Save changes</button>
									</form>
									<!-- <button class="btn btn-sm btn-primary editProfile">Edit profile</button> -->
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="w-100 shadow d-flex flex-column justify-content-between" style="padding-left: 100px; padding-right: 100px;">
								<div class="d-flex flex-column justify-content-center align-items-center m-3 w-100">
									<h3><i class='bx bxs-wallet mx-3' style="font-size: 30px"></i> Wallet Balance</h3>
									<div class="d-flex justify-content-center align-items-center">
										<h1 class="text-center">N <?=$this->session->userdata(SESS_PRE. "userWalletAmount") == "" ? "0.00" : $this->session->userdata(SESS_PRE. "userWalletAmount"); ?></h1>
									</div>
									<div class="mt-5 mb-4 form-group row w-100">
										<div class="col-6 text-center">
											<a class="btn btn-primary btn-sm" href="fundpacket"><i class="fa fa-plus"></i> Add Fund</a>
										</div>
										<div class="col-6 text-center">
											<a class="btn btn-success btn-sm" href="withdraw" id="sticky-success"><i class="fa fa-redo"></i> Withdraw</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</section>
			</div>

		</section>

		<?php include('homereusables/scripts.php')?>

	</body>
</html>