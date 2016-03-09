<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comment_model extends CI_Model {
    public function get_all()
    {
        //多表关联查询，通过外键
        $this -> db -> select("*");
        $this -> db -> from("t_blog blog");
        $this -> db -> join("t_comment comment","blog.blog_id=comment.blog_id");
        return $this -> db -> get() -> result();
    }

    public function get_by_blog_id($blog_id) {
        $data = array(
            "blog_id"=>$blog_id
        );
        return $this->db->get_where("t_comment",$data)->result();
    }

    public function save($blogId,$name,$email,$website,$subject)
    {
        $data = array(
            "blog_id" => $blogId,
            "comm_name" => $name,
            "email" => $email,
            "website" => $website,
            "subject" => $subject
        );
        $this->db->insert("t_comment",$data);
    }

    public function delete($comm_id)
    {
        $this -> db -> delete('t_comment',array('comm_id' =>$comm_id));
    }
}