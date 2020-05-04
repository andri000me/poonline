<?php 
class Reply_public extends CI_Controller{
 
	public function __construct(){
		parent::__construct();
		$this->simple_login->cek_login();
		$this->load->database();
		$this->load->model('Reply_model');
        $this->load->helper('url');
	}

	public function index() {
		$data['publik'] = $this->Reply_model->get_all_public();
		$this->load->view('reply/v_home_reply_public', $data);
    }

}