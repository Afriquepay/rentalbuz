<!doctype html>
<html class="fixed">
	<?php include('homereusables/head.php')?>
	<!-- //#6d50f8 -->
	<body style="background-image:url('../img/user3.png');  background-repeat: no-repeat;background-color:#CE6E0D ">
	<!-- start: page -->
    <section class="body-sign">
			<div class="center-sign">
				<a href="/" class="logo float-left">
					<img src="<?=base_url();?>uploads/img/adminafripay.png" height="70" alt="Afriquepay Admin" />
				</a>

				<div class="panel card-sign">
					<div class="card-title-sign mt-3 text-end">
						<h2 class="title text-uppercase font-weight-bold m-0"><i class="bx bx-user-circle me-1 text-6 position-relative top-5"></i> Sign Up</h2>
					</div>
					<div class="card-body">
						<form>
							<div class="form-group mb-3">
								<label>Name</label>
								<input name="name" type="text" class="form-control form-control-lg" />
							</div>

							<div class="form-group mb-3">
								<label>E-mail Address</label>
								<input name="email" type="email" class="form-control form-control-lg" />
							</div>

							<div class="form-group mb-0">
								<div class="row">
									<div class="col-sm-6 mb-3">
										<label>Password</label>
										<input name="pwd" type="password" class="form-control form-control-lg" />
									</div>
									<div class="col-sm-6 mb-3">
										<label>Password Confirmation</label>
										<input name="pwd_confirm" type="password" class="form-control form-control-lg" />
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-8">
									<div class="checkbox-custom checkbox-default">
										<input id="AgreeTerms" name="agreeterms" type="checkbox"/>
										<label for="AgreeTerms">I agree with <a href="#">terms of use</a></label>
									</div>
								</div>
								<div class="col-sm-4 text-right">
									<button type="submit" class="btn btn-primary mt-2">Sign Up</button>
								</div>
							</div>

							<span class="mt-3 mb-3 line-thru text-center text-uppercase">
								<span>or</span>
							</span>

							<div class="mb-1 text-center">
								<a class="btn btn-facebook mb-3 ms-1 me-1" href="#">Connect with <i class="fab fa-facebook-f"></i></a>
								<a class="btn btn-twitter mb-3 ms-1 me-1" href="#">Connect with <i class="fab fa-twitter"></i></a>
							</div>

							<p class="text-center">Already have an account? <a href="pages-signin.html">Sign In!</a></p>

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