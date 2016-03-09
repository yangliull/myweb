<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {
    public function get_by_name_pwd($username,$password) {
        $data = array(
            "admin_name" => $username,
            "admin_pwd" => $password
        );
        return $this -> db -> get_where("t_admin",$data) ->row();
    }
    public function get_by_id($Id) {
        return $this -> db -> get_where("t_admin",array("admin_id" => $Id)) ->row();
    }
    public function  get_name($username) {
        return $this->db->get_where("t_admin",array("admin_name"=>$username))->row();
    }
    public function save($username,$password)
    {
        $data = array(
            "admin_name"=>$username,
            "admin_pwd"=>$password
        );
        $this->db->insert("t_admin",$data);
    }
    public function get_all() {
        return $this -> db -> get("t_admin") -> result();
    }
    public function delete($admin_id) {
//        $data = array(
//            "admin_id" =>$admin_id
//        );
        $this -> db -> delete('t_admin',array('admin_id' =>$admin_id));
    }
    public function update($admin_id,$admin_name,$admin_pwd) {
        $data = array(
            "admin_name"=>$admin_name,
            "admin_pwd"=>$admin_pwd
        );
        $this->db->where('admin_id',$admin_id);
        $this->db->update("t_admin",$data);
    }
}