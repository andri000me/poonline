<?php 
class Kompetensi_bidang extends CI_Controller{
 
	public function __construct(){
		parent::__construct();
		$this->simple_login->cek_login();
        $this->load->database();
        $this->load->model('Kompetensi_bidang_model');
        $this->load->helper('url');
	}

	public function index() {
        $data['data'] = $this->Kompetensi_bidang_model->get_all_bidang();
        $this->load->view('kompetensi_bidang/v_kompetensi_bidang_home',$data);
    }
    // edited by zulhan
    public function import(){
    $this->load->view('kompetensi_bidang/v_import_kompetensi_bidang');
    }

    
    public function upload(){
        include APPPATH.'third_party/PHPExcel/PHPExcel.php';

        $config['upload_path'] = realpath('excel');
        $config['allowed_types'] = 'xlsx|xls|csv';
        $config['max_size'] = '10000';
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {

          $this->session->set_flashdata('notif', '<div class="alert alert-danger"><b>PROSES IMPORT GAGAL!</b> '.$this->upload->display_errors().'</div>');
            redirect('Vendors');

        } else {

            $data_upload = $this->upload->data();

            $excelreader     = new PHPExcel_Reader_Excel2007();
            $loadexcel         = $excelreader->load('excel/'.$data_upload['file_name']); 
            $sheet             = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);

            $data = array();

            $numrow = 1;
            foreach($sheet as $row){
                            if($numrow > 1){
                                array_push($data, array(
                                    'bidang' => $row['A'],
                                ));
                    }
                $numrow++;
            }
            $this->db->insert_batch('kompetensi_bidang', $data);
            unlink(realpath('excel/'.$data_upload['file_name']));

            $this->session->set_flashdata('notif', '<div class="alert alert-success"><b>PROSES IMPORT BERHASIL!</b> Data kompetensi bidang berhasil diimport!</div>');
            
            redirect('Kompetensi_bidang');

        }
    }
    // End by zulhan

    public function add_bidang(){
    if ($this->input->post('submit')) {
        $bidang = $this->input->post('bidang');
        $sql = $this->db->query("SELECT * FROM kompetensi_bidang where bidang= '$bidang' ");
        $cek_bidang = $sql->num_rows();
        if ($cek_bidang > 0) {
            $this->session->set_flashdata('message', 'Kompetensi bidang sudah ada');
        }else {
            $data = $this->Kompetensi_bidang_model->add_bidang($bidang);
        }
            redirect('Kompetensi_bidang');
    }
        $this->load->view('kompetensi_bidang/v_add_kompetensi_bidang');
    }

    public function edit_bidang($id){
        if ($this->input->post('submit')) {
            $id     = $this->input->post('id');
            $bidang = $this->input->post('bidang');
            $data   = $this->Kompetensi_bidang_model->edit_bidang($id,$bidang);
            redirect('Kompetensi_bidang');
        }else{
            $data['data'] = $this->Kompetensi_bidang_model->get_edit_bidang($id);
            $this->load->view('Kompetensi_bidang/v_edit_kompetensi_bidang',$data);
        }
    }
    // edited by zulhan
    public function delete_bidang($id){
        $data['data'] = $this->Kompetensi_bidang_model->get_delete_bidang($id);
        redirect('Kompetensi_bidang');
    }
    // end edited

}