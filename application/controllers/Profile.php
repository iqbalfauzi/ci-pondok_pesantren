<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	public function __construct()
	{	
		parent::__construct();
	}

	public function index()

	{
		$this->M_model_security->getsecurity();
		$isi['content'] 		='v_tampilan_profile';
		$isi['content_ustadz'] 		='v_tampilan_profile';
		$isi['content_santri'] 		='v_tampilan_profile';
		$isi['judul']			=' Profiles';
		$isi['sub_judul']		= 'Profile';
		$this->load->view('v_tampilan_home',$isi);
	}
}
