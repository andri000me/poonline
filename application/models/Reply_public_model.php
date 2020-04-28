<?php
class Reply_public_model extends CI_Model{
    function get_all_public_training(){
        $query = $this->db->query("SELECT * FROM public_training ORDER BY id DESC");
        return $query->result();
    }
}