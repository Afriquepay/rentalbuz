<!doctype html>
<html class="fixed">
    <?php include('homereusables/head.php')?>
	
    <body class="bg-light">
		<section class="body">

			<?php include('homereusables/backnav.php')?>
			
            <div class="d-flex justify-content-center align-items-center" style="padding-top: 100px;">
				<section class="card card-featured card-featured-primary mb-4">
                    <header class="card-header">
                        <h2 class="card-title">Profile</h2>
                        <p class="card-subtitle">User information</p>
                    </header>
                    <div class="card-body">
                        <div class="d-flex justify-content-center align-items-center" style="padding-left: 100px; padding-right: 100px;">
							<img src="<?=base_url();?>uploads/img/user.png" class="rounded-circle" style="height: 200px; width: 200px;">
						</div>
						<div class="d-flex justify-content-between align-items-center m-3">
							<div class="d-flex flex-column justify-content-center align-items-center">
								<span class="text-primary">Fullname</span>
								<h5><?=$this->session->userdata(SESS_PRE . "userFullname") ?></h5>
							</div>
							<div class="d-flex flex-column justify-content-center align-items-center">
								<span class="text-primary">Email</span>
								<h5><?=$this->session->userdata(SESS_PRE . "userEmail") ?></h5>
							</div>
							<div class="d-flex flex-column justify-content-center align-items-center">
								<span class="text-primary">Mobile</span>
								<h5><?=$this->session->userdata(SESS_PRE . "userMobile") ?></h5>
							</div>
						</div>
						<div class="d-flex flex-column justify-content-center align-items-center">
							<form action="<?=base_url();?>client/update_user" method="post" class="d-flex flex-column justify-content-center align-items-center">
								<input name="userMobile" style="font-size: 14px; display: none;" type="tel" class="form-control form-control-lg m-2 userMobile" placeholder="Phone number"/>
								<button class="btn btn-sm btn-primary saveProfile" style="display: none;">Save changes</button>
							</form>
							<button class="btn btn-sm btn-primary editProfile">Edit profile</button>
						</div>
                    </div>
                </section>
            </div>

		</section>

		<?php include('homereusables/scripts.php')?>

	</body>
</html>