<?php
	class Common extends CI_Model
	{
		function reg($user,$pass,$email)
		{
			$sql="insert into user values(null,?,?,?)";
			$this->db->query($sql,array($user,$pass,$email));
			return;
		}
		function login($user,$pass)
		{
			$sql="select * from user where username=? and password=?";
			$query=$this->db->query($sql,array($user,$pass));
			return $query->result();
		}
		function adlogin($user,$pass)
		{
			$sql="select * from admin where username=? and password=?";
			$query=$this->db->query($sql,array($user,$pass));
			return $query->result();
		}
		function finduserinfo($user)
		{
			$sql="select * from user where username=?";
			$query=$this->db->query($sql,array($user));
			return $query->row();
		}
		function find($user)
		{
			$sql="select * from user where username=?";
			$query=$this->db->query($sql,array($user));
			return $query->result();
		}
		function webinfo()
		{
			$sql="select * from webinfo";
			$query=$this->db->query($sql);
			return $query->row();
		}
		function setwebinfo($webinfo)
		{
			$sql="update webinfo set title=?,index=?,notice=?";
			$query=$this->db->query($sql,$webinfo);
			return $query;
		}
		function getadmin($user)
		{
			$sql="select * from admin where username=?";
			$query=$this->db->query($sql,array($user));
			return $query;
		}
		function addwebsite($website)
		{
			$sql="insert into website values(NULL,?,?,?,?,?)";
			$query=$this->db->query($sql,$website);
			return $query;
		}
		function getwebsite($weburl)
		{
			$sql="select * from website where url=?";
			$query=$this->db->query($sql,$weburl);
			return $query;
		}
		function getusersite($username)
		{
			$sql="select url,ischeck from website left join user on user.username=website.username where user.username=?";
			$query=$this->db->query($sql,$username);
			return $query->result();
		}
		function getsiteinfo($id)
		{
			$sql="select * from website where id=?";
			$query=$this->db->query($sql,$id);
			return $query;
		}
	}
?>