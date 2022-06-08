<!doctype html>
<html class="fixed">
    <?php include('homereusables/head.php')?>
	
    <body class="bg-light">
		<section class="body">

			<?php include('homereusables/navbar.php')?>
			
			<div class="inner-wrapper">
				<aside id="sidebar-left" class="sidebar-left d-none d-md-block">
					<?php include('homereusables/sidenav.php')?>
				</aside>

				<section role="main" class="content-body">
					<?php include('homereusables/breadcrumb.php')?>
					<div class="w-100 p-3 shadow">
                        <div class="form-group row">
                            <label class="col-sm-12 control-label text-sm-end pt-2">Fullname </label><br/>
                            <div class="col-sm-12">
                                <input type="text" name="fullname" value="<?=$this->session->userdata(SESS_PRE . "userFullname") ?>" id="userFullname" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 control-label text-sm-end pt-2">Email address </label><br/>
                            <div class="col-sm-12">
                                <input type="text" name="email" value="<?=$this->session->userdata(SESS_PRE . "userEmail") ?>" id="userEmail" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 control-label text-sm-end pt-2">Enter amount in Naira </label><br/>
                            <div class="col-sm-12">
                                <input type="text" name="mobile" value="<?=$this->session->userdata(SESS_PRE . "userMobile") ?>" id="userMobile" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 control-label text-sm-end pt-2">Enter amount in Naira </label><br/>
                            <div class="col-sm-12">
                                <input type="number" name="amount" id="fundAmount" class="form-control" placeholder="Amount">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 text-center">
                                <a class="btn btn-primary mt-2" id="fundButton">Fund now</a>
                                <div class="spinner-border text-primary" id="loader" style="display: none;" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                        </div>
                    </div>
				</section>
			</div>

		</section>

		<?php include('homereusables/scripts.php')?>

        <script>
			function payWithPaystack(email, amount) {
                $("#fundButton").hide();
				$("#loader").show();

                let handler = PaystackPop.setup({
                    key: 'pk_test_58cdb72ba9c86a1308fff18c498f5bfaf02ffb1e', // Replace with your public key
                    email: email,
                    amount: amount * 100,
                    ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                    // label: "Optional string that replaces customer email"
                    onClose: function(){
                    alert('Window closed.');
                    },
                    callback: function(response){
                        let userId = '<?=$this->session->userdata(SESS_PRE . "userid") ?>';
                        let ref = response.reference;
                        let amt = amount;
                        // alert(userId + ' - ' + ref + ' - ' + amt);

                        $.ajax({
                            url: '<?= base_url('client/updateWallet') ?>',
                            method: 'post',
                            data: {userId, ref, amt},
                            success: function(response){
                                console.log(JSON.parse(response));
                                let resp = JSON.parse(response);
                                if(resp.error){
                                    new PNotify({
                                        title: 'Error',
                                        text: resp.message,
                                        type: 'error'
                                    });
                                }else{
                                    $("#fundButton").show();
						            $("#loader").hide();
                                    new PNotify({
                                        title: 'Success',
                                        text: resp.message,
                                        type: 'success'
                                    });
                                    window.location.replace("<?=base_url()?>client/profile");
                                }
                            }
                        });
                    }
                });
			    handler.openIframe();
			}

            $("#fundButton").click(function(){
                let fundAmount = $("#fundAmount").val();
                let userEmail = $("#userEmail").val();
                let userMobile = $("#userMobile").val();
                let userFullname = $("#userFullname").val();

                console.log(fundAmount + ' - ' + userEmail + ' - ' + userMobile + ' - ' + userFullname);

                if(fundAmount == ""){
                    new PNotify({
                        title: 'Error',
                        text: 'Enter a valid amount!',
                        type: 'error'
                    });
                }else{
                    payWithPaystack(userEmail, fundAmount);
                }
            });
		</script>

	</body>
</html>