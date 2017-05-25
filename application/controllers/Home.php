<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{	
		parent::__construct();
		$this->load->model('M_model_security');
		$this->M_model_security->getsecurity();

	}

	public function index()
	{	
		$isi['content'] 		= 'v_tampilan_content';
		$isi['content_ustadz'] 	= 'Ustadz/v_tampilan_contentustadz';
		$isi['content_santri'] 	= 'Santri/v_tampilan_contentsantri';
		$isi['judul']			= 'HOME';
		$isi['sub_judul']		= 'Home';
		$this->load->view('v_tampilan_home',$isi);
	}
	public function logout()
	{
		$this->M_model_security->putus_koneksi();
		$array_sess=$this->session->all_userdata();
		$this->session->unset_userdata($array_sess);
		unset($array_sess);

		//putus session
		$this->session->sess_destroy();

		redirect('login');
	}
}
