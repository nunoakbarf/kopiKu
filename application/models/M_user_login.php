<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user_login extends CI_Model{
    
    public function login($post){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('uname', $post['uname']);
        $this->db->where('pw', shal($post['pw']));
        $query = $this->db->get();
        return $query;
    }

    public function get($id = null){
        $this->db->from('users');
        if($id != null){
            $this->db->where('id_user', $id);
        }
        $query = $this->db->get();
        return $query;
    }
}
?>