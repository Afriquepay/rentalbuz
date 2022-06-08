<!doctype html>
<html class="fixed">
    <?php include('homereusables/head.php')?>
	
    <body class="bg-light">
		<section class="body">

			<?php include('homereusables/backnav.php')?>
			
            <div class="d-flex justify-content-center align-items-center" style="height: 600px; padding-top: 100px;">
                <section class="card card-featured card-featured-primary mb-4" id="sendCodeContainer">
                    <header class="card-header">
                        <!-- <div class="card-actions">
                            <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                            <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                        </div> -->

                        <h2 class="card-title">Reset Pin</h2>
                        <p class="card-subtitle">Change your transaction pin</p>
                    </header>
                    <div class="card-body">
                        <div class="form-group row pb-4">
                            <label class="col-12 control-label text-lg-end pt-2 text-secondary" for="inputDisabled">Send code to this email</label>
                            <div class="col-12">
                                <input class="form-control" id="inputDisabled" type="text" placeholder="oladepo.olushina@gmail.com" disabled="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 text-center">
                                <a class="btn btn-primary mt-2" id="sendPinResetCode">Send reset code</a>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="card card-featured card-featured-primary mb-4" id="verifyCodeContainer" style="display: none;">
                    <header class="card-header">
                        <!-- <div class="card-actions">
                            <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                            <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                        </div> -->

                        <h2 class="card-title">Verify Code</h2>
                        <p class="card-subtitle">Verify the code sent to your email</p>
                    </header>
                    <div class="card-body">
                        <div class="form-group row pb-4">
                            <label class="col-12 control-label text-lg-end pt-2 text-secondary" for="inputDisabled">Enter code</label>
                            <div class="col-12">
                                <input class="form-control" type="text" placeholder="code">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 text-center">
                                <a class="btn btn-primary mt-2" id="verifyResetCode">Verify now</a>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="card card-featured card-featured-primary mb-4" id="resetPinContainer" style="display: none;">
                    <header class="card-header">
                        <!-- <div class="card-actions">
                            <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                            <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                        </div> -->

                        <h2 class="card-title">New Pin</h2>
                        <p class="card-subtitle">Change your pin now</p>
                    </header>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-12 control-label text-lg-end pt-2 text-secondary" for="inputDisabled">Enter new pin</label>
                            <div class="col-12">
                                <input class="form-control" type="text" placeholder="code">
                            </div>
                        </div>
                        <div class="form-group row pb-4">
                            <label class="col-12 control-label text-lg-end pt-2 text-secondary" for="inputDisabled">Enter new pin again</label>
                            <div class="col-12">
                                <input class="form-control" type="text" placeholder="code">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 text-center">
                                <a class="btn btn-primary mt-2" href="dashboard" id="sticky-success">Verify now</a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

		</section>

		<?php include('homereusables/scripts.php')?>

	</body>
</html>