<?php
	class Ucenter extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		function index()
		{
			$this->checklog();
			$data=$this->baseinfo();
			$this->load->view('home.php',$data);
		}
		function baseinfo()
		{
			$this->load->database();
			$this->load->model('common');
			$data['user']=$_SESSION['username'];
			$result=$this->common->webinfo();
			$data['notice']=$result->notice;
			$result=$this->common->finduserinfo($_SESSION['username']);
			$data['email']=$result->email;
			$data['website']=$this->common->getusersite($_SESSION['username']);
			return $data;
		}
		function requestlog($id)
		{
			if(@!isset($id))
			{
				exit('未知错误?');
			}
			$this->checklog();
			$data=$this->baseinfo();
			$this->load->model('common');
			$result=$this->common->getsiteinfo($id);
			if(!$result) exit('没有指定的网站');
			if($result->row()->username!=$_SESSION['username']) exit('非法访问');
			$data['siteinfo']=$result->row();
			$this->load->view('requestlog.php',$data);
		}
		function weblog($id)
		{
			if(@!isset($id))
			{
				exit('未知错误?');
			}
			$this->checklog();
			$data=$this->baseinfo();
			$this->load->model('common');
			$result=$this->common->getsiteinfo($id);
			if(!$result) exit('没有指定的网站');
			if($result->row()->username!=$_SESSION['username']) exit('非法访问');
			$data['siteinfo']=$result->row();
			$this->load->view('weblog.php',$data);
		}
		function logout()
		{
			@session_start();
			@session_destroy();
			$_COOKIE="";
			exit('退出登陆成功,3秒后返回主页<META http-equiv="Refresh" content="3;url=../../../index.php">');
		}
		function checklog()
		{
			@session_start();
			if(@!$_SESSION['authkey'])
			{
				exit('请先登录');
			}
		}
		function addwebsite()
		{
			$this->checklog();
			$webname=$this->input->post('webname',TRUE);
			$weburl=$this->input->post('weburl',TRUE);
			$this->load->model('common');
			$confirmkey=md5(rand(100000000,999999999));
			$query=$this->common->getwebsite($weburl);
			if($query->conn_id->affected_rows)
			{
				exit('已经存在该网站!请确认您是站长');
			}
			$result=$this->common->addwebsite(array($webname,$weburl,0,$_SESSION['username'],$confirmkey));
			if($result)
			{
				exit('网站添加成功!请等待审核');
			}
		}
	}
?>