<?php 
class Home extends CI_Controller{
 
	public function __construct(){
		parent::__construct();
		$this->simple_login->cek_login();
        $this->load->database();
        $this->load->helper('url');
	}

	public function index() {
		$this->load->view('v_home_admin');
    }

    public function logout(){
    }
}