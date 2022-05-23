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
							<section class="card card-modern card-big-info">
								<div class="card-body">
									<div class="tabs-modern row" style="min-height: 490px;">
										<div class="col-lg-2-5 col-xl-1-5">
											<div class="nav flex-column" id="tab" role="tablist" aria-orientation="vertical">
												<a class="nav-link active" id="general-tab" data-bs-toggle="pill" data-bs-target="#general" href="#general" role="tab" aria-controls="general" aria-selected="true"><i class="bx bx-data me-2"></i> Transfer Information</a>
									      		<a class="nav-link" id="sender-tab" data-bs-toggle="pill" data-bs-target="#sender" href="#sender" role="tab" aria-controls="sender" aria-selected="false"><i class="bx bx-chevrons-up me-2"></i> Sender Information</a>
									      		<a class="nav-link" id="receiver-tab" data-bs-toggle="pill" data-bs-target="#receiver" href="#receiver" role="tab" aria-controls="receiver" aria-selected="false"><i class="bx bx-chevrons-down me-2"></i> Receiver Information</a>
									      		<a class="nav-link" id="receiver-log-tab" data-bs-toggle="pill" data-bs-target="#receiver-log" href="#release" role="tab" aria-controls="receiver-log" aria-selected="false"><i class="bx bx-cloud-upload me-2"></i> Sender Log</a>
									      		<a class="nav-link" id="sender-log-tab" data-bs-toggle="pill" data-bs-target="#sender-log" href="#release" role="tab" aria-controls="sender-log" aria-selected="false"><i class="bx bx-cloud-upload me-2"></i> Receiver Log</a>
												  <?php 
												  if($escrow_details[0]['status']==0){
													
													echo '<button class="btn btn-sm btn-primary btn-rounded mb-3 pb-3" onclick="underRe()" disabled="">Currently Under review</button>';
													echo '<button class="btn btn-sm btn-primary btn-rounded pb-2" onclick="resolve()"><li class="fa fa-check"> </li>Mark as Resolved</button>';

												  }elseif($escrow_details[0]['status']==1){
													echo '<button class="btn btn-sm btn-primary btn-rounded mb-3 pb-3" id="revbtn" >Reviewed</button>';
													echo '<button class="btn btn-sm btn-primary btn-rounded pb-2" onclick="resolve()"><li class="fa fa-check"> </li>Resolved</button>';
												   }else{
													echo '<button class="btn btn-sm btn-primary btn-rounded mb-3 pb-3" onclick="underRe()" >Mark as Under review</button>';
													echo '<button class="btn btn-sm btn-primary btn-rounded pb-2" onclick="resolve()"><li class="fa fa-check"> </li>Mark as Resolved</button>';

												   }
												   
												   ?>
									    	</div>
										</div>
										<div class="col-lg-3-5 col-xl-4-5">
											<div class="tab-content" id="tabContent">
									      		<div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
													<div class="form-group row align-items-center pb-3">
														<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Amount Trasfered</label>
														<div class="col-lg-7 col-xl-6">
															<input type="text" class="form-control form-control-modern" name="couponName" value="<?= $escrow_details[0]['amount']?>" disabled/>
														</div>
													</div>
													<div class="form-group row align-items-center pb-3">
														<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Status</label>
														<div class="col-lg-7 col-xl-6">
															<input type="text" class="form-control form-control-modern" name="status" value="<?= $escrow_details[0]['status']==0 ? "Under Review" : "Dispute"?>" disabled/>
														</div>
													</div>
													
													<div class="form-group row align-items-center pb-3">
														<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Sender</label>
														<div class="col-lg-7 col-xl-6">
															<input type="text" class="form-control form-control-modern" name="sender" value="<?= $escrow_details[0]['sender']?>" disabled/>
														</div>
													</div>
													<div class="form-group row align-items-center pb-3">
														<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Receiver</label>
														<div class="col-lg-7 col-xl-6">
															<input type="text" class="form-control form-control-modern" name="receiver" value="<?= $escrow_details[0]['receiver']?>" disabled/>
														</div>
													</div>
													
													<div class="form-group row">
														<label class="col-lg-5 col-xl-3 control-label text-lg-end pt-2 mt-1 mb-0">Message</label>
														<div class="col-lg-7 col-xl-6">
															<textarea class="form-control form-control-modern" name="couponDescription" rows="6" disabled><?= $escrow_details[0]['message']?></textarea>
														</div>
													</div>
									      		</div>
												<div class="tab-pane fade" id="sender" role="tabpanel" aria-labelledby="sender-tab">
													<div class="form-group row align-items-center pb-3">
														<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">User id</label>
														<div class="col-lg-7 col-xl-6">
															<input type="text" class="form-control form-control-modern" name="couponMinimumSpend" value="<?= $sender[0]['userid']?>" placeholder="User Id" />
														</div>
													</div>
													<div class="form-group row align-items-center pb-3">
														<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Name</label>
														<div class="col-lg-7 col-xl-6">
															<input type="text" class="form-control form-control-modern" name="couponMinimumSpend" value="<?= $sender[0]['name']?>" placeholder="Name" />
														</div>
													</div>
													<div class="form-group row align-items-center pb-3">
														<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Email</label>
														<div class="col-lg-7 col-xl-6">
															<input type="text" class="form-control form-control-modern" name="couponMinimumSpend" value="<?= $sender[0]['email']?>" placeholder="Email" />
														</div>
													</div>
													<div class="form-group row align-items-center pb-3">
														<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Phone</label>
														<div class="col-lg-7 col-xl-6">
															<input type="text" class="form-control form-control-modern" name="couponMinimumSpend" value="<?= $sender[0]['mobile']?>" placeholder="Phone" />
														</div>
													</div>
													
													
									      		</div>
									      		<div class="tab-pane fade" id="receiver" role="tabpanel" aria-labelledby="receiver-tab">
												  <div class="form-group row align-items-center pb-3">
														<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">User id</label>
														<div class="col-lg-7 col-xl-6">
															<input type="text" class="form-control form-control-modern" name="couponMinimumSpend" value="<?= $receiver[0]['userid']?>" placeholder="User Id" />
														</div>
													</div>
													<div class="form-group row align-items-center pb-3">
														<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Name</label>
														<div class="col-lg-7 col-xl-6">
															<input type="text" class="form-control form-control-modern" name="couponMinimumSpend" value="<?= $receiver[0]['name']?>" placeholder="Name" />
														</div>
													</div>
													<div class="form-group row align-items-center pb-3">
														<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Email</label>
														<div class="col-lg-7 col-xl-6">
															<input type="text" class="form-control form-control-modern" name="couponMinimumSpend" value="<?= $receiver[0]['email']?>" placeholder="Email" />
														</div>
													</div>
													<div class="form-group row align-items-center pb-3">
														<label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Phone</label>
														<div class="col-lg-7 col-xl-6">
															<input type="text" class="form-control form-control-modern" name="couponMinimumSpend" value="<?= $receiver[0]['mobile']?>" placeholder="Phone" />
														</div>
													</div>
													
									      		</div>
												
												<div class="tab-pane fade" id="sender-log" role="tabpanel" aria-labelledby="sender-log-tab">
													<div class="form-group row">
														<label class="col-lg-5 col-xl-3 control-label text-lg-end pt-2 mt-1 mb-0">Message</label>
														<div class="col-lg-7 col-xl-6">
															<textarea class="form-control form-control-modern" name="couponDescription" rows="6" disabled><?php echo $receiverlog[0]['message']; ?></textarea>
														</div>
													</div>
													<div class="form-group row align-items-center pb-3">
														<div class="col-lg-7 col-xl-6">
															Attached File:
															<hr>
																<p><i class="fa fa-file fa-4x"></i> <span style='font-size:25px'><?php echo $receiverlog[0]['file']; ?></span> </p>
														</div>
													</div>
													<h3>Message Receiver:</h3>
													<div class="form-group row">
														<label class="col-lg-5 col-xl-3 control-label text-lg-end pt-2 mt-1 mb-0">Message</label>
														<div class="col-lg-7 col-xl-6">
															<textarea class="form-control form-control-modern" name="mail_receiver" rows="6"></textarea>
															<button class="btn btn-sm btn-primary">Send</button>
														</div>
													</div>
									      		</div>
												<div class="tab-pane fade" id="receiver-log" role="tabpanel" aria-labelledby="receiver-log-tab">
													<div class="form-group row">
														<label class="col-lg-5 col-xl-3 control-label text-lg-end pt-2 mt-1 mb-0">Message</label>
														<div class="col-lg-7 col-xl-6">
															<textarea class="form-control form-control-modern" name="couponDescription" rows="6" disabled><?php echo $senderlog[0]['message']; ?></textarea>
														</div>
													</div>
													<div class="form-group row align-items-center pb-3">
														<div class="col-lg-7 col-xl-6">
															Attached File:
															<hr>
																<p><i class="fa fa-file fa-4x"></i> <span style='font-size:25px'></span> <?php echo $senderlog[0]['file']; ?></p>
														</div>
													</div>
													<h3>Message Sender:</h3>
													<div class="form-group row">
														<label class="col-lg-5 col-xl-3 control-label text-lg-end pt-2 mt-1 mb-0">Message</label>
														<div class="col-lg-7 col-xl-6">
															<textarea class="form-control form-control-modern" name="mail_receiver" rows="6"></textarea>
															<button class="btn btn-sm btn-primary">Send</button>
														</div>
													</div>
									      		</div>
									    	</div>
										</div>
									</div>
								</div>
							</section>
						</div>
					</div>
					<!-- end: page -->
				</section>
			</div>
<!-- Modal SM -->



			<?php include('homereusables/collapsible-right-nav.php')?>
		</section>

		<?php include('homereusables/scripts.php')?>
		<script>
			function resolve(id){
				swal({
					title: "Are you sure?",
					text: "You want to mark this escrow as resolved",
					icon: "warning",
					buttons: true,
					dangerMode: true,
					})
					.then(async (willDelete) => {
					if (willDelete) {
						var id = <?php echo $escrow_details[0]['id'] ?>;
						
						let response = await fetch('resolve/'+id);
						let result = await response.json();
						if(result.message=="yes"){
							swal("Escrow has been marked Resolved", {
							icon: "success",
							});
							location.reload();
						}else{
							swal("Error marking as resolved", {
							icon: "warning"});
						}
						
					} else {
						swal("Cancelled");
					}
					});
			}
			function underRe(){
				swal({
					title: "Are you sure?",
					text: "You want to mark this escrow as resolved",
					icon: "warning",
					buttons: true,
					dangerMode: true,
					})
					.then(async (willDelete) => {
					if (willDelete) {
						var id = <?php echo $escrow_details[0]['id'] ?>;
						
						let response = await fetch('review/'+id);
						let result = await response.json();
						if(result.message=="yes"){
							swal("Escrow has been marked as Under review", {
							icon: "success"
							});
							location.reload();

						}else{
							swal("Error marking as review", {
							icon: "warning"});
						}
						
					} else {
						swal("Cancelled");
					}
				});
			}
			
		</script>
	</body>
</html>

