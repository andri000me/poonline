<?php
class Wilayah_model extends CI_Model{
    function get_all_provinsi(){
        $query = $this->db->query("SELECT * FROM provinsi ORDER by id DESC");
        return $query->result();
    }

    function get_all_kota(){
        $query = $this->db->query("SELECT * FROM kota ORDER by id DESC");
        return $query->result();
    }
}