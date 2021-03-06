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

										<h2 class="card-title">Create User</h2>
									</header>
									<div class="card-body">
										
										<form class="form-horizontal form-bordered" method="post" id="create_user">
										
											<div class="form-group row">
												<div class="col-lg-6">
													
                                                   
													<div class="input-group mb-3">
														<span class="input-group-text">
															<i class="fas fa-envelope"></i>
														</span>
														<input type="text" name="email"  class="form-control" placeholder="Email"  required>
													</div>
                                                    <div class="input-group mb-3">
														<span class="input-group-text">
															<i class="fas fa-lock"></i>
														</span>
														<input type="text" name="password"  class="form-control" placeholder="Password"  required>
													</div>
                                                    <div class="input-group mb-3">
														<span class="input-group-text">
															<i class="fas fa-lock"></i>
														</span>
														<input type="text" name="confirm_password"  class="form-control" placeholder="Confirm Password" required>
													</div>
                                                    <button type="submit" class="btn btn-primary" id="crtbtn">Create</button>
												</div>
											</div>
											
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
<!-- Specific Page Vendor -->
<script src="<?=base_url();?>uploads/vendor/jquery-validation/jquery.validate.js"></script>
<script src="<?=base_url();?>uploads/vendor/bootstrapv5-wizard/jquery.bootstrap.wizard.js"></script>
<script src="<?=base_url();?>uploads/vendor/pnotify/pnotify.custom.js"></script>
<script src="<?=base_url();?>uploads/js/examples/examples.wizard.js"></script>

<script>
	
function alt(){
	
}
const formElem = document.querySelector('#create_user');
formElem.addEventListener('submit', (e) => {
  // on form submission, prevent default
  e.preventDefault();
		const id = document.querySelector("#crtbtn");
		id.innerHTML= "<i class='fa fa-spinner fa-spin'></i>Creating User...";
	setTimeout(() => {
		const id = document.querySelector("#crtbtn");
		id.innerHTML= "<i class='fa fa-spinner fa-spin'></i>Please Wait...";
	}, 2000);
  setTimeout( async () => {
	const formm = new FormData(formElem);
	let response = await fetch('createUser', {
		method: 'POST',
		body: new FormData(formElem)
		});

		let result = await response.json();

		if(result.message == "yes"){
			// window.location = "dashboard";
			$(function(){
				new PNotify({
				title: 'Notification',
				text: 'User Created successfully',
				type:"success",
				delay:"3000",
				icon:true
				});
 			 });
			  formElem.reset();
			  const id = document.querySelector("#crtbtn");
			id.innerHTML= "Create";

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
			id.innerHTML= "Create";
		}
	}, 2000);
  // construct a FormData object, which fires the formdata event
    
});


</script>