<!doctype html>
<html class="fixed">
    <?php include('homereusables/head.php')?>
	
    <body class="bg-light">
		<section class="body">

			<?php include('homereusables/backnav.php')?>
			
            <div class="d-flex justify-content-center align-items-center" style="height: 600px; padding-top: 100px;">
                <section class="card card-featured card-featured-primary mb-4">
                    <header class="card-header">
                        <!-- <div class="card-actions">
                            <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                            <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                        </div> -->

                        <h2 class="card-title">Fund Packet</h2>
                        <p class="card-subtitle">Add fund to your wallet</p>
                    </header>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-sm-12 control-label text-sm-end pt-2">Enter amount in Naira </label><br/>
                            <div class="col-sm-12">
                                <input type="text" name="account_name" class="form-control" placeholder="Amount">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 text-center">
                                <a class="btn btn-primary mt-2" id="sticky-success">Fund now</a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

		</section>

		<?php include('homereusables/scripts.php')?>

	</body>
</html>