  <!-- edited by zulhan -->
 <?php 
 class Vendor_model extends CI_Model{ 
    function get_all_vendor(){        
        $query=$this->db->query("SELECT * from vendors ORDER BY id DESC");
        return $query->result();
    }
  
    function add_vendor($vendor_name,$pic,$email,$contact,$address,$category){
        $data = array(
            'vendor_name'=> $vendor_name,
            'pic'        => $pic,
            'email'      => $email,
            'contact'    => $contact,
            'address'    => $address,
            'category'   => $category
        );
        $output = $this->db->insert('vendors',$data);
        return $output;
    }
    function get_vendor_name(){
        $query=$this->db->query("SELECT vendor_name FROM vendors");
        return $query->result();
    }
    function get_edit_vendor($id){
       $query=$this->db->query("SELECT * from vendors where id='$id'");
        return $query->result();
    }

    function edit_vendor($id,$vendor_name,$pic,$email,$contact,$address,$category){
        $data = array(
            'vendor_name'=> $vendor_name,
            'pic'        => $pic,
            'email'      => $email,
            'contact'    => $contact,
            'address'    => $address,
            'category'   => $category
        );
        $this->db->where('id',$id);
        $output = $this->db->update('vendors',$data);
        return $output;
    }

    function get_delete_vendor($id){      
        $query=$this->db->query("DELETE from vendors where id='$id'");
        return TRUE;
    }

    function delete_vendor($id,$vendor_name,$pic,$email,$contact,$address,$category){
        $data = array(
            'vendor_name'=> $vendor_name,
            'pic'        => $pic,
            'email'      => $email,
            'contact'    => $contact,
            'address'    => $address,
            'category'   => $category
        );
        $this->db->where('id',$id);
        $output = $this->db->delete('vendors',$data);
        return $output;
    }
}
