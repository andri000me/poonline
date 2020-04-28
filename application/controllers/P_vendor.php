 <!-- edited by zulhan -->
<?php 
class P_vendor extends CI_Controller{
 
    public function __construct(){
        parent::__construct();
        $this->simple_login->cek_login();
        $this->load->database();
        $this->load->model('P_vendor_model');
        $this->load->helper('url');
    }
 
    public function index() {
        $data['data'] = $this->P_vendor_model->get_all_p_vendor();        
        $this->load->view('vendor/v_p_vendor_home',$data);
    }

    public function add_p_vendor(){ 
    if ($this->input->post('submit')) {
            $metode = $this->input->post('metode');
            $sql = $this->db->query("SELECT * FROM p_vendor where metode= '$metode' ");
            $cek_vendor= $sql->num_rows();
            if ($cek_vendor > 0) {
                $this->session->set_flashdata('message', 'Metode Penunjukan vendor sudah ada');
            }else{
                $metode      = $this->input->post('metode');
                $detail         = $this->input->post('detail');
                $database       = $this->P_vendor_model->add_p_vendor($metode,$detail);    
            }        
                redirect('P_vendor');
        }else{
            $this->load->view('vendor/v_add_p_vendor');
        }
    }
    
    public function edit_p_vendor($id){
        if ($this->input->post('submit')) {
            $metode       = $this->input->post('metode');
            $detail          = $this->input->post('detail');
            $data            = $this->P_vendor_model->edit_p_vendor($id,$metode,$detail);
            redirect('p_vendor');
        }else{
            $data['data'] = $this->P_vendor_model->get_edit_p_vendor($id);
            $this->load->view('vendor/v_edit_p_vendor',$data);
        }
    }

    public function delete_p_vendor($id){
            $data['data'] = $this->P_vendor_model->get_delete_p_vendor($id);
            redirect('p_vendor');
    }
}