<!doctype html>
<html class="fixed">
    <?php include('homereusables/head.php')?>

	<body class="bg-light">
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<a href="/" class="logo float-left">
					<img src="<?=base_url();?>uploads/img/logo-6.png" height="70" alt="Porto Admin" />
				</a>

				<div class="panel card-sign">
					<div class="card-title-sign mt-3 text-end">
						<h2 class="title text-uppercase font-weight-bold m-0"><i class="bx bx-user-circle me-1 text-6 position-relative top-5"></i> Recover Password</h2>
					</div>
					<div class="card-body">
						<div class="alert alert-secondary">
							<p class="m-0">Enter your e-mail below and we will send you reset instructions!</p>
						</div>

						<form>
							<div class="form-group mb-0">
								<div class="input-group">
									<input name="username" type="email" placeholder="E-mail" class="form-control form-control-lg" />
									<button class="btn btn-primary btn-lg" type="submit">Reset!</button>
								</div>
							</div>

							<p class="text-center mt-3">Remembered? <a href="/client">Sign In!</a></p>
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