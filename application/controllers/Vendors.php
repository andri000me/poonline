<!-- edited by zulhan -->
<?php 
class Vendors extends CI_Controller{
 
    public function __construct(){
        parent::__construct();
        $this->simple_login->cek_login();
        $this->load->database();
        $this->load->model('Vendor_model');
        $this->load->helper('url');
    }
 
    public function index() {
        $data['data'] = $this->Vendor_model->get_all_vendor();        
        $this->load->view('vendor/v_vendor_home',$data);
    }

    public function import(){
    $this->load->view('vendor/v_import_vendor');
    }

    
    public function upload(){
        include APPPATH.'third_party/PHPExcel/PHPExcel.php';

        $config['upload_path'] = realpath('excel');
        $config['allowed_types'] = 'xlsx|xls|csv';
        $config['max_size'] = '10000';
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {

          $this->session->set_flashdata('notif', '<div class="alert alert-danger"><b>PROSES IMPORT GAGAL!</b> '.$this->upload->display_errors().'</div>');
            redirect('Vendors');

        } else {

            $data_upload = $this->upload->data();

            $excelreader     = new PHPExcel_Reader_Excel2007();
            $loadexcel         = $excelreader->load('excel/'.$data_upload['file_name']); 
            $sheet             = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);

            $data = array();

            $numrow = 1;
            foreach($sheet as $row){
                            if($numrow > 1){
                                array_push($data, array(
                                    'vendor_name' => $row['A'],
                                    'pic'         => $row['B'],
                                    'email'       => $row['C'],
                                    'contact'     => $row['D'],
                                    'address'     => $row['E'],
                                    'category'    => $row['F']
                                ));
                    }
                $numrow++;
            }
            $this->db->insert_batch('vendors', $data);
            unlink(realpath('excel/'.$data_upload['file_name']));

            $this->session->set_flashdata('notif', '<div class="alert alert-success"><b>PROSES IMPORT BERHASIL!</b> Data Vendor berhasil diimport!</div>');
            
            redirect('Vendors');

        }
    }

    public function add_vendor(){ 
    if ($this->input->post('submit')) {
            $vendor_name = $this->input->post('vendor_name');
            $sql = $this->db->query("SELECT * FROM vendors where vendor_name= '$vendor_name' ");
            $cek_vendor= $sql->num_rows();
            if ($cek_vendor > 0) {
                $this->session->set_flashdata('message', 'Vendor Sudah Terdaftar');
            }else{
                $vendor_name    = $this->input->post('vendor_name');
                $pic            = $this->input->post('pic');
                $email          = $this->input->post('email');
                $contact        = $this->input->post('contact');
                $address        = $this->input->post('address');
                $category       = $this->input->post('category');
                $database       = $this->Vendor_model->add_vendor($vendor_name,$pic,$email,$contact,$address,$category);    
            }        
                redirect('Vendors');
        }else{
            $this->load->view('vendor/v_add_vendor');
        }
    }
    
    public function edit_vendor($id){
        if ($this->input->post('submit')) {
            $vendor_name        = $this->input->post('vendor_name');
                $pic            = $this->input->post('pic');
                $email          = $this->input->post('email');
                $contact        = $this->input->post('contact');
                $address        = $this->input->post('address');
                $category       = $this->input->post('category');
            $data               = $this->Vendor_model->edit_vendor($id,$pic,$email,$contact,$address,$category);
            redirect('Vendors');
        }else{
            $data['data'] = $this->Vendor_model->get_edit_vendor($id);
            $this->load->view('vendor/v_edit_vendor',$data);
        }
    }

    public function delete_vendor($id){
            $data['data'] = $this->Vendor_model->get_delete_vendor($id);
            redirect('vendors');
    }
}