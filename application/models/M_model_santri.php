<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_model_santri extends CI_Model {
	public function __construct()
	{	
		parent::__construct();
	}

	public function getdata($key)
	{
		$this->db->where('NIS',$key);
		$hasil = $this->db->get('tb_santri');
		return $hasil;
	}
	public function getupdate($key,$data)
	{
		$this->db->where('NIS',$key);
		$this->db->update('tb_santri',$data);
	}
	public function getInsert($data)
	{
		$this->db->insert('tb_santri',$data);
	}
	public function getdelete($key)
	{
		$this->db->where('NIS',$key);
		$this->db->delete('tb_santri');
	}
}
