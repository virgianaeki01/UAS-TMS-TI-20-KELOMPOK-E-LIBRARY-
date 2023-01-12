<?php
  Class m_admin extends CI_Model
  {

    function add_user($data, $table)
    {
      $this->db->insert($table,$data);
    }

    function update_data($data,$table,$no)
    {
      $this->db->where("id",$no);
      $x = $this->db->update($table,$data);
    }

    function get_data($id)
    {
      $this->db->where('id', $id);
      $x=$this->db->get('tb_user');
      return $x;
    }

    function count()
    {
      $this->db->like('cd_user', '1708', 'after');// Produces: WHERE `title` LIKE 'match%' ESCAPE '!'
      $count = $this->db->get('tb_user');
      return $count;
    }

  }
?>