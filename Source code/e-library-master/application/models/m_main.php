<?php
  Class m_main extends CI_Model
  {
    function login($email, $pass)
    {
      $this->db->where("email",$email);
      $this->db->where("pass",$pass);
      
      //$this->db->where("name",$email);
      $check = $this->db->get("tb_user");
      return $check;
    }

    function register($data, $table)
    {
      $this->db->insert($table,$data);
    }

    function count($date)
    {
      $this->db->like('cd_user', $date, 'after');// Produces: WHERE `title` LIKE 'match%' ESCAPE '!'
      $count = $this->db->get('tb_user');
      return $count;
    }

  }
?>