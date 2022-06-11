<!doctype html>
<html class="fixed sidebar-light">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Light Sidebar Layout | Porto Admin - Responsive HTML5 Template</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<?php include('homereusables/head.php')?>
<style>


.inputs input {
    width: 40px;
    height: 40px
}

input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0
}

.card-2 {
    background-color: #fff;
    padding: 10px;
    width: 350px;
    height: 100px;
    bottom: -50px;
    left: 20px;
    position: absolute;
    border-radius: 5px
}

.card-2 .content {
    margin-top: 50px
}


.form-control:focus {
    box-shadow: none;
    border: 2px solid blue
}

.validate {
    border-radius: 20px;
    height: 40px;
    background-color: red;
    border: 1px solid red;
    width: 140px
}
</style>
	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<?php include('homereusables/navbar.php')?>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<?php include('homereusables/sidenav.php')?>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2><marquee>Please Complete your profile to apply for loan</marquee></h2>

					</header>

					<!-- start: page -->
					<div class="row">
                        <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        New Loan
                                    </div>
                                    <?php
                                    if($userinfo[0]['status']=="done"){?>
                                         <div class="card-body">
                                        <!-- <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                            <strong>Error Message!</strong>Some fields missing
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div> -->
                                        <form action="" id="loanform"  data-persist="garlic">
                                            <!-- form list -->
                                            <div class="form-group row pb-2">
												<label class="col-lg-3 control-label text-lg-end pt-2" for="inputDefault" style="font-weight:bold">Borrower</label>
												<div class="col-lg-8">
													<input type="text" class="form-control" id="inputDefault" value="<?php echo $userinfo[0]['firstname']." ".$userinfo[0]['lastname']."(".$userinfo[0]['user_id'].")"?>" readonly name="user_name" required>
												</div>
											</div>
                                             <!-- form list -->
                                             <div class="form-group row pb-2">
												<label class="col-lg-3 control-label text-lg-end pt-2" for="inputDefault" style="font-weight:bold">Amount</label>
												<div class="col-lg-8">
													<input type="text" class="form-control" id="amount"  name="amount" value="" required placeholder="NGN">
												</div>
											</div>
                                            <!-- form list -->
                                            <div class="form-group row pb-2">
												<label class="col-lg-3 control-label text-lg-end pt-2"   for="inputDefault" style="font-weight:bold">Description</label>
												<div class="col-lg-8">
													<textarea class="form-control"  id="inputDefault"  name="description" required></textarea>
												</div>
											</div>

                                            <div class="col-lg-12 mt-2">
                                                <div class="bg-danger text-white">Payment Information</div>
                                            </div>

                                            <div class="form-group row pb-2 mt-2">
												<label class="col-lg-3 control-label text-lg-end pt-2" for="inputDefault" style="font-weight:bold">Duration(months)</label>
												<div class="col-lg-8">
													<select  class="form-control" id="inputDefault" name="duration" required>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                    </select>
												</div>
											</div>
                                            <div class="form-group row pb-2 mt-1">
												<label class="col-lg-3 control-label text-lg-end pt-2" for="inputDefault" style="font-weight:bold">Repayment Schedule</label>
												<div class="col-lg-8">
													<select  class="form-control" id="inputDefault" name="repayment_schedule" required>
                                                        <option value="1">Daily</option>
                                                        <option value="1">Weekly</option>
                                                        <option value="1">Montly</option>

                                                    </select>
												</div>
											</div>
                                            <div class="form-group row pb-2 mt-1">
												<label class="col-lg-3 control-label text-lg-end pt-2" for="inputDefault" style="font-weight:bold">Loan Type</label>
												<div class="col-lg-8">
													<select  class="form-control" id="inputDefault" name="loan_type" required>
                                                        <option value="1">Flat</option>
                                                        <option value="1">Reducing Balance</option>

                                                    </select>
												</div>
											</div>

                                            <div class="col-lg-12 mt-2">
                                                <div class="bg-danger text-white">Property Information</div>
                                            </div>
                                            <!-- form list -->
                                            <div class="form-group row pb-2 mt-2">
												<label class="col-lg-3 control-label text-lg-end pt-2" for="inputDefault" style="font-weight:bold">Apartment Description</label>
												<div class="col-lg-8">
													<textarea class="form-control" id="inputDefault" name="apartment_description" placeholder="This includes the better address and the look of the apartment" required></textarea>
												</div>
											</div>
                                            <div class="form-group row pb-2 mt-2">
												<label class="col-lg-3 control-label text-lg-end pt-2" for="inputDefault" style="font-weight:bold">State</label>
												<div class="col-lg-8">
													<select  class="form-control" name="state_id" id="state" required>
                                                        <?php
                                                        foreach($states as $state){?>

                                                        <option value="<?php echo $state['id'];?>" <?php echo $userinfo[0]['state_id'] == $state['id'] ? "selected" : "" ?>><?php echo $state['name'];?></option>

                                                        <?php
                                                        }
                                                         ?>

                                                    </select>
												</div>
											</div>
                                            <div class="form-group row pb-2 mt-2">
												<label class="col-lg-3 control-label text-lg-end pt-2" for="inputDefault" style="font-weight:bold">LGA of Apartment</label>
												<div class="col-lg-8">
													<select  class="form-control" id="lga" name="lga_id" required>

                                                    </select>
												</div>
											</div>
                                            <!-- form list -->
                                            <div class="form-group row pb-2">
												<label class="col-lg-3 control-label text-lg-end pt-2" for="inputDefault" style="font-weight:bold">Owner's Name</label>
												<div class="col-lg-8">
													<input type="text" class="form-control" id="inputDefault" name="owners_name" required>
												</div>
											</div>
                                            <div class="form-group row pb-2">
												<label class="col-lg-3 control-label text-lg-end pt-2" for="inputDefault" style="font-weight:bold">Owner's Phone</label>
												<div class="col-lg-8">
													<input type="text" class="form-control" id="inputDefault" name="owners_phone" required>
												</div>
											</div>

                                            <!-- this is the beginning of the guarantor  -->

                                            <div class="col-lg-12 mt-2">
                                                <div class="bg-danger text-white">Guarantor</div>
                                            </div>
                                                <h3>Guarantor 1</h3>
                                             <!-- form list -->
                                             <div class="form-group row pt-2">
												<label class="col-lg-3 control-label text-lg-end pt-2" for="inputDefault" style="font-weight:bold">Guarantor's Passport</label>
												<div class="col-lg-8">
                                                    <button class="btn btn-primary" type="button" id="btng1">Choose Image</button>(Max:1mb)
													<input type="file" class="form-control" id="guarantorimginput1" name="guarantor1_image" style="display:none" required>
												</div>
                                                <div class="col-lg-3 text-lg-end ">

                                                    <img src="https://cdn.pixabay.com/photo/2016/08/31/11/54/icon-1633249__340.png" id="guarantorimgdisplay1"  alt="" width="140px" height="140px">

												</div>
											</div>
                                            <!-- form list -->
                                            <div class="form-group row pb-2">
												<label class="col-lg-3 control-label text-lg-end pt-2" for="inputDefault" style="font-weight:bold">Relationship</label>
												<div class="col-lg-8">
													<input type="text" class="form-control" id="inputDefault" name="guarantor1_relationship" required>
												</div>
											</div>
                                            <div class="form-group row pb-2">
												<label class="col-lg-3 control-label text-lg-end pt-2" for="inputDefault" style="font-weight:bold">Guarantor's Name</label>
												<div class="col-lg-8">
													<input type="text" class="form-control" id="inputDefault" name="guarantor1_name" required>
												</div>
											</div>
                                            <div class="form-group row pb-2">
												<label class="col-lg-3 control-label text-lg-end pt-2" for="inputDefault" style="font-weight:bold">Guarantor's Phone Number</label>
												<div class="col-lg-8">
													<input type="text" class="form-control" id="inputDefault" name="guarantor1_phone" required>
												</div>
											</div>
                                             <!-- form list -->
                                             <div class="form-group row pb-2">
												<label class="col-lg-3 control-label text-lg-end pt-2" for="inputDefault" style="font-weight:bold">Guarantor's Address</label>
												<div class="col-lg-8">
													<textarea class="form-control" id="inputDefault" name="guarantor1_address" required></textarea>
												</div>
											</div>

                                            <!-- beginning of the second Guarantor -->
                                            <h3>Guarantor 2</h3>
                                             <!-- form list -->
                                             <div class="form-group row pt-2">
												<label class="col-lg-3 control-label text-lg-end pt-2" for="inputDefault" style="font-weight:bold">Guarantor's Passport</label>
												<div class="col-lg-8">
                                                    <button class="btn btn-primary" type="button" id="btng2">Choose Image</button>(Max:1mb)
													<input type="file" class="form-control" id="guarantorimginput2" name="guarantor2_image" style="display:none" required>
												</div>
                                                <div class="col-lg-3 text-lg-end ">

                                                    <img src="https://cdn.pixabay.com/photo/2016/08/31/11/54/icon-1633249__340.png" id="guarantorimgdisplay2"  alt="" width="140px" height="140px">

												</div>
											</div>
                                            <!-- form list -->
                                            <div class="form-group row pb-2">
												<label class="col-lg-3 control-label text-lg-end pt-2" for="inputDefault" style="font-weight:bold">Relationship</label>
												<div class="col-lg-8">
													<input type="text" class="form-control" id="inputDefault" name="guarantor2_relationship" required>
												</div>
											</div>
                                            <div class="form-group row pb-2">
												<label class="col-lg-3 control-label text-lg-end pt-2" for="inputDefault" style="font-weight:bold">Guarantor's Name</label>
												<div class="col-lg-8">
													<input type="text" class="form-control" id="inputDefault" name="guarantor2_name" required>
												</div>
											</div>
                                            <div class="form-group row pb-2">
												<label class="col-lg-3 control-label text-lg-end pt-2" for="inputDefault" style="font-weight:bold">Guarantor's Phone Number</label>
												<div class="col-lg-8">
													<input type="text" class="form-control" id="inputDefault" name="guarantor2_phone" required>
												</div>
											</div>
                                             <!-- form list -->
                                             <div class="form-group row pb-2">
												<label class="col-lg-3 control-label text-lg-end pt-2" for="inputDefault" style="font-weight:bold">Guarantor's Address</label>
												<div class="col-lg-8">
													<textarea class="form-control" id="inputDefault" name="guarantor_address"  required></textarea>
												</div>
											</div>
                                            <button class="btn btn-primary block" type="submit" id="crtbtn">Proceed</button>


                                        </form>
                                    </div>

                                    <?php }else{?>
                                            <div class="card-body">
                                                Please Complete Your Profile Settings To Apply For Loan <a href="<?=base_url()?>client/user_settings">Click Here to Complete Profile</a>
                                            </div>
                                   <?php }?>

                                </div>
                        </div>
					</div>


					<!-- end: page -->
				</section>
			</div>

			<?php include('homereusables/collapsible-right-nav.php')?>

		</section>

		<!-- Vendor -->

		<?php include('homereusables/scripts.php')?>
        <script src="<?=base_url();?>uploads/vendor/pnotify/pnotify.custom.js"></script>




            <script>
        // function convertToCurrency(e){
        //     var n = $('#amount').val();
        //     let nf = new Intl.NumberFormat('en-US');
        //     alert(n);
        // }

function renderImg(imgId,inputId){
    inputId.onchange = evt => {
        const [file] = inputId.files
        if (file) {
            imgId.src = URL.createObjectURL(file)
        }
    }
}




renderImg(guarantorimgdisplay1,guarantorimginput1);
renderImg(guarantorimgdisplay2,guarantorimginput2);

$('#state').change(function () {
        event.preventDefault()

        var state_id = this.value;

        if (state_id == null || state_id == "" || state_id.length < 1) {
            return false;
        } else {
            $.ajax({
                type: "GET",
                url: "../admin/getLgaByState",
                data: { state_id : state_id },
                success: function (response) {
                    $('#lga').empty();
                    $('#lga').append(response);
                }
            })
        }
    });


    $('#btng1').click(function(){
	    $('#guarantorimginput1').click()
    });

    $('#btng2').click(function(){
	    $('#guarantorimginput2').click()
    });


    $('#backbtn').click(function(){
	    $('#back').click()
    });

    $('#frontbtn').click(function(){
	    $('#front').click()
    });

const formElem = document.querySelector('#loanform');
formElem.addEventListener('submit', (e) => {
  // on form submission, prevent default
  e.preventDefault();
		const id = document.querySelector("#crtbtn");
		id.innerHTML= "<i class='fa fa-spinner fa-spin'></i>Processing...";
	setTimeout(() => {
		const id = document.querySelector("#crtbtn");
		id.innerHTML= "<i class='fa fa-spinner fa-spin'></i>Please Wait...";
	}, 2000);
  setTimeout( async () => {
	const formm = new FormData(formElem);
	let response = await fetch('usersubmitloan', {
		method: 'POST',
		body: new FormData(formElem)
		});

		let result = await response.json();

		if(result[0].message == "yes"){
			// window.location = "dashboard";
			$(function(){
				new PNotify({
				title: 'User Setting',
				text: 'Successfully Submited',
				type:"success",
				delay:"3000",
				icon:true
				});
 			 });
			  const id = document.querySelector("#crtbtn");
			id.innerHTML= "<i class='bx bx-save text-4 me-2'></i> Submit";
            location.href="list_loan";

		}else{
			$(function(){
				new PNotify({
				title: 'User Setting',
				text: result[0].message,
				type:"info",
				delay:"5000",
				icon:true
				});
 			 });
			const id = document.querySelector("#crtbtngeneral");
			id.innerHTML= "<i class='bx bx-save text-4 me-2'></i> Save";
		}
	}, 2000);
  // construct a FormData object, which fires the formdata event

});


const formElement = document.querySelector('#uploadid');
formElement.addEventListener('submit', (e) => {
  // on form submission, prevent default
  e.preventDefault();
		const id = document.querySelector("#crtbtnid");
		id.innerHTML= "<i class='fa fa-spinner fa-spin'></i>Uploading...";
	setTimeout(() => {
		const id = document.querySelector("#crtbtnid");
		id.innerHTML= "<i class='fa fa-spinner fa-spin'></i>Please Wait...";
	}, 2000);
  setTimeout( async () => {
	let response = await fetch('uploadidentity', {
		method: 'POST',
		body: new FormData(formElement)
		});

		let result = await response.json();

		if(result[0].message == "yes"){
			// window.location = "dashboard";
			$(function(){
				new PNotify({
				title: 'User Setting',
				text: 'Successfully Updated',
				type:"success",
				delay:"3000",
				icon:true
				});
 			 });
			  const id = document.querySelector("#crtbtnid");
			id.innerHTML= "<i class='bx bx-save text-4 me-2'></i> Submit";

		}else{
			$(function(){
				new PNotify({
				title: 'User Setting',
				text: result[0].message,
				type:"info",
				delay:"5000",
				icon:true
				});
 			 });
			const id = document.querySelector("#crtbtnid");
			id.innerHTML= "<i class='bx bx-save text-4 me-2'></i> Submit";
		}
	}, 2000);
  // construct a FormData object, which fires the formdata event

});



const formOther = document.querySelector('#otherinfo');
formOther.addEventListener('submit', (e) => {
  // on form submission, prevent default
  e.preventDefault();
		const id = document.querySelector("#crtbtnother");
		id.innerHTML= "<i class='fa fa-spinner fa-spin'></i>Updating...";
	setTimeout(() => {
		const id = document.querySelector("#crtbtnother");
		id.innerHTML= "<i class='fa fa-spinner fa-spin'></i>Please Wait...";
	}, 2000);
  setTimeout( async () => {
	let response = await fetch('otherinfo', {
		method: 'POST',
		body: new FormData(formOther)
		});

		let result = await response.json();

		if(result[0].message == "yes"){
			// window.location = "dashboard";
			$(function(){
				new PNotify({
				title: 'User Setting',
				text: 'Successfully Updated',
				type:"success",
				delay:"3000",
				icon:true
				});
 			 });
			  const id = document.querySelector("#crtbtnother");
			id.innerHTML= "<i class='bx bx-save text-4 me-2'></i> Submit";

		}else{
			$(function(){
				new PNotify({
				title: 'User Setting',
				text: result[0].message,
				type:"info",
				delay:"5000",
				icon:true
				});
 			 });
			const id = document.querySelector("#crtbtnother");
			id.innerHTML= "<i class='bx bx-save text-4 me-2'></i> Submit";
		}
	}, 2000);
  // construct a FormData object, which fires the formdata event

});











            document.addEventListener("DOMContentLoaded", function(event) {
        $('#box1').hide();
function OTPInput() {
const inputs = document.querySelectorAll('#otp > *[id]');
for (let i = 0; i < inputs.length; i++) { inputs[i].addEventListener('keydown', function(event) { if (event.key==="Backspace" ) { inputs[i].value='' ; if (i !==0) inputs[i - 1].focus(); } else { if (i===inputs.length - 1 && inputs[i].value !=='' ) { return true; } else if (event.keyCode> 47 && event.keyCode < 58) { inputs[i].value=event.key; if (i !==inputs.length - 1) inputs[i + 1].focus(); event.preventDefault(); } else if (event.keyCode> 64 && event.keyCode < 91) { inputs[i].value=String.fromCharCode(event.keyCode); if (i !==inputs.length - 1) inputs[i + 1].focus(); event.preventDefault(); } } }); } } OTPInput(); });

    function checkPhone(val){
        if(val.value.length == 11){
            $('#verifybtn').removeAttr('disabled');

        }

    }

    async function checkotp(){

        let otp = $('#first').val()+ $('#second').val()+$('#third').val()+$('#fourth').val()+$('#fifth').val()+$('#sixth').val();
        if(otp.length == 6){
            let phoneNum = $('#phone').val();
            let response1 = await fetch('verifyotp?otp='+otp+'&phone='+phoneNum);
            let result1 = await response1.json();
            if(result1[0].status=="valid"){
                $('#phonetoggle').show();
                $('#box1').hide();
                $('#uploadid').show(500);
            }else if(result1[0].status=="invalid"){
                $('#wrongcode').show();
            }else if(result1[0].status=="expired"){
                $('#expiretext').show();

            }
        }

    }

     function verifyPhone(){
        $('#loader').fadeIn();
        $('#verifybtn').fadeOut();

        setTimeout(async () => {
            if( $('#phone').val().length ==11){
                let phone = $('#phone').val();
                let response = await fetch('verifyphone?phone='+phone);
                let result = await response.json();
                console.log(result[0].data.status);
                if(result[0].data.status == "OK"){
                    $('#loader').fadeOut();
                    $('#verifybtn').fadeOut();
                    $('#sentphone').html(result[0].phone);
                    $('#phoneinput').fadeOut();
                    $('#box1').show(500);
                }
            }
        }, 3000);


    }


    $('#state').change(function () {
        event.preventDefault()

        var state_id = this.value;

        if (state_id == null || state_id == "" || state_id.length < 1) {
            return false;
        } else {
            $.ajax({
                type: "GET",
                url: "../admin/getLgaByState",
                data: { state_id : state_id },
                success: function (response) {
                    $('#lga').empty();
                    $('#lga').append(response);
                }
            })
        }
    })
        </script>
		<!-- Specific Page Vendor -->


		<script src="<?=base_url();?>uploads/vendor/jquery-ui/jquery-ui.js"></script>
		<script src="<?=base_url();?>uploads/vendor/jqueryui-touch-punch/jquery.ui.touch-punch.js"></script>
		<script src="<?=base_url();?>uploads/vendor/jquery-appear/jquery.appear.js"></script>
		<script src="<?=base_url();?>uploads/vendor/bootstrapv5-multiselect/js/bootstrap-multiselect.js"></script>
		<script src="<?=base_url();?>uploads/vendor/jquery.easy-pie-chart/jquery.easypiechart.js"></script>
		<script src="<?=base_url();?>uploads/vendor/flot/jquery.flot.js"></script>
		<script src="<?=base_url();?>uploads/vendor/flot.tooltip/jquery.flot.tooltip.js"></script>
		<script src="<?=base_url();?>uploads/vendor/flot/jquery.flot.pie.js"></script>
		<script src="<?=base_url();?>uploads/vendor/flot/jquery.flot.categories.js"></script>
		<script src="<?=base_url();?>uploads/vendor/flot/jquery.flot.resize.js"></script>
		<script src="<?=base_url();?>uploads/vendor/jquery-sparkline/jquery.sparkline.js"></script>
		<script src="<?=base_url();?>uploads/vendor/raphael/raphael.js"></script>
		<script src="<?=base_url();?>uploads/vendor/morris/morris.js"></script>
		<script src="<?=base_url();?>uploads/vendor/gauge/gauge.js"></script>
		<script src="<?=base_url();?>uploads/vendor/snap.svg/snap.svg.js"></script>
		<script src="<?=base_url();?>uploads/vendor/liquid-meter/liquid.meter.js"></script>
		<script src="<?=base_url();?>uploads/vendor/jqvmap/jquery.vmap.js"></script>
		<script src="<?=base_url();?>uploads/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
		<script src="<?=base_url();?>uploads/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
		<script src="<?=base_url();?>uploads/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
		<script src="<?=base_url();?>uploads/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
		<script src="<?=base_url();?>uploads/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
		<script src="<?=base_url();?>uploads/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
		<script src="<?=base_url();?>uploads/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
		<script src="<?=base_url();?>uploads/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="<?=base_url();?>uploads/js/theme.js"></script>

		<!-- Theme Custom -->
		<script src="<?=base_url();?>uploads/js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="<?=base_url();?>uploads/js/theme.init.js"></script>

		<!-- Examples -->
		<script src="<?=base_url();?>uploads/js/examples/examples.header.menu.js"></script>

		<script src="<?=base_url();?>uploads/js/examples/examples.ecommerce.form.js"></script>


	</body>
</html>