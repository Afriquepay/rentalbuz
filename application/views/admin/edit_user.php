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

										<h2 class="card-title">Edit Customer</h2>
									</header>
									<div class="card-body">
										<form class="form-horizontal form-bordered" method="post" id="updateform">
											<div class="form-group row pb-4">
												<label class="col-lg-3 control-label text-lg-end pt-2" for="inputDefault">First Name</label>
												<div class="col-lg-6">
													<input type="text" name='firstname' class="form-control" id="inputDefault" value="<?php echo $user_details[0]['firstname']; ?>" readonly>
												</div>
											</div>
											<div class="form-group row pb-4">
												<label class="col-lg-3 control-label text-lg-end pt-2" for="inputDefault">Last Name</label>
												<div class="col-lg-6">
													<input type="text" name='lastname' class="form-control" id="inputDefault" value="<?php echo $user_details[0]['lastname']; ?>" readonly>
												</div>
											</div>
											<div class="form-group row pb-4">
												<label class="col-lg-3 control-label text-lg-end pt-2" for="inputDefault">Customer Id</label>
												<div class="col-lg-6">
													<input type="text" name='userid' class="form-control" id="inputDefault" value="<?php echo $user_details[0]['user_id']; ?>" readonly>
												</div>
											</div>
                                         
                                            <div class="form-group row pb-4">
												<label class="col-lg-3 control-label text-lg-end pt-2" for="inputDefault">Email</label>
												<div class="col-lg-6">
													<input type="email" name='email' class="form-control" id="inputDefault" value="<?php echo $user_details[0]['email']; ?>">
												</div>
											</div>
                                            <div class="form-group row pb-4">
												<label class="col-lg-3 control-label text-lg-end pt-2" for="inputDefault">Phone</label>
												<div class="col-lg-6">
													<input type="number" name='mobile' class="form-control" id="inputDefault" value="<?php echo $user_details[0]['phone']; ?>">
												</div>
											</div>
											<input type="hidden" name="id" value="<?php echo $user_details[0]['id']; ?>">
                                            
                                           
												<div class="col-lg-6">
                                                    <button class="btn btn-primary" id="crtbtn">Update</button>
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
	const formElem = document.querySelector('#updateform');
formElem.addEventListener('submit', (e) => {
  // on form submission, prevent default
  e.preventDefault();
		const id = document.querySelector("#crtbtn");
		id.innerHTML= "<i class='fa fa-spinner fa-spin'></i>Updating...";
	setTimeout(() => {
		const id = document.querySelector("#crtbtn");
		id.innerHTML= "<i class='fa fa-spinner fa-spin'></i>Please Wait...";
	}, 2000);
  setTimeout( async () => {
	const formm = new FormData(formElem);
		let response = await fetch('../update_user', {
		method: 'POST',
		body: new FormData(formElem)
		});

		let result = await response.json();

		if(result.message == "yes"){
			// window.location = "dashboard";
			$(function(){
				new PNotify({
				title: 'Notification',
				text: 'User Updated successfully',
				type:"success",
				delay:"3000",
				icon:true
				});
 			 });
			  const id = document.querySelector("#crtbtn");
			id.innerHTML= "Update";

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
			id.innerHTML= "Update";
		}
	}, 2000);
  // construct a FormData object, which fires the formdata event
    
});
</script>