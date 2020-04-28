  <!-- add by zulhan -->
 <?php 
 class Hotel_model extends CI_Model{ 
    function get_all_hotel(){        
        $query=$this->db->query("SELECT * from hotel ORDER BY id DESC");
        return $query->result();
    }
  
    function add_hotel($name,$marketing,$contact,$address,$city,$roomrate,$description_room,$meeting,$description_meeting){
        $data = array(
            'name'                  => $name,
            'marketing'             => $marketing,
            'contact'               => $contact,
            'address'               => $address,
            'city'                  => $city,
            'roomrate'              => $roomrate,
            'description_room'      => $description_room,
            'meeting'               => $meeting,
            'description_meeting'   => $description_meeting
        );
        $output = $this->db->insert('hotel',$data);
        return $output;
    }
    function get_all_name(){
        $query=$this->db->query("SELECT name FROM hotel");
        return $query->result();
    }
    function get_edit_hotel($id){
       $query=$this->db->query("SELECT * from hotel where id='$id'");
        return $query->result();
    }

    function edit_hotel($id,$name,$marketing,$contact,$address,$city,$roomrate,$description_room,$meeting,$description_meeting){
        $data = array(
            'name'                  => $name,
            'marketing'             => $marketing,
            'contact'               => $contact,
            'address'               => $address,
            'city'                  => $city,
            'roomrate'              => $roomrate,
            'description_room'      => $description_room,
            'meeting'               => $meeting,
            'description_meeting'   => $description_meeting
        );
        $this->db->where('id',$id);
        $output = $this->db->update('hotel',$data);
        return $output;
    }

    function get_delete_hotel($id){      
        $query=$this->db->query("DELETE from hotel where id='$id'");
        return TRUE;
    }

    function delete_hotel($id,$name,$marketing,$contact,$address,$city,$roomrate,$description_room,$meeting,$description_meeting){
        $data = array(
            'name'                  => $name,
            'marketing'             => $marketing,
            'contact'               => $contact,
            'address'               => $address,
            'city'                  => $city,
            'roomrate'              => $roomrate,
            'description_room'      => $description_room,
            'meeting'               => $meeting,
            'description_meeting'   => $description_meeting
        );
        $this->db->where('id',$id);
        $output = $this->db->delete('hotel',$data);
        return $output;
    }
}
