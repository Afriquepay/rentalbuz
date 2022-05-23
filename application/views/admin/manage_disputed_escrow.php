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

										<h2 class="card-title">Manage Disputed Escrow</h2>
									</header>
									<div class="card-body">

										<table class="table table-bordered table-striped mb-0" id="datatable-tabletools">

											<thead>
												<tr>
													<th>Sender</th>
													<th>Receiver</th>
													<th>Amount</th>
													<th>Message</th>
													<th>Status</th>
													<th>Created Date</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												
											<?php foreach($all_transac as $transac){?>
												<tr>
													<td><?= $transac['sender'] ?></td>
													<td><?= $transac['receiver'] ?></td>
													<td>&#8358;<?= $transac['amount'] ?></td>
													<td><?= $transac['message'] ?></td>
													<td><?= $transac['status']== 2 ? "Disputed" : "Under review" ?></td>
													<td><?= $transac['date'] ?></td>
													<td>
														<a href="view-escrow/<?=  $transac['id'] ?>"><i class="fa fa-eye"></i></a>
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
                    <button class="btn btn-primary modal-confirm">Confirm</button>
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
