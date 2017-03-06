<?php
	class Admin extends CI_Controller
	{
		function checklog()
		{
			@session_start();
			if(@!$_SESSION['adkey'])
			{
				exit('请先登录');
			}
		}
		function index()
		{
			$this->checklog();
			$data=array('user'=>$_SESSION['admin']);
			$this->load->view('manage.php',$data);
		}
		function checkweb()
		{
			$this->checklog();
			$data=array('user'=>$_SESSION['admin']);
			$this->load->view('checkweb.php',$data);
		}
		function webinfo()
		{
			$this->load->database();
			$this->load->model('common');
			$result=$this->common->webinfo();
			$this->checklog();
			$data['title']=$result->title;
			$data['index']=$result->index;
			$data['notice']=$result->notice;
			$data['user']=$_SESSION['admin'];
			$this->load->view('webinfo.php',$data);
		}
		function logout()
		{
			@session_start();
			@session_destroy();
			$_COOKIE="";
			exit('退出登陆成功,3秒后返回主页<META http-equiv="Refresh" content="3;url=../../../index.php">');
		}
	}
?>