<!-- edited by zulhan -->
<?php 
class Metode_penyelenggaraan extends CI_Controller{
 
    public function __construct(){
        parent::__construct();
        $this->simple_login->cek_login();
        $this->load->database();
        $this->load->model('Metode_penyelenggaraan_model');
        $this->load->helper('url');
    }
 
    public function index() {
        $data['data'] = $this->Metode_penyelenggaraan_model->get_all_metode_penyelenggaraan();        
        $this->load->view('vendor/v_metode_penyelenggaraan_home',$data);
    }

    public function add_metode_penyelenggaraan(){ 
    if ($this->input->post('submit')) {
            $metode = $this->input->post('metode');
            $sql = $this->db->query("SELECT * FROM metode_penyelenggaraan where metode= '$metode' ");
            $cek_metode= $sql->num_rows();
            if ($cek_metode > 0) {
                $this->session->set_flashdata('message', 'Metode yang anda masukan sudah terdaftar');
            }else{
                $metode    = $this->input->post('metode');
                $database  = $this->Metode_penyelenggaraan_model->add_metode_penyelenggaraan($id, $metode);    
            }        
                redirect('Metode_penyelenggaraan');
        }else{
            $this->load->view('vendor/v_add_metode_penyelenggaraan');
        }
    }
    
    public function edit_metode_penyelenggaraan($id){
        if ($this->input->post('submit')) {
            $metode     = $this->input->post('metode');
            $data       = $this->Metode_penyelenggaraan_model->edit_metode_penyelenggaraan($id,$metode);
            redirect('Metode_penyelenggaraan');
        }else{
            $data['data'] = $this->Metode_penyelenggaraan_model->get_edit_metode_penyelenggaraan($id);
            $this->load->view('vendor/v_edit_metode_penyelenggaraan',$data);
        }
    }

    public function delete_metode_penyelenggaraan($id){
            $data['data'] = $this->Metode_penyelenggaraan_model->get_delete_metode_penyelenggaraan($id);
            redirect('Metode_penyelenggaraan');
    }
}
