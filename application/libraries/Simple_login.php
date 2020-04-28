 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 class Simple_login {
 
     // SET SUPER GLOBAL
     var $CI = NULL;
     public function __construct() {
         $this->CI =& get_instance();
     }
 
     public function login($username, $password,$_password) {
         //cek username dan password
         $query  = $this->CI->db->query("SELECT * FROM users where username = ? and active='1' ",array($username));
         $_result = $query->result();
         if($query->num_rows() == 1) {
            if ($_result[0]->koneksi == 'LDAP') {
                $input = array('username'=>$username,'password'=>$_password);
                $result = post_curl('main/check', $input);
                if ($result['status']) {
                    $this->CI->session->set_userdata('_username', $username);
                    $this->CI->session->set_userdata('username', $result['data']['name']);
                    $this->CI->session->set_userdata('id_login', uniqid(rand()));
                    $this->CI->session->set_userdata('id', $result['data']['id_user']);
                    $this->CI->session->set_userdata('key',$result['data']['key']);
                    $this->CI->session->set_userdata('role',strtolower($_result[0]->role));
                    redirect(site_url('Home'));
                }else{
                    $this->CI->session->set_flashdata('sukses','Username atau password anda salah, silakan coba lagi.. ');
                    redirect(site_url('Login'));
                }
            }else if (strtolower($_result[0]->koneksi) == 'manual') {
                $query  = $this->CI->db->query("SELECT * FROM users where username = ? and password = ? and active='1' ",array($username,$password));
                $result = $query->result();
                if($query->num_rows() == 1) {
                        $row  = $this->CI->db->query('SELECT * FROM users where username = ?',array($username));
                        $admin = $row->row();
                        $id   = $admin->username;
                        $this->CI->session->set_userdata('_username', $username);
                        $this->CI->session->set_userdata('username', $username);
                        $this->CI->session->set_userdata('id_login', uniqid(rand()));
                        $this->CI->session->set_userdata('role',$admin->role);
                        $this->CI->session->set_userdata('id', $id);
                        redirect(site_url('Home'));
                 }else{
                     $this->CI->session->set_flashdata('sukses','Username atau password anda salah, silakan coba lagi.. ');
                     redirect(site_url('Login'));
                 }
            }else{
               return false; 
            }
         }else{
             $this->CI->session->set_flashdata('sukses','Username Tidak Terdaftar');
             redirect(site_url('Login'));
         }
         
          return false;
      }
     
     /**
      * Cek session login, jika tidak ada, set notifikasi dalam flashdata, lalu dialihkan ke halaman
      * login
      */
     public function cek_login() {
 
         //cek session username
         if($this->CI->session->userdata('username') == '') {
             //set notifikasi
             $this->CI->session->set_flashdata('sukses','Anda belum login');
             //alihkan ke halaman login
             redirect(site_url('Login'));
         }
     }
 
     /**
      * Hapus session, lalu set notifikasi kemudian di alihkan
      * ke halaman login
      */
     public function logout() {
         $this->CI->session->unset_userdata('username');
         $this->CI->session->unset_userdata('id_login');
         $this->CI->session->unset_userdata('id');
         $this->CI->session->unset_userdata('role');
         $this->CI->session->set_flashdata('sukses','Anda berhasil logout');
         redirect(site_url('Login'));
     }
 }