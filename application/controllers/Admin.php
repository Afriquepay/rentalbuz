<?php
// use CodeIgniter\API\ResponseTrait;

defined("BASEPATH") or exit("No direct script access allowed");
error_reporting(0);


class Admin extends CI_Controller
{

   // use ResponseTrait;

   public function __construct()
   {
        parent::__construct();
        $this->ci = &get_instance();
        $this->load->library("session");
        $this->load->helper("url");
        $this->load->model("Crud");
        date_default_timezone_set("Africa/Lagos");

      $this->load->model("Usertbl");
      
   }
      
   public function index()
   {
       $this->load->view('admin/login');
   }


   public function new_loan()
   {
      $this->checkSession();
      $userVerify = $this->db->select('*')->from('user')->where('status','verify')->get();
      $agentVerify = $this->db->select('*')->from('employee')->where(['role'=>'agent','status'=>'verified'])->get();
      $states = $this->db->select('*')->from('states')->get();

      $data['userVerify'] = $userVerify->result_array();
      $data['agentVerify'] = $agentVerify->result_array();
      $data['states'] = $states->result_array();
     $this->load->view('admin/newloan',$data);
   }

   public function fundBasketPage()
   {
      $this->checkSession();
      $allbasket = $this->db->select('*')->from('basket')->get();

      $data['all_basket'] = $allbasket->result_array();
     $this->load->view('admin/fund_basket',$data);
   }

   public function fundBasket(){
      
      $sender = $this->input->post('from_who');
      $basket_id = $this->input->post('basket_id');
      $amount = $this->input->post('amount');
      $note = $this->input->post('note');
      
      $data = [
         'userid' =>   $sender,
         'basketid  ' => $basket_id,
         'amount ' => $amount,
         'note' =>  $note
      ];
      $model = $this->ci->Crud->get_instance();

         $feedback = $model->saveall('fundbasket',$data);

     
      if($feedback){
         $this->output
         ->set_content_type('application/json')
         ->set_output(json_encode(['message'=>"yes"]));
      }else{
         $this->output
         ->set_content_type('application/json')
         ->set_output(json_encode(['message'=>"no"]));
      }
   }

   public function fundUser(){
      
      $sender = $this->input->post('sender');
      $receiver = $this->input->post('receiver');
      $amount = $this->input->post('amount');
      $note = $this->input->post('message');
      
      $data = [
         'sender' =>   $sender,
         'receiver  ' => $receiver,
         'amount ' => $amount,
         'message' =>  $note
      ];

      
      $model = $this->ci->Crud->get_instance();
      $res = $model->getdata('mobile',$receiver);

      if(empty($res[0]['walletamount'] )){

      $newamount = $amount;
           
      }else{
         
         $newamount = $res[0]['walletamount'] + $amount;
      }


      $data2 = array(
         'walletamount' => $newamount
      );

      $updateuser = $model->Updateall("usertbl",$receiver,$data2);
      
      if($updateuser){
         $feedback = $model->saveall('transactions',$data);
         if($feedback){
            $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(['message'=>"yes"]));
         }else{
            $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(['message'=>"no"]));
         }
      }


     
   }

   public function manageBasketPage()
   {
      $this->checkSession();
      $allbasket = $this->db->select('*')->from('basket')->get();

      $data['all_basket'] = $allbasket->result_array();
      $this->load->view('admin/manage_basket',$data);
      
   }


   public function manageEnvelopeUserPage()
   {
      $this->checkSession();
      $alluser = $this->db->select('*')->from('envelopeuser')->get();

         $data['all_envelope_users'] = $alluser->result_array();
      $this->load->view('admin/envelope_user',$data);
   }



   public function manageEnvelopePage()
   {
      $this->checkSession();
      $alluser = $this->db->select('*')->from('envelope')->get();

      $data['all_envelope'] = $alluser->result_array();
      $this->load->view('admin/manage_envelopes',$data);
   }

   public function viewEnvelopePage()
   {
      $this->checkSession();
      $id = $this->uri->segment('3');
      $model = $this->ci->Crud->get_instance();
      $res = $model->getdataall("id",$id,"envelope");
      if($res){
      $data['envelopes'] = $res;
      $this->load->view('admin/view_envelope',$data);
      }else{
         
         redirect('admin/manage-envelope');
      }
   }

   public function manageEscrowPage()
   {
      $this->checkSession();
      $allbasket = $this->db->select('*')->from('escrowtable')->get();

      $data['all_transac'] = $allbasket->result_array();
      $this->load->view('admin/manage_escrow',$data);
   }

   public function manageDisputedEscrowPage()
   {
      $this->checkSession();

      //the status 0 = under review
      //the status 1 = resolved
      // the status 2 = disputed
      $allbasket = $this->db->select('*')->from('escrowtable')->where("status",2)->or_where('status',0)->get();

      $data['all_transac'] = $allbasket->result_array();
      $this->load->view('admin/manage_disputed_escrow',$data);
   }

   public function viewEscrowPage()
   {

      $this->checkSession();
         $id = $this->uri->segment('3');
         $model = $this->ci->Crud->get_instance();
         $res = $model->getdataall("id",$id,"escrowtable");
         if($res){
            $senderlog = $model->getdataall("to_user",$res[0]['sender'],"escrowlog");
            $receiverlog = $model->getdataall("to_user",$res[0]['receiver'],"escrowlog");
            $receiver = $model->getdata("mobile",$res[0]['receiver']);
            $sender = $model->getdata("mobile",$res[0]['sender']);
            
            $data['receiver'] = $receiver;
            $data['sender'] = $sender;
            $data['escrow_details'] = $res;
            $data['senderlog'] = $senderlog;
            $data['receiverlog'] = $receiverlog;

            
         }
      $this->load->view('admin/view-escrow',$data);
   }

   public function signInPage()
   {
      $this->load->view('admin/login');
   }

   public function processlogin(){
      $this->load->model('Usertbl');  

      $password = $this->input->post('pwd');
      $username = $this->input->post('username');

      $user = ['username'=>$username, 'password' => $password];

      if($this->Usertbl->login_user($user)){
         $result = $this->Usertbl->login_user($user);
         $data = array(  
            'username' => $result[0]['username'],  
            'id' => $result[0]['id'],
            'name' => $result[0]['name'],
            'userid' => $result[0]['userid'],
            'ppix' => $result[0]['ppix']

            // 'currently_logged_in' => 1  
            );    
         $this->session->set_userdata($data);  
         $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode(['message'=>"yes"]));

      }else{
         $this->output
         ->set_content_type('application/json')
         ->set_output(json_encode(array(['message'=>"no"])));
   
      }
     
   }

   public function logout(){
      $this->session->sess_destroy();  
      redirect('admin/');  
   }

   public function signUpPage()
   {
      $this->load->view('admin/signup');
   }

   public function dashboard()
   {

      $this->checkSession();

      // $alluser = $this->db->select('*')->from('usertbl')->get();
      // $user_count = count($alluser->result_array());

      // $data['user_count'] = $user_count;

      $this->load->view('admin/dashboard');
   }

   public function create_user()
   {
         $this->checkSession();

         $this->load->view('admin/create_user');
   }

   public function create_new_employee()
   {
         $this->checkSession();

         $this->load->view('admin/new_employee');
   }

   public function getLgaByState(){
      $stateID = $this->input->get('state_id');
     
      # Get lgas by state ID
      $lgas = $this->db->select('*')->from('lgas')->where('state_id', $stateID)->get();
 
      echo '<option value="">--Select Local Government--</option>';
      
      foreach ($lgas->result_array() as $lga) {
          echo '<option value="'.$lga['id'].'">'.$lga['name'].'</option>';
      }
      return;
   }

   public function createUser(){

      
      
     
      $email = $this->input->post('email');
      $password = $this->input->post('password');
      $con_password = $this->input->post('confirm_password');

      if($password == $con_password){
         if(!empty($email) ){

            $model = $this->ci->Crud->get_instance();
            $model->id = null;
            $model->email = $email;
            $model->password = $password;
            $res = $model->getdata("email",$email);
            // $this->output
            //    ->set_content_type('application/json')
            //    ->set_output(json_encode(['message'=>$res]));
            // return;

            if($model->getdata("email",$email)){
               $this->output
               ->set_content_type('application/json')
               ->set_output(json_encode(['message'=>"Email already Exist"]));
            }else{
               $model->save();
               $this->output
               ->set_content_type('application/json')
               ->set_output(json_encode(['message'=>"yes"]));
            }
         }else{
            $this->output
               ->set_content_type('application/json')
               ->set_output(json_encode(['message'=>"All fields must be filled"]));
         }
      }else{
         $this->output
      ->set_content_type('application/json')
      ->set_output(json_encode(['message'=>"Password not match"]));
      }

   }

   public function list_users()
   {
         $this->checkSession();
         $alluser = $this->db->select('*')->from('user')->get();

         $data['all_user'] = $alluser->result_array();
         $this->load->view('admin/manageuser',$data);
   }

   public function list_borrowers()
   {
         $this->checkSession();
         $alluser = $this->db->select('*')->from('user')->get();

         $data['all_user'] = $alluser->result_array();
         $this->load->view('admin/list-borrowers',$data);
   }

   public function edit_customer()
   {
         $this->checkSession();
         $id = $this->uri->segment('3');
         $model = $this->ci->Crud->get_instance();
         $res = $model->getdata("id",$id);
         if($res){
            $data['user_details'] = $res;
            $this->load->view('admin/edit_user',$data);
         }else{
            
            redirect('admin/manage-user');
         }
   }

   public function fundUserPage()
   {
      $this->load->view('admin/fund_user');
   }

   public function update_user(){
      $mobile = $this->input->post('mobile');
      $firstname = $this->input->post('firstname');
      $lastname = $this->input->post('lastname');
      $user_id = $this->input->post('userid');
      $email = $this->input->post('email');
      $id = $this->input->post('id');
      $data = array(
         'firstname' => $firstname,
         'lastname'   => $lastname,
         'email'  => $email,
         'phone'  => $mobile,
         'user_id' => $user_id
      );
      $model = $this->ci->Crud->get_instance();
      $feedback = $model->UpdateData("user",$id,$data);
      if($feedback){
         $this->output
         ->set_content_type('application/json')
         ->set_output(json_encode(['message'=>"yes"]));
      }else{
         $this->output
         ->set_content_type('application/json')
         ->set_output(json_encode(['message'=>"no"]));
      }
   }

   public function managetransactionsPage()
   {
      $this->checkSession();
      $allbasket = $this->db->select('*')->from('transactions')->get();

      $data['all_transac'] = $allbasket->result_array();
      $this->load->view('admin/manage_transactions',$data);
   }

   public function deleteUser(){
      $id = $this->uri->segment('3');
      $model = $this->ci->Crud->get_instance();
      if($model->DeleteData($id,'usertbl')){
         $this->output
         ->set_content_type('application/json')
         ->set_output(json_encode(['message'=>"yes"]));
      }else{
         $this->output
         ->set_content_type('application/json')
         ->set_output(json_encode(['message'=>"yes"]));
      }
   }
   public function deleteEnvUser(){
      $id = $this->uri->segment('3');
      $model = $this->ci->Crud->get_instance();
      if($model->DeleteData($id,'envelopeuser')){
         $this->output
         ->set_content_type('application/json')
         ->set_output(json_encode(['message'=>"yes"]));
      }else{
         $this->output
         ->set_content_type('application/json')
         ->set_output(json_encode(['message'=>"yes"]));
      }
   }
   public function deleteBasket(){
      $id = $this->uri->segment('3');
      $model = $this->ci->Crud->get_instance();
      if($model->DeleteData($id,'basket')){
         $this->output
         ->set_content_type('application/json')
         ->set_output(json_encode(['message'=>"yes"]));
      }else{
         $this->output
         ->set_content_type('application/json')
         ->set_output(json_encode(['message'=>"yes"]));
      }
   }

   public function checkSession(){
      if(!$this->session->userdata('username')){
         redirect('admin/');
      }
   }

   public function resolve(){
      $id = $this->uri->segment('4');
      $data = array(
         'status' => 1
      );
      
      $model = $this->ci->Crud->get_instance();
      $feedback = $model->UpdateData("escrowtable",$id,$data);
      if($feedback){
         $this->output
         ->set_content_type('application/json')
         ->set_output(json_encode(['message'=>"yes"]));
      }else{
         $this->output
         ->set_content_type('application/json')
         ->set_output(json_encode(['message'=>"no"]));
      }
   }

   public function review(){
      $id = $this->uri->segment('4');
      $data = array(
         'status' => 0
      );
      
      $model = $this->ci->Crud->get_instance();
      $feedback = $model->UpdateData("escrowtable",$id,$data);
      if($feedback){
         $this->output
         ->set_content_type('application/json')
         ->set_output(json_encode(['message'=>"yes"]));
      }else{
         $this->output
         ->set_content_type('application/json')
         ->set_output(json_encode(['message'=>"no"]));
      }
   }


   public function send_mail() {
      $from_email = "adminafriquepay@example.com";
      $to_email = "akintandavid8@gmail.com";
      //Load email library
      $this->load->library('email');
      $this->email->from($from_email, 'Identification');
      $this->email->to($to_email);
      $this->email->subject('Send Email Codeigniter');
      $this->email->message('Your Escrow log has been recieved from afrique pay thanks and its under review');
      //Send mail
      if($this->email->send())
          $this->session->set_flashdata("email_sent","Congragulation Email Send Successfully.");
      else
          $this->session->set_flashdata("email_sent","You have encountered an error");
      // $this->load->view('contact_email_form');
  }

}




