 <!-- edited by zulhan -->
 <?php 
 class Cost_structure_model extends CI_Model{ 
    function get_all_cost_structure(){        
        $query=$this->db->query("SELECT * from cost_structure ORDER BY id_cost_structure DESC");
        return $query->result();
    }   

    function add_cost_structure($id_cost_structure,$detail){
        $data = array(
            
            'id_cost_structure' => $id_cost_structure,
            'detail' => $detail,
        );
        $output = $this->db->insert('cost_structure',$data);
        return $output;
    }

    function get_edit_cost_structure($id_cost_structure){
    // UPDATE cost_structure SET id_cost_structure='$id_cost_structure',detail='$detail' where id_cost_structure='$id_cost_structure'        
        $query=$this->db->query("SELECT * from cost_structure where id_cost_structure='$id_cost_structure'");
        return $query->result();
    }

    function edit_cost_structure($id_cost_structure,$detail){
        $data = array(
            'id_cost_structure' => $id_cost_structure,
            'detail' => $detail
        );
        $this->db->where('id_cost_structure',$id_cost_structure);
        $output = $this->db->update('cost_structure',$data);
        return $output;
    }

    function get_delete_cost_structure($id_cost_structure){      
        $query=$this->db->query("DELETE from cost_structure where id_cost_structure='$id_cost_structure'");
        return TRUE;
    }

    function delete_cost_structure($id_cost_structure,$detail){
        $data = array(
            'id_cost_structure' => $id_cost_structure,
            'detail' => $detail,
        );
        $this->db->where('id_cost_structure',$id_cost_structure);
        $output = $this->db->delete('cost_structure',$data);
        return $output;
    }
}
