<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{	
		parent::__construct();
		$this->load->model('M_model_login');
		
	}	

	public function index()
	{
		if ( $this->session->userdata('username') and 
			$this->session->userdata('pass') )
		{	
			redirect('home',$data);
		} else
		{	
			$this->load->view('v_tampilan_login');
		}
		
	}
	public function filter($data)
	{	
		$data = preg_replace('/[^a-zA-Z0-9]/', '', $data);
		return $data;
		unset($data);
	}
	public function login_gagal()
	{	
		$data['gagal'] = 'Anda Gagal Login';
		$this->load->view('v_login',$data);		
	}

	public function getlogin()
	{
		$u=$this->input->post('username');
		$u=$this->filter($u);
		$p=$this->input->post('password');
		$p=$this->filter($p);

		$this->load->model('M_model_login');
		$this->M_model_login->getlogin($u,$p);
	}
}
