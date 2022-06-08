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
                  <div class="d-flex justify-content-start align-items-center my-2">
                     <div class="form-group mb-3" style="display: none;">
                        <input name="escrowIdHolder" id="escrowIdHolder" type="text" class="form-control form-control-lg"/>
                     </div>
                     <button class="btn btn-success modal-basic" href="#modalHeaderColorPrimary"><i class="fa fa-plus"></i> Create new escrow</button>
                     <div id="modalHeaderColorPrimary" class="modal-block modal-header-color modal-block-primary mfp-hide">
                        <section class="card">
                           <form method="post" id="escrowForm">
                              <div class="card-body">
                                 <div class="modal-wrapper">
                                    <div class="form-group mb-3">
                                       <label>Title</label>
                                       <input name="title" type="text" placeholder="Escrow title" class="form-control form-control-lg" required/>
                                    </div>
                                    <div class="form-group mb-3">
                                       <label>Description</label>
                                       <input name="desc" type="text" placeholder="Escrow description..." class="form-control form-control-lg" required/>
                                    </div>
                                    <div class="form-group mb-3">
                                       <label>Recipient phone number</label>
                                       <input name="rphone" type="number" placeholder="08022222222" class="form-control form-control-lg" required/>
                                    </div>
                                 </div>
                              </div>
                              <footer class="card-footer">
                                 <div class="row">
                                    <div class="col-md-12 text-end">
                                       <input type="submit" id="createButton" class="btn btn-primary" value="Create">
                                       <div class="spinner-border text-primary" id="loader" style="display: none;" role="status">
                                          <span class="visually-hidden">Loading...</span>
                                       </div>
                                       <button class="btn btn-default modal-dismiss">Cancel</button>
                                    </div>
                                 </div>
                              </footer>
                           </form>
                        </section>
                     </div>
                  </div>
                  <table class="table table-bordered table-striped mb-0 w-100" id="datatable">
                     <thead>
                        <tr>
                           <th>Date</th>
                           <th>Title</th>
                                     <th>Escrow Amount</th>
                           <th>Description</th>
                           <th>Sender</th>
                           <th>Receiver</th>
                           <th>Status</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody id="escrowList">
                     </tbody>
                  </table>
               </div>
            </section>
         </div>
         <div class="modal fade" id="modalViewEscrow" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
               <div class="modal-content">
                  <div class="modal-body">
                     <div class="d-flex justify-content-end" style="cursor: pointer;"><i class="fa fa-times" data-bs-dismiss="modal"></i></div>
                     <div class="d-flex justify-content-between statusAccepted">
                        <div class="d-flex flex-column">
                           <span class="text-muted">Title</span>
                           <h4 style="line-height: 0px;" id="escrowTitle"></h4>
                           <span class="text-muted mt-3">Description</span>
                           <p id="escrowDesc"></p>
                        </div>
                        <div class="shadow bg-primary p-3 d-flex flex-column justify-content-between" style="border-radius: 20px; height: 150px; width: 300px;">
                           <div class="text-light d-flex justify-content-between align-items-center">
                              <div class="w-50 d-flex flex-column justify-content-between align-items-start">
                                 <span>Created On</span>
                                 <span style="font-size: 14px; font-weight: bold;" id="escrowCreatedOn"></span>
                              </div>
                              <div class="w-50 d-flex flex-column justify-content-between align-items-end">
                                 <span>Total Fund</span>
                                 <span style="font-size: 14px; font-weight: bold;" id="escrowTotalFund"></span>
                              </div>
                           </div>
                           <div class="text-light d-flex justify-content-between align-items-center">
                              <div class="w-50 d-flex flex-column justify-content-between align-items-start">
                                 <span>Sender</span>
                                 <span style="font-size: 14px; font-weight: bold;" id="escrowSender"></span>
                              </div>
                              <div class="w-50 d-flex flex-column justify-content-between align-items-end">
                                 <span>Recipient</span>
                                 <span style="font-size: 14px; font-weight: bold;" id="escrowRecipient"></span>
                              </div>
                           </div>

                          
                        </div>
                     </div>
                     <div class="row statusAccepted">
                        <div class="col">
                           <div class="tabs tabs-primary">
                              <ul class="nav nav-tabs">
                                 <li class="nav-item active">
                                    <a class="nav-link" data-bs-target="#addfund" href="#addfund" data-bs-toggle="tab"><i class="fas fa-wallet"></i> Fund Requests</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" data-bs-target="#dispute" href="#dispute" data-bs-toggle="tab"><i class="fa fa-handshake-slash"></i> Dispute</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" data-bs-target="#invoice" href="#invoice" data-bs-toggle="tab"><i class="fa fa-file-invoice"></i> Invoice</a>
                                 </li>
                              </ul>
                              <div class="tab-content">
                                 <div id="addfund" class="tab-pane active">
                                    <div class="row" id="fundReqList">
                                    </div>
                                 </div>
                                 <div id="dispute" class="tab-pane">
                                    <button class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Create Dispute Ticket</button>
                                    <div class="border mt-3 p-3" style="height: 265px; overflow-y: auto;">
                                       <h4>Dispute Ticket</h4>
                                       <div class="d-flex justify-content-between align-items-center">
                                          <input type="text" name="message" class="form-control" placeholder="Type message here..." id="message">
                                          <button class="btn btn-primary btn-sm mx-2" type="sumbit" id="sendButton">Send</button>
                                          <div class="spinner-border text-primary" id="loader" style="display: none;" role="status">
                                             <span class="visually-hidden">Loading...</span>
                                          </div>
                                          <div class="d-flex w-25 px-3">
                                             <i class="fa fa-paperclip" style="font-size: 20px;"></i>
                                          </div>
                                       </div>
                                       <div class="shadow mt-2 p-5 text-dark d-flex flex-column justify-content-start align-items-start">
                                          <span>Hello, I was told that this business is over a month now and you haven't done the needful.</span>
                                          <span>Admin - 20-10-2020 15:00</span>
                                       </div>
                                       <div class="shadow p-5 text-dark d-flex flex-column justify-content-start align-items-start">
                                          <span>That's a very big lie from him.</span>
                                          <span>You - 20-10-2020 15:00</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div id="invoice" class="tab-pane">
                                    <div class="d-flex">
                                       <button class="btn btn-sm btn-success" id="addNewInvoice"><i class="fa fa-plus"></i> Create new invoice</button>
                                    </div>
                                    <div class="d-flex flex-column justify-content-start align-items-center" id="invList">
                                    </div>
                                    <div id="invoiceForm" class="d-flex justify-content-between align-items-start" style="display: none;">
                                       <div class="shadow w-50 p-3">
                                          <div class="card-body">
                                             <div class="modal-wrapper">
                                                <div class="form-group mb-3">
                                                   <label>Title</label>
                                                   <input name="title" type="text" id="invTitle" placeholder="Invoice title" class="form-control form-control-sm"/>
                                                </div>
                                                <div class="form-group mb-3">
                                                   <label>Note</label>
                                                   <input name="desc" type="text" id="invNote" placeholder="Short note..." class="form-control form-control-sm"/>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                   <div class="form-group" style="width: 30%; padding-top: 17px;">
                                                      <label>Item</label>
                                                      <input name="item_name" type="text" placeholder="Item" id="itemName" class="form-control form-control-sm"/>
                                                      <!-- <button class="btn btn-sm btn-primary"><i class="fa fa-add"></i> Add</button> -->
                                                   </div>
                                                   <div class="form-group" style="width: 30%">
                                                      <label>Price</label>
                                                      <input name="price" type="number" placeholder="Price" id="itemPrice" class="form-control form-control-sm"/>
                                                      <!-- <button class="btn btn-sm btn-primary"><i class="fa fa-add"></i> Add</button> -->
                                                   </div>
                                                   <div class="form-group" style="width: 30%">
                                                      <label>Qty</label>
                                                      <input name="qty" type="number" placeholder="Quantity" id="itemQty" class="form-control form-control-sm"/>
                                                      <!-- <button class="btn btn-sm btn-primary"><i class="fa fa-add"></i> Add</button> -->
                                                   </div>
                                                </div>
                                                <button class="btn btn-sm btn-primary w-100 mt-2" id="addInvoiceItem">Add Item</button>
                                             </div>
                                          </div>
                                          <footer class="card-footer">
                                             <div class="row">
                                                <div class="col-md-12 text-end">
                                                   <input type="submit" id="createInvButton" class="btn btn-primary" value="Create Invoice">
                                                   <div class="spinner-border text-primary" id="loader" style="display: none;" role="status">
                                                      <span class="visually-hidden">Loading...</span>
                                                   </div>
                                                   <button class="btn btn-default modal-dismiss" id="cancelInvoice">Cancel</button>
                                                </div>
                                             </div>
                                          </footer>
                                       </div>
                                       <table class="table table-bordered table-striped mb-0 w-50">
                                          <thead>
                                             <tr>
                                                <th>Item</th>
                                                <th>Unit Price</th>
                                                <th>Quantity</th>
                                                <th>Total</th>
                                             </tr>
                                          </thead>
                                          <tbody id="itemList" style="text-align: center;">
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="statusRejected d-flex flex-column justify-content-center align-items-center p-5" style="display: none;">
                        <img src="<?=base_url();?>uploads/img/cancel.png"/>
                        <h3>Rejection</h3>
                        <p>We are sorry to announce to you that the recipient has decided not to go on with this bid. Thanks.</p>
                     </div>
                     <div class="statusPending d-flex flex-column justify-content-center align-items-center p-5" style="display: none;">
                        <img src="<?=base_url();?>uploads/img/wall-clock.png"/>
                        <h3>Pending</h3>
                        <p>The recipient is yet to accept the bid.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal fade" id="rejectViewEscrow" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-md modal-dialog-centered">
               <div class="modal-content">
                  <div class="modal-body">
                     <div class="d-flex justify-content-end" style="cursor: pointer;"><i class="fa fa-times" data-bs-dismiss="modal"></i></div>
                     <div class="d-flex flex-column justify-content-center align-items-center">
                        <h4 class="text-dark">Reject bid? You won't be able to accept again.</h4>
                        <button class="btn btn-sm btn-danger" id="rejectBid"><i class="fa fa-check"></i> Yes, Decline</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal fade" id="acceptViewEscrow" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-md modal-dialog-centered">
               <div class="modal-content">
                  <div class="modal-body">
                     <div class="d-flex justify-content-end" style="cursor: pointer;"><i class="fa fa-times" data-bs-dismiss="modal"></i></div>
                     <div class="d-flex flex-column justify-content-center align-items-center">
                        <h4 class="text-dark">Are you sure you want to accept this bid?</h4>
                        <button class="btn btn-sm btn-success" id="acceptBid"><i class="fa fa-check"></i> Accept Bid</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal fade" id="invoiceMessage" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-md modal-dialog-centered">
               <div class="modal-content">
                  <div class="modal-body">
                     <div class="d-flex justify-content-end" style="cursor: pointer;"><i class="fa fa-times" data-bs-dismiss="modal"></i></div>
                     <div class="d-flex flex-column justify-content-center align-items-center">
                        <h4 class="text-dark" id="invMessage"></h4>
                        <button class="btn btn-sm btn-success" data-bs-dismiss="modal">Ok</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <script>
         $(document).ready(function(){
                      $('#invoiceForm').removeClass('d-flex').attr('style', 'display: none');
         
                      function fetchEscrows() {
                          $.ajax({
                              url: '<?= base_url('client/escrow_list/0') ?>',
                              method: 'post',
                              data: {},
                              cache: false,
                              processData: false,
                              contentType: false,
                              success: function(response){
                                  console.log(JSON.parse(response));
                                  let resp = JSON.parse(response);
                                  let innerHtml = "";
                                  let userMobile = '<?=$this->session->userdata(SESS_PRE. "userMobile")?>';
                                  console.log('UserMobile', userMobile);
                                  resp.map((data) => {
                                      let action = (userMobile==data.recipient && data.status=="created") ? '<button class="btn btn-success btn-sm acceptEscrow" escrowId="'+data.id+'">Accept</button> <button class="btn btn-sm btn-danger declineEscrow" escrowId="'+data.id+'">Decline</button>' : '<button escrowId="'+data.id+'" dateCreated="'+(data.date_created).split(' ')[0]+'" title="'+data.title+'" description="'+data.description+'" sender="'+data.sender+'" recipient="'+data.recipient+'" sendername="'+data.sendername+'" recipientname="'+data.recipientname+'" status="'+data.status+'" class="btn btn-warning btn-sm modalTrigger">View</button>';
                                    let action2 = (userMobile==data.sender && data.status=="accepted" && (data.wallet_amount > 0) ) ? '<button class="btn btn-success btn-sm releaseallEscrow" escrowId="'+data.id+'">Release All Fund</button> ' : '';
                                       innerHtml += '<tr>'+
                                                  '<td>'+ (data.date_created).split(' ')[0] +'</td>'+
                                                  '<td>'+ data.title +'</td>'+
                                                     '<td> N '+ data.wallet_amount +'</td>'+
                                                  '<td>'+ data.description +'</td>'+
                                                  '<td>'+ data.sendername +'</td>'+
                                                  '<td>'+ data.recipientname +'</td>'+
                                                  '<td class="center">'+data.status+'</td>'+
                                                  '<td class="center">'+action+''+action2+'</td>'+
                                              '</tr>';
                                  });
         
                                  $("#escrowList").html(innerHtml);
                              }
                          });
                      }
                      fetchEscrows();
         
                      // function fetchEscrows() {
                      //     $.ajax({
                      //         url: '<?= base_url('client/escrow_list') ?>',
                      //         method: 'post',
                      //         data: {},
                      //         cache: false,
                      //         processData: false,
                      //         contentType: false,
                      //         success: function(response){
                      //             console.log(JSON.parse(response));
                      //             let resp = JSON.parse(response);
                      //             let innerHtml = "";
                      //             resp.map((data) => {
                      //                 innerHtml += '<tr>'+
                      //                             '<td>'+ (data.date_created).split(' ')[0] +'</td>'+
                      //                             '<td>'+ data.title +'</td>'+
                      //                             '<td>'+ data.description +'</td>'+
                      //                             '<td>'+ data.sender +'</td>'+
                      //                             '<td>'+ data.recipient +'</td>'+
                      //                             '<td class="center">'+data.status+'</td>'+
                      //                             '<td class="center"><button escrowId="'+data.id+'" dateCreated="'+(data.date_created).split(' ')[0]+'" title="'+data.title+'" description="'+data.description+'" sender="'+data.sender+'" recipient="'+data.recipient+'" class="btn btn-warning btn-sm modalTrigger">View</button></td>'+
                      //                         '</tr>';
                      //             });
         
                      //             $("#escrowList").html(innerHtml);
                      //         }
                      //     });
                      // }
         
                      function fetchEscrowFund(escrowId) {
                          let fd = new FormData();
                          fd.append('escrowId', escrowId);
                          $.ajax({
                              url: '<?= base_url('client/escrow_fund') ?>',
                              method: 'post',
                              data: fd,
                              cache: false,
                              processData: false,
                              contentType: false,
                              success: function(response){
                                  console.log(JSON.parse(response));
                                  let resp = JSON.parse(response);
                                  resp[0].fund == null ? 'N '+$('#escrowTotalFund').text(0) : 'N '+$('#escrowTotalFund').text(resp[0].fund);
                              }
                          });
                      }
         
                      function updateEscrowStatus(escrowId, status) {
                          let fd = new FormData();
                          fd.append('escrowId', escrowId);
                          fd.append('status', status);
                          $.ajax({
                              url: '<?= base_url('client/update_escrow_status') ?>',
                              method: 'post',
                              data: fd,
                              cache: false,
                              processData: false,
                              contentType: false,
                              success: function(response){
                                  console.log(JSON.parse(response));
                                  let resp = JSON.parse(response);
                                  console.log(resp);
                                  if(resp.error){
                                      new PNotify({
                                              title: 'Error',
                                              text: resp.message,
                                              type: 'error'
                                          });
                                          setTimeout(() => {
                                              window.location.replace("<?=base_url()?>client/escrow");
                                          }, 2000);
                                  }else{
                                      new PNotify({
                                    title: 'Success',
                                    text: resp.message,
                                    type: 'success'
                                });
                                          setTimeout(() => {
                                              window.location.replace("<?=base_url()?>client/escrow");
                                          }, 2000);
                                  }
                              }
                          });
                      }
         
                      function fetchAllInvoice(escrowId){
                          let fd = new FormData();
                          fd.append('escrowId', escrowId);
         
                          let senderNo = $("#escrowSender").text();
                          let recipientNo = $("#escrowRecipient").text();
                          let userMobile = '<?=$this->session->userdata(SESS_PRE. "userMobile")?>';
                          let userId = '<?=$this->session->userdata(SESS_PRE. "userid")?>';
         
                          let returnHtml = '';
                          let returnHtmlFund = '';
                          $.ajax({
                              url: '<?= base_url('client/escrow_invoice/0') ?>',
                              method: 'post',
                              data: fd,
                              cache: false,
                              processData: false,
                              contentType: false,
                              success: function(response){
                                  console.log(JSON.parse(response));
                                  let resp = JSON.parse(response);
                                  resp.map((r) => {
                                      let invoiceId = r.id;
                                      let itemList = '';
                                      let totalItems = 0;
                                      let items = JSON.parse(r.items);
                                      console.log(items);
                                      items.map(item => {
                                          totalItems = totalItems + item.total;
                                          itemList += '<tr>'+
                                              '<th>'+(r.date).split(' ')[0]+'</th>'+
                                              '<th>'+item.name+'</th>'+
                                              '<th>'+item.unit_price+'</th>'+
                                              '<th>'+item.qty+'</th>'+
                                              '<th>'+item.total+'</th>'+
                                          '</tr>';
                                      });
         
                                      let decisionClass = '';
                                      let decisionStyle = 'display: none';
                                      let rejectClass = '';
                                      let rejectStyle = 'display: none';
                                      let pendingClass = '';
                                      let pendingStyle = 'display: none';
                                      let acceptClass = '';
                                      let acceptStyle = 'display: none';
                                      let releaseClass = '';
                                      let releaseStyle = 'display: none';
         
                                      if(userMobile == recipientNo){
                                          if(r.status == 'created'){
                                              pendingClass = 'd-flex flex-column justify-content-center align-items-center';
                                              pendingStyle = '';
                                          }else if(r.status == 'rejected'){
                                              rejectClass = 'd-flex flex-column justify-content-center align-items-center';
                                              rejectStyle = '';
                                          }else if(r.status == 'accepted'){
                                              acceptClass = 'd-flex flex-column justify-content-center align-items-center';
                                              acceptStyle = '';
                                          }else if(r.status == 'released'){
                                              releaseClass = 'd-flex flex-column justify-content-center align-items-center';
                                              releaseStyle = '';
                                          }
                                      }else{
                                          if(r.status == 'created'){
                                              decisionClass = 'd-flex flex-column justify-content-center align-items-center';
                                              decisionStyle = '';
                                          }else if(r.status == 'rejected'){
                                              rejectClass = 'd-flex flex-column justify-content-center align-items-center';
                                              rejectStyle = '';
                                          }else if(r.status == 'accepted'){
                                              acceptClass = 'd-flex flex-column justify-content-center align-items-center';
                                              acceptStyle = '';
                                          }else if(r.status == 'released'){
                                              releaseClass = 'd-flex flex-column justify-content-center align-items-center';
                                              releaseStyle = '';
                                          }
                                      }
         
                                      returnHtml += '<div class="mt-3 p-2 border-top border-primary border-3 text-dark w-100" style="background-color: #fcfcfc;">'+
                                                          '<div class="d-flex justify-content-between align-items-start">'+
                                                              '<div class="w-100">'+
                                                                  '<h5 class="text-primary my-3" style="line-height: 1px;">Title</h5>'+
                                                                  '<h5 style="font-weight: bold;" class="my-3">'+r.title+'</h5>'+
                                                                  
                                                                  '<table class="table table-bordered table-striped mb-0 w-100">'+
                                                                      '<thead>'+
                                                                          '<tr>'+
                                                                              '<th>Date</th>'+
                                                                              '<th>Item</th>'+
                                                                              '<th>Unit Price</th>'+
                                                                              '<th>Quantity</th>'+
                                                                              '<th>Total</th>'+
                                                                          '</tr>'+
                                                                      '</thead>'+
                                                                      '<tbody>'+
                                                                      ''+itemList+''+
                                                                      '</tbody>'+
                                                                  '</table>'+
                                                              '</div>'+
                                                              '<div>'+
                                                                  '<h5 class="text-primary my-3" style="line-height: 1px;">Invoice no</h5>'+
                                                                  '<h4 style="font-weight: bold;">'+r.invoice_no+'</h4>'+
                                                              '</div>'+
                                                          '</div>'+
                                                          '<div class="d-flex mt-3 flex-column justify-content-center align-items-end">'+
                                                              '<h5 class="text-primary my-3" style="line-height: 1px;">Total</h5>'+
                                                              '<h4 style="font-weight: bold;">N '+totalItems+'</h4>'+
                                                          '</div>'+
                                                      '</div>';
         
                                      returnHtmlFund += '<div class="col-md-8">'+
                                                          '<div class="p-2 border-top border-primary border-3 text-dark" style="background-color: #fcfcfc;">'+
                                                              '<div class="d-flex justify-content-between align-items-start">'+
                                                                  '<div class="w-100">'+
                                                                      '<h5 class="text-primary my-3" style="line-height: 1px;">Title</h5>'+
                                                                      '<h5 style="font-weight: bold;" class="my-3">'+r.title+'</h5>'+
                                                                      
                                                                      '<table class="table table-bordered table-striped mb-0 w-100">'+
                                                                          '<thead>'+
                                                                              '<tr>'+
                                                                                  '<th>Date</th>'+
                                                                                  '<th>Item</th>'+
                                                                                  '<th>Unit Price</th>'+
                                                                                  '<th>Quantity</th>'+
                                                                                  '<th>Total</th>'+
                                                                              '</tr>'+
                                                                          '</thead>'+
                                                                          '<tbody>'+
                                                                          ''+itemList+''+
                                                                          '</tbody>'+
                                                                      '</table>'+
                                                                  '</div>'+
                                                                  '<div>'+
                                                                      '<h5 class="text-primary my-3" style="line-height: 1px;">Invoice no</h5>'+
                                                                      '<h4 style="font-weight: bold;">'+r.invoice_no+'</h4>'+
                                                                  '</div>'+
                                                              '</div>'+
                                                              '<div class="d-flex mt-3 justify-content-between align-items-center">'+
                                                                  '<div style="width: 70%">'+
                                                                      '<h5 class="text-primary my-3" style="line-height: 1px;">Note</h5>'+
                                                                      '<span>'+r.note+'</span>'+
                                                                  '</div>'+
                                                                  '<div>'+
                                                                      '<h5 class="text-primary my-3" style="line-height: 1px;">Total</h5>'+
                                                                      '<h4 style="font-weight: bold;">N '+totalItems+'</h4>'+
                                                                  '</div>'+
                                                              '</div>'+
                                                          '</div>'+
                                                      '</div>'+
                                                      '<div class="col-md-4">'+
                                                          '<div class="'+decisionClass+'" style="'+decisionStyle+'">'+
                                                              '<button class="btn btn-success btn-sm w-100 my-1 acceptInvoice" total="'+totalItems+'" userId="'+userId+'" invoiceId="'+invoiceId+'" escrowId="'+escrowId+'"><i class="fa fa-check"></i> Accept</button>'+
                                                              '<button class="btn btn-danger btn-sm w-100 my-1 rejectInvoice" invoiceId="'+invoiceId+'" escrowId="'+escrowId+'"><i class="fa fa-times"></i> Reject</button>'+
                                                             /* '<button class="btn btn-primary w-100 btn-sm my-1" disabled><i class="fa fa-check"></i> Release Fund</button>'+ */
                                                             '<button class="btn btn-primary w-100 btn-sm my-1 releasedInvoice" total="'+totalItems+'" userId="'+userId+'" invoiceId="'+invoiceId+'" escrowId="'+escrowId+'" ><i class="fa fa-check"></i> Release Fund</button>'+
                                                          '</div>'+
                                                          '<div class="'+rejectClass+'" style="'+rejectStyle+'">'+
                                                              '<img style="width: 50px; height: 50px;" src="<?=base_url();?>uploads/img/cancel.png"/>'+
                                                              '<h3 class="text-danger">Rejected</h3>'+
                                                              '<p>We are sorry to announce to you that the sender has decided not to honour your invoice. Thanks.</p>'+
                                                              '<button class="btn btn-primary w-100 btn-sm my-1"> Raise Dispute</button>'+
                                                          '</div>'+
                                                          '<div class="'+pendingClass+'" style="'+pendingStyle+'">'+
                                                              '<img style="width: 50px; height: 50px;" src="<?=base_url();?>uploads/img/wall-clock.png"/>'+
                                                              '<h3 class="text-warning">Pending</h3>'+
                                                              '<p>The sender is yet to accept the invoice.</p>'+
                                                              '<button class="btn btn-primary w-100 btn-sm my-1"> Raise Dispute</button>'+
                                                          '</div>'+
                                                          '<div class="'+acceptClass+'" style="'+acceptStyle+'">'+
                                                              '<img style="width: 50px; height: 50px;" src="<?=base_url();?>uploads/img/accept.png"/>'+
                                                              '<h3 class="text-success">Accepted</h3>'+
                                                              '<p>We are happy to announce to you that the sender has accepted to honour your invoice. Thanks.</p>'+
                                                              '<button class="btn btn-primary w-100 btn-sm my-1"> Raise Dispute</button>'+
                                                          '</div>'+
                                                          '<div class="'+releaseClass+'" style="'+releaseStyle+'">'+
                                                              '<img style="width: 50px; height: 50px;" src="<?=base_url();?>uploads/img/accept.png"/>'+
                                                              '<h3 class="text-success">Released</h3>'+
                                                              '<p>Fund released to your wallet.</p>'+
                                                              '<img style="width: 50px; height: 50px;" src="<?=base_url();?>uploads/img/clapping.png"/>'+
                                                              '<button class="btn btn-primary w-100 btn-sm my-1"> Raise Dispute</button>'+
                                                          '</div>'+
                                                      '</div>';
                                  });
                                  $('#invList').html(returnHtml);
                                  $('#fundReqList').html(returnHtmlFund);
                              }
                          });
                      }
         
                      $(document).on('click', '.modalTrigger', function(){
                          let escrowId = $(this).attr('escrowId');
                          // console.log(escrowId);
                          let title = $(this).attr('title');
                          let dateCreated = $(this).attr('dateCreated');
                          let description = $(this).attr('description');
                          let sender = $(this).attr('sender');
                          let recipient = $(this).attr('recipient');
                             let sendername = $(this).attr('sendername');
                          let recipientname = $(this).attr('recipientname');
                          let status = $(this).attr('status');
                          let userMobile = '<?=$this->session->userdata(SESS_PRE. "userMobile")?>';
         
                          userMobile == sender ? $('#addNewInvoice').hide() : $('#addNewInvoice').show();
                          console.log(status);
         
                          if(status !== 'created' && status !== 'rejected'){
                              $('#escrowTitle').text(title);
                              $('#escrowCreatedOn').text(dateCreated);
                              $('#escrowDesc').text(description);
                              $('#escrowSender').text(sender);
                              $('#escrowRecipient').text(recipient);
         
                              fetchEscrowFund(escrowId);
                              fetchAllInvoice(escrowId);
         
                              $('.statusAccepted').show();
                              $('.statusPending').removeClass('d-flex').attr('style', 'display: none');
                              $('.statusRejected').removeClass('d-flex').attr('style', 'display: none');
                              
                              $('#escrowIdHolder').val(escrowId);
                              $('#modalViewEscrow').modal('show');
         
                              console.log('Neither created nor rejected');
                          }else{
                              if(status == 'created'){
                                  $('.statusPending').show();
                                  $('.statusAccepted').removeClass('d-flex').attr('style', 'display: none');
                                  $('.statusRejected').removeClass('d-flex').attr('style', 'display: none');
                                  
                                  // $('#escrowIdHolder').val(escrowId);
                                  $('#modalViewEscrow').modal('show');
                                  console.log('It\'s created');
                              }else{
                                  $('.statusAccepted').removeClass('d-flex').attr('style', 'display: none');
                                  $('.statusRejected').show();
                                  $('.statusPending').removeClass('d-flex').attr('style', 'display: none');
         
                                  // $('#escrowIdHolder').val(escrowId);
                                  $('#modalViewEscrow').modal('show');
                                  console.log('it\'s rejected');
                              }
                          }
                      });
         
                      $(document).on('click', '.acceptEscrow', function(){
                          let escrowId = $(this).attr('escrowId');
                          $('#escrowIdHolder').val(escrowId);
                          $('#acceptViewEscrow').modal('show');
                      });
         
                      $(document).on('click', '.declineEscrow', function(){
                          let escrowId = $(this).attr('escrowId');
                          $('#escrowIdHolder').val(escrowId);
                          $('#rejectViewEscrow').modal('show');
                      });
         
                      $('#rejectBid').click(function(){
                          let escrowId = $("#escrowIdHolder").val();
                          // alert(escrowId);
                          updateEscrowStatus(escrowId, 'rejected');
                      });
         
                      $('#acceptBid').click(function(){
                          let escrowId = $("#escrowIdHolder").val();
                          // alert(escrowId);
                          updateEscrowStatus(escrowId, 'accepted');
                      });
         
                      $("#escrowForm").on('submit', function(e){
                e.preventDefault();
                const formData = new FormData(this);
                // console.log(formData);
                if(!this.checkValidity()){
                    e.preventDefault();
                    $(this).addClass('was-validated');
                }else{
                    console.log('valid');
                    $("#createButton").hide();
                    $("#loader").show();
         
                    $.ajax({
                        url: '<?= base_url('client/create_escrow') ?>',
                        method: 'post',
                        data: formData,
                        cache: false,
                        processData: false,
                        contentType: false,
                        success: function(response){
                            console.log(JSON.parse(response));
                            let resp = JSON.parse(response);
                            if(resp.error){
                                new PNotify({
                                    title: 'Error',
                                    text: 'Failed to create escrow, try again later',
                                    type: 'error'
                                });
         
                                $("#createButton").show();
                                $("#loader").hide();
                            }else{
                                new PNotify({
                                              title: 'Success',
                                              text: 'Escrow created successfully',
                                              type: 'success'
                                          });
         
                                          setTimeout(() => {
                                              $("#createButton").show();
                                              $("#loader").hide();
                                              window.location.replace("<?=base_url()?>client/escrow");
                                          }, 2000);
                            }
                        }
                    });
                }
            });
         
                      // $("#addFundForm").on('submit', function(e){
            //  e.preventDefault();
            //  const formData = new FormData(this);
            //  // console.log(formData);
            //  if(!this.checkValidity()){
            //      e.preventDefault();
            //      $(this).addClass('was-validated');
            //  }else{
            //      console.log('valid');
            //      $("#addFundButton").hide();
            //      $("#addLoader").show();
         
            //      $.ajax({
            //          url: '<?= base_url('client/add_escrow_fund') ?>',
            //          method: 'post',
            //          data: formData,
            //          cache: false,
            //          processData: false,
            //          contentType: false,
            //          success: function(response){
            //              console.log("Add fund", JSON.parse(response));
            //              let resp = JSON.parse(response);
            //              if(resp.error){
                      //                     $("#addFundButton").show();
            //                  $("#addLoader").hide();
                      //                 }else{
                      //                     $("#addFundButton").show();
            //                  $("#addLoader").hide();
         
                      //                     let escrowId = $("#escrowIdHolder").val();
                      //                     fetchEscrowFund(escrowId);
                      //                 }
            //          }
            //      });
            //  }
            // });
         
                      $("#addNewInvoice").click(function(){
                          // alert('New Invoice');
                          $('#invoiceForm').addClass('d-flex').show(500);
                          $('#invList').removeClass('d-flex').hide(500);
                      });
         
                      $("#cancelInvoice").click(function(){
                          // alert('New Invoice');
                          $('#invoiceForm').removeClass('d-flex').hide(500);
                          $('#invList').addClass('d-flex').show(500);
                      });
         
                      let invoiceItems = [];
                      function updateItemTable(items){
                          console.log(items);
                          let itemHtml = '';
                          items.map((item) => {
                              console.log(item);
                              itemHtml += '<tr>'+
                              '<td>'+item.name+'</td>'+
                              '<td>'+item.unit_price+'</td>'+
                              '<td>'+item.qty+'</td>'+
                              '<td>'+item.total+'</td>'+
                              '</tr>';
                          });
         
                          $('#itemList').html(itemHtml);
                      }
         
                      $("#addInvoiceItem").click(function(){
                          let itemName = $("#itemName").val();
                          let itemPrice = $("#itemPrice").val();
                          let itemQty = $("#itemQty").val();
         
                          let item = {name: itemName, unit_price: itemPrice, qty: itemQty, total: itemQty * itemPrice}
         
                          invoiceItems.push(item);
                          updateItemTable(invoiceItems);
                      });
         
                      $("#createInvButton").click(function(){
                          let invTitle = $('#invTitle').val();
                          let invNote  = $('#invNote').val();
                          let invItems = invoiceItems;
                          let escrowId = $('#escrowIdHolder').val();
                          let invoiceNo = Math.floor(100000 + Math.random() * 900000)+'<?=$this->session->userdata(SESS_PRE. "userid")?>';
                          console.log(invTitle);
                          console.log(invNote);
                          console.log(invItems);
                          
                          let fd = new FormData();
                          fd.append('invoiceTitle', invTitle);
                          fd.append('invoiceNote', invNote);
                          fd.append('escrowId', escrowId);
                          fd.append('invoice_no', invoiceNo);
                          fd.append('invoiceItems', JSON.stringify(invItems));
                          $.ajax({
                              url: '<?= base_url('client/create_escrow_invoice') ?>',
                              method: 'post',
                              data: fd,
                              cache: false,
                              processData: false,
                              contentType: false,
                              success: function(response){
                                  console.log('Invoice response', JSON.parse(response));
                                  fetchAllInvoice(escrowId);
                                  $('#invoiceForm').removeClass('d-flex').hide(500);
                                  $('#invList').addClass('d-flex').show(500);
                                  // let resp = JSON.parse(response);
                                  // resp[0].fund == null ? 'N '+$('#escrowTotalFund').text(0) : 'N '+$('#escrowTotalFund').text(resp[0].fund);
                              }
                          });
         
                      });


                      $(document).on('click', '.releaseallEscrow', function(){
                     
                          let escrowId = $(this).attr('escrowId'); 
                          // alert(invoiceId+'-'+escrowId);
                          let fd = new FormData();
                          fd.append('escrowId', escrowId);
                          $.ajax({
                              url: '<?= base_url('client/release_all_escrow') ?>',
                              method: 'post',
                              data: fd,
                              cache: false,
                              processData: false,
                              contentType: false,
                              success: function(response){
                                  console.log('Invoice update response', JSON.parse(response));
                                  let resp = JSON.parse(response);
                                  $("#invMessage").text(resp.message);
                                  $('#invoiceMessage').modal('show');
                         
                         /*
 new PNotify({
                                              title: 'Success',
                                              text: 'Escrow created successfully',
                                              type: 'success'
                                          });
         
                                          setTimeout(() => {
                                              $("#createButton").show();
                                              $("#loader").hide();
                                              window.location.replace("<?=base_url()?>client/escrow");
                                          }, 2000);
                         */
                                  // $('#invoiceForm').removeClass('d-flex').hide(500);
                                  // $('#invList').addClass('d-flex').show(500);
                                  // // let resp = JSON.parse(response);
                                  // // resp[0].fund == null ? 'N '+$('#escrowTotalFund').text(0) : 'N '+$('#escrowTotalFund').text(resp[0].fund);
                              }
                          });
                      });

         
                      $(document).on('click', '.rejectInvoice', function(){
                          let invoiceId = $(this).attr('invoiceId');
                          let escrowId = $(this).attr('escrowId'); 
                          // alert(invoiceId+'-'+escrowId);
                          let fd = new FormData();
                          fd.append('invoiceId', invoiceId);
                          fd.append('status', 'rejected');
                          $.ajax({
                              url: '<?= base_url('client/reject_escrow_invoice') ?>',
                              method: 'post',
                              data: fd,
                              cache: false,
                              processData: false,
                              contentType: false,
                              success: function(response){
                                  console.log('Invoice update response', JSON.parse(response));
                                  let resp = JSON.parse(response);
                                  $("#invMessage").text(resp.message);
                                  $('#invoiceMessage').modal('show');
                                  fetchAllInvoice(escrowId);
                                  // $('#invoiceForm').removeClass('d-flex').hide(500);
                                  // $('#invList').addClass('d-flex').show(500);
                                  // // let resp = JSON.parse(response);
                                  // // resp[0].fund == null ? 'N '+$('#escrowTotalFund').text(0) : 'N '+$('#escrowTotalFund').text(resp[0].fund);
                              }
                          });
                      });
         
                      $(document).on('click', '.acceptInvoice', function(){
                          let userId = $(this).attr('userId');
                          let total = $(this).attr('total'); 
                          let invoiceId = $(this).attr('invoiceId');
                          let escrowId = $(this).attr('escrowId'); 
                          // alert(userId+'-'+total+'-'+invoiceId+'-'+escrowId);
                          let fd = new FormData();
                          fd.append('invoiceId', invoiceId);
                          fd.append('status', 'accepted');
                          fd.append('total', total);
                          fd.append('escrowId', escrowId);
                          fd.append('userId', userId);
         
                          $.ajax({
                              url: '<?= base_url('client/accept_escrow_invoice') ?>',
                              method: 'post',
                              data: fd,
                              cache: false,
                              processData: false,
                              contentType: false,
                              success: function(response){
                                  console.log('Invoice update response', JSON.parse(response));
                                  let resp = JSON.parse(response);
                                  $("#invMessage").text(resp.message);
                                  $('#invoiceMessage').modal('show');
                                  fetchAllInvoice(escrowId);
                                  fetchEscrowFund(escrowId);
                              }
                          });
                      });



                          $(document).on('click', '.releasedInvoice', function(){
                          let userId = $(this).attr('userId');
                          let total = $(this).attr('total'); 
                          let invoiceId = $(this).attr('invoiceId');
                          let escrowId = $(this).attr('escrowId'); 
                          // alert(userId+'-'+total+'-'+invoiceId+'-'+escrowId);
                          let fd = new FormData();
                          fd.append('invoiceId', invoiceId);
                          fd.append('status', 'released');
                          fd.append('total', total);
                          fd.append('escrowId', escrowId);
                          fd.append('userId', userId);
         
                          $.ajax({
                              url: '<?= base_url('client/released_escrow_invoice') ?>',
                              method: 'post',
                              data: fd,
                              cache: false,
                              processData: false,
                              contentType: false,
                              success: function(response){
                                  console.log('Invoice update response', JSON.parse(response));
                                  let resp = JSON.parse(response);
                                  $("#invMessage").text(resp.message);
                                  $('#invoiceMessage').modal('show');
                                  fetchAllInvoice(escrowId);
                                  fetchEscrowFund(escrowId);
                              }
                          });
                      });
         });
      </script>
   </body>
</html>

