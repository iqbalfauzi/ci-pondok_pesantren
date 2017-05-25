<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_model_ustadz extends CI_Model {
	public function __construct()
	{	
		parent::__construct();
	}

	public function getdata($key)
	{
		$this->db->where('kode_ustadz',$key);
		$hasil = $this->db->get('tb_ustadz');
		return $hasil;
	}
	public function getupdate($key,$data)
	{
		$this->db->where('kode_ustadz',$key);
		$this->db->update('tb_ustadz',$data);
	}
	public function getInsert($data)
	{
		$this->db->insert('tb_ustadz',$data);
	}
	public function getdelete($key)
	{
		$this->db->where('kode_ustadz',$key);
		$this->db->delete('tb_ustadz');
	}
}
