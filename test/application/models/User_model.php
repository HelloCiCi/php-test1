<?php
class User_model extends CI_Model
{
    

    public function add($name){
        $this->db->insert('t_user',array(
            'name'=>$name
        ));
        return $this->db->affected_rows(); 
    }

    public function user_list(){
        $find = $this->db->get('t_user');
        // $find = $this->db->get_where('t_user',array('name'=>'lisi'));
        return $find->result();
    }

    public function del_user($id){
        $this->db->delete('t_user',array(
            'id'=>$id
        ));
        return $this->db->affected_rows();
    } 

    public function get_user_by_id($id){
        $finder = $this->db->get_where('t_user',array(
            'id'=>$id
        ));
        return $finder->result();
    }

    public function update($id,$name){
        $this->db->where('id',$id);
        $this->db->update('t_user',array(
            'name' => $name,
        ));
        return $this->db->affected_rows();
    }
}










?>