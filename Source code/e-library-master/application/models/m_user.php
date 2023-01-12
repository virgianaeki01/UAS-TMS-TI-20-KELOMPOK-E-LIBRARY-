<?php
  Class m_user extends CI_Model
  {

    function view_data($id)
    {
      $this->db->where('id', $id);
      $x = $this->db->get('tb_user');
      return $x;
    }

    function update_data($data,$table,$no){
      $this->db->where("id",$no);
      $x = $this->db->update($table,$data);
    }

  }
?>