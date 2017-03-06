<?php
	class Index_con extends CI_Controller
	{
		function index()
		{
			$this->load->database();
			$this->load->model('common');
			$data=array();
			$data=$this->common->webinfo();
			$this->load->view('index.php',$data);
		}
	}
?>