<?php
class Crud extends CI_model{
 
 public $id ,  $password  ,  $name  , $mobile  , $email, $userid ;

 
 
 public function get_instance() {
    return new self;
  }
 public function save()
    {
        $insert = $this
            ->db
            ->insert('usertbl', $this);
        return $this
            ->db
            ->insert_id();
    }

    public function saveall($table,$data)
    {
        $insert = $this
            ->db
            ->insert($table, $data);
        return $insert;
    }

public function getdata($value, $string){

  $this->db->select('*');
  $this->db->from('usertbl');
 $this->db->where($value."='".$string."'");
 
  if($query=$this->db->get())
  {

      return $query->result_array();
  }
  else{
    return false;
  }
}

public function getdataall($value, $string,$table){

  $this->db->select('*');
  $this->db->from($table);
 $this->db->where($value."='".$string."'");
 
  if($query=$this->db->get())
  {

      return $query->result_array();
  }
  else{
    return false;
  }
}





public function UpdateData($table, $id, $array){

  $this->db->where("id = {$id}");
  return $this->db->update($table, $array);
  
}

public function Updateall($table, $id, $array){

  $this->db->where("mobile = {$id}");
  return $this->db->update($table, $array);
  
}



public function DeleteData($id,$table){

          $this->db->where("id = {$id}");
        return $this->db->delete($table);
 
 
}

 
}
 