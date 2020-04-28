<?php
 class Kompetensi_bidang_model extends CI_Model{
    function get_all_bidang(){
        $query = $this->db->query("SELECT * FROM kompetensi_bidang ORDER BY id DESC");
        return $query->result();
    }

    function add_bidang($bidang){
        $data = array(
            'bidang' => $bidang
        );
        $output = $this->db->insert('kompetensi_bidang',$data);
        return $output;
    }

    function get_bidang(){		
		$query=$this->db->query("SELECT bidang FROM kompetensi_bidang");
        return $query->result();
	}

    function get_delete_bidang(){
        $query=$this->db->query("DELETE FROM kompetensi_bidang where id='$id'");
        return TRUE;
    }

    function delete_bidang($id, $bidang){
    $data = array(
        'bidang' => $bidang
    );
    $this->db->where('id',$id);
    $output = $this->db->delete('kompetensi_bidang', $data);
    return $output;
    }

    function get_edit_bidang($id){		
    $query=$this->db->query("SELECT * FROM kompetensi_bidang where id='$id'");
    return $query->result();
    }

    function edit_bidang($id,$bidang){
    $data = array(
        'bidang' => $bidang, 
    );
    $this->db->where('id',$id);
    $output = $this->db->update('kompetensi_bidang',$data);
    return $output;
    }
}