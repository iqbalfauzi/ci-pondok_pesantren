<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_model_kitab extends CI_Model {
	public function __construct()
	{	
		parent::__construct();
	}

	public function getdata($key)
	{
		$this->db->where('kode_pelajaran',$key);
		$hasil = $this->db->get('tb_kitab');
		return $hasil;
	}
	public function getupdate($key,$data)
	{
		$this->db->where('kode_pelajaran',$key);
		$this->db->update('tb_kitab',$data);
	}
	public function getInsert($data)
	{
		$this->db->insert('tb_kitab',$data);
	}
	public function getdelete($key)
	{
		$this->db->where('kode_pelajaran',$key);
		$this->db->delete('tb_kitab');
	}
}
