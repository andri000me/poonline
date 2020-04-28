 <!-- edited by zulhan -->
 <?php 
 class P_vendor_model extends CI_Model{ 
    function get_all_p_vendor(){        
        $query=$this->db->query("SELECT * from p_vendor ORDER BY id DESC");
        return $query->result();
    }   
    function get_metode(){
        $query=$this->db->query("SELECT metode FROM p_vendor");
        return $query->result();
    }

    function add_p_vendor($metode,$detail){
        $data = array(
            'metode' => $metode,
            'detail' => $detail,
        );
        $output = $this->db->insert('p_vendor',$data);
        return $output;
    }

    function get_edit_p_vendor($id){
       $query=$this->db->query("SELECT * from p_vendor where id='$id'");
        return $query->result();
    }

    function edit_p_vendor($id,$metode,$detail){
        $data = array(
            'metode' => $metode,
            'detail' => $detail,
        );
        $this->db->where('id',$id);
        $output = $this->db->update('p_vendor',$data);
        return $output;
    }

    function get_delete_p_vendor($id){      
        $query=$this->db->query("DELETE from p_vendor where id='$id'");
        return TRUE;
    }

    function delete_p_vendor($id,$metode,$detail){
        $data = array(
            'metode' => $metode,
            'detail' => $detail,
        );
        $this->db->where('id',$id);
        $output = $this->db->delete('p_vendor',$data);
        return $output;
    }
}
