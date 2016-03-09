<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}
	public function contact()
	{
		$this->load->view('contact');
	}

	//留言区submit提交
	public function message()
	{
		$username = $this -> input -> post("username");
		$email = $this -> input -> post("email");
		$content = $this -> input -> post("content");

		if($username==""||$email==""||$content=="") {
			echo "fail";
		}else {
			$this->load->model("message_model");
			$this->message_model->save($username,$email,$content);
			echo "success";
		}
	}
	//验证留言区用户名是否已存在
	public function message_check_name()
	{
		$username = $this->input->get("username");
		$this->load->model("message_model");
		$row = $this->message_model->get_name($username);
		if($row) {
			echo "fail";
		}else if ($row==""){
			echo "null";
		}else {
			echo "success";
		}
	}
	//获取blog
	public function get_articles()
	{
		$page = $this->input->get("page");
		$this->load->model("blog_model");
		$all = $this->blog_model->get_all();
		//count获取$all的个数，即长度
		$total = count($all);
		//ceil()向上取整
		$total_page = ceil($total/6);
		$result = $this->blog_model->get_by_page($page);
		$json = array(
			"data" =>$result,
			//($page/6+1)当前的页数
			"isEnd" => $page/6+1<=$total_page?false:true
		);
		//数组套数组的集合，转化为数组里多个对象(json对象)的格式
		echo json_encode($json);

	}

	//评论区查询
	public function detail()
	{
		$blog_id = $this->input->get("blog_id");
		$this->load->model("blog_model");

		//查询该blog作者信息
		$row = $this->blog_model->get_admin_blog($blog_id);

		$this->load->model("comment_model");
		$result = $this->comment_model->get_by_blog_id($blog_id);

		$data = array(
				"blog"=>$row,
				"comments"=>$result
		);
		$this->load->view('detail',$data);
	}

	//评论区submit提交
	public function comment()
	{
		$blogId = $this -> input -> post("blogId");
		$name = $this -> input -> post("name");
		$email = $this -> input -> post("email");
		$website = $this -> input -> post("website");
		$subject = $this -> input -> post("subject");

		if($name==""||$email==""||$subject=="") {
			echo "fail";
		}else{
			$this->load->model("comment_model");
			$this->comment_model->save($blogId,$name,$email,$website,$subject);
			redirect('welcome/detail?blog_id='.$blogId);
			echo "success";
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */