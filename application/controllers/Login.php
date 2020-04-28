<?php  
class Login extends CI_Controller{
 
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}
 
	public function index() {
        // Fungsi Login
        if (!$this->session->username) {
            if ($this->input->post('login')) {
                $valid = $this->form_validation;
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $valid->set_rules('username','Username','required');
                $valid->set_rules('password','Password','required');
                $this->simple_login->login($username,md5($password),$password, base_url('Home'), base_url('Login'));
            }else{
                $this->load->view('v_login');
            }    
        }else{
            redirect(site_url('Home'));
        }
        
    }

    public function logout(){
        $this->simple_login->logout();
    }
}