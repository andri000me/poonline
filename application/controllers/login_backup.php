<?php 
 
class login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('M_piket');
 
	}
 
	function index(){
		$this->load->view('v_login');
	}
 
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->M_piket->cek_login("users",$where)->num_rows();
		if($cek > 0){
 			$query = $this->M_piket->cek_login("users",$where)->row();
			$this->session->set_userdata('username',$username);
			$this->session->set_userdata('role',$query->role);
			 	//redirect(base_url('admin'));
			$this->load->view('v_home_admin');
 
		}else{
			echo "Username dan password salah !";
		}
	}

	function home_admin(){
		$this->load->view('v_home_admin');
	}

	function users(){
		$this->load->view('v_user');
	}

	function tambah_user(){
		$this->load->view('v_tambah_user');
	}

	function jadwal(){
		$this->load->view('v_jadwal');
	}

	function approve(){
		$this->load->view('v_approve');
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}

}