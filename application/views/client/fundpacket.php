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
                        <div class="form-group row">
                            <label class="col-sm-12 control-label text-sm-end pt-2">Fullname </label><br/>
                            <div class="col-sm-12">
                                <input type="text" name="fullname" value="<?=$this->session->userdata(SESS_PRE . "userFullname") ?>" id="userFullname" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 control-label text-sm-end pt-2">Email address </label><br/>
                            <div class="col-sm-12">
                                <input type="text" name="email" value="<?=$this->session->userdata(SESS_PRE . "userEmail") ?>" id="userEmail" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 control-label text-sm-end pt-2">Mobile Number </label><br/>
                            <div class="col-sm-12">
                                <input type="text" name="mobile" value="<?=$this->session->userdata(SESS_PRE . "userMobile") ?>" id="userMobile" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 control-label text-sm-end pt-2">Enter Your BVN </label><br/>
                            <div class="col-sm-12">
                                <input type="number" name="bvn" id="bvn" class="form-control" placeholder="BVN">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 text-center">
                                <a class="btn btn-primary mt-2" id="fundButton">Confirm BVN</a>
                                <div class="spinner-border text-primary" id="loader" style="display: none;" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </section>

        <?php include('homereusables/scripts.php')?>

        <script>
            function GETBANKACCOUNT(email,bvn) {
                $("#fundButton").hide();
                $("#loader").show();
       let Email = email;
          let BVn = bvn;
                  $.ajax({
                            url: '<?= base_url('client/bvnforolddata/') ?>'+BVn,
                            method: 'post',
                            data: {email,bvn},
                            success: function(response){
                                console.log(JSON.parse(response));
                                let resp = JSON.parse(response);
                                if(resp.success == "False"){
                                     $("#fundButton").show();
                                 $("#loader").hide();
                                    new PNotify({
                                        title: 'Error',
                                        text: resp.message,
                                        type: 'error'
                                    });
                                }else{
                                 $("#fundButton").show();
                                 $("#loader").hide();
                                    new PNotify({
                                        title: 'Success',
                                        text: resp.message,
                                        type: 'success'
                                    });
                                  window.location.replace("<?=base_url()?>client/profile");
                                    
                                }
                            }
                        });
            }
            
            
            function ConfirmBVN(email,bvn) {
                $("#fundButton").hide();
                $("#loader").show();
       let Email = email;
          let BVn = bvn;
                  $.ajax({
                            url: '<?= base_url('client/getbvn/') ?>'+BVn+'/0000',
                            method: 'post',
                            data: {email,email},
                            success: function(response){
                                console.log(JSON.parse(response));
                                let resp = JSON.parse(response);
                                if(resp.status == "False"){
                                    new PNotify({
                                        title: 'Error',
                                        text: resp.message,
                                        type: 'error'
                                    });
                                }else{
                             
                                     GETBANKACCOUNT(Email, BVn);
                                }
                            }
                        });
            }

            $("#fundButton").click(function(){
                let bvn = $("#bvn").val();
                let userEmail = $("#userEmail").val();
                let userMobile = $("#userMobile").val();
                let userFullname = $("#userFullname").val();

                console.log(bvn + ' - ' + userEmail + ' - ' + userMobile + ' - ' + userFullname);

                if(bvn == ""){
                    new PNotify({
                        title: 'Error',
                        text: 'Enter a valid amount!',
                        type: 'error'
                    });
                }else{
                    ConfirmBVN(userEmail, bvn);
                }
            });
        </script>

    </body>
</html>