 <!-- add by zulhan -->
<?php 
class Hotel extends CI_Controller{
 
    public function __construct(){
        parent::__construct();
        $this->simple_login->cek_login();
        $this->load->database();
        $this->load->model('Hotel_model');
        $this->load->model('Wilayah_model');
        $this->load->helper('url');
    }
 
    public function index() {
        $data['data'] = $this->Hotel_model->get_all_hotel();        
        $this->load->view('hotel/v_hotel_home',$data);
    }

    public function import(){
    $this->load->view('hotel/v_import_hotel');
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
            redirect('Hotel/import');

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
                                    'name'                  => $row['A'],
                                    'marketing'             => $row['B'],
                                    'contact'               => $row['C'],
                                    'address'               => $row['D'],
                                    'city'                  => $row['E'],
                                    'roomrate'              => $row['F'],
                                    'description_room'      => $row['G'],
                                    'meeting'               => $row['H'],
                                    'description_meeting'   => $row['I']
                                ));
                    }
                $numrow++;
            }
            $this->db->insert_batch('hotel', $data);
            unlink(realpath('excel/'.$data_upload['file_name']));

            $this->session->set_flashdata('notif', '<div class="alert alert-success"><b>PROSES IMPORT BERHASIL!</b> Data Hotel berhasil diimport!</div>');
            
            redirect('Hotel');

        }
    }

    public function add_hotel(){ 
    if ($this->input->post('submit')) {
            $name = $this->input->post('name');
            $sql = $this->db->query("SELECT * FROM hotel where name= '$name' ");
            $cek_hotel= $sql->num_rows();
            if ($cek_hotel > 0) {
                $this->session->set_flashdata('message', 'Hotel Sudah Terdaftar');
            }else{
                $name                = $this->input->post('name');
                $marketing           = $this->input->post('marketing');
                $contact             = $this->input->post('contact');
                $address             = $this->input->post('address');
                $city                = $this->input->post('city');
                $roomrate            = $this->input->post('roomrate');
                $description_room    = $this->input->post('description_room');
                $meeting             = $this->input->post('meeting');
                $description_meeting = $this->input->post('description_meeting');
                $database            = $this->Hotel_model->add_hotel($name,$marketing,$contact,$address,$city,$roomrate,$description_room,$meeting,$description_meeting);    
            }        
                redirect('Hotel');
        }else{
            $data['kota'] = $this->Wilayah_model->get_all_kota();
            $this->load->view('hotel/v_add_hotel');
        }
    }
    
    public function edit_hotel($id){
        if ($this->input->post('submit')) {
                $name                = $this->input->post('name');
                $marketing           = $this->input->post('marketing');
                $contact             = $this->input->post('contact');
                $address             = $this->input->post('address');
                $city                = $this->input->post('city');
                $roomrate            = $this->input->post('roomrate');
                $description_room    = $this->input->post('description_room');
                $meeting             = $this->input->post('meeting');
                $description_meeting = $this->input->post('description_meeting');
                $data                = $this->Hotel_model->edit_hotel($id,$name,$marketing,$contact,$address,$city,$roomrate,$description_room,$meeting,$description_meeting);
            redirect('Hotel');
        }else{
            $data['data'] = $this->Hotel_model->get_edit_hotel($id);
            $this->load->view('hotel/v_edit_hotel',$data);
        }
    }

    public function delete_hotel($id){
            $data['data'] = $this->Hotel_model->get_delete_hotel($id);
            redirect('Hotel');
    }
}