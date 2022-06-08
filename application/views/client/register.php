<!doctype html>
<html class="fixed">
	<?php include('homereusables/head.php')?>

	<body class="bg-light">
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<a href="/" class="logo float-left">
					<img src="<?=base_url();?>uploads/img/logo-6.png" height="70" alt="AfriquePay Logo" />
				</a>

				<div class="panel card-sign">
					<div class="card-title-sign mt-3 text-end">
						<h2 class="title text-uppercase font-weight-bold m-0"><i class="bx bx-user-circle me-1 text-6 position-relative top-5"></i> Sign Up</h2>
					</div>
					<div class="card-body">
						<form method="post" id="regForm">
							<div class="form-group mb-3">
								<label>Full Name</label>
								<input name="fullname" type="text" class="form-control form-control-lg" id="fullname"/>
							</div>
							<span class="text-danger errorMsg" style="display: none;" id="fullnameError">Enter a valid fullname(Firstname and Lastname)</span>

							<div class="form-group mb-3">
								<label>E-mail Address</label>
								<input name="email" type="email" class="form-control form-control-lg" id="email"/>
							</div>
							<span class="text-danger errorMsg" style="display: none;" id="emailError">Enter a valid email address</span>

                            <div class="form-group mb-3">
								<label>Phone Number</label>
								<input name="phone" type="tel" class="form-control form-control-lg" id="phone"/>
							</div>
							<span class="text-danger errorMsg" style="display: none;" id="phoneError">Enter a valid phone number(11 digits)</span>

							<div class="form-group mb-0">
								<div class="row">
									<div class="col-sm-6 mb-3">
										<label>Password</label>
										<input name="pwd" type="password" class="form-control form-control-lg" id="password"/>
									</div>
									<div class="col-sm-6 mb-3">
										<label>Password Confirmation</label>
										<input name="pwd_confirm" type="password" class="form-control form-control-lg" id="cpassword"/>
									</div>
								</div>
							</div>
							<span class="text-danger errorMsg" style="display: none;"id="passwordError">Enter a valid password(Password must match)</span>

                            <div class="form-group mb-3">
								<label>Transaction Pin</label>
								<input name="pin" type="password" placeholder="4 digits" class="form-control form-control-lg" id="tpin"/>
							</div>
							<span class="text-danger errorMsg" style="display: none;" id="tpinError">Enter a valid transaction pin(4 digits)</span>

                            <div class="form-group mb-3">
								<label>Referrer Number</label>
								<input name="rphone" type="tel" class="form-control form-control-lg" id="rphone"/>
							</div>

							<div class="row">
								<div class="col-sm-8">
									<div class="checkbox-custom checkbox-default">
										<input id="agreeTerms" name="agreeterms" type="checkbox"/>
										<label for="AgreeTerms">I agree with <a href="#">terms of use</a></label>
									</div>
								</div>
								<div class="col-sm-4 text-right">
									<button type="submit" class="btn btn-primary mt-2" id="signupButton" disabled>Sign Up</button>
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

							<p class="text-center mt-4">Already have an account? <a href="<?=base_url();?>client">Sign In!</a></p>

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
				let checkCount = 0;
				$("#agreeTerms").change(function(){
					//console.log("changed");
					checkCount++;
					console.log(checkCount);
					if(checkCount % 2 == 0){
						$("#signupButton").attr("disabled", "disabled");
					}else{
						$("#signupButton").removeAttr("disabled");
					}
				});

				$("#regForm").on('submit', function(e){
					e.preventDefault();
					const formData = new FormData(this);
					
					
					let email = $("#email").val();
					let password = $("#password").val();
					
					let cpassword = $("#cpassword").val();
					let tpin = $("#tpin").val();
					let rphone = $("#rphone").val();

					$(".errorMsg").hide(500);

					console.log(fullname + ' - ' + email + ' - ' + phone + ' - ' + password + ' - ' + cpassword + ' - ' + tpin + ' - ' + rphone);
					if(fullname == "" || (fullname.split(" ")).length == 0){
						$("#fullnameError").show(500);
					}else{
						if(email == ""){
							$("#emailError").show(500);
						}else{
							if(phone == "" || phone.length !== 11){
								$("#phoneError").show(500);
							}else{
								if(password == "" || cpassword == "" || password !== cpassword || password.length < 8){
									$("#passwordError").show(500);
								}else{
									if(tpin == "" || tpin.length !== 4){
										$("#tpinError").show(500);
									}else{
										console.log("Good to go");
										$("#signupButton").hide();
										$("#loader").show();

										$.ajax({
											url: '<?= base_url('client/register_user') ?>',
											method: 'post',
											data: formData,
											cache: false,
											processData: false,
											contentType: false,
											success: function(response){
												console.log(JSON.parse(response));
												let resp = JSON.parse(response);
												if(resp.error){
													new PNotify({
														title: 'Error',
														text: resp.message,
														type: 'error'
													});

													$("#signupButton").show();
													$("#loader").hide();
												}else{
													new PNotify({
														title: 'Success',
														text: resp.message,
														type: 'success'
													});

													setTimeout(() => {
														$("#signupButton").show();
														$("#loader").hide();
														window.location.replace("<?=base_url()?>client/register");
													}, 2000);
												}
											}
										});
									}
								}	
							}
						}	
					}
					// if(!this.checkValidity()){
					// 	e.preventDefault();
					// 	$(this).addClass('was-validated');
					// }else{
					// 	console.log('valid');
					// 	$("#loginButton").hide();
					// 	$("#loader").show();

					// 	$.ajax({
					// 		url: '<?= base_url('client/login_user') ?>',
					// 		method: 'post',
					// 		data: formData,
					// 		cache: false,
					// 		processData: false,
					// 		contentType: false,
					// 		success: function(response){
					// 			console.log(JSON.parse(response));
					// 			let resp = JSON.parse(response);
					// 			if(resp.error){
					// 				new PNotify({
					// 					title: resp.message,
					// 					text: 'Invalid login credentials',
					// 					type: 'error'
					// 				});

					// 				$("#loginButton").show();
					// 				$("#loader").hide();
					// 			}else{
					// 				window.location.replace("<?=base_url()?>client/dashboard");
					// 			}
					// 		}
					// 	});
					// }
				});
			});
		</script>

	</body>
</html>