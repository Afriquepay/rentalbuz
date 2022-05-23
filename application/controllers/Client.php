<?php
defined("BASEPATH") or exit("No direct script access allowed");
error_reporting(0);
class Client extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->ci = &get_instance();
        $this->load->library("session");
        $this->load->helper("url");

        date_default_timezone_set("Africa/Lagos");


                $this->load->model("Usertbl");
    }
        public function logout()
    {
        $this->session->set_userdata(SESS_PRE . "userid", null);
        $this->session->sess_destroy();
        $this->index();
    }

     public function index()
    {

            $userid = $this->session->userdata(SESS_PRE . "userid");

        if (isset($userid)) {
            $this->dashboard();
        } else {
       
           $this->load->view('client/login');
            
        }


    }


    function login_user($default = 0)
    {
        $user_login = [
            "mobile" => $this->input->post("mobile"),
            "password" => $this->input->post("password"),
        ];

        $data = false;
        $data["users"] = $this->Usertbl->login_user($user_login);

        //
        if ($data["users"]) {
         
            $this->session->set_flashdata("success_msg", "Login Successful!");
            $this->session->set_userdata(
                SESS_PRE . "userid",
                $data["users"][0]["id"]
            );
      

            $this->dashboard();
        } else {
            $this->session->set_flashdata(
                "error_msg",
                "Invalid detail! Please try again."
            );
            $this->index();
        }
    }


     public function resetpin()
    {

           $userid = $this->session->userdata(SESS_PRE . "userid");
        if (isset($userid)) {
           $this->load->view('client/reset-pin');
            } else {
            $this->index();
        }
    }

  public function transactions()
    {
          $userid = $this->session->userdata(SESS_PRE . "userid");
        if (isset($userid)) {
           $this->load->view('client/transactions');
            } else {
            $this->index();
        }
    }
  public function profile()
    {
            $userid = $this->session->userdata(SESS_PRE . "userid");
        if (isset($userid)) {
           $this->load->view('client/profile');
            } else {
            $this->index();
        }
    }

  public function withdraw()
    {
            $userid = $this->session->userdata(SESS_PRE . "userid");
        if (isset($userid)) {
           $this->load->view('client/withdrawal');
            } else {
            $this->index();
        }
    }

    public function loadSplash()
    {
             $this->load->view('client/splash');
    }

    public function dashboard()
    {
                $userid = $this->session->userdata(SESS_PRE . "userid");
        if (isset($userid)) {
         $this->load->view('client/dashboard');
          } else {
            $this->index();
        }
    }


    public function forgotpassword()
    {
         $this->load->view('client/forgot-password');
    }

 public function fundpacket()
    {
          $userid = $this->session->userdata(SESS_PRE . "userid");
        if (isset($userid)) {
         $this->load->view('client/fund-packet');
          } else {
            $this->index();
        }
    }

public function register()
    {
  

          $this->load->view('client/register');
}


}


