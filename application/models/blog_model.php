<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_model extends CI_Model {

    public function get_all()
    {
        //多表关联查询，通过外键
        $this -> db -> select("*");
        $this -> db -> from("t_blog blog");
        $this -> db -> join("t_admin admin","blog.admin_id=admin.admin_id");
        return $this -> db -> get() -> result();
    }
    public function get_admin_blog($blog_id)
    {
        //多表关联查询blog作者信息
        $this -> db -> select("*");
        $this -> db -> from("t_blog blog");
        $this -> db -> join("t_admin admin","blog.admin_id=admin.admin_id");
        $this -> db-> where(array("blog_id"=>$blog_id));
        return $this -> db -> get() -> row();
    }
    public function get_by_id($blog_id)
    {
        return $this->db->get_where("t_blog",array("blog_id"=>$blog_id))->row();
    }

    public function  get_by_page($page)
    {
        //发送请求时，将$page变量一起传回，每插入一次6个后，page+=6
        //$this->db->get("t_blog",6,$page)->result;
        $this -> db -> select("*");
        $this -> db -> from("t_blog blog");
        $this -> db -> join("t_admin admin","blog.admin_id=admin.admin_id");
        //limit()第一个参数限制查询所返回的结果数量,第二个参数设置的是结果偏移量
        $this -> db -> limit(6,$page);
        return $this -> db ->get() -> result();
    }

    public function save($admin_id,$title,$content)
    {
        $data = array(
            "admin_id"=>$admin_id,
            "title"=>$title,
            "content"=>$content
        );
        $this->db->insert("t_blog",$data);
    }

    public function update($blog_id,$title, $content, $admin_id) {
        $data = array(
            "title"=>$title,
            "content"=>$content,
            "admin_id"=>$admin_id
        );
        $this->db->where('blog_id',$blog_id);
        $this->db->update("t_blog",$data);
    }
}