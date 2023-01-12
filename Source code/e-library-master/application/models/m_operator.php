<?php 
 
class m_operator extends CI_Model
{
	function select_data(){
		return $this->db->get('tb_user');
	}
 
	function update_data($data,$table,$no){
		$this->db->where("id",$no);
		$x = $this->db->update($table,$data);
	}

	function delete_data($table,$no){
		$this->db->where("id",$no);
		$x = $this->db->delete($table);
	}

	function get_data($id){
		$this->db->where('id', $id);
		$x=$this->db->get('tb_user');
		return $x;
	}

	// function insert_data($data,$table){
	// 	$this->db->insert($table,$data);
	// }




	// function search($keyword)
 //    {
 //    	$query = "SELECT * FROM tb_user where (name = '".$keyword."') or (cd_user = '".$keyword."')";
 //        //$this->db->like('no_mc',$keyword);
 //        $x = $this->db->query($query);
 //        return $x->result();
 //    }
}