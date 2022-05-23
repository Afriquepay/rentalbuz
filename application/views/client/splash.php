<!doctype html>
<html class="fixed">
    <?php include('homereusables/head.php')?>
	
    <body class="bg-light d-flex justify-content-center align-items-center">
		<section class="body h-100 d-flex flex-column justify-content-center align-items-center">

            <img src="<?=base_url();?>uploads/img/logo-6-copy-3.png" style="max-width: 300px; max-height: auto;">
					
            <div class="progress progress-xs progress-squared w-25 m-2 light">
                <div class="progress-bar progress-bar-primary splashProgress" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
                    60%
                </div>
            </div>

            <div id="functionLoader" style="display: none">startProgress</div>
		</section>

		<?php include('homereusables/scripts.php')?>

	</body>
</html>