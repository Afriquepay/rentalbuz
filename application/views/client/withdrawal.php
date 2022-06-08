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

					<div class="row">
                        <div class="col-md-4">
                            <div class="w-100 p-3 shadow">
                                <form id="withdrawForm" method="post">
                                     <div class="form-group row">
                                        <label class="col-sm-12 control-label text-sm-end pt-2">Bank </label>
                                        <div class="col-sm-12">
                                            <select class="form-control" name="code" id="code">
                                                 <?php 
                          $c = count($bank );
               foreach ($bank as $intIndex => $objRecord) {
    // print "$intIndex => {$objRecord->name}\"; ?>
                          <option value="<?=$objRecord->code;?>"><?=$objRecord->name;?></option>
                          <?php 
                        }
                   
                        ?>
                                            </select>
                                        </div>
                                        <span class="text-danger errorMsg" style="display: none;" id="bankError">Choose a bank</span>
                                    </div>
                                      <div class="form-group row">
                                        <label class="col-sm-12 control-label text-sm-end pt-2">Account number </label>
                                        <div class="col-sm-12">
                                            <input name="no" class="form-control" id="no" placeholder="2252145213"

                                            onkeyup="rangeSlide(this.value)" required="" type="number"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"  pattern="[0-9.]+"

                                            >
                                        </div>
                                        <span class="text-danger errorMsg" style="display: none;" id="numError">Enter a valid account number</span>
                                    </div>

                                      <div class="col-12" id="first" style="display:none;">
                      <div class="form-group mg-b-0">
                    <div class="alert alert-danger mg-b-0" role="alert">
   <?php /*<button aria-label="Close" class="close" data-dismiss="alert" type="button">
    <span aria-hidden="true">&times;</span>
  </button> */ ?>
 <div id="mytext"></div>
</div></div></div>

 <div class="col-12" id="second" style="display:none;">
                      <div class="form-group mg-b-0">
               <div class="alert alert-success" role="alert">
 <?php /*   <button aria-label="Close" class="close" data-dismiss="alert" type="button"> 
     <span aria-hidden="true">&times;</span>
  </button>*/ ?>
    <strong><div id="mytxt"></div></strong>
</div>
</div></div>

                                    <div class="form-group row">
                                        <label class="col-sm-12 control-label text-sm-end pt-2">Account name </label><br/>
                                        <div class="col-sm-12">
                                            <input type="text" name="namex" class="form-control" placeholder="Account name" id="namex" disabled>
                                                     <input type="hidden" name="name" id="name">
                                             <input type="hidden" name="detail" id="detail">
<input type="hidden" name="userid" value="<?=$userid;?>" id="userid">
                                              <input type="hidden" name="loginhash" value="<?=$hash;?>" id="loginhash">
                                        </div>
                                        <span class="text-danger errorMsg" style="display: none;" id="nameError">Enter a valid account name</span>
                                    </div>
                                   
                                  
                                    <div class="form-group row">
                                        <label class="col-sm-12 control-label text-sm-end pt-2">Amount </label>
                                        <div class="col-sm-12">
                                            <input type="number" name="amount" class="form-control" placeholder="1000" id="amount">
                                        </div>
                                        <span class="text-danger errorMsg" style="display: none;" id="amountError">Enter an amount not greater than your wallet balance</span>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12 text-center">
                                            <button class="btn btn-primary mt-2" type="sumbit" id="withdrawButton">Withdraw now</button>
                                            <div class="spinner-border text-primary" id="loader" style="display: none;" role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="w-100 p-3">
                                <table class="table table-bordered table-striped mb-0 w-100">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Acct Name</th>
                                            <th>Acct No</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="withdrawList">
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
				</section>
			</div>

		</section>

		<?php include('homereusables/scripts.php')?>

        <script>
			$(document).ready(function(){
				$("#withdrawForm").on('submit', function(e){
					e.preventDefault();
					const formData = new FormData(this);
                         
					let name = $("#name").val();
					let code = $("#code").val();
					let no = $("#no").val();
					let amount = $("#amount").val();
                    let walletAmount = '<?=$this->session->userdata(SESS_PRE. "userWalletAmount")?>';

                    $(".errorMsg").hide(500);

					console.log(name + ' - ' + code + ' - ' + no + ' - ' + amount + ' - ' + walletAmount);
					if(name == ""){
						$("#nameError").show(500);
					}else{
						if(code == ""){
							$("#bankError").show(500);
						}else{
							if(no == "" || no.length !== 10){
								$("#numError").show(500);
							}else{
								if(amount == "" || Number(amount) > Number(walletAmount)){
									$("#amountError").show(500);
								}else{
                                    console.log("Good to go");
                                    $("#withdrawButton").hide();
                                    $("#loader").show();

                                    $.ajax({
                  url: '<?= base_url('client/sendbankmoney_new/'.$randomStrings) ?>',
                                        method: 'post',
                                        data: formData,
                                        cache: false,
                                        processData: false,
                                        contentType: false,
                                        success: function(response){
                                            console.log(JSON.parse(response));
                                            let resp = JSON.parse(response);
                                            if(resp.status != "True"){
                                                new PNotify({
                                                    title: 'Error',
                                                    text: resp.message,
                                                    type: 'error'
                                                });

                                                $("#withdrawButton").show();
                                                $("#loader").hide();
                                            }else{
                                                new PNotify({
                                                    title: 'Success',
                                                    text: resp.message,
                                                    type: 'success'
                                                });

                                                setTimeout(() => {
                                                    $("#withdrawButton").show();
                                                    $("#loader").hide();
                                                    window.location.replace("<?=base_url()?>client/withdraw");
                                                }, 2000);
                                            }
                                        }
                                    });
								}	
							}
						}	
					}
				});

                function fetchWithdrawList() {
                    $.ajax({
                        url: '<?= base_url('client/withdraw_list') ?>',
                        method: 'post',
                        data: {},
                        cache: false,
                        processData: false,
                        contentType: false,
                        success: function(response){
                            console.log(JSON.parse(response));
                            let resp = JSON.parse(response);
                            let innerHtml = "";
                            resp.map((data) => {
                                innerHtml += '<tr>'+
                                            '<td>'+ (data.date).split(' ')[0] +'</td>'+
                                            '<td>'+ data.account_name +'</td>'+
                                            '<td>'+ data.account_number +'</td>'+
                                            '<td class="center">'+ data.amount +'</td>'+
                                            '<td class="center"><i>'+data.status+'</i></td>'+
                                            '<td class="center"><button class="btn btn-sm btn-danger">Cancel</button></td>'+
                                        '</tr>';
                            });

                            $("#withdrawList").html(innerHtml);
                        }
                    });
                }
                fetchWithdrawList();
			});




  function httpGet(theUrl)
{
    let xmlhttp;
    
    if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    } else { // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    
    xmlhttp.onreadystatechange=function() {
        if (xmlhttp.readyState==4 && xmlhttp.status==200) {
            return xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET", theUrl, false);
    xmlhttp.send();
    
    return xmlhttp.response;
}
function rangeSlide(value) {
var coun = value.length ;
var doitnow = 0 ;



var bankcode = document.getElementById("code").value;
if(coun > 10){
 value =value.slice(0, -1) ;
document.getElementById('no').value= value ;
document.getElementById("second").style.display = "none";
document.getElementById("first").style.display = "block";
  document.getElementById('mytext').innerHTML = "please wait...";
doitnow = 1 ;
}else if(coun == 10){
  document.getElementById("second").style.display = "none";
document.getElementById("first").style.display = "block";
  document.getElementById('mytext').innerHTML = "please wait...";
  doitnow = 1 ;
}else{
  document.getElementById("second").style.display = "none";
document.getElementById("first").style.display = "block";
  document.getElementById('mytext').innerHTML = "waiting for the account number...";
}


if(doitnow > 0){
var res = httpGet("https://afriquepay.com/client/resolveaccount/"+value+"/"+bankcode) ;
if(res == ""){
    document.getElementById('mytext').innerHTML = "Invalid account! please check";
   document.getElementById("second").style.display = "none";
   document.getElementById("first").style.display = "block";

}else{
 let resp = JSON.parse(res);
    document.getElementById('mytxt').innerHTML = ""+resp.accountname;
document.getElementById('namex').value = ""+resp.accountname;
document.getElementById('name').value = ""+resp.accountname;
document.getElementById('detail').value = ""+resp.accountname;
   document.getElementById("second").style.display = "block";
   document.getElementById("first").style.display = "none";
}



}




//alert(value) ;

}







		</script>

	</body>
</html>