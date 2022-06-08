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
                        <table class="table table-bordered table-striped mb-0 w-100" id="datatable">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Type</th>
                                    <th>Sender</th>
                                    <th>Receiver</th>
                                    <th>Amount(NGN)</th>
                                </tr>
                            </thead>
                            <tbody id="transactionList">

                            </tbody>
                        </table>
                    </div>
				</section>
			</div>

		</section>

		<?php include('homereusables/scripts.php')?>

        <script>
			$(document).ready(function(){
                function fetchTransactions() {
                    $.ajax({
                        url: '<?= base_url('client/transaction_list') ?>',
                        method: 'post',
                        data: {},
                        cache: false,
                        processData: false,
                        contentType: false,
                        success: function(response){
                            console.log(JSON.parse(response));
                            let resp = JSON.parse(response);
                            let innerHtml = "";
                            resp.mydata.map((data) => {
                                innerHtml += '<tr>'+
                                            '<td>'+ (data.date).split(' ')[0] +'</td>'+
                                            '<td>'+ data.message +'</td>'+
                                            '<td>'+ data.sender +'</td>'+
                                            '<td>'+ data.receiver +'</td>'+
                                            '<td class="center">'+data.amount+'</td>'+
                                        '</tr>';
                            });

                            $("#transactionList").html(innerHtml);
                        }
                    });
                }
                fetchTransactions();
			});
		</script>

	</body>
</html>