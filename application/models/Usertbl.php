<?php
class Usertbl extends CI_model{
 
 public $id,$userid ,$mobile  ,$email   ,$fakepassword  ,$password  ,$pin   ,$walletamount  ,$refername   ,$profilepixurl   ,$date  ;


 
 
 public function get_instance() {
    return new self;
  }



 public function save()
    {
        $insert = $this
            ->db
            ->insert('user', $this);
        return $this
            ->db
            ->insert_id();
    }






public function getuserdetail($id){

  $this->db->select('*');
  $this->db->from('user');
 $this->db->where("id= '".$id."'");
 //$this->db->where('password',$user['password']);
 
  if($query=$this->db->get())
  {

      return $query->result_array();
  }
  else{
    return false;
  }
 
 
}



public function login_user($user){
 //$email,$pass

  $this->db->select('*');
  $this->db->from('admintbl');
  $this->db->where("username= '".$user['username']."' AND password= '".$user['password']."'");

 
  if($query=$this->db->get())
  {

      return $query->result_array();
  }
  else{
    return false;
  }
 
 
}

 
}
 