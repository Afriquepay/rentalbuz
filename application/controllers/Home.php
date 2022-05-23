<?php
defined("BASEPATH") or exit("No direct script access allowed");
error_reporting(0);
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->ci = &get_instance();
        $this->load->library("session");
        $this->load->helper("url");
    }


    public function index()
    {
         $this->load->view('landing/home');
    }

    // public function landing() {
    //      $this->load->('landing/index');
    // }

    public function contact()
    {
         $this->load->view('landing/contact');
    }
    public function about()
    {
         $this->load->view('landing/about');
    }

    public function faq()
    {
         $this->load->view('landing/faq');
    }
}


