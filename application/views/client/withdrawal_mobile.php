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
                        <form action="<?=base_url();?>client/request_withdraw" method="post">
                        <?php
                            $success_msg= $this->session->flashdata('success_msg');
                            $error_msg= $this->session->flashdata('error_msg');
                        
                            if($success_msg){
                        ?>
                        <div class="alert alert-success">
                                <font color="green"><?php echo $success_msg; ?></font>
                        </div>
                        <?php
                            }
                            if($error_msg){
                        ?>
                        <div class="alert alert-danger">
                        <font color="red">  <?php echo $error_msg; ?></font>
                        </div>
                        <?php
                            }
                        ?>
                            <div class="form-group row">
                                <label class="col-sm-12 control-label text-sm-end pt-2">Account name </label><br/>
                                <div class="col-sm-12">
                                    <input type="text" name="account_name" class="form-control" placeholder="Account name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 control-label text-sm-end pt-2">Bank </label>
                                <div class="col-sm-12">
                                    <select class="form-control" name="bank_name">
                                        <option value="first_bank">First Bank</option>
                                        <option value="gtb">Guarantee Trust Bank</option>
                                        <option value="opay">Opay</option>
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
                                    <button class="btn btn-primary mt-2" type="sumbit">Withdraw now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </div>

		</section>

		<?php include('homereusables/scripts.php')?>

	</body>
</html>