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

										<h2 class="card-title">Manage Users</h2>
									</header>
									<div class="card-body">

										<table class="table table-bordered table-striped mb-0" id="datatable-tabletools">

											<thead>
												<tr>
													<th>First Name</th>
													<th>Last Name</th>
													<th>User ID</th>
													<th>Mobile</th>
													<th>Picture</th>
													<th>Email</th>
													<th>Gender</th>
													<th>Agent</th>
													<th>Account Number</th>
													<th>Account Name</th>
													<th>Bank Name</th>
													<th>State</th>
													<th>Lga</th>
													<th>Status</th>
													<th>Actions</th>
												</tr>
											</thead>
											<tbody>
												
											<?php
											foreach($all_user as $user){
												?>
												<tr>
													<td><?php echo $user['firstname'] ?></td>
													<td><?php echo $user['lastname'] ?></td>
													<td><?php echo $user['user_id'] ?></td>
													<td><?php echo $user['phone'] ?></td>
													<td><img src="<?php echo base_url()."/".$user['ppix'] ?>" alt="" class="img-responsive"></td>
													<td><?php echo $user['email'] ?></td>
													<td><?php echo $user['gender'] ?></td>
													<td><?php echo $user['agent_id'] ?></td>
													<td><?php echo $user['account_number'] ?></td>
													<td><?php echo $user['account_name'] ?></td>
													<td><?php echo $user['account_name'] ?></td>
													<td><?php echo $user['state_id'] ?></td>
													<td><?php echo $user['lgas_id'] ?></td>
													<td><?php echo $user['status'] ?></td>
													<td>
                                                        <a href="edit_customer/<?php echo $user['id']; ?>"><i class="fa fa-edit"></i></a>
                                                        <a class="mb-1 mt-1 me-1 modal-sizes" href="#modalSM" onclick="getId(<?php echo $user['id'] ?>)"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                    
												</tr>
												<?php } ?>
                                                
												
												
											</tbody>
										</table>
									</div>
								</section>
							</div>
						</div>
                     		<!-- Modal SM -->

<div id="modalSM" class="modal-block modal-block-sm mfp-hide">
    <section class="card">
        <header class="card-header">
            <h2 class="card-title">Are you sure?</h2>
        </header>
        <div class="card-body">
            <div class="modal-wrapper">
                <div class="modal-text">
                    <p class="mb-0">Are you sure that you want to delete this user?</p>
                </div>
            </div>
        </div>
        <footer class="card-footer">
            <div class="row">
                <div class="col-md-12 text-end">
                    <button class="btn btn-primary" onclick="del()">Confirm</button>
                    <button class="btn btn-default modal-dismiss">Cancel</button>
                </div>
            </div>
        </footer>
    </section>
</div>
				<!-- end: page -->
				</section>
			</div>
<!-- Modal SM -->



			<?php include('homereusables/collapsible-right-nav.php')?>
		</section>

		<?php include('homereusables/scripts.php')?>

	</body>
</html>
<script>
	function getId($id){
		localStorage.setItem("id",$id);
	}

	async function del(){

		var id = localStorage.getItem('id');
		let response = await fetch('deleteuser/'+id);
		
    	let result = await response.json();
		if(result.message == "yes"){
			location.reload();

		}else{
			$(function(){
				new PNotify({
				title: 'Notification',
				text: "Error Deleting",
				type:"info",
				delay:"5000",
				icon:true
				});
 			 });
			
		}
	
	}
</script>
