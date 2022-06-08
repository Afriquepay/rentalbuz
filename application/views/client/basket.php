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
					<div class="w-100 mt-3 p-3 shadow d-flex justify-content-between" style="padding-left: 300px; padding-right: 300px;">
                        <div class="d-flex justify-content-center align-items-center">
                            <img src="<?=base_url();?>uploads/img/timi.jpg" class="rounded" style="max-height: 70px; max-width: auto;"/>
                            <div class="d-flex flex-column mx-5">
                                <span style="font-weight: bold;" class="text-dark">Mature Minds</span>
                                <span class="text-muted">09079615867</span>
                            </div>
                        </div>
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <div class="d-flex justify-content-between">
                                <i class='bx bxs-plus-square plus1' style="font-size: 20px; color: #6D50F8;"></i>
                                <i class='bx bxs-minus-square minus1' style="font-size: 20px; display: none; color: #FF7A42;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 mt-3 p-3 shadow d-flex justify-content-between" style="padding-left: 300px; padding-right: 300px;">
                        <div class="d-flex justify-content-center align-items-center">
                            <img src="<?=base_url();?>uploads/img/timi.jpg" class="rounded" style="max-height: 70px; max-width: auto;"/>
                            <div class="d-flex flex-column mx-5">
                                <span style="font-weight: bold;" class="text-dark">Mature Minds</span>
                                <span class="text-muted">09079615867</span>
                            </div>
                        </div>
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <div class="d-flex justify-content-between">
                                <i class='bx bxs-plus-square plus2' style="font-size: 20px; color: #6D50F8;"></i>
                                <i class='bx bxs-minus-square minus2' style="font-size: 20px; display: none; color: #FF7A42;"></i>
                            </div>
                        </div>
                    </div>
				</section>
			</div>

		</section>

		<?php include('homereusables/scripts.php')?>

	</body>
</html>