<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wilayah_model extends CI_Model{

    public function get_all_provinsi(){
        $this->db->order_by('nama_provinsi', 'asc');
            return $this->db->get('provinsi')->result(); 
        
    }
    public function get_all_kota(){
    $this->db->order_by('nama_kota', 'asc');
            $this->db->join('provinsi', 'kota.kota_id_provinsi = provinsi.id_provinsi');
            return $this->db->get('kota')->result();
    }
}
