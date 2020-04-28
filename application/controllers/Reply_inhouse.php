<?php 
class Reply_inhouse extends CI_Controller{
 
	public function __construct(){
		parent::__construct();
		$this->simple_login->cek_login();
        $this->load->database();
        $this->load->helper('url');
	}

	public function index() {
		$this->load->view('reply/v_home_reply_inhouse');
    }

	public function reply() {
		$this->load->view('reply/v_reply_inhouse');
	}
}