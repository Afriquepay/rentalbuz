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
							<img src="<?=base_url();?>uploads/img/timi.jpg" class="rounded-circle" style="height: 200px; width: 200px;">
						</div>
						<div class="d-flex justify-content-between align-items-center m-3">
							<div class="d-flex flex-column justify-content-center align-items-center">
								<span class="text-primary">Fullname</span>
								<h6>Oladepo Olushina</h6>
							</div>
							<div class="d-flex flex-column justify-content-center align-items-center">
								<span class="text-primary">Email</span>
								<h6>oladepo.olushina@gmail.com</h6>
							</div>
							<div class="d-flex flex-column justify-content-center align-items-center">
								<span class="text-primary">Mobile</span>
								<h6>08057578066</h6>
							</div>
						</div>
						<div class="d-flex justify-content-center align-items-center">
							<button class="btn btn-sm btn-primary">Edit profile</button>
						</div>
                    </div>
                </section>
            </div>

		</section>

		<?php include('homereusables/scripts.php')?>

	</body>
</html>