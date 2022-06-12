<?php
class Loanlist extends CI_model{

    public function get_instance() {
        return new self;
    }

    public function update($data,$id)
    {


            $result = $this->db->update('loan_lists', $data, array('id' => $id));
            return $result;
    }

}

?>