<!doctype html>
<html class="fixed">
    <?php include('homereusables/head.php')?>
	
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
								<section class="card">
									<header class="card-header">
										<div class="card-actions">
											<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										</div>

										<h2 class="card-title">Create New Employee</h2>
									</header>
									<div class="card-body">
										
										<form class="form-horizontal form-bordered" method="post" id="create_admin">
										
											<div class="form-group row">
												<div class="col-lg-6">
													
                                                    <div class="input-group mb-3">
														<span class="input-group-text">
															<i class="fas fa-user"></i>
														</span>
														<input type="text" name="username"  class="form-control" placeholder="Username"  required>
													</div>
													<div class="input-group mb-3">
														<span class="input-group-text">
															<i class="fas fa-user"></i>
														</span>
														<input type="text" name="name" class="form-control" placeholder="Full Name"   required>
													</div>
													<div class="input-group mb-3">
														<span class="input-group-text">
															<i class="fas fa-envelope"></i>
														</span>
														<input type="text" name="email"  class="form-control" placeholder="Email"  required>
													</div>
													<div class="input-group mb-3">
														<span class="input-group-text">
															<i class="fas fa-user"></i>
														</span>
														<input type="text" name="role"  class="form-control" placeholder="Role Name"  required>
													</div>
													<div class="input-group mb-3">
														<span class="input-group-text">
															<i class="fas fa-user"></i>
														</span>
														<select  class="form-control" name="priviledge">
														    <option value="0">Full control</option>
														     <option value="1">Partial control</option>
														</select>
													</div>
                                                    <div class="input-group mb-3">
														<span class="input-group-text">
															<i class="fas fa-lock"></i>
														</span>
														<input type="text" name="password"  class="form-control"  id="genpass" placeholder="Password" value="" required>
														<button type="button" class="btn btn-primary" onclick="gfg_Run()">Generate Password</button>
													</div>
                                                   <input type="hidden" name="created_by" value="<?php echo $this->session->userdata('id') ?>">
                                                    <button type="submit" class="btn btn-primary" id="crtbtn">Create</button>
												</div>
											</div>
											
										</form>
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

<script>

        
  
        /* Function to generate combination of password */
        function generateP() {
            var pass = '';
            var str = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ' + 
                    'abcdefghijklmnopqrstuvwxyz0123456789@#$';
              
            for (let i = 1; i <= 8; i++) {
                var char = Math.floor(Math.random()
                            * str.length + 1);
                  
                pass += str.charAt(char)
            }
              
            return pass;
        }
  
        function gfg_Run() {
            document.getElementById("genpass").value = generateP();
            // console.log(generateP());
            
        }
	
function alt(){
	
}
const formElem = document.querySelector('#create_admin');
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
	let response = await fetch('new_admin', {
		method: 'POST',
		body: new FormData(formElem)
		});

		let result = await response.json();

		if(result.message == "yes"){
			// window.location = "dashboard";
			$(function(){
				new PNotify({
				title: 'Notification',
				text: 'Admin Created successfully',
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