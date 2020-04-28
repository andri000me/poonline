 <!-- edited by zulhan -->
 <?php 
 class Metode_penyelenggaraan_model extends CI_Model{ 
    function get_all_metode_penyelenggaraan(){        
        $query=$this->db->query("SELECT * from metode_penyelenggaraan ORDER BY id DESC");
        return $query->result();
    }   

    function add_metode_penyelenggaraan($id,$metode){
        $data = array(
            'id' => $id,
            'metode' => $metode,
        );
        $output = $this->db->insert('metode_penyelenggaraan',$data);
        return $output;
    }

    function get_metode(){
        $query=$this->db->query("SELECT metode FROM metode_penyelenggaraan");
        return $query->result();
    }

    function get_edit_metode_penyelenggaraan($id){
       $query=$this->db->query("SELECT * from metode_penyelenggaraan where id='$id'");
        return $query->result();
    }

    function edit_metode_penyelenggaraan($id,$metode){
        $data = array(
            'id' => $id,
            'metode' => $metode
        );
        $this->db->where('id',$id);
        $output = $this->db->update('metode_penyelenggaraan',$data);
        return $output;
    }

    function get_delete_metode_penyelenggaraan($id){      
        $query=$this->db->query("DELETE from metode_penyelenggaraan where id='$id'");
        return TRUE;
    }

    function delete_metode_penyelenggaraan($id,$metode){
        $data = array(
            'id' => $id,
            'metode' => $metode,
        );
        $this->db->where('id',$id);
        $output = $this->db->delete('metode_penyelenggaraan',$data);
        return $output;
    }
}
