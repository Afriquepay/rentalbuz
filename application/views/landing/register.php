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

    <!-- Register In start -->
    <section class="sign-in-up register">
        <div class="overlay pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="form-content">
                            <div class="section-header">
                                <h5 class="sub-title">Rentalbuz make the world easier</h5>
                                <h2 class="title">Let’s Get Started!</h2>
                                <p>Please Enter your Email Address to Start your Online Application</p>
                            </div>
                            <form  id="regForm" method="post">
                               
                                <div class="row">
                                    <div class="col-12">
                                        <div class="single-input">
                                            <label for="email">Enter Your Email ID</label>
                                            <input type="text" id="email" placeholder="Your email ID here" name="email">
                                            <span class="text-danger errorMsg" style="display:none;" id="emailError">Enter a valid fullname(Firstname and Lastname)</span>
                                            <span class="text-danger errorMsg" style="display:none;" id="emailUsedError">User with email already exist!!!</span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="single-input">
                                            <label for="referral">Password</label>
                                            <input type="text" id="password" placeholder="Enter the referral code" name="password">
                                            <span class="text-danger errorMsg" style="display:none;" id="passwordError">Password must be greater than 6</span>
                                        </div>
                                    </div>
                                    <div class="forgot-area text-end">
                                                <a href="login" class="forgot-password">Login</a>
                                    </div>
                                    <div class="col-12">
                                        <div class="single-input">
                                            <p>By clicking submit, you agree to <span>Rentalbuz's Terms of Use, Privacy Policy, E-sign</span> & <span>communication Authorization.</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-area">
                                    <button class="cmn-btn" type="submit" id="signupButton">Register</button>
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
    <!-- Register In end -->

    <!--==================================================================-->
    <?php include("homereusables/scripts.php"); ?>
    <script src="assets/js/main.js"></script>
    <script>
        	$("#regForm").on('submit', function(e){
					e.preventDefault();
					const formData = new FormData(this);

					let email = $("#email").val();
					let password = $("#password").val();

					$(".errorMsg").hide(500);
                    if(email == ""){
							$("#emailError").show(500);
					}else{
                        if(password == "" || password.length < 8){
                                $("#passwordError").show(500);
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
                                                $("#emailUsedError").show(500);
                                                $("#signupButton").show();
                                                $("#loader").hide();
                                                $("#emailUsedError").show(500);
                                            }else{
                                               

                                                setTimeout(() => {
                                                    $("#signupButton").show();
                                                    $("#loader").hide();
                                                    alert('Registration successful');
                                                    // window.location.replace("<?=base_url()?>client/register");
                                                }, 2000);
                                            }
                                        }
                                    });
                        }		
					}
					
				});
    </script>
</body>

</html>