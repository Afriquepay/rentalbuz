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

										<h2 class="card-title">Fund User</h2>
									</header>
									<div class="card-body">
										<form class="form-horizontal form-bordered" method="post" id="fundform">
											<div class="form-group row pb-4">
												<label class="col-lg-3 control-label text-lg-end pt-2" for="inputDefault">Receiver</label>
												<div class="col-lg-6">
													<input type="text" class="form-control" id="inputDefault" name="receiver" placeholder="Enter Reciever">
												</div>
											</div>
                                            
                                            <div class="form-group row pb-4">
												<label class="col-lg-3 control-label text-lg-end pt-2" for="inputDefault">Amount</label>
												<div class="col-lg-6">
													<input type="text" class="form-control" id="inputDefault" name="amount" placeholder="Enter Amount">
												</div>
											</div>
                                            <div class="form-group row pb-4">
												<label class="col-lg-3 control-label text-lg-end pt-2" for="inputDefault">Message</label>
												<div class="col-lg-6">
													<input type="text" class="form-control" id="inputDefault" name="message" placeholder="Enter Note">
												</div>
											</div>
											<input type="hidden" name="sender" value="<?php echo $this->session->userdata('userid') ?>">
                                            
                                           
												<div class="col-lg-6">
                                                    <button type="submit" class="btn btn-primary" id="crtbtn" >Fund</button>
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

<script>
	const formElem = document.querySelector('#fundform');
	formElem.addEventListener('submit',(e) => {
	// on form submission, prevent default
	e.preventDefault();
	const id = document.querySelector("#crtbtn");
			id.innerHTML= "<i class='fa fa-spinner fa-spin'></i>Funding User...";
		setTimeout(async () => {
			const id = document.querySelector("#crtbtn");
			id.innerHTML= "<i class='fa fa-spinner fa-spin'></i>Please Wait...";
			const formm = new FormData(formElem);
	let response = await fetch('funduser', {
		method: 'POST',
		body: new FormData(formElem)
		});

		let result = await response.json();

		if(result.message == "yes"){
				// window.location = "dashboard";
				$(function(){
					new PNotify({
					title: 'Notification',
					text: 'User funded successfully',
					type:"success",
					delay:"3000",
					icon:true
					});
				});
				const id = document.querySelector("#crtbtn");
				id.innerHTML= "Fund";
				formElem.reset();

			}else{
				$(function(){
					new PNotify({
					title: 'Notification',
					text: result.message,
					type:"info",
					delay:"5000",
					icon:true
					});
				});
				const id = document.querySelector("#crtbtn");
				id.innerHTML= "Fund";
			}
		
	});
		}, 2000);
	// construct a FormData object, which fires the formdata event
	
</script>