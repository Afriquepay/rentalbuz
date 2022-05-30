<!doctype html>
<html class="fixed">
    <?php include('homereusables/head.php')?>
	<link rel="stylesheet" href="<?=base_url();?>uploads/vendor/dropzone/basic.css" />
	<link rel="stylesheet" href="<?=base_url();?>uploads/vendor/dropzone/dropzone.css" />
    <link rel="stylesheet" href="<?=base_url();?>uploads/vendor/select2/css/select2.css" />
		<link rel="stylesheet" href="<?=base_url();?>uploads/vendor/select2-bootstrap-theme/select2-bootstrap.min.css" />

    <body>
		<section class="body">

			<?php include('homereusables/navbar.php')?>

			<div class="inner-wrapper">
				<?php include('homereusables/sidenav.php')?>

				<section role="main" class="content-body">
					<?php include('homereusables/breadcrumb.php')?>

				
					<!-- start: page -->
                
						<div class="row">
							<div class="col">
								<section class="card form-wizard" id="w4">
									<header class="card-header">
										<div class="card-actions">
											<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
											<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
										</div>

										<h2 class="card-title">Loan Information </h2>
									</header>
									<div class="card-body">
										<div class="wizard-progress wizard-progress-lg">
											<div class="steps-progress">
												<div class="progress-indicator"></div>
											</div>
											<ul class="nav wizard-steps">
												<li class="nav-item active">
													<a class="nav-link" href="#w4-account" data-bs-toggle="tab"><span>1</span>Loan Info</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" href="#w4-profile" data-bs-toggle="tab"><span>2</span>Owner's Info</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" href="#w4-billing" data-bs-toggle="tab"><span>3</span>House Info</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" href="#w4-confirm" data-bs-toggle="tab"><span>4</span>Guarantor Info</a>
												</li>
											</ul>
										</div>

										<form class="form-horizontal p-3" novalidate="novalidate">
											<div class="tab-content">
												<div id="w4-account" class="tab-pane active">
                                                    <div class="form-group row">
														<label class="col-sm-3 control-label text-sm-end pt-1" for="inputSuccess">Borrower</label>
														<div class="col-sm-5">
															<select class="form-control populate" data-plugin-selectTwo name="exp-month" required>
                                                                <?php 
                                                                    foreach($userVerify as $users){?>

                                                                    <option value="<?php  echo $users['id']; ?>"><?php echo $users['lastname']." ".$users['firstname']."(".$users['email'].")"; ?></option>
                                                                        
                                                                    <?php }
                                                                ?>
															</select>
														</div>
														
													</div>
                                                    <div class="form-group row">
														<label class="col-sm-3 control-label text-sm-end pt-1" for="inputSuccess">Duration(Month)</label>
														<div class="col-sm-5">
															<select class="form-control populate" data-plugin-selectTwo name="exp-month" required>
                                                                <?php 
                                                                    for($i=1; $i<=5; $i++){?>

                                                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                                        
                                                                    <?php }
                                                                ?>
															</select>
														</div>
														
													</div>
                                                    
                                                    <div class="form-group row">
														<label class="col-sm-3 control-label text-sm-end pt-1" for="inputSuccess">Loan Type</label>
														<div class="col-sm-5">
                                                        <div class="toggle toggle-primary toggle-sm" data-plugin-toggle>
								
								<section class="toggle">
									<label>What is Flat Type?</label>
									<div class="toggle-content">
										<p>say your company borrows $10,000 at 5 percent interest for three years, making monthly payments. Multiply $10,000 by 0.05 by 3 to get $1,500 in total interest. Since that's spread over 36 monthly payments, divide $1,500 by 36 to find that each payment includes $41.67 of interest</p>
									</div>
								</section>
								<section class="toggle">
									<label>What is Reducing Balance?</label>
									<div class="toggle-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Nullam tortor nunc, bibendum vitae semper a, volutpat eget massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer fringilla, orci sit amet posuere auctor, orci eros pellentesque odio, nec pellentesque erat ligula nec massa. Aenean consequat lorem ut felis ullamcorper posuere gravida tellus faucibus. Maecenas dolor elit, pulvinar eu vehicula eu, consequat et lacus. Duis et purus ipsum. In auctor mattis ipsum id molestie. Donec risus nulla, fringilla a rhoncus vitae, semper a massa. Vivamus ullamcorper, enim sit amet consequat laoreet, tortor tortor dictum urna, ut egestas urna ipsum nec libero. Nulla justo leo, molestie vel tempor nec, egestas at massa. Aenean pulvinar, felis porttitor iaculis pulvinar, odio orci sodales odio, ac pulvinar felis quam sit.</p>
									</div>
								</section>
							</div>
															<select class="form-control populate" data-plugin-selectTwo name="exp-month" required>
                   
                                                                    <option value="flat">Flat</option>
                                                                    <option value="flat">Reducing Balance</option>
                                                                   
															</select>
														</div>
														
													</div>
													<div class="form-group row pb-3">
														<label class="col-sm-3 control-label text-sm-end pt-1" for="w4-username">Amount</label>
														<div class="col-sm-5">
															<input type="text" class="form-control" name="amount" id="w4-username" required>
														</div>
													</div>
                                                    <div class="form-group row pb-3">
														<label class="col-sm-3 control-label text-sm-end pt-1" for="w4-username">Discription</label>
														<div class="col-sm-5">
															<textarea class="form-control" name="discription" id="w4-username"></textarea>
														</div>
													</div>
                                                    <div class="form-group row">
														<label class="col-sm-3 control-label text-sm-end pt-1" for="inputSuccess">Assign Agent</label>
														<div class="col-sm-5">
															<select class="form-control" name="exp-month" required>
                                                            <option>--------------------Select Agent-------------</option>
                                                                <?php 
                                                                    foreach($agentVerify as $agents){?>

                                                                    <option value=""><?php echo $agents['fullname']."(".$agents['staff_id'].")"; ?></option>
                                                                        
                                                                    <?php }
                                                                ?>
															</select>
														</div>
														
													</div>
													
												</div>
												<div id="w4-profile" class="tab-pane">
													<div class="form-group row">
														<label class="col-sm-3 control-label text-sm-end pt-1" for="w4-first-name">Owner's Name</label>
														<div class="col-sm-9">
															<input type="text" class="form-control" name="first-name" id="w4-first-name" required>
														</div>
													</div>
													<div class="form-group row">
														<label class="col-sm-3 control-label text-sm-end pt-1" for="w4-last-name">Owner's Email</label>
														<div class="col-sm-9">
															<input type="text" class="form-control" name="last-name" id="w4-last-name" required>
														</div>
													</div>
                                                    <div class="form-group row">
														<label class="col-sm-3 control-label text-sm-end pt-1" for="w4-last-name">Owner's phone</label>
														<div class="col-sm-9">
															<input type="number" class="form-control" name="last-name" id="w4-last-name" required>
														</div>
													</div>
                                                 
												</div>
												<div id="w4-billing" class="tab-pane">
                                                    <div class="form-group row">
												    		<label class="col-sm-3 control-label text-sm-end pt-1" for="w4-last-name">House State</label>
														<div class="col-sm-9">
                                                            <select class="form-control" name="exp-month" required id="state">
                                                                <option>-----------------------------------------Select State-----------------------------</option>
                                                                    <?php 
                                                                        foreach($states as $state){?>

                                                                        <option value="<?php echo $state['id']; ?>"><?php echo $state['name']; ?></option>
                                                                            
                                                                        <?php }
                                                                    ?>
                                                            </select>
														</div>
													</div>
                                                    <div class="form-group row">
												    		<label class="col-sm-3 control-label text-sm-end pt-1" for="w4-last-name">House Local goverment</label>
														<div class="col-sm-9">
                                                            <select class="form-control" name="exp-month" id="lga" required>
                                                               
                                                            </select>
														</div>
													</div>
                                                    <div class="form-group row">
														<label class="col-sm-3 control-label text-sm-end pt-1" for="w4-last-name">House's pics</label>
														<div class="col-sm-9">
															<input type="file" class="form-control" name="file[]" id="w4-last-name" multiple required>
														</div>
													</div>
                                                    <div class="form-group row pb-3">
														<label class="col-sm-3 control-label text-sm-end pt-1" for="w4-username">House Discription & Address</label>
														<div class="col-sm-5">
															<textarea class="form-control" name="discription" id="w4-username"></textarea>
														</div>
													</div>
													
												</div>
												<div id="w4-confirm" class="tab-pane">
                                                    <div class="col-sm-9"><h2>Guarantor 1</h2></div>
													<div class="form-group row">
														<label class="col-sm-3 control-label text-sm-end pt-1" for="w4-email">Guarantor Fullname</label>
														<div class="col-sm-9">
															<input type="text" class="form-control" name="email" id="w4-email" required>
														</div>
													</div>
                                                    <div class="form-group row">
														<label class="col-sm-3 control-label text-sm-end pt-1" for="w4-email">Guarantor Email</label>
														<div class="col-sm-9">
															<input type="text" class="form-control" name="email" id="w4-email" required>
														</div>
													</div>

                                                    <div class="form-group row">
														<label class="col-sm-3 control-label text-sm-end pt-1" for="w4-email">Guarantor Phone</label>
														<div class="col-sm-9">
															<input type="text" class="form-control" name="email" id="w4-email" required>
														</div>
													</div>

                                                    <div class="form-group row">
														<label class="col-sm-3 control-label text-sm-end pt-1" for="w4-email">Guarantor Address</label>
														<div class="col-sm-9">
															<input type="text" class="form-control" name="email" id="w4-email" required>
														</div>
													</div>
                                                    <div class="form-group row">
														<label class="col-sm-3 control-label text-sm-end pt-1" for="w4-last-name">Guarantor's pics</label>
														<div class="col-sm-9">
															<input type="file" class="form-control" name="file[]" id="w4-last-name" multiple required>
														</div>
													</div>

                                                    <div class="col-sm-9"><h2>Guarantor 2</h2></div>
													<div class="form-group row">
														<label class="col-sm-3 control-label text-sm-end pt-1" for="w4-email">Guarantor Fullname</label>
														<div class="col-sm-9">
															<input type="text" class="form-control" name="email" id="w4-email" required>
														</div>
													</div>
                                                    <div class="form-group row">
														<label class="col-sm-3 control-label text-sm-end pt-1" for="w4-email">Guarantor Email</label>
														<div class="col-sm-9">
															<input type="text" class="form-control" name="email" id="w4-email" required>
														</div>
													</div>

                                                    <div class="form-group row">
														<label class="col-sm-3 control-label text-sm-end pt-1" for="w4-email">Guarantor Phone</label>
														<div class="col-sm-9">
															<input type="text" class="form-control" name="email" id="w4-email" required>
														</div>
													</div>

                                                    <div class="form-group row">
														<label class="col-sm-3 control-label text-sm-end pt-1" for="w4-email">Guarantor Address</label>
														<div class="col-sm-9">
															<input type="text" class="form-control" name="email" id="w4-email" required>
														</div>
													</div>
                                                    <div class="form-group row">
														<label class="col-sm-3 control-label text-sm-end pt-1" for="w4-last-name">Guarantor's pics</label>
														<div class="col-sm-9">
															<input type="file" class="form-control" name="file[]" id="w4-last-name" multiple required>
														</div>
													</div>
													<div class="form-group row">
														<div class="col-sm-3"></div>
														<div class="col-sm-9">
															<div class="checkbox-custom">
																<input type="checkbox" name="terms" id="w4-terms" required>
																<label for="w4-terms">I agree to the terms of service</label>
															</div>
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>
									<div class="card-footer">
										<ul class="pager">
											<li class="previous disabled">
												<a><i class="fas fa-angle-left"></i> Previous</a>
											</li>
											<li class="finish hidden float-end">
												<a>Finish</a>
											</li>
											<li class="next">
												<a>Next <i class="fas fa-angle-right"></i></a>
											</li>
										</ul>
									</div>
								</section>
							</div>
						</div>
                        
                            
					<!-- end: page -->
				</section>
			</div>

			<?php include('homereusables/collapsible-right-nav.php')?>
		</section>

		<?php include('homereusables/scripts.php')?>

	</body>
</html>
<!-- Specific Page Vendor -->
<script src="<?=base_url();?>uploads/vendor/jquery-validation/jquery.validate.js"></script>
<script src="<?=base_url();?>uploads/vendor/bootstrapv5-wizard/jquery.bootstrap.wizard.js"></script>
<script src="<?=base_url();?>uploads/js/examples/examples.wizard.js"></script>

<script src="<?=base_url();?>uploads/vendor/select2/js/select2.js"></script>
		<script src="<?=base_url();?>uploads/vendor/dropzone/dropzone.js"></script>
        <script src="<?=base_url();?>uploads/vendor/pnotify/pnotify.custom.js"></script>

		<script src="<?=base_url();?>uploads/js/examples/examples.header.menu.js"></script>
		<script src="<?=base_url();?>uploads/js/examples/examples.ecommerce.form.js"></script>


<script>
	

    $('#state').change(function () {
        event.preventDefault()

        var state_id = this.value;

        if (state_id == null || state_id == "" || state_id.length < 1) {
            return false;
        } else {
            $.ajax({
                type: "GET",
                url: "getLgaByState",
                data: { state_id : state_id },
                success: function (response) {
                    $('#lga').empty();
                    $('#lga').append(response);
                }
            })
        }
    })


function alt(){
	
}
const formElem = document.querySelector('#create_user');
formElem.addEventListener('submit', (e) => {
  // on form submission, prevent default
  e.preventDefault();
		const id = document.querySelector("#crtbtn");
		id.innerHTML= "<i class='fa fa-spinner fa-spin'></i>Creating User...";
	setTimeout(() => {
		const id = document.querySelector("#crtbtn");
		id.innerHTML= "<i class='fa fa-spinner fa-spin'></i>Please Wait...";
	}, 2000);
  setTimeout( async () => {
	const formm = new FormData(formElem);
	let response = await fetch('createUser', {
		method: 'POST',
		body: new FormData(formElem)
		});

		let result = await response.json();

		if(result.message == "yes"){
			// window.location = "dashboard";
			$(function(){
				new PNotify({
				title: 'Notification',
				text: 'User Created successfully',
				type:"success",
				delay:"3000",
				icon:true
				});
 			 });
			  formElem.reset();
			  const id = document.querySelector("#crtbtn");
			id.innerHTML= "Create";

		}else{
			$(function(){
				new PNotify({
				title: 'Notification',
				text: result.message,
				type:"info",
				delay:"5000",
				icon:true
				});
 			 });
			const id = document.querySelector("#crtbtn");
			id.innerHTML= "Create";
		}
	}, 2000);
  // construct a FormData object, which fires the formdata event
    
});


</script>