<?php 
class User extends CI_Controller{
 
	public function __construct(){
		parent::__construct();
		$this->simple_login->cek_login();
        $this->load->database();
        $this->load->model('User_model');
        //$this->load->model('Pekerja_model');
        $this->load->helper('url');
	}
 
	public function index() {
        $data['data'] = $this->User_model->get_all_user();        
		$this->load->view('admin/v_user_home',$data);
    }

    public function add_user(){ 
    // add by maulana 28-11-2019
    if ($this->input->post('submit')) {
            $username = $this->input->post('username');
            $sql = $this->db->query("SELECT * FROM users where username= '$username' ");
            $cek_user = $sql->num_rows();
            if ($cek_user > 0) {
                $this->session->set_flashdata('message', 'Username sudah digunakan');
            }else{
                $nama       = $this->input->post('nama');
                $role       = $this->input->post('role');
                $koneksi    = $this->input->post('koneksi');
                $password   = $this->input->post('password');
                $data       = $this->User_model->add_user($username,$nama,$role,$koneksi,$password);    
            }        
                redirect('User');
        }else{
            $this->load->view('admin/v_user_add');
        }
    }
    // end by maulana 28-11-2019
    // 	if ($this->input->post('submit')) {
    //         $username = $this->input->post('username');
    //         $role     = $this->input->post('role');
    //         $koneksi  = $this->input->post('koneksi');
    //         $password  = $this->input->post('password');
    //         $data = $this->User_model->add_user($username,$role,$koneksi,$password);        
    //         redirect('User');
    //     }else{
    //         $this->load->view('admin/v_user_add');
    //     }
    // }

    public function edit_user($id){
        if ($this->input->post('submit')) {
            $id         = $this->input->post('id');
            $username   = $this->input->post('username');
            $nama       = $this->input->post('nama');
            $role       = $this->input->post('role');
            $koneksi    = $this->input->post('koneksi');
            $password   = $this->input->post('password');
            $data       = $this->User_model->edit_user($id,$username,$nama,$role,$koneksi,$password);
            redirect('User');
        }else{
            $data['data'] = $this->User_model->get_edit_user($id);
            $this->load->view('admin/v_user_edit',$data);
        }
    }

    public function delete_user($id){
            $data['data'] = $this->User_model->get_delete_user($id);
            redirect('User');
    }
    public function activateUser(){
        $result= $this->User_model->activateUser($this->input->post());
        redirect('user');
    }
}