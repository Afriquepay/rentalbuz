<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bankio - HTML Template</title>

    <?php include("homereusables/style.php"); ?>
</head>

<body>
    <!-- start preloader -->
    <div class="preloader" id="preloader"></div>
    <!-- end preloader -->

    <!-- Scroll To Top Start-->
    <a href="javascript:void(0)" class="scrollToTop"><i class="fas fa-angle-double-up"></i></a>
    <!-- Scroll To Top End -->

    <!-- header-section start -->
  <?php include("homereusables/headernav.php"); ?>
    <!-- header-section end -->

    <!-- Login In start -->
    <section class="login sign-in-up">
        <div class="overlay pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="form-content">
                            <div class="section-header">
                                <h5 class="sub-title">The Power of Financial Freedom</h5>
                                <h2 class="title">Set Up Your Password</h2>
                                <p>Your security is our top priority. You'll need this to log into your rentalbuz account</p>
                            </div>
                            <form action="#" id="loginForm">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="single-input">
                                            <label for="email">Enter Your Email ID</label>
                                            <input type="email" id="email" placeholder="Your email ID here" name="email" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="single-input ">
                                            <label for="confirmPass">Password</label>
                                            <div class="password-show d-flex align-items-center">
                                                <input type="text" class="passInput" id="confirmPass" name="password" autocomplete="off" placeholder="Enter Your Password" required>
                                                <img class="showPass" src="<?=base_url();?>uploads/assets/images/icon/show-hide.png" alt="icon">
                                            </div>
                                            <div class="forgot-area text-end">
                                                <a href="javascript:void(0)" class="forgot-password">Forgot Password?</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-area">
                                    <button class="cmn-btn" id="loginButton" type="submit">Login</button>
                                    <div class="spinner-border text-primary" id="loader" style="display: none;" role="status">
										<span class="visually-hidden">Loading...</span>
									</div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Login In end -->

    <!--==================================================================-->
    <?php include("homereusables/scripts.php"); ?>
    <script src="assets/js/main.js"></script>
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