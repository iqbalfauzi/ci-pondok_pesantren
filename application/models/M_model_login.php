<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_model_login extends CI_Model {
	public function __construct()
	{	
		parent::__construct();
	}
	public function getlogin($u,$p)
	{
		$pwd =md5($p);
		$this->db->where('username',$u);
		$this->db->where('password',$pwd);
		$query =$this->db->get('tb_login');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) {
				$sess=array('username' =>$row->username,
					'pass' => $row->password,
					'id_user' => $row->id_user,
					'status' =>$row->status,
					'avatar' =>$row->avatar,
					);
				$this->session->set_userdata($sess);
				redirect('home');
			}
		}
		else
		{
			$this->session->set_flashdata('info','maaf username atau password salah');
			redirect('login');
		}
	}
	
}
