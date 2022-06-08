<?php
defined("BASEPATH") or exit("No direct script access allowed");
error_reporting(0);
class Client extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->ci = & get_instance();
        $this->load->model("Crud");
        $this->load->helper('cookie');
        $this
            ->load
            ->library("session");
        $this
            ->load
            ->helper("url");

        date_default_timezone_set("Africa/Lagos");
        // $this
        //     ->load
        //     ->model("Transfer");
        // $this
        //     ->load
        //     ->model("Transfertoken");
        $this
            ->load
            ->model("Usertbl");
        // $this
        //     ->load
        //     ->model("Bvn");
        // $this
        //     ->load
        //     ->model("Weblog");
        // $this
        //     ->load
        //     ->model("Basket");
    }

    public function Header($pagetitle, $user_id)
    {

        $this
            ->load
            ->library('user_agent');
        if ($this
            ->agent
            ->is_browser())
        {
            $agent = $this
                ->agent
                ->browser() . ' ' . $this
                ->agent
                ->version();
        }
        elseif ($this
            ->agent
            ->is_robot())
        {
            $agent = $this
                ->agent
                ->robot();
        }
        elseif ($this
            ->agent
            ->is_mobile())
        {
            $agent = $this
                ->agent
                ->mobile();
        }
        else
        {
            $agent = 'Unidentified User Agent';
        }

        $modela = $this
            ->ci
            ->Weblog
            ->get_instance();
        $modela->id = null;
        $modela->userid = $user_id;
        $modela->channel = "Client";
        $modela->browser = $agent;
        $modela->platform = $this
            ->agent
            ->platform();
        $modela->ipaddress = $this
            ->input
            ->ip_address();
        $modela->description = $pagetitle;
        $modela->date = null;
        $modela->save();

    }

    public function email($to, $subject, $message, $link, $linktxt)
    {
        $this->data["message"] = $message;
        $this->data["title"] = $subject;
        $this->data["link"] = $link;
        $this->data["linktxt"] = $linktxt;

        $this
            ->load
            ->library("email");
        $config["protocol"] = "smtp";
        $config["smtp_host"] = "ssl://afriquepay.com";
        $config["smtp_port"] = "465";
        $config["smtp_timeout"] = "7";
        $config["smtp_user"] = "hello@afriquepay.com";
        $config["smtp_pass"] = "qQZEj3Pv8S-;";
        $config["charset"] = "utf-8";
        $config["newline"] = "\r\n";
        $config["mailtype"] = "html"; // or html
        $config["validation"] = true; // bool whether to validate email or not
        $this
            ->email
            ->initialize($config);
        $this
            ->email
            ->set_mailtype("html");
        $this
            ->email
            ->from("hello@afriquepay.com", "Afriquepay");
        $this
            ->email
            ->to($to);

        $this
            ->email
            ->subject($subject);
        $message = $this
            ->load
            ->view("client/mail", $this->data, true);
        $this
            ->email
            ->message($message);

        $this
            ->email
            ->send();
    }

    public function logout()
    {
        $this
            ->session
            ->set_userdata(SESS_PRE . "userid", null);
        $this
            ->session
            ->sess_destroy();
        $this->index();
    }

    public function basketcount()
    {
        $groupid = $this
            ->input
            ->post("groupid");
        $groupid = "jehova-witness@conference.afriquepay.net";
        $basket = json_decode(json_encode($this
            ->Basket
            ->getopenminibasket($groupid)) , true);
        $count = count($basket);
        $this->data["status"] = "true";
        $this->data["message"] = $count;

        echo $message = json_encode($this->data);

    }

    public function basketdata()
    {
        $groupid = $this
            ->input
            ->post("groupid");
        $groupid = "jehova-witness@conference.afriquepay.net";
        $basket = json_decode(json_encode($this
            ->Basket
            ->getopenminibasket($groupid)) , true);
        $count = count($basket);

        for ($a = 0;$a < $count;$a++)
        {
            $userid = $basket[$a]['userid'];
            $basketid = $basket[$a]['basketid'];
            $m = $this
                ->Usertbl
                ->getuserdetailuserid($userid);
            $basket[$a]['username'] = $m[0]['firstname'] . " " . $m[0]['lastname'];

            $b = $this
                ->Basket
                ->getbasket($basketid);
            $basket[$a]['date'] = $b[0]['creation_date'];
            $basket[$a]['description'] = $b[0]['description'];
            $basket[$a]['requestamount'] = $b[0]['requestamount'];

        }

        $this->data["data"] = $basket;

        $this->data["status"] = "true";
        $this->data["message"] = "Successful";

        echo $message = json_encode($this->data);

    }

    public function index()
    {
        $userid = $this
            ->session
            ->userdata(SESS_PRE . "userid");

        if (isset($userid))
        {
            // $this->Header("Dashboard", $userid);
            $this->dashboard();
        }
        else
        {
            // $this->Header("Login Page", 0);
            $this
                ->load
                ->view("landing/login");
        }
    }

    public function stellaauthcode()
    {
        $url = stellaurl . "auth/signin";

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $headers = ["Content-Type: application/json"];
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        $data = json_encode(["email" => "" . stellaemail, "password" => "" . stellapassword, ]);

        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

        //for debug only!
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $resp = curl_exec($curl);

        curl_close($curl);
        //var_dump($resp);
        $character = json_decode($resp);
        return $character
            ->data->accessToken;
    }

    public function randomStrings($length = 5)
    {
        $str = "";
        $timestaa = time();
        $characters = array_merge(range("A", "Z") , range("a", "z") , range("0", "9"));
        $max = count($characters) - 1;
        for ($i = 0;$i < $length;$i++)
        {
            $rand = mt_rand(0, $max);
            $str .= $characters[$rand];
        }
        return $str . $timestaa;
    }

    public function sendbankmoney_new($tokenOnline = "")
    {

        $amount = $this
            ->input
            ->post("amount");
             $amount_def = $this
            ->input
            ->post("amount");
        $detail = $this
            ->input
            ->post("detail");
        $acname = $this
            ->input
            ->post("name");
        $bankcode = $this
            ->input
            ->post("code");
        $accountno = $this
            ->input
            ->post("no");
        $userid = $this
            ->input
            ->post("userid");
        $loginhash = $this
            ->input
            ->post("loginhash");

/*
 $amount = "50";
        $detail = "OLADIPUPO MUIDEEN";
        $acname =  $detail;
        $bankcode = "058";
        $accountno = "0030757234";
        $userid = "7";
        $loginhash = "";
*/

        $user = json_decode(json_encode($this
            ->Usertbl
            ->checkuid($userid)) , true);
        $dbhash = $user[0]["hash"];




        if ($dbhash != $loginhash)
        {
            $this->data["status"] = "False";
            $this->data["message"] = "Invalid Access! please try again or download the lastest version";

            echo $message = json_encode($this->data);
        }
        else
        {
            $bankname = $this
                ->input
                ->post("bankname");
            $tokendate = date("Y-m-d");

            if ($tokenOnline != "")
            {
                $tokc = json_decode(json_encode($this
                    ->Transfertoken
                    ->checktokenisexist($tokenOnline, $userid, $tokendate)) , true);
            }
            else
            {
                $tokc = 0;
            }

            if ($tokc)
            {
                $this->data["status"] = "False";
                $this->data["message"] = "Duplicate transaction! try again";

                echo $message = json_encode($this->data);
            }
            else
            {
                /*  $amount =  5 ;
                $detail =  "hi" ;
                $acname =  "OLADIPUPO, MUIDEEN OLAIDE" ;
                $bankcode = "058";
                $accountno= "0030757234";
                $userid= "10960";
                $bankname= "GTBANK" ;
                */
                /*
                stdClass Object ( [status] => [message] => You cannot initiate third party payouts as a starter business ) {"accountString":"OLADIPUPO, MUIDEEN OLAIDE 0030757234 GTBANK","recipientcode":"RCP_wewm6cdqovyrpuk","status":"False","message":"Please try again laters"}
                
                */

                $accountString = $acname . " " . $accountno . " " . $bankname;

                $this->data["accountString"] = $accountString;

                $acctbalance = $user[0]["walletamount"];
                $charges = 0;

                $totalcharges = $charges + $amount;

                if ($acctbalance >= $totalcharges)
                {
                    $amount = $amount * 100;

                    $accessToken = $this->stellaauthcode();

                    $url = stellaurl . "clients/business/customers/funds/transfer";

                    $curl = curl_init($url);
                    curl_setopt($curl, CURLOPT_URL, $url);
                    curl_setopt($curl, CURLOPT_POST, true);
                    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

                    $headers = ["Content-Type: application/json", "SECRET_KEY: " . stella_secret, "businessId: " . stellabusiness, "Authorization: Bearer " . $accessToken, ];
                    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

                    $data = json_encode(["receiverAccountNumber" => $accountno, "receiverBankCode" => $bankcode, "retrievalReference" => $this->randomStrings(6) . time() . $this->randomStrings(6) , "narration" => "Bank Transfer from " . $user[0]["name"], "amount" => "" . $amount, ]);

                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

                    //for debug only!
                    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
                    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
                    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

                    $resp = curl_exec($curl);
                    $result = json_decode($resp);

                    if ($result->status != 1 || !$result->status)
                    {
                        $this->data["status"] = "False";
                        $this->data["message"] = "Please try again later";
                        echo $message = json_encode($this->data);
                    }
                    else
                    {
                        // print_r($result) ;
                        $mobile = $user[0]["mobile"] ;
                        $withdraw_data = ["user_id" => $userid, 
                        "mobile" => $mobile, 
                        "account_name" => $acname, 
                        "bank_name" => $bankcode, 
                        "account_number" => $accountno,
                         "amount" =>$amount_def, 
                         "status" => 'successful'];

                        $this
                            ->Usertbl
                            ->request_withdraw($withdraw_data);

                        $this->data["recipientcode"] = $recipientcode = $this->randomStrings(6);

                        $user = json_decode(json_encode($this
                            ->Usertbl
                            ->checkuid($userid)) , true);
                        $acctbalance = $user[0]["walletamount"];
                        $phone = $user[0]["mobile"];
                        $refername = $user[0]["refername"];

                        //pay with charges
                        $amount = $amount / 100;
                        $amount2 = $amount + $charges;
                        $acctbalance = $acctbalance - $amount2;
                        $this
                            ->Usertbl
                            ->updatebalance($phone, $acctbalance);

                        $date = date("Y-m-d H:i:s");
                        //$date = date("Y-m-d H:i:s", strtotime("+5 hours $now"));
                        $date = date("Y-m-d h:i:s");

                        if ($tokenOnline != "")
                        {
                            $modela = $this
                                ->ci
                                ->Transfertoken
                                ->get_instance();
                            $modela->id = null;
                            $modela->userid = $userid;
                            $modela->token = $tokenOnline;
                            $modela->date = $tokendate;
                            $modela->save();
                        }

                        $model = $this
                            ->ci
                            ->Transfer
                            ->get_instance();
                        $model->id = null;
                        $model->sender = "09000000000";
                        $model->receiver = $phone;
                        $model->amount = $amount;
                        $model->date = $date;
                        $model->save();

                        $this->data["status"] = "True";
                        $this->data["message"] = "Successful!";
                        echo $message = json_encode($this->data);
                    }
                }
                else
                {
                    $this->data["status"] = "False";
                    $this->data["message"] = "Your account balance is too low for this transactions, you are to pay N" . $charges . " as transfer charges";
                    echo $message = json_encode($this->data);
                }
            }
        }
    }

    public function resolveaccount($account, $bankcode)
    {
        $accessToken = $this->stellaauthcode();

        $url = stellaurl . "clients/business/customers/name-enquiry";

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $headers = ["Content-Type: application/json", "SECRET_KEY: " . stella_secret, "businessId: " . stellabusiness, "Authorization: Bearer " . $accessToken, ];
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        $data = json_encode(["accountNumber" => $account, "bankCode" => $bankcode, ]);

        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

        //for debug only!
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $response = curl_exec($curl);
        // $result = json_decode($resp);
        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err)
        {
            $this->data["accountnumber"] = "";
            $this->data["accountname"] = "network error";
            $this->data["status"] = "False";
            $this->data["message"] = "Data Not Received! Try Again";
        }
        else
        {
            $result = json_decode($response);
            // print_r($result) ;
            $this->data["accountnumber"] = $account;
            $this->data["accountname"] = $result
                ->data->name;
            $this->data["status"] = "true";
            $this->data["message"] = "Data Recieved";
        }

        echo $message = json_encode($this->data);
    }

    public function getbank()
    {
        $accessToken = $this->stellaauthcode();

        $url = stellaurl . "banks";

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $headers = ["Content-Type: application/json", "SECRET_KEY: " . stella_secret, "businessId: " . stellabusiness, "Authorization: Bearer " . $accessToken, ];
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        $data = json_encode(["businessId" => stellabusiness, ]);

        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

        //for debug only!
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $resp = curl_exec($curl);
        $err = curl_error($curl);
        $result = json_decode($resp);

        $this->data["bank"] = $result->data;
        curl_close($curl);

        if ($err)
        {
            $this->data["status"] = "False";
            $this->data["message"] = "Data Not Received! Try Again";

            echo $message = json_encode($this->data);
        }
        else
        {
            echo $resp;
        }
    }

    function login_user()
    {
        // print_r($_POST);
        $user_login = ["email" => $_POST["email"], "password" => $_POST["password"], ];

        
        /*
        $user_login = [
            "email" => 'i@olaide.me',
            "password" => '123456'
        ]; 
        */
        // print_r($user_login);
        $data = false;
        $data["users"] = $this
            ->Usertbl
            ->login_user($user_login);
        $userid = $data["users"][0]["id"];
        // //
        if ($data["users"])
        {
            
            // $this->Header("Login", $userid);
            $this->session->set_userdata('userid', $data["users"][0]["id"]);
           
            $this
                ->session
                ->set_userdata("userEmail", $data["users"][0]["email"]);

            $this
            ->session
            ->set_userdata("username", $data["users"][0]["user_id"]);
           
            $userid = $data["users"][0]["id"];

           

            echo json_encode(["error" => true, "message" => "Login Successful"]);
            // "id" => $data["users"][0]["id"], "hash" => $hash, "pin" => $data["users"][0]["pin"], "bankname" => $data["users"][0]["bankname"], "accountno" => $data["users"][0]["accountno"], "walletamount" => $data["users"][0]["walletamount"], "name" => $data["users"][0]["name"], "mobile" => $data["users"][0]["mobile"], "email" => $data["users"][0]["email"], "userid" => $data["users"][0]["userid"], "fakepassword" => $data["users"][0]["fakepassword"], 
            // $this->dashboard();
            
        }
        else
        {
            echo json_encode(["error" => false, "message" => "Login Failed", ]);
        }
    }

    public function checkStellaBalance($accountno)
    {
        $accessToken = $this->stellaauthcode();

        $url = stellaurl . "clients/business/customers/balance/" . $accountno;

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $headers = ["Content-Type: application/json", "SECRET_KEY: " . stella_secret, "businessId: " . stellabusiness, "Authorization: Bearer " . $accessToken, ];
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        $data = json_encode(["webhookUrl" => "https://paywideng.com/api/webhook", ]);

        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

        //for debug only!
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $resp = curl_exec($curl);
        $result = json_decode($resp);

        if ($result->status)
        {
            return $result
                ->data->availableBalance;
        }
        else
        {
            return 0;
        }
    }

    public function checkStellaWithdraw($accountno, $amount)
    {
        $amount = $amount * 100;
        $accessToken = $this->stellaauthcode();

        $url = stellaurl . "clients/business/customers/funds/withdraw";

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $headers = ["Content-Type: application/json", "SECRET_KEY: " . stella_secret, "businessId: " . stellabusiness, "Authorization: Bearer " . $accessToken, ];
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        $data = json_encode(["payerAccountNumber" => $accountno, "retrievalReference" => $this->randomStrings(5) . time() . $this->randomStrings(5) , "narration" => "Deposit to AfriquePay", "amount" => "" . $amount, ]);

        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

        //for debug only!
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $resp = curl_exec($curl);
        $result = json_decode($resp);

        if ($result->status)
        {
            return $result->status;
        }
        else
        {
            return 0;
        }
    }

    function cron($id)
    {
        $data = false;
        $data["users"] = $this
            ->Usertbl
            ->getuserdetail($id);

        // //
        if ($data["users"])
        {

            //Treat the balance
            $userid = $data["users"][0]["id"];
            $accountno = $data["users"][0]["accountno"];
            $accountcron = $data["users"][0]["accountcron"];
            $date = date("Y-m-d H:i:s");

            //////CHECK CRON FOR BALANCE
            $to_time = strtotime($date);
            $from_time = strtotime($accountcron);
            $mindiff = round(abs($to_time - $from_time) / 60, 2);
            if ($accountno != "")
            {
                //more than 4minutes. do the balance cron
                if ($mindiff > 4)
                {
                    $mystellabalance = $this->checkStellaBalance($accountno);

                    if ($mystellabalance > 0)
                    {
                        //Transfer the money
                        $areyoudone = $this->checkStellaWithdraw($accountno, $mystellabalance);

                        if ($areyoudone)
                        {
                            //if withdraw successfully
                            $Myreal = json_decode(json_encode($this
                                ->Usertbl
                                ->checkuid($userid)) , true);
                            //convert to dollars
                            $mystellabalance_todollar = round($mystellabalance, 2);
                            $newbal = $Myreal[0]["walletamount"] + $mystellabalance_todollar;
                            $phone = $Myreal[0]["mobile"];
                            $this
                                ->Usertbl
                                ->updatebalancewithuserid($userid, $newbal);
                            $this
                                ->Userbl
                                ->Updateaccountcron($userid, $date);

                            $date = date("Y-m-d h:i:s");
                            $model = $this
                                ->ci
                                ->Transfer
                                ->get_instance();
                            $model->id = null;
                            $model->sender = "09000000000";
                            $model->receiver = $phone;
                            $model->amount = $mystellabalance_todollar;
                            $model->date = $date;
                            $model->save();

                        }
                    }
                }

            }

            echo json_encode(["error" => true, "message" => "Login Successful", "id" => $data["users"][0]["id"], "pin" => $data["users"][0]["pin"], "accountno" => $data["users"][0]["accountno"], "bankname" => $data["users"][0]["bankname"], "walletamount" => $data["users"][0]["walletamount"], "name" => $data["users"][0]["name"], "mobile" => $data["users"][0]["mobile"], "email" => $data["users"][0]["email"], "userid" => $data["users"][0]["userid"], "fakepassword" => $data["users"][0]["fakepassword"]]);
            // $this->dashboard();
            
        }
        else
        {
            echo json_encode(["error" => false, "message" => "Login Failed", ]);
        }
    }

    public function register_user()
    {
        $user_reg = ["email" => $_POST["email"],"password" => $_POST["password"] ];

         if ($user_reg["email"] == "")
            {
                echo json_encode(["error" => true, "message" => "Enter a valid email address", ]);
            }
            else
            {
                $data = false;
                $model = $this->ci->Crud->get_instance();
                $dat =  $model->getdata("email",$user_reg["email"]);
                //
                if ($dat)
                {
                    echo json_encode(["error" => true, "message" => "User with email alrady exist", ]);
                }
                else
                {
                    $data = array(
                        'email' => $user_reg['email'],
                        'password' => $user_reg['password'],
                        'user_id' => "REN/22/13"
                    );

                    $done = $this->db->insert('user',$data);

                    if($done){
                        echo json_encode(["error" => false, "message" => "Successfully Registered", ]);

                    }
                }
            }
        
    }

    public function request_withdraw()
    {

        $userid_log = $this
            ->session
            ->userdata(SESS_PRE . "userid");
        $this->Header("Withdrawal Request", $userid_log);
        $withdraw_data = ["user_id" => $this
            ->session
            ->userdata(SESS_PRE . "userid") , "mobile" => $this
            ->session
            ->userdata(SESS_PRE . "userMobile") , "account_name" => $_POST["account_name"], "bank_name" => $_POST["bank_name"], "account_number" => $_POST["account_number"], "amount" => $_POST["amount"], ];

        $data = false;
        $data = $this
            ->Usertbl
            ->request_withdraw($withdraw_data);

        if ($data)
        {
            $withdraw_data["newAmount"] = $this
                ->session
                ->userdata(SESS_PRE . "userWalletAmount") - $withdraw_data["amount"];
            $data = $this
                ->Usertbl
                ->add_fund($withdraw_data);
            if ($data)
            {
                $this
                    ->session
                    ->set_userdata(SESS_PRE . "userWalletAmount", $withdraw_data["newAmount"]);
                echo json_encode(["error" => false, "message" => "Request Successful!", ]);
            }
            else
            {
                echo json_encode(["error" => true, "message" => "Request Failed!", ]);
            }
        }
        else
        {
            echo json_encode(["error" => true, "message" => "Request Failed", ]);
        }
    }

    public function withdraw_list()
    {

        $userid_log = $this
            ->session
            ->userdata(SESS_PRE . "userid");
        $this->Header("Withdrawal List", $userid_log);
        $withdraw_data = ["user_id" => $this
            ->session
            ->userdata(SESS_PRE . "userid") , "mobile" => $this
            ->session
            ->userdata(SESS_PRE . "userMobile") , ];

        $data = $this
            ->Usertbl
            ->withdraw_list($withdraw_data);
        echo json_encode($data);
    }

    public function transaction_list($platform = 0)
    {
        if ($platform == 0)
        {
            $user_id = $this
                ->session
                ->userdata(SESS_PRE . "userid");
            $mobile = $this
                ->session
                ->userdata(SESS_PRE . "userMobile");
        }
        else
        {
            $user_id = $_POST["user_id"];
            // $user_id = 7 ;
            $u = $this
                ->Usertbl
                ->getuserdetail($user_id);
            $mobile = $u[0]["mobile"];
        }

        $this->Header("Transaction List", $user_id);
        $transaction_data = ["user_id" => $user_id, "mobile" => $mobile, ];

        $data = $this
            ->Usertbl
            ->transaction_list($transaction_data);

        $tran_data = ["mydata" => $data, "success" => true, "message" => "Successful", ];
        echo json_encode($tran_data);
    }

    public function escrow_list($platform = 0)
    {
        if ($platform == 0)
        {
            $u_id = $this
                ->session
                ->userdata(SESS_PRE . "userid");
            $u_mobile = $this
                ->session
                ->userdata(SESS_PRE . "userMobile");
        }
        else
        {
            $u_id = $_POST["userid"];
            $u_mobile = $_POST["mobile"];
        }

        $this->Header("Escrow List", $u_id);

        $escrow_data = ["user_id" => $u_id, "mobile" => $u_mobile, ];
        $data = $this
            ->Usertbl
            ->escrow_list($escrow_data);

        $count = count($data);
        for ($a = 0;$a < $count;$a++)
        {
            $id = $data[$a]['id'];

            $escrow_data = ["escrow_id" => $id, ];
            $wal_a = $this
                ->Usertbl
                ->escrow_fund_with_status($escrow_data, "added");
            if ($wal_a[0]['fund'])
            {
                $data[$a]['wallet_amount'] = $wal_a[0]['fund'];
            }
            else
            {
                $data[$a]['wallet_amount'] = 0;
            }
            $sender = $data[$a]['sender'];
            $receiver = $data[$a]['recipient'];

            $s = $this
                ->Usertbl
                ->checkmobile($sender);
            $data[$a]['sendername'] = $s[0]['firstname'] . " " . $s[0]['lastname'];

            $r = $this
                ->Usertbl
                ->checkmobile($receiver);
            $data[$a]['recipientname'] = $r[0]['firstname'] . " " . $r[0]['lastname'];

        }

        if ($platform == 1)
        {
            $data['api_response'] = $data;
            $data['api_success'] = true;

        }

        echo json_encode($data);
    }

    public function escrow_fund()
    {
        $escrow_data = ["escrow_id" => $_POST["escrowId"], ];

        $data = $this
            ->Usertbl
            ->escrow_fund_with_status($escrow_data, "added");
        echo json_encode($data);
    }

    public function escrow_invoice($platform = 0)
    {
        $escrow_data = ["escrow_id" => $_POST["escrowId"], ];
        $id = $_POST["escrowId"];

        if ($platform == 0)
        {
            $data = $this
                ->Usertbl
                ->escrow_invoice($escrow_data);
        }
        else
        {
            $datas = $this
                ->Usertbl
                ->escrow_invoice2($id);
            $data['status'] = true;
            $data['mydata'] = $datas;

        }

        echo json_encode($data);
    }

    public function bvnforolddata($bvn)
    {

        $email = $this
            ->input
            ->post("email");
        //  $email = "olacoycompany@gmail.com"  ;
        $user = json_decode(json_encode($this
            ->Usertbl
            ->checkuseremail($email)) , true);
        $userid = $user[0]["id"];
        $uemail = $user[0]["email"];
        $fn = $user[0]["firstname"];
        $ln = $user[0]["lastname"];
        $mobile = $user[0]["mobile"];

        //  $dob ="1991-10-29" ;
        $dob = $user[0]["dob"];

        $accessToken = $this->stellaauthcode();

        $url = stellaurl . "clients/business/customers/";

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $headers = array(

            "Content-Type: application/json",
            "SECRET_KEY: " . stella_secret,
            "businessId: " . stellabusiness,
            "Authorization: Bearer " . $accessToken
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        $data = json_encode(array(
            "email" => $uemail,
            "firstName" => $fn,
            "lastName" => $ln,
            "otherName" => "",
            "bvn" => $bvn,
            "phoneNo" => $mobile,
            "gender" => "Male",
            "placeOfBirth" => "",
            "dateOfBirth" => $dob,
            "address" => "",
            "nationalIdentityNo" => ""
        ));

        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

        //for debug only!
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $resp = curl_exec($curl);
        $character = json_decode($resp);
        // echo  $character->data->accessToken;
        curl_close($curl);
        //var_dump($resp);
        

        $status = $character->status;
        if ($status == true)
        {
            $em = $character
                ->data
                ->customerDetails->email;
            $an = $character
                ->data
                ->account_details->accountNumber;
            $bn = "Stella MFB";
            $uname = $fn . " " . $ln;
            $this
                ->Usertbl
                ->updatebank($em, $uname, $an, $bn);
            $this
                ->Usertbl
                ->updatebvn($em, $bvn);
            $this->data["accountno"] = $an;
            $this->data["accountname"] = $uname;
            $this->data["bankname"] = $bn;
        }
        else
        {
            $this->data["accountno"] = "";
            $this->data["accountname"] = "";
            $this->data["bankname"] = "";
        }

        //CREATING THE BANK
        if ($status == true)
        {
            $this->data["success"] = "True";
            $this->data["message"] = "Bank Account Created. Login Back" . $email;

        }
        else
        {
            $this->data["success"] = "False";
            $this->data["message"] = "Please try again later" . $email;
        }
        echo $message = json_encode($this->data);

    }

    public function getbvn($bvn, $shortcode)
    {
        $email = $this
            ->input
            ->post("email");
        // $email  = "olacoycompany@gmail.com" ;
        //  $bvn = "22178996974";
        $this->data["getbvn"] = json_decode(json_encode($this
            ->Bvn
            ->getbvn($bvn)) , true);
        if ($this->data["getbvn"])
        {
            $userbvn = json_decode(json_encode($this
                ->Usertbl
                ->checkbvn($bvn)) , true);
            if ($userbvn)
            {
                $this->data["status"] = "False";
                $this->data["message"] = "Someone or you already associate with this BVN";
            }
        }
        else
        {

            $accessToken = $this->stellaauthcode();

            $url = stellaurl . "clients/business/validate-bvn/";

            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            $headers = array(

                "Content-Type: application/json",
                "SECRET_KEY: " . stella_secret,
                "businessId: " . stellabusiness,
                "Authorization: Bearer " . $accessToken
            );
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

            $data = json_encode(array(
                "businessId" => stellabusiness,
                "bvn" => $bvn
            ));

            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

            //for debug only!
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

            $resp = curl_exec($curl);
            $err = curl_error($curl);
            $result = json_decode($resp);
            //  echo  $character->data->phoneNumber;
            curl_close($curl);
            //var_dump($character);
            //print_r($result) ;
            if ($err)
            {
                //echo "cURL Error #:" . $err;
                $this->data["firstname"] = "";
                $this->data["lastname"] = "";
                $this->data["formatted_dob"] = "";
                $this->data["mobile"] = "";
                $this->data["bvn"] = "";
                $this->data["email"] = "";
                $this->data["status"] = "False";
                $this->data["message"] = "Error! try again";
            }
            else
            {
                //echo $response;
                

                $this->data["firstname"] = $xfn = $result
                    ->data->firstName;
                $this->data["lastname"] = $xln = $result
                    ->data->lastName;
                $this->data["formatted_dob"] = $originalDate = $result
                    ->data->dob;
                $originalDate = date("Y-m-d", strtotime($originalDate));
                $this->data["mobile"] = $mob = $result
                    ->data->phoneNumber;
                $acc = $this->data["firstname"] . " " . $this->data["lastname"];

                $user = json_decode(json_encode($this
                    ->Usertbl
                    ->checkuseremail($email)) , true);
                if ($user)
                {

                    $this
                        ->Usertbl
                        ->updatemyname($email, $xfn, $xln, $originalDate, $acc);
                }

                $this->data["bvn"] = $bvn;

                $this->data["email"] = $email;
                $this->data["status"] = "otp";
                $this->data["message"] = "Data Received";

                $this->data["message"] = $m_m = "Your OTP Code is " . $shortcode;

                //  $this->email($email,  "OTP Message",  $m_m , "", "") ;
                

                $model = $this
                    ->ci
                    ->Bvn
                    ->get_instance();
                $model->id = null;
                $model->bvn = $bvn;
                $model->firstname = $this->data["firstname"];
                $model->lastname = $this->data["lastname"];
                $model->mobile = $this->data["mobile"];
                $model->dob = $originalDate;
                $model->date = null;

                $model->save();
            }
        }

        echo $message = json_encode($this->data);
    }

    public function create_escrow($platform = 0)
    {
        if ($platform == 0)
        {
            $u_Mobile = $this
                ->session
                ->userdata(SESS_PRE . "userMobile");
        }
        else
        {
            $u_Mobile = $_POST["mobile"];
        }

        $own = json_decode(json_encode($this
            ->Usertbl
            ->checkmobile($u_Mobile)) , true);

        $userid_log = $own[0]['id'];

        $this->Header("Create Escrow", $userid_log);

        $escrow_data = ["title" => $_POST["title"], "description" => $_POST["desc"], "sender" => $u_Mobile, "recipient" => $_POST["rphone"], ];

        if ($escrow_data["title"] == "")
        {
            echo json_encode(["error" => true, "message" => "Enter a valid escrow title", ]);
        }
        else
        {
            if ($escrow_data["description"] == "")
            {
                echo json_encode(["error" => true, "message" => "Enter a valid description", ]);
            }
            else
            {
                if ($escrow_data["recipient"] == "")
                {
                    echo json_encode(["error" => true, "message" => "Enter a valid recipient phone number", ]);
                }
                else
                {
                    $data = false;
                    $data["escrow"] = $this
                        ->Usertbl
                        ->create_escrow($escrow_data);
                    //
                    if ($data["escrow"])
                    {
                        echo json_encode(["error" => false, ]);
                    }
                    else
                    {
                        echo json_encode(["error" => true, ]);
                    }
                }
            }
        }
    }

    public function create_escrow_invoice()
    {
        $escrow_data = ["title" => $_POST["invoiceTitle"], "note" => $_POST["invoiceNote"], "escrow_id" => $_POST["escrowId"], "items" => $_POST["invoiceItems"], "invoice_no" => $_POST["invoice_no"], ];

        $data = false;
        $data = $this
            ->Usertbl
            ->create_escrow_invoice($escrow_data);
        //
        if ($data)
        {
            echo json_encode(["error" => false, ]);
        }
        else
        {
            echo json_encode(["error" => true, ]);
        }

        // echo json_encode($escrow_data);
        
    }

    // public function add_escrow_fund($escrowId, $amount, $){
    //     $escrow_data = [
    //         "escrow_id" => $_POST["escrowId"],
    //         "amount" => $_POST["amount"],
    //         "status" => 'added',
    //     ];
    //     if($escrow_data["amount"] == ""){
    //         echo json_encode([
    //             'error' => true,
    //             'message' => 'Enter a valid amount'
    //         ]);
    //     }else{
    //         $data = false;
    //         $data["escrow"] = $this->Usertbl->add_escrow_fund($escrow_data);
    //         //
    //         if ($data["escrow"]) {
    //             echo json_encode([
    //                 'error' => false
    //             ]);
    //         } else {
    //             echo json_encode([
    //                 'error' => true
    //             ]);
    //         }
    //     }
    // }
    public function fetch_sent_packets()
    {
        $packet_data = ["user_id" => $this
            ->session
            ->userdata(SESS_PRE . "userid") , "mobile" => $this
            ->session
            ->userdata(SESS_PRE . "userMobile") , ];

        $userid_log = $this
            ->session
            ->userdata(SESS_PRE . "userid");

        $this->Header("Fetch Send Packet", $userid_log);

        $data = $this
            ->Usertbl
            ->fetch_sent_packets($packet_data);
        echo json_encode($data);
    }

    public function updateWallet()
    {
        $tnx_data = ["user_id" => $_POST["userId"], "reference" => $_POST["ref"], "amount" => $_POST["amt"], ];

        $data = false;
        $data = $this
            ->Usertbl
            ->update_wallet($tnx_data);

        if ($data)
        {
            $tnx_data["newAmount"] = $this
                ->session
                ->userdata(SESS_PRE . "userWalletAmount") + $tnx_data["amount"];
            $data = $this
                ->Usertbl
                ->add_fund($tnx_data);
            if ($data)
            {
                $this
                    ->session
                    ->set_userdata(SESS_PRE . "userWalletAmount", $tnx_data["newAmount"]);
                echo json_encode(["error" => false, "message" => "Packet funded successfully!", ]);
            }
            else
            {
                echo json_encode(["error" => true, "message" => "Failed to fund packet!", ]);
            }
        }
        else
        {
            echo json_encode(["error" => true, "message" => "Transaction record failed!", ]);
        }
    }

    function update_user($default = 0)
    {
        $user_data = ["mobile" => $this
            ->input
            ->post("userMobile") , "userId" => $this
            ->session
            ->userdata(SESS_PRE . "userid") , ];

        $userid_log = $this
            ->session
            ->userdata(SESS_PRE . "userid");

        $this->Header("Update Account", $userid_log);

        $data = false;
        $data["users"] = $this
            ->Usertbl
            ->update_user($user_data);

        //
        if ($data["users"])
        {
            $this
                ->session
                ->set_flashdata("success_msg", "Update Successful!");
            $this
                ->session
                ->set_userdata(SESS_PRE . "userMobile", $user_data["mobile"]);

            $this->wallet();
        }
        else
        {
            $this
                ->session
                ->set_flashdata("error_msg", "Update failed! Please try again.");
            $this->profile();
        }
    }

    public function dashboard()
    {
        $userid = $this
            ->session
            ->userdata("userid");
        if (isset($userid))
        {
            $username = $this
            ->session
            ->userdata("username");

            $data['userid']  = $userid;
            $data['username'] = $username;

            $this
                ->load
                ->view("client/dashboard",$data);
        }
        else
        {
            $this->index();
        }
    }

    public function profile()
    {
        $userid = $this
            ->session
            ->userdata(SESS_PRE . "userid");
        if (isset($userid))
        {

            $this->Header("Profile", $userid);

            $getdata = $this
                ->Usertbl
                ->checkuid($userid);
            $this
                ->session
                ->set_userdata(SESS_PRE . "userWalletAmount", $getdata[0]['walletamount']);

            $this
                ->session
                ->set_userdata(SESS_PRE . "userWalletbvn", $getdata[0]['bvn']);
            $this
                ->session
                ->set_userdata(SESS_PRE . "userWalletaccountno", $getdata[0]['accountno']);
            $this
                ->session
                ->set_userdata(SESS_PRE . "userWalletbank", $getdata[0]['bankname']);

            $this
                ->session
                ->set_userdata("title", "Profile");
            $this
                ->load
                ->view("client/profile");
        }
        else
        {
            $this->index();
        }
    }

    public function basket()
    {
        $userid = $this
            ->session
            ->userdata(SESS_PRE . "userid");
        if (isset($userid))
        {

            $this->Header("Basket", $userid);

            $this
                ->session
                ->set_userdata("title", "Basket");
            $this
                ->load
                ->view("client/basket");
        }
        else
        {
            $this->index();
        }
    }

    public function resetpin()
    {
        $userid = $this
            ->session
            ->userdata(SESS_PRE . "userid");
        if (isset($userid))
        {

            $this->Header("Reset Pin", $userid);

            $get_user_email = $this
                ->Usertbl
                ->getEmail($userid);
            $user["email"] = $get_user_email;
            $this
                ->load
                ->view("client/reset-pin", $user);
        }
        else
        {
            $this->index();
        }
    }

    public function transactions_mobile()
    {
        $userid = $this
            ->session
            ->userdata(SESS_PRE . "userid");
        if (isset($userid))
        {
            $this->Header("Transaction", $userid);

            $this
                ->load
                ->view("client/transactions_mobile");
        }
        else
        {
            $this->index();
        }
    }

    public function user_settings()
    {
      $states = $this->db->select('*')->from('states')->get();
      $data['states'] = $states->result_array();
            $userid =  $this
            ->session
            ->userdata("userid");
        $this->db->select('*');
        $this->db->from('user');
        $result = $this->db->where('id',$userid)->get();
        $data['userinfo'] = $result->result_array();
       $this->load->view('client/user_settings',$data);
    }

    public function transactions()
    {
        $userid = $this
            ->session
            ->userdata(SESS_PRE . "userid");
        if (isset($userid))
        {
            $this
                ->session
                ->set_userdata("title", "Transactions");

            $this->Header("Transaction", $userid);

            $this
                ->load
                ->view("client/transactions");
        }
        else
        {
            $this->index();
        }
    }

    public function withdraw_mobile()
    {
        $userid = $this
            ->session
            ->userdata(SESS_PRE . "userid");
        if (isset($userid))
        {
            $this->Header("Withdraw", $userid);

            $this
                ->load
                ->view("client/withdrawal_mobile");
        }
        else
        {
            $this->index();
        }
    }

    public function withdraw()
    {
        $userid = $this
            ->session
            ->userdata(SESS_PRE . "userid");
        if (isset($userid))
        {
            $this->Header("Withdraw", $userid);

            $this
                ->session
                ->set_userdata("title", "Withdrawal");

            $accessToken = $this->stellaauthcode();

            $url = stellaurl . "banks";

            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            $headers = ["Content-Type: application/json", "SECRET_KEY: " . stella_secret, "businessId: " . stellabusiness, "Authorization: Bearer " . $accessToken, ];
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

            $data = json_encode(["businessId" => stellabusiness, ]);

            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

            //for debug only!
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

            $resp = curl_exec($curl);
            $result = json_decode($resp);

            $this->data["bank"] = $result->data;
            curl_close($curl);

            $this->data["randomStrings"] = $this->randomStrings(4) . $this->randomStrings(2) . $this->randomStrings(5) . $this->randomStrings(4) . $this->randomStrings(2) . $this->randomStrings(5);
            $this->data["userid"] = $userid;
            $user = json_decode(json_encode($this
                ->Usertbl
                ->checkuid($userid)) , true);
            $this->data["hash"] = $user[0]["hash"];
            $this
                ->load
                ->view("client/withdrawal", $this->data);
        }
        else
        {
            $this->index();
        }
    }

    public function loadSplash()
    {
        $this
            ->load
            ->view("client/splash");
    }

    public function forgotpassword()
    {
        $this
            ->load
            ->view("client/forgot-password");
    }

    public function fundpacket_mobile()
    {
        $userid = $this
            ->session
            ->userdata(SESS_PRE . "userid");
        if (isset($userid))
        {
            $this->Header("Fund Packet", $userid);

            $this
                ->load
                ->view("client/fund-packet_mobile");
        }
        else
        {
            $this->index();
        }
    }

    public function fundpacket()
    {
        $userid = $this
            ->session
            ->userdata(SESS_PRE . "userid");
        if (isset($userid))
        {
            $this->Header("Fund Packet", $userid);

            $this
                ->session
                ->set_userdata("title", "Fund Packet");

            $user = json_decode(json_encode($this
                ->Usertbl
                ->checkuid($userid)) , true);
            $accountno = $user[0]["accountno"];
            if ($accountno == "")
            {
                $this
                    ->load
                    ->view("client/fundpacket");
            }
            else
            {
                $this->profile();
            }

        }
        else
        {
            $this->index();
        }
    }

    public function escrow()
    {
        $userid = $this
            ->session
            ->userdata(SESS_PRE . "userid");
        if (isset($userid))
        {
            $this->Header("Escrow", $userid);

            $this
                ->session
                ->set_userdata("title", "Escrow");
            $this
                ->load
                ->view("client/escrow");
        }
        else
        {
            $this->index();
        }
    }

    function update_escrow_status()
    {
        $escrow_data = ["escrowId" => $_POST["escrowId"], "status" => $_POST["status"], ];

        $data = false;
        $data = $this
            ->Usertbl
            ->update_escrow_status($escrow_data);

        if ($data)
        {
            echo json_encode(["error" => false, "message" => "Escrow " . $escrow_data["status"] . " successfully", ]);
        }
        else
        {
            echo json_encode(["error" => true, "message" => "Escrow " . $escrow_data["status"] . " failed", ]);
        }
    }

    function reject_escrow_invoice()
    {
        $escrow_data = ["invoice_id" => $_POST["invoiceId"], "status" => $_POST["status"], ];

        $data = false;
        $data = $this
            ->Usertbl
            ->reject_escrow_invoice($escrow_data);

        if ($data)
        {
            echo json_encode(["error" => false, "message" => "Escrow " . $escrow_data["status"] . " successfully", ]);
        }
        else
        {
            echo json_encode(["error" => false, "message" => "Escrow " . $escrow_data["status"] . " successfully", ]);
        }
    }

    public function send_packet()
    {
        $packet_data = ["sender" => $this
            ->session
            ->userdata(SESS_PRE . "userMobile") , "receiver" => $_POST["rPhone"], "amount" => $_POST["rAmount"], ];

        $u_Mobile = $this
            ->session
            ->userdata(SESS_PRE . "userMobile");
        $own = json_decode(json_encode($this
            ->Usertbl
            ->checkmobile($u_Mobile)) , true);

        $userid_log = $own[0]['id'];

        $this->Header("Send Packet", $userid_log);

        $data = false;
        $data = $this
            ->Usertbl
            ->send_packet($packet_data);

        if ($data)
        {
            $packet_data["newAmount"] = $this
                ->session
                ->userdata(SESS_PRE . "userWalletAmount") - $packet_data["amount"];
            $data = $this
                ->Usertbl
                ->add_fund($withdraw_data);
            if ($data)
            {
                $this
                    ->session
                    ->set_userdata(SESS_PRE . "userWalletAmount", $packet_data["newAmount"]);
                echo json_encode(["error" => false, "message" => "Sent Successfully!", ]);
            }
            else
            {
                echo json_encode(["error" => true, "message" => "Sending Failed!", ]);
            }
        }
        else
        {
            echo json_encode(["error" => true, "message" => "Sending Failed", ]);
        }
    }

    function accept_escrow_invoice()
    {

        $uid = $_POST["userId"];
        $wal_e = $this
            ->Usertbl
            ->getuserdetail($uid);

        $escrow_data = ["invoice_id" => $_POST["invoiceId"], "status" => $_POST["status"], "total" => $_POST["total"], "escrow_id" => $_POST["escrowId"], "user_id" => $_POST["userId"], "user_balance" => $wal_e[0]['walletamount']];

        if ($escrow_data["user_balance"] < $escrow_data["total"])
        {
            echo json_encode(["error" => true, "message" => "Your wallet balance is too low!", ]);
        }
        else
        {
            $escrow_fund_data = ["escrow_id" => $escrow_data["escrow_id"], "amount" => $escrow_data["total"], "status" => "added", ];
            $data = false;
            $data = $this
                ->Usertbl
                ->add_escrow_fund($escrow_fund_data);
            if ($data)
            {
                $tnx_data = ["amount" => $escrow_data["total"], "user_id" => $escrow_data["user_id"], ];
                $tnx_data["newAmount"] = $wal_e[0]['walletamount'] - $tnx_data["amount"];
                $dat = false;
                $dat = $this
                    ->Usertbl
                    ->add_fund($tnx_data);
                if ($dat)
                {
                    $this
                        ->session
                        ->set_userdata(SESS_PRE . "userWalletAmount", $tnx_data["newAmount"]);

                    $d = false;
                    $d = $this
                        ->Usertbl
                        ->accept_escrow_invoice($escrow_data);

                    if ($data)
                    {
                        echo json_encode(["error" => false, "message" => "Escrow " . $escrow_data["status"] . " successfully", ]);
                    }
                    else
                    {
                        echo json_encode(["error" => false, "message" => "Escrow " . $escrow_data["status"] . " successfully", ]);
                    }
                }
                else
                {
                    echo json_encode(["error" => true, "message" => "Process aborted, try again!", ]);
                }
            }
            else
            {
                echo json_encode(["error" => true, "message" => "Process aborted, try again!", ]);
            }
        }
        // $data = false;
        // $data = $this->Usertbl->reject_escrow_invoice($escrow_data);
        
    }

    function release_all_escrow()
    {

        $escrowId = $_POST["escrowId"];
        $data = false;
        $data = $this
            ->Usertbl
            ->getescrow($escrowId);

        if ($data)
        {

            $escrow_data = ["escrowId" => $escrowId, "status" => "released", ];

            $this
                ->Usertbl
                ->update_escrow_status($escrow_data);

            $escrow_data = ["escrow_id" => $escrowId, ];

            $wal_a = $this
                ->Usertbl
                ->escrow_fund_with_status($escrow_data, "added");
            if ($wal_a[0]['fund'])
            {
                $wallet_amount = $wal_a[0]['fund'];
            }
            else
            {
                $wallet_amount = 0;
            }

            $recipient = $data[0]['recipient'];

            $owneresc_recipient_data = json_decode(json_encode($this
                ->Usertbl
                ->checkmobile($recipient)) , true);

            $owneresc_recipient_data_id = $owneresc_recipient_data[0]['id'];
            $owneresc_recipient_data_wallet = $owneresc_recipient_data[0]['walletamount'];
            $tnx_data = ["amount" => $wallet_amount, "user_id" => $owneresc_recipient_data_id, ];
            $tnx_data["newAmount"] = $owneresc_recipient_data_wallet + $wallet_amount;
            $dat = false;
            $dat = $this
                ->Usertbl
                ->add_fund($tnx_data);

            echo json_encode(["error" => true, "message" => "successful", ]);
        }
        else
        {
            echo json_encode(["error" => false, "message" => "error! please try again", ]);
        }
    }

    function released_escrow_invoice()
    {

        $uid = $_POST["userId"];
        $wal_e = $this
            ->Usertbl
            ->getuserdetail($uid);

        $escrow_data = ["invoice_id" => $_POST["invoiceId"], "status" => $_POST["status"], "total" => $_POST["total"], "escrow_id" => $_POST["escrowId"], "user_id" => $_POST["userId"], "user_balance" => $wal_e[0]['walletamount']];

        if ($escrow_data["user_balance"] < $escrow_data["total"])
        {
            echo json_encode(["error" => true, "message" => "Your wallet balance is too low!", ]);
        }
        else
        {
            $escrow_fund_data = ["escrow_id" => $escrow_data["escrow_id"], "amount" => $escrow_data["total"], "status" => "released", ];
            $data = false;
            $data = $this
                ->Usertbl
                ->add_escrow_fund($escrow_fund_data);
            if ($data)
            {
                $tnx_data = ["amount" => $escrow_data["total"], "user_id" => $escrow_data["user_id"], ];
                $tnx_data["newAmount"] = $wal_e[0]['walletamount'] - $tnx_data["amount"];
                $dat = false;
                $dat = $this
                    ->Usertbl
                    ->add_fund($tnx_data);
                if ($dat)
                {
                    $this
                        ->session
                        ->set_userdata(SESS_PRE . "userWalletAmount", $tnx_data["newAmount"]);

                    //Pay The seller directly
                    $escrow_id = $_POST["escrowId"];
                    $owneresc = json_decode(json_encode($this
                        ->Usertbl
                        ->getescrow($escrow_id)) , true);
                    $owneresc_recipient = $owneresc[0]['recipient'];

                    $owneresc_recipient_data = json_decode(json_encode($this
                        ->Usertbl
                        ->checkmobile($owneresc_recipient)) , true);

                    $owneresc_recipient_data_id = $owneresc_recipient_data[0]['id'];
                    $owneresc_recipient_data_wallet = $owneresc_recipient_data[0]['walletamount'];
                    $tnx_data = ["amount" => $escrow_data["total"], "user_id" => $owneresc_recipient_data_id, ];
                    $tnx_data["newAmount"] = $owneresc_recipient_data_wallet + $tnx_data["amount"];
                    $dat = false;
                    $dat = $this
                        ->Usertbl
                        ->add_fund($tnx_data);

                    $d = false;
                    $d = $this
                        ->Usertbl
                        ->accept_escrow_invoice($escrow_data);

                    if ($data)
                    {
                        echo json_encode(["error" => false, "message" => "Escrow " . $escrow_data["status"] . " successfully", ]);
                    }
                    else
                    {
                        echo json_encode(["error" => false, "message" => "Escrow " . $escrow_data["status"] . " successfully", ]);
                    }
                }
                else
                {
                    echo json_encode(["error" => true, "message" => "Process aborted, try again!", ]);
                }
            }
            else
            {
                echo json_encode(["error" => true, "message" => "Process aborted, try again!", ]);
            }
        }
        // $data = false;
        // $data = $this->Usertbl->reject_escrow_invoice($escrow_data);
        
    }

    public function register()
    {
        $this
            ->load
            ->view("client/register");
    }

    /*Challenge me*/
    public function sendEmail()
    {
        //Get User and Ensure Session is On
        $userid = $this
            ->session
            ->userdata(SESS_PRE . "userid");

        $this->Header("Send Mail", $userid);
        //load Get Email helper
        if ($userid)
        {
            $this
                ->load
                ->helper("sendmail");
            if ($this
                ->Usertbl
                ->getEmail($userid))
            {
                //Get User Email from Helper
                $email = getEmail($this
                    ->Usertbl
                    ->getEmail($userid));
                $this
                    ->load
                    ->library("email"); //Email Library Loading
                $random_num = randomNumber(); //Load the Rand Number
                $email_config = ["protocol" => "smtp", "smtp_host" => "ssl://smtp.gmail.com", "smtp_port" => 465, "smtp_user" => "daotechnology18@gmail.com", "smtp_pass" => "08060637754", "mailtype" => "html", "charset" => "iso-8859-1", ];

                $this
                    ->email
                    ->initialize($email_config);
                $this
                    ->email
                    ->set_newline("\r\n");
                $this
                    ->email
                    ->from("support@afriquepay.com", "Afriquepay Nig.");
                $this
                    ->email
                    ->to($email);
                $this
                    ->email
                    ->subject("Transaction Reset Pin");
                $this
                    ->email
                    ->message("<h2> Your Transaction Reset Pin is : $random_num </h2>");

                if ($this
                    ->email
                    ->send())
                {
                    //Send this Code to the Database
                    $arr = ["userid" => $userid, "code" => $random_num, "status" => true, ];
                    $query = $this
                        ->Usertbl
                        ->insert_resetCode($arr);
                    if ($query)
                    {
                        echo json_encode(["status" => 201, "statusText" => "Email Verification Sent", ]);
                    }
                    else
                    {
                        echo json_encode(["status" => 400, "statusText" => "An Error Occured", ]);
                    }
                }
                else
                {
                    echo json_encode(["status" => 500, "statusText" => "Could Not Send Email", ]);
                }
            }
            else
            {
                echo json_encode(["status" => 500, "statusText" => "Could Not Send Email", ]);
            }
        }
        else
        {
        }
    }

    public function takeResetCode($code)
    {
        //Compare the code to the one in the database
        //Get User and Ensure Session is On
        $userid = $this
            ->session
            ->userdata(SESS_PRE . "userid");
        $this->Header("Reset Code", $userid);
        $query = $this
            ->Usertbl
            ->resetCode($userid, $code);
        if (count($query) > 0)
        {
            echo json_encode(["status" => 200, "statusText" => "Reset Code is Valid", ]);
        }
        else
        {
            echo json_encode(["status" => 400, "statusText" => "Rest Code is inValid", ]);
        }
    }

    public function updatePinById()
    {
        $userid = $this
            ->session
            ->userdata(SESS_PRE . "userid");
        $this->Header("Update Pin", $userid);
        if (!$userid)
        {
            return false;
        }
        $pin = $this
            ->input
            ->post("pin");
        $query = $this
            ->Usertbl
            ->updatePin($userid, $pin);
        if (!$query)
        {
            echo json_encode(["status" => 400, "statusText" => "Update failed", ]);
            return;
        }
        echo json_encode(["status" => 200, "statusText" => "Update Successful", ]);
        return;
    }
    /*Challenge me*/

    public function verifyphone(){

        $phone1 = $_GET["phone"];
        $phone2 = substr($phone1, 1);
        $newphone = "234".$phone2;
        $code = rand(100000,999999);
        try {
            // Initialize variables ( set your variables here )

                $username = 'olaide4309';

                $password = '08060637754';

                $sender   = 'Rental';

                $message  = 'Your Rentalbuz verification number is '.$code;

                // Separate multiple numbers by comma

                $mobiles  = $newphone;

                // Set your domain's API URL

                $api_url  = 'http://portal.nigeriabulksms.com/api/';


                //Create the message data

                $data = array('username'=>$username, 'password'=>$password, 'sender'=>$sender, 'message'=>$message, 'mobiles'=>$mobiles);

                //URL encode the message data

                $data = http_build_query($data);

                //Send the message


                $request = $api_url.'?'.$data;

                $result  = file_get_contents($request);

                $banks  = json_decode($result);


            // $paystack_api_url = "http://portal.nigeriabulksms.com/api/?username=olaide4309&password=08060637754&message=Your Rentalbuz verification code is".$code."&sender=Rentalb&mobiles=".$newphone;
            // $startConnection = curl_init($paystack_api_url);
            // curl_setopt($startConnection, CURLOPT_RETURNTRANSFER, true);
            // $result = curl_exec($startConnection);
            // $banks = json_decode($result); 
            if($banks){
                $cookie= array(

                    'name'   => 'user_phone',
                    'value'  => $code,                            
                    'expire' => '180',                                                                                   
                    'secure' => TRUE
         
                );
         
                $this->input->set_cookie($cookie);
                $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array(['message'=>"yes",'data'=>$banks,'phone'=>$newphone])));
            }     

          } catch(Exception $e) {
            echo $e->getMessage();
          }

        

        //         $client = new \GuzzleHttp\Client();
        // $response = $client->post(
        //     'https://www.bulksmsnigeria.com/api/v1/sms/create',
        //     [
        //         'headers' => [
        //             'Accept' => 'application/json',
        //         ],
        //         'query' => [
        //             'api_token'=> 'YOUR_API_KEY',
        //             'to'=> '2347037770033,2349050030090,2347059090000',
        //             'from'=> 'BulkSMSNG',
        //             'body'=> 'This is a test message.',
        //             'gateway'=> '0',
        //             'append_sender'=> '0',
        //         ],
        //     ]
        // );
        // $body = $response->getBody();
        // print_r(json_decode((string) $body));

    }

    public function verifyotp(){
        $otp = $_GET['otp'];
        $cookie = $this->input->cookie('user_phone',true);
        if($this->input->cookie('user_phone',true)){
            if($otp == $cookie){
                $phone = $_GET['phone'];
                $data = array(
                    'phone' => $phone
                );
                if($_SESSION['userid']){
                    $this->db->where('id', $_SESSION['userid']);
                    $result = $this->db->update('user', $data);
                    if($result){
                        $this->output
                        ->set_content_type('application/json')
                        ->set_output(json_encode(array(['message'=>"yes",'status'=>'valid'])));
                    }

                }

               
            }else{
                $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array(['message'=>"yes",'status'=>'invalid'])));
            }
        }else{
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array(['message'=>"yes",'status'=>'expired'])));
        }
        
    }

    public function updategeneralform(){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];

        if(!empty($_FILES['userimage']['name'])){
            $new_image_name = "/imgName".time() . str_replace(str_split(' ()\\/,:*?"<>|'), '',
            $_FILES['userimage']['name']);
            $config = array();
            $config['upload_path'] = './uploads/userspicture/'; 
            $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
            $config['max_size']  = '0';
            $this->load->library('upload', $config);
            if($this->upload->do_upload('userimage')){
                $dataimg = $this->upload->data();
                $path = "uploads/userspicture/";
                $data = array(
                    'firstname' => $firstname,
                    'lastname' => $lastname,
                    'email' => $email,
                    'gender' => $gender,
                    'ppix' => $path.$dataimg['file_name']
                );
                
            }else{

            }
        }else{
            $data = array(
                'firstname' => $firstname,
                'lastname' => $lastname,
                'email' => $email,
                'gender' => $gender
            );
        }
        

        $this->db->where('id', $_SESSION['userid']);
        $result = $this->db->update('user', $data);
        if($result){
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array(['status'=>200,'message'=>"yes"])));
        }else{
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array(['status'=>400,'message'=>"Error Processing Now"])));
        }
        

    }

    public function uploadidentity(){
        $frontid = $_POST['frontid'];
        $backid = $_POST['backid'];
        

        if(!empty($_FILES['frontid']['name']) && !empty($_FILES['backid']['name'])){
            $font_img_name = "/imgName".time() . str_replace(str_split(' ()\\/,:*?"<>|'), '',
            $_FILES['frontid']['name']);
            $back_img_name = "/imgName".time() . str_replace(str_split(' ()\\/,:*?"<>|'), '',
            $_FILES['backid']['name']);

            $config = array();
            $config['upload_path'] = './uploads/identity/'; 
            $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
            $config['max_size']  = '0';
            $this->load->library('upload', $config);
            if($this->upload->do_upload('frontid')){
                $datafrontimg = $this->upload->data();
                if($this->upload->do_upload('backid')){
                    $databackimg = $this->upload->data();
                    $path = "uploads/identity/";
                    $data = array(
                        
                        'id_front' => $path.$datafrontimg['file_name'],
                        'id_back' => $path.$databackimg['file_name']
                    );
                  

                }
                $this->db->where('id', $_SESSION['userid']);
                $result = $this->db->update('user', $data);
                if($result){
                    $this->output
                        ->set_content_type('application/json')
                        ->set_output(json_encode(array(['status'=>200,'message'=>"yes"])));
                }else{
                    $this->output
                        ->set_content_type('application/json')
                        ->set_output(json_encode(array(['status'=>400,'message'=>"Error Processing Now"])));
                }
        
            }else{

            }
        }else{
            
        }
        

        

    }

    public function otherinfo(){
        $state = $_POST['state'];
        $lga = $_POST['lga'];
        $address1 = $_POST['address1'];
        $address2 = $_POST['address2'];
        $occupation = $_POST['occupation'];
        $industry = $_POST['industry'];
        
        $data = array(
            'state_id' => $state,
            'lgas_id' => $lga,
            'addr1' => $address1,
            'addr2' => $address2,
            'occupation' => $occupation,
            'industry' => $industry
        );

        $this->db->where('id', $_SESSION['userid']);
        $result = $this->db->update('user', $data);
        if($result){
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array(['status'=>200,'message'=>"yes"])));
        }else{
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array(['status'=>400,'message'=>"Error Processing Now"])));
        }
        

        

    }
    

}

