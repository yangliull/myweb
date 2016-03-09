<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Message_model extends CI_Model {

    public function save($username,$email,$content)
    {
        $data = array(
            "username" => $username,
            "email" => $email,
            "content" => $content
        );
        $this->db->insert("t_message",$data);
    }

    public function get_all()
    {
        return $this -> db -> get("t_message") -> result();
    }

    public function  get_name($username) {
        return $this->db->get_where("t_message",array("username"=>$username))->row();
    }
    public function delete($message_id) {
//        $data = array(
//            "message_id" =>$message_id
//        );
        $this -> db -> delete('t_message',array('message_id' =>$message_id));
    }
}