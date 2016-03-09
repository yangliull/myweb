<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function login()
    {
        $this->load->view("admin/login");
    }

    public function admin_index()
    {
        $this->load->view("admin/admin_index");
    }

    //管理员登录
    public function  check_login()
    {
        // 1.获取表单数据
        $username = $this->input->post("username");
        $password = $this->input->post("password");

        //2.连接数据库，查数据
        $this->load->model("admin_model");
        $result = $this->admin_model->get_by_name_pwd($username, $password);

        //3.跳转
        if ($result) {
            $this->load->view("admin/admin_index");
        } else {
            $this->load->view("admin/login");
        }
    }

    //用户管理
    public function admin_mgr()
    {
        $this->load->model("admin_model");
        $result = $this->admin_model->get_all();
        $data = array(
            "admins" => $result
        );
        $this->load->view("admin/admin_mgr.php", $data);
    }
    //1.删除用户
    public function delete_admin()
    {
        $admin_id = $this->input->get('admin_id');
        $this->load->model('admin_model');
        $this->admin_model->delete($admin_id);
        $this->admin_mgr();
    }
    //2.新建用户
    public function admin_mgrNew()
    {
        $this->load->view("admin/admin_mgrNew");
    }
    public function add_admin()
    {
        $admin_name = $this->input->post("admin_name");
        $admin_pwd = $this->input->post("admin_pwd");

        //验证用户名是否重复
        $this->load->model("admin_model");
        $row = $this->admin_model->get_name($admin_name);

        if ($row) {
            echo "fail";
        } else {
            $this->load->model("admin_model");
            $this->admin_model->save($admin_name, $admin_pwd);
            echo "success";
        }
    }
    //验证新建用户名是否已存在
    public function admin_check_name()
    {
        $username = $this->input->get("username");
        $this->load->model("admin_model");
        $row = $this->admin_model->get_name($username);
        if ($row) {
            echo "fail";
        } else if ($row == "") {
            echo "null";
        } else {
            echo "success";
        }
    }
    //3.编辑用户（查）
    public function admin_mgrUpdate()
    {
        $admin_id = $this->input->get("admin_id");
        $this->load->model("admin_model");
        $row = $this->admin_model->get_by_id($admin_id);
        $data = array(
            "rowm" => $row
        );
        $this->load->view("admin/admin_mgrUpdate", $data);
    }
    //3.编辑用户（更）
    public function update_admin()
    {
        $admin_id = $this->input->get("admin_id");
        $admin_name = $this->input->get("admin_name");
        $admin_pwd = $this->input->get("admin_pwd");

        if ($admin_name == "" || $admin_pwd == "") {
            echo "fail";
        } else {
            $this->load->model("admin_model");
            $this->admin_model->update($admin_id, $admin_name, $admin_pwd);
            echo "success";
        }
    }

    //留言管理
    public function admin_message()
    {
        $this->load->model("message_model");
        $result = $this->message_model->get_all();
        $data = array(
            "messages" => $result
        );
        $this->load->view("admin/admin_message.php", $data);
    }
    //1.删除留言
    public function delete_message()
    {
        $message_id = $this->input->get('message_id');
        $this->load->model('message_model');
        $this->message_model->delete($message_id);
        $this->admin_message();
    }

    //blog管理
    public function admin_blog()
    {
        $this->load->model("blog_model");
        $result = $this->blog_model->get_all();
        $data = array(
            "blogs" => $result
        );
        $this->load->view("admin/admin_blog.php", $data);
    }
    //1.添加博客
    public function admin_blogNew()
    {
        $this->load->view("admin/admin_blogNew");
    }
    public function add_blog()
    {
        $admin_id = $this->input->post("admin_id");
        $title = $this->input->post("title");
        $content = $this->input->post("content");

        if ($admin_id == "" || $title == "" || $content == "") {
            echo "fail";
        } else {
            $this->load->model("blog_model");
            $this->blog_model->save($admin_id, $title, $content);
            echo "success";
        }
    }
    //2.删除博客
    public function delete_blog()
    {
        $blog_id = $this->input->get('blog_id');
        $this->load->model('blog_model');
        $this->blog_model->delete($blog_id);
        $this->admin_blog();
    }
    //3.编辑博客(查)
    public function admin_blogUpdate()
    {
        $blog_id = $this->input->get("blog_id");
        $this->load->model("blog_model");
        $row = $this->blog_model->get_by_id($blog_id);
        $data = array(
            "rowb" => $row
        );
        $this->load->view("admin/admin_blogUpdate", $data);
    }
    //3.编辑博客(更)
    public function update_blog()
    {
        $blog_id = $this->input->get("blog_id");
        $title = $this->input->get("title");
        $content = $this->input->get("content");
        $admin_id = $this->input->get("admin_id");

        if ($title == "" || $content == "") {
            echo "fail";
        } else {
            $this->load->model("blog_model");
            $this->blog_model->update($blog_id, $title, $content, $admin_id);
            echo "success";
        }
    }

    //评论管理
    public function admin_comment()
    {
        $this->load->model("comment_model");
        $result = $this->comment_model->get_all();
        $data = array(
            "comments" => $result
        );
        $this->load->view("admin/admin_comment.php", $data);
    }
    //1.删除评论
    public function delete_comment()
    {
        $comm_id = $this->input->get('comm_id');
        $this->load->model('comment_model');
        $this->comment_model->delete($comm_id);
        $this->admin_comment();
    }
}
