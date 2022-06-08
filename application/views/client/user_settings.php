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
							<div class="tabs">
								<ul class="nav nav-tabs nav-justified">
									<li class="nav-item active">
										<a class="nav-link" data-bs-target="#popular10" href="#popular10" data-bs-toggle="tab" class="text-center">General</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-bs-target="#recent10" href="#recent10" data-bs-toggle="tab" class="text-center">Other Information</a>
									</li>
                                    <li class="nav-item">
										<a class="nav-link" data-bs-target="#document" href="#document" data-bs-toggle="tab" class="text-center">Verifications</a>
									</li>
                                   
								</ul>
								<div class="tab-content">
									<div id="popular10" class="tab-pane active">
                                    <form class="ecommerce-form action-buttons-fixed" action="#" id="generalform" method="post" enctype='multipart/form-data' >
                                        
                                      
                                        <div class="row">
                                            <div class="col">
                                                <section class="card card-modern card-big-info">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-lg-2-5 col-xl-1-5">
                                                            <img id="userpix" src="../<?php echo $userinfo[0]['ppix'] ? $userinfo[0]['ppix'] : 'http://via.placeholder.com/150x150'?>" style="border-radius:50%" width="150px" height="150px" />
                                                                <input type="file" id="myfile" style="display: none;" name="userimage"/>  
                                                                <h2 class="card-big-info-title">User Profile Pix</h2>
                                                                <p>Click on the circle to select image</p>
                                                                
                                                                
                                                            </div>
                                                            <div class="col-lg-12-8 col-xl-4-5">
                                                                <div class="row">
                                                                <div class="col-md-6">
                                                                        <div class="form-group  pb-3">
                                                                            <label class="col-lg-12 col-xl-12 control-label mb-0">User ID</label>
                                                                            <div class="col-lg-12 col-xl-12">
                                                                                <input type="text" class="form-control form-control-modern" name="userid" value="<?php echo $userinfo[0]['user_id']; ?>" readonly />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group  pb-3">
                                                                            <label class="col-lg-12 col-xl-12 control-label mb-0">First Name</label>
                                                                            <div class="col-lg-12 col-xl-12">
                                                                                <input type="text" class="form-control form-control-modern" name="firstname" value="<?php echo $userinfo[0]['firstname']; ?>" required />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group  pb-3">
                                                                            <label class="col-lg-12 col-xl-12 control-label mb-0">Last Name</label>
                                                                            <div class="col-lg-12 col-xl-12">
                                                                                <input type="text" class="form-control form-control-modern" name="lastname" value="<?php echo $userinfo[0]['lastname']; ?>" required />
                                                                            </div>
                                                                        </div>
                                                                    </div> 
                                                                    <div class="col-md-6">
                                                                        <div class="form-group  pb-3">
                                                                            <label class="col-lg-12 col-xl-12 control-label mb-0">Email</label>
                                                                            <div class="col-lg-12 col-xl-12">
                                                                                <input type="email" class="form-control form-control-modern" name="email" value="<?php echo $userinfo[0]['email']; ?>" required readonly />
                                                                            </div>
                                                                        </div>
                                                                    </div> 
                                                                   
                                                                    <div class="col-md-6">
                                                                        <div class="form-group  pb-3">
                                                                            <label class="col-lg-12 col-xl-12 control-label mb-0">Gender</label>
                                                                            <div class="col-lg-12 col-xl-12">
                                                                                <select class="form-control form-control-modern" name="gender" required >
                                                                                    <option value="male" <?php echo $userinfo[0]['gender']== "male" ? "selected" : ''?>>Male</option>
                                                                                    <option value="female" <?php echo $userinfo[0]['gender']== "female" ? "selected" : ''?>>Female</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div> 
                                                                    <div class="col-md-6">
                                                                    
                                                                
                                                                <p style="font-size:0.9em">Note: (1) Image must be clear</p>   
                                                                      <p style="font-size:0.9em">(2) Image with good resolution</p>
                                                                      <p style="font-size:0.9em">(3) Image must be your recent picture</p>
                                                                      <p style="font-size:0.9em">(4) Image must show your face</p>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div> 
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                        <div class="row action-buttons">
                                           
                                            <div class="col-12 col-md-auto ms-md-auto mt-3 mt-md-0 ms-auto">
                                                <button type="submit" class="submit-button btn btn-primary btn-px-4 py-3 d-flex align-items-center font-weight-semibold line-height-1" data-loading-text="Loading..." id="crtbtngeneral">
                                                    <i class="bx bx-save text-4 me-2"></i> Save
                                                </button>    
                                                <div class="spinner-border text-primary" style="display:none;" id="loaderforgeneralform" role="status">
                                                    <span class="visually-hidden">Loading...</span>
                                                </div>
                                            </div>
                                        </div>
					                </form>
								</div>
								<div id="recent10" class="tab-pane">
                                    <form class="ecommerce-form action-buttons-fixed" action="#" id="otherinfo">
                                            
                                        <div class="row">
                                            <div class="col">
                                                <section class="card card-modern card-big-info">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-lg-2-5 col-xl-1-5">
                                                                <i class="card-big-info-icon bx bx-map"></i>
                                                                <h2 class="card-big-info-title">Other Info</h2>
                                                                <p class="card-big-info-desc">Please provide a valid information as we would verify before any loan</p>
                                                            </div>
                                                            <div class="col-lg-12-8 col-xl-4-5">
                                                                <div class="row">
                                                                <div class="col-md-6">
                                                                        <div class="form-group  pb-3">
                                                                            <label class="col-lg-12 col-xl-12 control-label mb-0">State of Residence</label>
                                                                            <div class="col-lg-12 col-xl-12">
                                                                                <select class="form-control form-control-modern" name="state" required id="state" >
                                                                                    <?php 
                                                                                        foreach($states as $state){?>
                                                                                        
                                                                                        <option value="<?php echo $state['id'];?>" <?php echo $userinfo[0]['state_id'] == $state['id'] ? "selected" : "" ?>><?php echo $state['name'];?></option>

                                                                                     <?php  
                                                                                      }
                                                                                    ?>

                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div> 
                                                                    <div class="col-md-6">
                                                                        <div class="form-group  pb-3">
                                                                            <label class="col-lg-12 col-xl-12 control-label mb-0">LGA of Residence</label>
                                                                            <div class="col-lg-12 col-xl-12">
                                                                                <select class="form-control form-control-modern" name="lga" required id="lga">
                                                                                      
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div> 
                                                                    <div class="col-md-6">
                                                                        <div class="form-group  pb-3">
                                                                            <label class="col-lg-12 col-xl-12 control-label mb-0">Address 1</label>
                                                                            <div class="col-lg-12 col-xl-12">
                                                                                <input type="text" class="form-control form-control-modern" name="address1" value="<?php echo $userinfo[0]['addr1'] ?>" required />
                                                                            </div>
                                                                        </div>
                                                                    </div> 
                                                                    <div class="col-md-6">
                                                                        <div class="form-group  pb-3">
                                                                            <label class="col-lg-12 col-xl-12 control-label mb-0">Address2</label>
                                                                            <div class="col-lg-12 col-xl-12">
                                                                                <input type="text" class="form-control form-control-modern" name="address2" value="<?php echo $userinfo[0]['addr2'] ?>" required />
                                                                            </div>
                                                                        </div>
                                                                    </div> 
                                                                    <div class="col-md-6">
                                                                        <div class="form-group  pb-3">
                                                                            <label class="col-lg-12 col-xl-12 control-label mb-0">Country</label>
                                                                            <div class="col-lg-12 col-xl-12">
                                                                                <input type="text" class="form-control form-control-modern" name="country" value="Nigeria" required readonly />
                                                                            </div>
                                                                        </div>
                                                                    </div> 
                                                                    
                                                                    <div class="col-md-6">
                                                                        <div class="form-group  pb-3">
                                                                            <label class="col-lg-12 col-xl-12 control-label mb-0">Occupation</label>
                                                                            <div class="col-lg-12 col-xl-12">
                                                                                <input type="text" class="form-control form-control-modern" name="occupation" value="<?php echo $userinfo[0]['occupation'] ?>" required />
                                                                            </div>
                                                                        </div>
                                                                    </div> 
                                                                    <div class="col-md-6">
                                                                        <div class="form-group  pb-3">
                                                                            <label class="col-lg-12 col-xl-12 control-label mb-0">Company/Industry/Institute Name</label>
                                                                            <div class="col-lg-12 col-xl-12">
                                                                                <input type="text" class="form-control form-control-modern" name="industry" value="<?php echo $userinfo[0]['industry'] ?>" required />
                                                                            </div>
                                                                        </div>
                                                                    </div> 
                                                                </div>
                                                            </div> 
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                        <div class="row action-buttons">
                                        
                                            <div class="col-12 col-md-auto ms-md-auto mt-3 mt-md-0 ms-auto">
                                                <button type="submit" id="crtbtnother" class="submit-button btn btn-primary btn-px-4 py-3 d-flex align-items-center font-weight-semibold line-height-1" data-loading-text="Loading...">
                                                    <i class="bx bx-save text-4 me-2"></i> Save
                                                </button>    
                                        
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div id="document" class="tab-pane">
                                    
                                            
                                        <div class="row">
                                            <div class="col">
                                                <section class="card card-modern card-big-info">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-lg-2-5 col-xl-1-5">
                                                                <i class="card-big-info-icon bx bx-map"></i>
                                                                <h2 class="card-big-info-title">Other Info</h2>
                                                                <p class="card-big-info-desc">Please provide a valid information as we would verify before any loan</p>
                                                            </div>
                                                            <div class="col-lg-12-8 col-xl-4-5">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                            <div class="toggle toggle-primary toggle-md" data-plugin-toggle id="phonetoggle" style="display:<?php echo $userinfo[0]['phone'] ? '' : 'none' ?>">
                                                                                <section class="toggle">
                                                                                    <label>Phone</label>
                                                                                    <div class="toggle-content">
                                                                                        <div class="col-md-6">
                                                                                            <div class="form-group  pb-3">
                                                                                                <label class="col-lg-12 col-xl-12 control-label mb-0">Phone number</label>
                                                                                                <div class="col-lg-12 col-xl-12">
                                                                                                    <input type="text" class="form-control form-control-modern" name="phone" value="<?php echo $userinfo[0]['phone']; ?>" readonly/>
                                                                                                    <span class="text-success">Verified <i class="fa fa-check fa-2x"></i></span> 
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </section>
                                                                            </div>
                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                            <div class="toggle toggle-primary toggle-md" data-plugin-toggle id="idtoggle" style="display:<?php echo $userinfo[0]['id_back'] ? '' : 'none' ?>">
                                                                                <section class="toggle">
                                                                                    <label>Identity Card</label>
                                                                                    <div class="toggle-content">
                                                                                    <div class="col-lg-6 col-12">
                                                                                    <div class="card bg-light">
                                                                                        <div class="card-big-info-title">
                                                                                            <h4>ID Front</h4>
                                                                                        </div>
                                                                                        <div class="card-body b">
                                                                                        <img src="../<?php echo $userinfo[0]['id_front']?>" id="frontimg"  alt="" width="300px" height="150px">
                                                                                         

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6 col-12">
                                                                                    <div class="card bg-light">
                                                                                        <div class="card-big-info-title">
                                                                                        <h4>ID Back</h4>
                                                                                        </div>
                                                                                        <div class="card-body b">
                                                                                        <img src="../<?php echo $userinfo[0]['id_back']?>" id="backimg" alt="" width="300px" height="150px">
                                                                                          

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <h4>Under Review</h4>
                                                                                    </div>
                                                                                </section>
                                                                            </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                       
                                                                        <div class="container height-100 d-flex justify-content-center align-items-center" >
                                                                            <div class="position-relative" id="box1">
                                                                                <div class="card p-2 text-center">
                                                                                    <span>Enter the code sent to <span id="sentphone"> </span></span>
                                                                                    <span>Code Expired in 3 minute's time Didn't get a code?</span>
                                                                                    <span onclick="verifyPhone()" style="color:blue;font-weight:bold;">Try again</span>

                                                                                    <div id="otp" class="inputs d-flex flex-row justify-content-center mt-2">
                                                                                         <input class="m-2 text-center form-control rounded" type="text" id="first" maxlength="1" /> 
                                                                                         <input class="m-2 text-center form-control rounded" type="text" id="second" maxlength="1" />
                                                                                          <input class="m-2 text-center form-control rounded" type="text" id="third" maxlength="1" /> 
                                                                                          <input class="m-2 text-center form-control rounded" type="text" id="fourth" maxlength="1" /> 
                                                                                          <input class="m-2 text-center form-control rounded" type="text" id="fifth" maxlength="1" /> 
                                                                                          <input class="m-2 text-center form-control rounded" type="text" id="sixth" maxlength="1" /> 
                                                                                    </div>
                                                                                    <span class="text-danger" id="expiretext" style="display:none">Code expire please try again</span>
                                                                                    <span class="text-danger" id="wrongcode" style="display:none">Please enter correct Code</span>
                                                                                    <div class="mt-4"> <button class="btn btn-danger px-4 validate" type="button" onclick="checkotp()">Verify</button> </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group  pb-3" id="phoneinput" style="display:<?php echo $userinfo[0]['phone'] ? 'none' : '' ?>">
                                                                            <label class="col-lg-12 col-xl-12 control-label mb-0">Phone</label>
                                                                            <div class="col-lg-12 col-xl-12">
                                                                                <input type="text" class="form-control form-control-modern" id="phone" onkeyup="checkPhone(this)" name="phone"  pattern="\d*" maxlength="11" required />
                                                                        </div>
                                                                            <div class="mt-1">
                                                                                <button class="btn btn-primary" type="button" onclick="verifyPhone()" id="verifybtn" disabled>Verify</button>
                                                                                
                                                                                <div class="spinner-border text-primary" style="display:none;" id="loader" role="status">
                                                                                    <span class="visually-hidden">Loading...</span>
                                                                                </div>
                                                                                  
                                                                            </div>
                                                                        </div>
                                                                    </div> 
                                                                    <form id="uploadid" style="display:<?php echo $userinfo[0]['id_back'] ? 'none' : '' ?>">
                                                                        <div class="col-lg-12">
                                                                            <div class="row">
                                                                            <h2 class="card-big-info-title">Upload a Valid National Id card</h2>
                                                                                <div class="col-lg-6 col-12">
                                                                                    <div class="card bg-light">
                                                                                        <div class="card-big-info-title">
                                                                                            <button class="btn btn-primary" type="button" id="frontbtn">
                                                                                                <li class="fa fa-plus"></li> Upload ID front
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="card-body b">
                                                                                        <img src="http://via.placeholder.com/300x150" id="frontimg"  alt="" width="300px" height="150px">
                                                                                        <input type="file" id="front" style="display: none;" name="frontid"/>  

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6 col-12">
                                                                                    <div class="card bg-light">
                                                                                        <div class="card-big-info-title">
                                                                                            <button class="btn btn-primary" type="button" id="backbtn">
                                                                                                <li class="fa fa-plus"></li> Upload ID Back
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="card-body b">
                                                                                        <img src="http://via.placeholder.com/300x150" id="backimg" alt="" width="300px" height="150px">
                                                                                        <input type="file" id="back" style="display: none;" name="backid"/>  

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-3 mt-1">
                                                                                    <button class="btn btn-primary" type="submit" id="crtbtnid">Submit</button>
                                                                                </div>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div> 
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                        
                                   
                                </div>
							</div>
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
function renderImg(imgId,inputId){
    inputId.onchange = evt => {
        const [file] = inputId.files
        if (file) {
            imgId.src = URL.createObjectURL(file)
        }
    }
}

renderImg(userpix,myfile);
renderImg(frontimg,front);
renderImg(backimg,back);


    $('#userpix').click(function(){
	    $('#myfile').click()
    });
    

    $('#backbtn').click(function(){
	    $('#back').click()
    });

    $('#frontbtn').click(function(){
	    $('#front').click()
    });

const formElem = document.querySelector('#generalform');
formElem.addEventListener('submit', (e) => {
  // on form submission, prevent default
  e.preventDefault();
		const id = document.querySelector("#crtbtngeneral");
		id.innerHTML= "<i class='fa fa-spinner fa-spin'></i>Updating...";
	setTimeout(() => {
		const id = document.querySelector("#crtbtngeneral");
		id.innerHTML= "<i class='fa fa-spinner fa-spin'></i>Please Wait...";
	}, 2000);
  setTimeout( async () => {
	const formm = new FormData(formElem);
	let response = await fetch('updategeneralform', {
		method: 'POST',
		body: new FormData(formElem)
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
			  const id = document.querySelector("#crtbtngeneral");
			id.innerHTML= "<i class='bx bx-save text-4 me-2'></i> Save";

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