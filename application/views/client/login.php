<!doctype html>
<html class="fixed">
	<?php include('homereusables/head.php')?>
	
	<body class="bg-light">
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<a href="<?=base_url();?>" class="logo float-left">
					<img src="<?=base_url();?>uploads/img/logo-6.png" height="70" alt="AfriquePay Logo" />
				</a>

				<div class="panel card-sign">
					<div class="card-title-sign mt-3 text-end">
						<h2 class="title text-uppercase font-weight-bold m-0"><i class="bx bx-user-circle me-1 text-6 position-relative top-5"></i> Sign In</h2>
					</div>
					<div class="card-body">
						<form method="post" id="loginForm">
							<div class="form-group mb-3">
								<label>Email</label>
								<div class="input-group">
									<input name="email" type="email" class="form-control form-control-lg" required/>
									<span class="input-group-text">
										<i class="bx bx-phone text-4"></i>
									</span>
								</div>
								<div class="invalid-feedback text-danger">Mobile number is required</div>
							</div>

							<div class="form-group mb-3">
								<div class="clearfix">
									<label class="float-left">Password</label>
									<a href="<?=base_url();?>client/forgot-password" class="float-end">Lost Password?</a>
								</div>
								<div class="input-group">
									<input name="password" type="password" class="form-control form-control-lg" required/>
									<span class="input-group-text">
										<i class="bx bx-lock text-4"></i>
									</span>
								</div>
								<div class="invalid-feedback text-danger">Password is required</div>
							</div>

							<div class="row">
								<div class="col-sm-8">
									<div class="checkbox-custom checkbox-default">
										<input id="RememberMe" name="rememberme" type="checkbox"/>
										<label for="RememberMe">Remember Me</label>
									</div>
								</div>
								<div class="col-sm-4 text-end d-flex align-items-center">
									<input type="submit" class="btn btn-primary mt-2" id="loginButton" value="Sign In"/>
									<div class="spinner-border text-primary" id="loader" style="display: none;" role="status">
										<span class="visually-hidden">Loading...</span>
									</div>
								</div>
							</div>

							<!-- <span class="mt-3 mb-3 line-thru text-center text-uppercase">
								<span>or</span>
							</span>

							<div class="mb-1 text-center">
								<a class="btn btn-facebook mb-3 ms-1 me-1" href="#">Connect with <i class="fab fa-facebook-f"></i></a>
								<a class="btn btn-twitter mb-3 ms-1 me-1" href="#">Connect with <i class="fab fa-twitter"></i></a>
							</div> -->

							<p class="text-center mt-4">Don't have an account yet? <a href="<?=base_url();?>client/register">Sign Up!</a></p>

						</form>
					</div>
				</div>

				<p class="text-center text-muted mt-3 mb-3">&copy; Copyright 2021. All Rights Reserved.</p>
			</div>
		</section>
		<!-- end: page -->

		<?php include('homereusables/scripts.php')?>

		<script>
			$(document).ready(function(){

				$("#loginForm").on('submit', function(e){
					e.preventDefault();
					const formData = new FormData(this);
					// console.log(formData);
					if(!this.checkValidity()){
						e.preventDefault();
						$(this).addClass('was-validated');
					}else{
						console.log('valid');
						$("#loginButton").hide();
						$("#loader").show();

						$.ajax({
							url: '<?= base_url('client/login_user') ?>',
							method: 'post',
							data: formData,
							cache: false,
							processData: false,
							contentType: false,
							success: function(response){
								console.log(JSON.parse(response));
								let resp = JSON.parse(response);
								if(resp.error == false){
									new PNotify({
										title: resp.message,
										text: 'Invalid login credentials',
										type: 'error'
									});

									$("#loginButton").show();
									$("#loader").hide();
								}else{
									window.location.replace("<?=base_url()?>client/dashboard");
								}
							}
						});
					}
				});

			});
		</script>

	</body>
</html>