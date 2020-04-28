<?php 
class Inhouse_training extends CI_Controller{
 
	public function __construct(){
		parent::__construct();
		$this->simple_login->cek_login();
        $this->load->database();
        $this->load->model('Kompetensi_bidang_model');
        $this->load->model('Metode_penyelenggaraan_model');
        $this->load->model('Vendor_model');
        $this->load->model('P_vendor_model');
        $this->load->model('Wilayah_model');
        $this->load->model('Training_model');
        $this->load->helper('url');
	}
 
	public function index() {
        $this->load->view('request/v_home_inhouse_training');
    }

    public function create_training(){ 
    if ($this->input->post('submit')) {
            $kategori_training = $this->input->post('username');
            $jenis_training = $this->input->post('jenis_training');
            $nomor = $this->input->post('nomor');
                // menambah digit 0 pada $nomor
                if (strlen($nomor) == 1) {
                    $nomor = '00'.$nomor;
                } else if(strlen($nomor) == 2) {
                    $nomor = '0'.$nomor;
                } else {
                    $nomor = $nomor;
                }
            $nomor_ro = $kategori_training.$jenis_training.$nomor;
            $sql = $this->db->query("SELECT * FROM public_training where nomor_ro = '$nomor_ro' ");
            $cek_ro = $sql->num_rows();
            if ($cek_ro > 0) {
                $this->session->set_flashdata('message', 'Nomor RO sudah digunakan');
            }else{
                $judul     = $this->input->post('judul');
                $metode_penyelengaraan  = $this->input->post('metode_penyelengaraan');
                $kompetensi_bidang  = $this->input->post('kompetensi_bidang');
                $tanggal_mulai  = $this->input->post('tanggal_mulai');
                $tanggal_selesai  = $this->input->post('tanggal_selesai');
                $vendors = $this->input->post('vendors');
                $p_vendor = $this->input->post('p_vendor');
                $kota  = $this->input->post('kota');
                $tempat  = $this->input->post('tempat');
                $data = $this->User_model->add_user($username,$role,$koneksi,$password);    
            }        
                redirect('User');
        }else{
            $data['bidang'] = $this->Kompetensi_bidang_model->get_bidang();
            $data['metode'] = $this->Metode_penyelenggaraan_model->get_metode();
            $data['nama_vendor'] = $this->Vendor_model->get_all_vendor();
            $data['metode'] = $this->P_vendor_model->get_metode();
            $data['provinsi'] = $this->Wilayah_model->get_all_provinsi();
            $this->load->view('request/v_add_inhouse_training',$data);
        }
    }
}