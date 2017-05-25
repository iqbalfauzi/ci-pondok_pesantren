<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_model_kelas extends CI_Model {
	public function __construct()
	{	
		parent::__construct();
	}

	public function getdata($key)
	{
		$this->db->where('kode_kelas',$key);
		$hasil = $this->db->get('tb_kelas');
		return $hasil;
	}
	public function getupdate($key,$data)
	{
		$this->db->where('kode_kelas',$key);
		$this->db->update('tb_kelas',$data);
	}
	public function getInsert($data)
	{
		$this->db->insert('tb_kelas',$data);
	}
	public function getdelete($key)
	{
		$this->db->where('kode_kelas',$key);
		$this->db->delete('tb_kelas');
	}

	public function tampildatakelas($key)
	{
		$this->db->where('kode_ustadz',$key);
		$query= $this->db->get('tb_ustadz');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) {
				$hasil=$row->nama_ustadz;
			}
		}
		else{
			$hasil='';
		}
		return $hasil;
	}
}
