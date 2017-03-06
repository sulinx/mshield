<?php
	class Reg extends CI_Controller
	{
		function index()
		{
			session_start();
			$username=$this->input->post('name',TRUE);
			$password=$this->input->post('passwd',TRUE);
			$repassword=$this->input->post('repasswd',TRUE);
			$email=$this->input->post('email',TRUE);
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
			elseif(empty($repassword))
			{
				$a=array('msg'=>'请重复填写密码');
				print json_encode($a);
				exit();
			}
			if($password==$repassword)
			{
				$this->load->model('common','',TRUE);
				if($this->common->find($username))
				{
					$a=array('msg'=>'用户名重复');
					echo json_encode($a);
					exit();
				}
				$this->common->reg($username,md5($password),$email);
				$a=array('ok'=>'ok');
				echo json_encode($a);
			}
		}
	}
?>