<?php 
 class User_model extends CI_Model{	
	function get_all_user(){		
		$query=$this->db->query("SELECT * from users ORDER BY id DESC");
        return $query->result();
	}	

	function add_user($username,$role,$koneksi,$password){
		$data = array(
			
			'username' => $username,
			'role' => $role,
			'koneksi' => $koneksi,
			'password' => md5($password), 
			'active' => '1'
		);
		$output = $this->db->insert('users',$data);
		return $output;
	}

	function get_edit_user($id){		
		$query=$this->db->query("SELECT * from users where id='$id'");
        return $query->result();
	}

	function edit_user($id,$username,$role,$koneksi,$password){
		$data = array(
			'username' => $username,
			'role' => $role, 
			'koneksi' => $koneksi,
			'password' => md5($password)
		);
		$this->db->where('id',$id);
		$output = $this->db->update('users',$data);
		return $output;
	}

	function get_delete_user($id){		
		$query=$this->db->query("DELETE from users where id='$id'");
        return TRUE;
	}

	function delete_user($id,$username,$role,$koneksi){
		$data = array(
			'username' => $username,
			'role' => $role,
			'koneksi' => $koneksi,
		);
		$this->db->where('id',$id);
		$output = $this->db->delete('users',$data);
		return $output;
	}

	function activateUser($value){
		$data = array(
			'active' => $value['value']
		);
		$this->db->where('id',$value['id']);
		$output = $this->db->update('users',$data);
		return $output;
	}
}
