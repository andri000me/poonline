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

        function kategori($a){
            if ($a == 'TC'){
                return 'Technical';
            } elseif ($a == 'MG'){
                return 'Managerial';
            } elseif ($a == 'CL'){
                return 'Cultural';
            }
        }

        function num($n){   // menambah digit 0 pada $n
            if (strlen($n) == 1) {
                return $n = '00'.$n;
            } else if(strlen($n) == 2) {
                return $n = '0'.$n;
            } else {
                return $n = $n;
            }
        }

        if ($this->input->post('submit')) {
            $pengirim_ro = $this->input->post('pengirim_ro');
            $_kategori_pelatihan = $this->input->post('kategori_pelatihan');
            $kategori_pelatihan = kategori($_kategori_pelatihan);
            $jenis_training = "PT";
            $nomor = num($this->input->post('nomor'));
            $nomor_ro = $_kategori_pelatihan.$jenis_training.$nomor;
            $sql = $this->db->query("SELECT * FROM public_training where nomor_ro = '$nomor_ro' ");
            $cek_ro = $sql->num_rows();
            if ($cek_ro > 0) {
                $this->session->set_flashdata('message', 'Nomor RO sudah digunakan');
            }else{
                $judul  = $this->input->post('judul');
                $metode_penyelenggaraan  = $this->input->post('metode_penyelenggaraan');
                $kompetensi_bidang  = $this->input->post('kompetensi_bidang');
                $jenis_kompetensi  = $this->input->post('jenis_kompetensi');
                $tanggal_mulai  = $this->input->post('tanggal_mulai');
                $tanggal_selesai  = $this->input->post('tanggal_selesai');
                $provinsi = $this->input->post('provinsi');
                $kota  = $this->input->post('kota');
                $tempat = $this->input->post('tempat');
                $vendor_penyelenggara = $this->input->post('vendor_penyelenggara');
                $pemilihan_vendor = $this->input->post('pemilihan_vendor');
                $jumlah_peserta = $this->input->post('jumlah_peserta');
                $catatan = $this->input->post('catatan');
                $active = '0';
                $data = $this->Training_model->add_inhouse_training(
                    $pengirim_ro, $nomor_ro, $kategori_pelatihan, $judul, $metode_penyelenggaraan, $kompetensi_bidang, 
                    $jenis_kompetensi, $tanggal_mulai, $tanggal_selesai, $provinsi, $kota, $tempat, $vendor_penyelenggara, 
                    $pemilihan_vendor, $jumlah_peserta, $catatan, $active
                );
            }
                redirect('Inhouse_training');
        //}elseif($this->input->post('save')){

        }else{
            $data['bidang'] = $this->Kompetensi_bidang_model->get_bidang();
            $data['metode'] = $this->Metode_penyelenggaraan_model->get_metode();
            $data['pemilihan'] = $this->P_vendor_model->get_metode();
            $data['nama_vendor'] = $this->Vendor_model->get_vendor_name();
            $data['provinsi'] = $this->Wilayah_model->get_all_provinsi();
            $data['kota'] = $this->Wilayah_model->get_all_kota();
            $this->load->view('request/v_add_inhouse_training',$data);
        }

    }

}