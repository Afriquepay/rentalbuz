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

										<h2 class="card-title">Fund Basket</h2>
									</header>
									<div class="card-body">
										<form class="form-horizontal form-bordered" method="post" id="basketform">
											<div class="form-group row pb-4">
												<label class="col-lg-3 control-label text-lg-end pt-2" for="inputDefault">Sender Id</label>
												<div class="col-lg-6">
													<input type="text" class="form-control" id="inputDefault"  placeholder="Enter User Id" value="<?php echo $this->session->userdata('userid') ?>" name="from_who">
												</div>
											</div>
                                            <div class="form-group row pb-4">
                                                
                                                <div class="col-md-3"></div>
												<div class="col-lg-6">
													<select class="form-control" id="inputDefault" name="basket_id" >
													<option value="">---------------Select Basket----------</option>
													<?php foreach($all_basket as $baskets) { ?>
                                                        <option value="<?php echo $baskets['id']; ?>"><?php echo $baskets['description']; ?></option>
													<?php } ?>
                                                        
                                                    </select>
												</div>
											</div>
                                            <div class="form-group row pb-4">
												<label class="col-lg-3 control-label text-lg-end pt-2" for="inputDefault">Amount</label>
												<div class="col-lg-6">
													<input type="text" class="form-control" name="amount" id="inputDefault" placeholder="Enter Amount">
												</div>
											</div>
                                            <div class="form-group row pb-4">
												<label class="col-lg-3 control-label text-lg-end pt-2" for="inputDefault">Note</label>
												<div class="col-lg-6">
													<input type="text" class="form-control" name="note" id="inputDefault" placeholder="Enter Note">
												</div>
											</div>
                                            
                                           
												<div class="col-lg-6">
                                                    <button class="btn btn-primary" type="submit" id="crtbtn">Proceed</button>
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
	const formElem = document.querySelector('#basketform');
	formElem.addEventListener('submit', async (e) => {
	// on form submission, prevent default
	e.preventDefault();
	const id = document.querySelector("#crtbtn");
			id.innerHTML= "<i class='fa fa-spinner fa-spin'></i>funding basket...";
		setTimeout(() => {
			const id = document.querySelector("#crtbtn");
			id.innerHTML= "<i class='fa fa-spinner fa-spin'></i>Please Wait...";
		}, 2000);
	// construct a FormData object, which fires the formdata event
	const formm = new FormData(formElem);
	let response = await fetch('fundbasket', {
		method: 'POST',
		body: new FormData(formElem)
		});

		let result = await response.json();

		if(result.message == "yes"){
				// window.location = "dashboard";
				$(function(){
					new PNotify({
					title: 'Notification',
					text: 'Basket funded successfully',
					type:"success",
					delay:"3000",
					icon:true
					});
				});
				formElem.reset();
				const id = document.querySelector("#crtbtn");
				id.innerHTML= "Proceed";

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
				id.innerHTML= "Proceed";
			}
		
	});
</script>