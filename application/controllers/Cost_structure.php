<!-- edited by zulhan -->
<?php 
class Cost_structure extends CI_Controller{
 
    public function __construct(){
        parent::__construct();
        $this->simple_login->cek_login();
        $this->load->database();
        $this->load->model('Cost_structure_model');
        $this->load->helper('url');
    }
 
    public function index() {
        $data['data'] = $this->Cost_structure_model->get_all_cost_structure();        
        $this->load->view('cost_structure/v_cost_structure_home',$data);
    }

    public function add_cost_structure(){ 
    if ($this->input->post('submit')) {
            $id_cost_structure = $this->input->post('id_cost_structure');
            $sql = $this->db->query("SELECT * FROM cost_structure where id_cost_structure= '$id_cost_structure' ");
            $cek_id= $sql->num_rows();
            if ($cek_id > 0) {
                $this->session->set_flashdata('message', 'id sudah digunakan');
            }else{
                $id_cost_structure = $this->input->post('id_cost_structure');
                $detail         = $this->input->post('detail');
                $database       = $this->Cost_structure_model->add_cost_structure($id_cost_structure,$detail);    
            }        
                redirect('Cost_structure');
        }else{
            $this->load->view('cost_structure/v_add_cost_structure');
        }
    }
    
    public function edit_cost_structure($id_cost_structure){
        if ($this->input->post('submit')) {
            $id_cost_structure  = $this->input->post('id_cost_structure');
            $detail           = $this->input->post('detail');
            $data             = $this->Cost_structure_model->edit_cost_structure($id_cost_structure,$detail);
            redirect('Cost_structure');
        }else{
            $data['data'] = $this->Cost_structure_model->get_edit_cost_structure($id_cost_structure);
            $this->load->view('cost_structure/v_edit_cost_structure',$data);
        }
    }

    public function delete_cost_structure($id_cost_structure){
            $data['data'] = $this->Cost_structure_model->get_delete_cost_structure($id_cost_structure);
            redirect('Cost_structure');
    }
}