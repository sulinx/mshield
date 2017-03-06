<?php
	class Login extends CI_Controller
	{
		function index()
		{
			session_start();
			$this->load->view('login.php');

		}
		function check()
		{
			session_start();
			$username=$this->input->post('name',TRUE);
			$password=$this->input->post('passwd',TRUE);
			if(empty($username))
			{
				$a=array('msg'=>'请填写用户名');
				print json_encode($a);
				exit();
			}
			elseif(empty($password))
			{
				$a=array('msg'=>'请填写密码');
				print json_encode($a);
				exit();
			}
			$this->load->model('common','',TRUE);
			if($this->common->login($username,md5($password)))
			{
				$a=array('ok'=>'ok');
				echo json_encode($a);
				$_SESSION['username']=$username;
				$_SESSION['authkey']=md5(rand(10000000,99999999));
				exit();
			}
			else
			{
				$a=array('msg'=>'用户名或密码错误');
				print json_encode($a);
				exit();
			}
		}
	}
?>