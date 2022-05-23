<!doctype html>
<html class="fixed">
    <?php include('homereusables/head.php')?>
	
    <body>
		<section class="body">

			<?php include('homereusables/navbar.php')?>

			<div class="inner-wrapper">
				<?php include('homereusables/sidenav.php')?>

				<section role="main" class="content-body">
					<?php include('homereusables/breadcrumb.php')?>

				
					<!-- start: page -->
                
                    <div class="row">
							<div class="col">
								<section class="card">
									<header class="card-header">
										<div class="card-actions">
											<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										</div>

										<h2 class="card-title">Envelope Details</h2>
									</header>
									<div class="card-body">
										<form class="form-horizontal form-bordered" method="get">
											<div class="form-group row pb-4">
												<label class="col-lg-3 control-label text-lg-end pt-2" for="inputDefault">Packet Name</label>
												<div class="col-lg-6">
													<input type="text" class="form-control" id="inputDefault" value="<?php echo $envelopes[0]['packetname']; ?>" disabled="">
												</div>
											</div>
                                            <div class="form-group row pb-4">
												<label class="col-lg-3 control-label text-lg-end pt-2" for="inputDefault">Thrower Name</label>
												<div class="col-lg-6">
													<input type="text" class="form-control" id="inputDefault" value="<?php echo $envelopes[0]['throwername']; ?>" disabled="">
												</div>
											</div>
                                            <div class="form-group row pb-4">
												<label class="col-lg-3 control-label text-lg-end pt-2" for="inputDefault">User Id</label>
												<div class="col-lg-6">
													<input type="text" class="form-control" id="inputDefault" value="<?php echo $envelopes[0]['userid']; ?>" disabled="">
												</div>
											</div>
                                            <div class="form-group row pb-4">
												<label class="col-lg-3 control-label text-lg-end pt-2" for="inputDefault">Group Id</label>
												<div class="col-lg-6">
													<input type="text" class="form-control" id="inputDefault" value="<?php echo $envelopes[0]['groupid']; ?>" disabled="">
												</div>
											</div>
                                            <div class="form-group row pb-4">
												<label class="col-lg-3 control-label text-lg-end pt-2" for="inputDefault">Total Lucky no</label>
												<div class="col-lg-6">
													<input type="text" class="form-control" id="inputDefault" value="<?php echo $envelopes[0]['totalluckyno']; ?>" disabled="">
												</div>
											</div>
                                            <div class="form-group row pb-4">
												<label class="col-lg-3 control-label text-lg-end pt-2" for="inputDefault">Amount</label>
												<div class="col-lg-6">
													<input type="text" class="form-control" id="inputDefault" value="<?php echo $envelopes[0]['amount']; ?>" disabled="">
												</div>
											</div>
                                            <div class="form-group row pb-4">
												<label class="col-lg-3 control-label text-lg-end pt-2" for="inputDefault">Participant</label>
												<div class="col-lg-6">
													<input type="text" class="form-control" id="inputDefault" value="<?php echo $envelopes[0]['participant']; ?>" disabled="">
												</div>
											</div>
                                            <div class="form-group row pb-4">
												<label class="col-lg-3 control-label text-lg-end pt-2" for="inputDefault">Packet Type</label>
												<div class="col-lg-6">
													<input type="text" class="form-control" id="inputDefault" value="<?php echo $envelopes[0]['packettype']; ?>" disabled="">
												</div>
											</div>
                                            <div class="form-group row pb-4">
												<label class="col-lg-3 control-label text-lg-end pt-2" for="inputDefault">Sharing Type</label>
												<div class="col-lg-6">
													<input type="text" class="form-control" id="inputDefault" value="<?php echo $envelopes[0]['sharingtype']; ?>" disabled="">
												</div>
											</div>
                                            <div class="form-group row pb-4">
												<label class="col-lg-3 control-label text-lg-end pt-2" for="inputDefault">Security Type</label>
												<div class="col-lg-6">
													<input type="text" class="form-control" id="inputDefault" value="<?php echo $envelopes[0]['securitytype']; ?>" disabled="">
												</div>
											</div>
                                            <div class="form-group row pb-4">
												<label class="col-lg-3 control-label text-lg-end pt-2" for="inputDefault">Date</label>
												<div class="col-lg-6">
													<input type="text" class="form-control" id="inputDefault" value="<?php echo $envelopes[0]['date']; ?>" disabled="">
												</div>
											</div>
                                            
                                           
						
										
											


										
											

											

											<!-- <div class="form-group row pb-4">
												<label class="col-lg-3 control-label text-lg-end pt-2">File Upload</label>
												<div class="col-lg-6">
													<div class="fileupload fileupload-new" data-provides="fileupload">
														<div class="input-append">
															<div class="uneditable-input">
																<i class="fas fa-file fileupload-exists"></i>
																<span class="fileupload-preview"></span>
															</div>
															<span class="btn btn-default btn-file">
																<span class="fileupload-exists">Change</span>
																<span class="fileupload-new">Select file</span>
																<input type="file" />
															</span>
															<a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
														</div>
													</div>
												</div>
											</div> -->

										</form>
									</div>
								</section>
							</div>
						</div>

					<!-- end: page -->
				</section>
			</div>

			<?php include('homereusables/collapsible-right-nav.php')?>
		</section>

		<?php include('homereusables/scripts.php')?>

	</body>
</html>