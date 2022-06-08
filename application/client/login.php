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
						<h2 class="title text-uppercase font-weight-bold m-0"><i class="bx bx-user-circle me-1 text-6 position-relative top-5"></i> Sign In</h2>
					</div>
					<div class="card-body">
						<form action="<?=base_url();?>client/login_user" method="post">
							      <?php
                        $success_msg= $this->session->flashdata('success_msg');
                        $error_msg= $this->session->flashdata('error_msg');
                        
                            if($success_msg){
                              ?>
                    <div class="alert alert-success">
                            <font color="green">   <?php echo $success_msg; ?></font>
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

<div class="form-group mb-3">
								<label>Mobile</label>
								<div class="input-group">
									<input name="mobile" type="tel" class="form-control form-control-lg" required/>
									<span class="input-group-text">
										<i class="bx bx-phone text-4"></i>
									</span>
								</div>
							</div>

							<div class="form-group mb-3">
								<div class="clearfix">
									<label class="float-left">Password</label>
									<a href="client/forgot-password" class="float-end">Lost Password?</a>
								</div>
								<div class="input-group">
									<input name="password" type="password" class="form-control form-control-lg" required/>
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
									<input type="submit" class="btn btn-primary mt-2"  id="clientLoginButton" value="Sign In"/>
								</div>
							</div>

							<!-- <span class="mt-3 mb-3 line-thru text-center text-uppercase">
								<span>or</span>
							</span>

							<div class="mb-1 text-center">
								<a class="btn btn-facebook mb-3 ms-1 me-1" href="#">Connect with <i class="fab fa-facebook-f"></i></a>
								<a class="btn btn-twitter mb-3 ms-1 me-1" href="#">Connect with <i class="fab fa-twitter"></i></a>
							</div> -->

							<p class="text-center mt-4">Don't have an account yet? <a href="client/register">Sign Up!</a></p>

						</form>
					</div>
				</div>

				<p class="text-center text-muted mt-3 mb-3">&copy; Copyright 2021. All Rights Reserved.</p>
			</div>
		</section>
		<!-- end: page -->

		<?php include('homereusables/scripts.php')?>

	</body>
</html>