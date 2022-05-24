<!doctype html>
<html class="fixed">
	<?php include('homereusables/head.php')?>
	<!-- //#6d50f8 -->
	<body style="background-image:url('<?=base_url();?>uploads/assets/images/terms-banner.png');  background-repeat: no-repeat;background-color:#fff ">
		<!-- start: page -->
		<section class="body-sign" >
			<div class="center-sign">
				

				<div class="panel card-sign">
					<div class="card-title-sign mt-3 text-end">
						<h2 class="title text-uppercase font-weight-bold m-0" style="color:#fff"><i class="bx bx-user-circle me-1 text-6 position-relative top-5" style="color:#fff"></i> Sign In</h2>
					</div>
					<div class="card-body">
					<a href="/" class="logo">
					<img src="<?=base_url();?>uploads/assets/images/rentalbuz.png" height="40px" width="130px" alt="Porto Admin" />
				</a>
						<form method="post" id="loginform">
							<div class="form-group mb-3">
								<label>Username</label>
								<div class="input-group">
									<input name="username" type="username"  class="form-control form-control-lg" />
									<span class="input-group-text">
										<i class="bx bx-phone text-4"></i>
									</span>
								</div>
							</div>

							<div class="form-group mb-3">
								<div class="clearfix">
									<label class="float-left">Password</label>
									<a href="pages-recover-password.html" class="float-end">Lost Password?</a>
								</div>
								<div class="input-group">
									<input name="pwd" type="password" class="form-control form-control-lg" />
									<span class="input-group-text">
										<i class="bx bx-lock text-4"></i>
									</span>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-8">
									<div class="checkbox-custom checkbox-default">
										<input id="RememberMe" name="rememberme" type="checkbox"/>
										<label for="RememberMe">Remember Me</label>
									</div>
								</div>
								<div class="col-sm-4 text-end">
									<button type="submit" class="btn btn-primary mt-2" id="crt">Sign In</button>
								</div>
							</div>

						</form>
					</div>
				</div>

				<p class="text-center text-muted mt-3 mb-3">&copy; Copyright 2022. All Rights Reserved. rentalbuz</p>
			</div>
		</section>
		<!-- end: page -->

		<?php include('homereusables/scripts.php')?>

	</body>
</html>

<script>

const formElem = document.querySelector('#loginform');
formElem.addEventListener('submit',  (e) => {
  // on form submission, prevent default
  e.preventDefault();
  let crt = document.getElementById('crt');
  crt.innerHTML = "<li class='fa fa-spinner fa-spin'></li>Authenticating...";
	setTimeout(async () => {
		const formm = new FormData(formElem);
		let response = await fetch('admin/processlogin', {
			method: 'POST',
			body: new FormData(formElem)
		  });
	  
		  let result = await response.json();
	  
		  if(result.message == "yes"){
			  window.location = "admin/dashboard";
		  }else{
			$(function(){
				new PNotify({
				title: 'Notification',
				text: 'Invalid Username and Password',
				type:"danger",
				delay:"3000",
				icon:true
				});
 			 });
  				crt.innerHTML = "Sign In";

		  }
		
	}, 2000);
  // construct a FormData object, which fires the formdata event
    
});

</script>