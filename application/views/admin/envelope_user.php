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

										<h2 class="card-title">Envelope Users</h2>
									</header>
									<div class="card-body">

										<table class="table table-bordered table-striped mb-0" id="datatable-tabletools">

											<thead>
												<tr>
													
													<th>User ID</th>
													<th>Amount Picked</th>
													<th>Phone</th>
													<th>Action</th>
													
												</tr>
											</thead>
											<tbody>
												<?php foreach($all_envelope_users as $all_envelope_user){ ?>
													<tr>
														
														<td><?php echo $all_envelope_user['userid']; ?></td>
														<td>&#8358;<?php echo $all_envelope_user['amountpicked']; ?></td>
														<td><?php echo $all_envelope_user['phonenumber']; ?></td>
														<td>
															<a class="mb-1 mt-1 me-1 modal-sizes" href="#modalSM" onclick="getId(<?php echo $all_envelope_user['id']; ?>)"><i class="fa fa-trash"></i></a>
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
		let response = await fetch('deleteenvuser/'+id);
		
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