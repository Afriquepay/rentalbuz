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

                        <h2 class="card-title">Withdrawal</h2>
                        <p class="card-subtitle">Bank Details</p>
                    </header>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-sm-12 control-label text-sm-end pt-2">Account name </label><br/>
                            <div class="col-sm-12">
                                <input type="text" name="account_name" class="form-control" placeholder="Account name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 control-label text-sm-end pt-2">Bank </label>
                            <div class="col-sm-12">
                                <select class="form-control">
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 control-label text-sm-end pt-2">Account number </label>
                            <div class="col-sm-12">
                                <input type="number" name="account_number" class="form-control" placeholder="2252145213">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 control-label text-sm-end pt-2">Amount </label>
                            <div class="col-sm-12">
                                <input type="number" name="amount" class="form-control" placeholder="1000">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 text-center">
                                <a class="btn btn-primary mt-2" id="sticky-success">Withdraw now</a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

		</section>

		<?php include('homereusables/scripts.php')?>

	</body>
</html>