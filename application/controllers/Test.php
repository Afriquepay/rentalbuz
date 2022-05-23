<?php
defined("BASEPATH") or exit("No direct script access allowed");
error_reporting(0);
class Test extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->ci = &get_instance();
        $this->load->library("session");
        $this->load->helper("url");


     $this->load->model("Crud");
     
    }
     

     public function create()
    {
          


                            $model = $this->ci->Crud->get_instance();
                            $model->id = null;
                            $model->email = "i@olaide.me";
                            $model->password = "123456";
                            $model->fullname = "Ola Oladipupo";
          
                            $model->save();

      echo "Insert Record Successfully!";

    }

     public function update()
    {
            $this->Crud->UpdateData(1, "Kunle Lara"); 
echo "Update Record Successfully!";
    }

  public function delete()
    {
       
            $this->Crud->DeleteData(2); 
echo "Delete Record Successfully!";
    }
  public function select()
    {
         
         $myselectdata = $this->Crud->getdata(2) ; 
         print_r($myselectdata) ;
    }



}


