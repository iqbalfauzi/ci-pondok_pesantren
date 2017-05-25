<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_model_security extends CI_Model {
	public function __construct()
	{	
		parent::__construct();
	}
	public function getsecurity()
	{
		$username=$this->session->userdata('username');
		$pass = $this->session->userdata('pass');
		if(empty($username)and($pass))
		{
			$this->session->sess_destroy();
			redirect('login');
		}
	}
	public function putus_koneksi()
	{	
		$this->db = null;
	}
	public function getJumlahdata(){
		$Data['jml_Ustadz']		= $this->db->get('tb_ustadz')->num_rows();
		$Data['jml_Santri']		= $this->db->get('tb_santri')->num_rows();
		$Data['jml_Kelas']		= $this->db->get('tb_kelas')->num_rows();
		$Data['jml_Pelajaran']	= $this->db->get('tb_kitab')->num_rows();
		$Data['jml_Admin']		= $this->db->get_where('tb_login',array('status' => 'admin'))->num_rows();
		return $Data;
	}
}
