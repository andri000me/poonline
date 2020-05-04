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
        $data['submit'] = $this->Training_model->get_all_submit_inhouse();
        $this->load->view('request/v_home_inhouse_training', $data);
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
            $jenis_training = "IT";
            $nomor = num($this->input->post('nomor'));
            $nomor_ro = $_kategori_pelatihan.$jenis_training.$nomor;
            $sql = $this->db->query("SELECT * FROM inhouse_training where nomor_ro = '$nomor_ro' ");
            $cek_ro = $sql->num_rows();
            if ($cek_ro > 0) {
                $this->session->set_flashdata('message', 'Nomor RO sudah digunakan');
            }else{
                $judul  = $this->input->post('judul');
                $metode_penyelenggaraan  = $this->input->post('metode_penyelenggaraan');
                $kompetensi_bidang  = $this->input->post('kompetensi_bidang');
                $tanggal_mulai  = $this->input->post('tanggal_mulai');
                $tanggal_selesai  = $this->input->post('tanggal_selesai');
                $provinsi = $this->input->post('provinsi');
                $kota  = $this->input->post('kota');
                $tempat = $this->input->post('tempat');
                $vendor_penyelenggara = $this->input->post('vendor_penyelenggara');
                $metode_pemilihan_vendor    = $this->input->post('metode_pemilihan_vendor');
                $jumlah_peserta = $this->input->post('jumlah_peserta');
                $catatan = $this->input->post('catatan');
                $active = '0';
                $tb_pelatihan = $this->input->post('tb_pelatihan');
                $kurs_pelatihan = $this->input->post('kurs_pelatihan');
                $konversi_pelatihan = $this->input->post('konversi_pelatihan');
                $tb_akomodasi = $this->input->post('tb_akomodasi');
                $kurs_akomodasi = $this->input->post('kurs_akomodasi');
                $konversi_akomodasi = $this->input->post('konversi_akomodasi');
                $tb_sppd = $this->input->post('tb_sppd');
                $kurs_sppd = $this->input->post('kurs_sppd');
                $konversi_sppd = $this->input->post('konversi_sppd');
                $data = $this->Training_model->add_inhouse_training(
                    $pengirim_ro, $nomor_ro, $kategori_pelatihan, $judul, $metode_penyelenggaraan, $kompetensi_bidang, $tanggal_mulai, $tanggal_selesai, $provinsi, $kota, $tempat, $vendor_penyelenggara,  $metode_pemilihan_vendor, $jumlah_peserta, $catatan, $active, $tb_pelatihan, $kurs_pelatihan, $konversi_pelatihan, $tb_akomodasi, $kurs_akomodasi, $konversi_akomodasi, $tb_sppd, $kurs_sppd, $konversi_sppd
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
    public function edit_inhouse_training($id){
        if ($this->input->post('submit')) {
            $nomor_ro                   = $this->input->post('nomor_ro');
            $judul                      = $this->input->post('judul');
            $metode_penyelenggaraan     = $this->input->post('metode_penyelenggaraan');
            $kompetensi_bidang          = $this->input->post('kompetensi_bidang');
            $tanggal_mulai              = $this->input->post('tanggal_mulai');
            $tanggal_selesai            = $this->input->post('tanggal_selesai');
            $provinsi                   = $this->input->post('provinsi');
            $kota                       = $this->input->post('kota');
            $tempat                     = $this->input->post('tempat');
            $vendor_penyelenggara       = $this->input->post('vendor_penyelenggara');
            $metode_metode_pemilihan_vendor    = $this->input->post('metode_metode_pemilihan_vendor');
            $jumlah_peserta             = $this->input->post('jumlah_peserta');
            $catatan                    = $this->input->post('catatan');
            $active                     = '0';
            $tb_pelatihan               = $this->input->post('tb_pelatihan');
            $kurs_pelatihan             = $this->input->post('kurs_pelatihan');
            $konversi_pelatihan         = $this->input->post('konversi_pelatihan');
            $tb_akomodasi               = $this->input->post('tb_akomodasi');
            $kurs_akomodasi             = $this->input->post('kurs_akomodasi');
            $konversi_akomodasi         = $this->input->post('konversi_akomodasi');
            $tb_sppd                    = $this->input->post('tb_sppd');
            $kurs_sppd                  = $this->input->post('kurs_sppd');
            $konversi_sppd              = $this->input->post('konversi_sppd');   
            $data                       = $this->Training_model->edit_inhouse_training($id,$pengirim_ro, $nomor_ro, $kategori_pelatihan, $judul, $metode_penyelenggaraan, $kompetensi_bidang, $tanggal_mulai, $tanggal_selesai, $provinsi, $kota, $tempat, $vendor_penyelenggara, $metode_pemilihan_vendor, $jumlah_peserta, $catatan, $active, $tb_pelatihan, $kurs_pelatihan, $konversi_pelatihan, $tb_akomodasi, $kurs_akomodasi, $konversi_akomodasi, $tb_sppd, $kurs_sppd, $konversi_sppd);
            redirect('Inhouse_training');
        }else{
            $data['data'] = $this->Training_model->get_edit_inhouse_training($id);
            $this->load->view('request/v_edit_inhouse_training',$data);
        }
    }

}
