<?php 
class Reply_model extends CI_Model{

	function get_all_public() {
		$query= $this->db->query("SELECT * FROM public_training where active='0'");
		return $query->result();
	}

}