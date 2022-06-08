<!doctype html>
<html class="fixed">
    <?php include('homereusables/head.php')?>


    <body class="bg-light">
    <section class="body">
        <?php include('homereusables/navbar.php')?>
        <!-- <?php //include('homereusables/backnav.php')?> -->
        <div class="inner-wrapper">
            <aside id="sidebar-left" class="sidebar-left d-none d-md-block">
                        <?php include('homereusables/sidenav.php')?>
                    </aside>
            <section role="main" class="content-body">
                <?php include('homereusables/breadcrumb.php')?>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2 col-md-2"></div>
                        <div class="col-sm-8 col-md-8">
                        <div class="d-flex justify-content-center align-items-center" style="height:500px">
                        
                        <section class="card card-featured card-featured-primary mb-4" id="sendCodeContainer">
                            
                            <header class="card-header">
                                    <h2 class="card-title">Reset Pin</h2>
                                    <p class="card-subtitle">Change your transaction pin</p>
                                    <input id = "base_url" style = "display:none" value = "<?php echo base_url()?>">
                            </header>

                            <div class="card-body">
                                <div class="form-group row pb-4">
                                    <label class="col-12 control-label text-lg-end pt-2 text-secondary" for="inputDisabled">Send code to this email</label>
                                    <div class="col-12">
                                        <input class="form-control" value = "<?php echo $email[0]->email; ?>" id="inputDisabled" type="text"  disabled="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 text-center">
                                        <a class="btn btn-primary mt-2" id="sendPinResetCode">Send reset code</a>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="card card-featured card-featured-primary mb-4" id="verifyCodeContainer" style="display: none;">
                            <header class="card-header">
                                <!-- <div class="card-actions">
                                    <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                                    <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                                </div> -->

                                <h2 class="card-title">Verify Code</h2>
                                <p class="card-subtitle">Verify the code sent to your email</p>
                            </header>
                            <div class="card-body">
                                <div class="form-group row pb-4">
                                    <label class="col-12 control-label text-lg-end pt-2 text-secondary" id = "timer" for="inputDisabled">2mins remaining</label>
                                    <div class="col-12">
                                        <input id = "reset_code" class="form-control" type="text" placeholder="enter code">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 text-center">
                                        <a class="btn btn-primary mt-2" id="verifyResetCode">Verify now</a>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="card card-featured card-featured-primary mb-4" id="resetPinContainer" style="display: none;">
                            <header class="card-header">
                                <!-- <div class="card-actions">
                                    <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                                    <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                                </div> -->

                                <h2 class="card-title">New Pin</h2>
                                <p class="card-subtitle">Change your pin now</p>
                            </header>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-12 control-label text-lg-end pt-2 text-secondary"  for="inputDisabled">Enter new pin</label>
                                    <div class="col-12">
                                        <input type = "password" class="form-control" id = "newpin1" type="text" placeholder="code">
                                    </div>
                                </div>
                                <div class="form-group row pb-4">
                                    <label class="col-12 control-label text-lg-end pt-2 text-secondary"  for="inputDisabled">Enter new pin again</label>
                                    <div class="col-12">
                                        <input type = "password" class="form-control" type="text" id = "newpin2" placeholder="code">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 text-center">
                                        <a class="btn btn-primary mt-2 " id="changePin">Verify now</a>
                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>
                        </div>
                        <div class="col-sm-2 col-md-2"></div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    


    <script>
        let base_url = document.getElementById('base_url').value;

        const send_email = async (url)=>{
            let response = await fetch(`${url}client/sendEmail`)
            let data = await response.json();
            return data;

        }

        const setTimer = () => {
            // Set the date we're counting down to
            let timeleft = 60;
            let downloadTimer = setInterval(()=>{
            timeleft--;
            document.getElementById("timer").innerHTML = `${timeleft} secs remaining`;
            if(timeleft <= 0)
                clearInterval(downloadTimer);
                document.getElementById("timer").innerHTML = `Code Expired`;
                //Destroy the Code
            },1000);

        }

        const sendBackResetCode = async(value) => {
            let response = await fetch(`${base_url}client/takeResetCode/${value}`)
            let data = await response.json();
            return data;
        }


        document.querySelector("#sendPinResetCode").addEventListener("click",async(e)=>{
            e.preventDefault();
            document.querySelector("#sendPinResetCode").innerHTML = "<i class = 'fa fa-spinner fa-spin'></i> Send reset code";
            let result = await send_email(base_url);
            if (result.status == 201) {
                //Change the display to none
                document.querySelector("#sendCodeContainer").style.display = 'none';
                document.querySelector("#verifyCodeContainer").style.display = 'block'
                setTimer();
            }
            else {
                alert("Email Verification Link not sent due to poor connection");
            }
        });

        const updatePin = async(data) => {
            const formData = new FormData();
            formData.append('pin',data);
            const response = await fetch(`${base_url}client/updatePinById`, {
                method: 'POST',
                body: (formData) // body data type must match "Content-Type" header
            });
            // const response = await fetch(`${base_url}client/updatePinById/${data}`);
            const respond = await response.json();
            return respond;
        }

        document.querySelector("#verifyResetCode").addEventListener("click",async(e)=>{
            e.preventDefault();
            //Collect the Code and Verify fom the database
            let resetCode = document.querySelector("#reset_code");
            const sendResetCode = await sendBackResetCode(resetCode.value);
            if (sendResetCode.status == 200) {
                document.querySelector("#sendCodeContainer").style.display = 'none';
                document.querySelector("#verifyCodeContainer").style.display = 'none';
                document.querySelector("#resetPinContainer").style.display = 'block';
            } else {
                alert("Your code may have either expired or invalid");
            }
        })

        document.querySelector("#changePin").addEventListener("click",async(e)=>{
            // e.preventDefault();
            let newPin1 = document.querySelector("#newpin1");
            let newPin2 = document.querySelector("#newpin2");
            if (newPin1.value.length > 4 || newPin1.value.length < 4) {
                return alert('Transaction pin must not be greater than 4');
            }
            if (newPin1.value == newPin2.value) {
                // Send to the backend
                const response = await updatePin(newPin1.value);
                console.log(response);
                if (response.status == 200) {
                    newPin1.value = '';
                    newPin2.value = '';
                    return alert('Transaction pin has been Successfully Changed');
                } else {
                    return alert('Network Error!!!');
                }
            } else {
                return alert("Pins not a match");
            }
        })

    </script>

            <?php include('homereusables/scripts.php')?>

	</body>
</html>