<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kitab extends CI_Controller {
	public function __construct()
	{	
		parent::__construct();
	}

	public function index()

	{	
		$this->load->model('M_model_kitab');
		$this->M_model_security->getsecurity();

		$status = $this->session->userdata('status');

		if(($status == 'admin')or ($status == 'ustadz')){
			$isi['content'] 		='Kitab/v_tampil_datakitab';
			$isi['content_ustadz']	='Kitab/v_tampil_datakitab';
			$isi['content_santri'] 	='Kitab/v_tampil_datakitab';
		}else if ($status != 'admin'){
			$isi['content'] 		='Kitab/v_tampil_tampil_datakitab';
			$isi['content_ustadz']	='Kitab/v_tampil_tampil_datakitab';
			$isi['content_santri'] 	='Kitab/v_tampil_tampil_datakitab';
		}
		$isi['judul']			=' Kitab';
		$isi['sub_judul']		= 'Kitab';
		
		$isi['data'] 			=$this->db->get('tb_kitab');
		
		$this->load->view('v_tampilan_home',$isi);
	}

	public function tambah()
	{
		$this->M_model_security->getsecurity();
		$isi['content']				='Kitab/v_form_tambahkitab';
		$isi['content_ustadz']		='Kitab/v_form_tambahkitab';
		$isi['content_santri']		='Kitab/v_form_tambahkitab';
		$isi['judul']				='Kitab';
		$isi['sub_judul']			='Tambah Kitab';

		$isi['kode_pelajaran'] 		= '';
		$isi['grade'] 				= '';
		$isi['nama_pelajaran'] 		= '';
		$isi['kitab']				= '';

		$this->load->view('v_tampilan_home',$isi);
	}

	public function edit()
	{
		$this->M_model_security->getsecurity();
		$isi['content']			='Kitab/v_form_editkitab';
		$isi['content_ustadz']	='Kitab/v_form_editkitab';
		$isi['content_santri']	='Kitab/v_form_editkitab';
		$isi['judul']			='Kitab';
		$isi['sub_judul']		='Edit Kitab';

		$key=$this->uri->segment(3);
		$this->db->where('kode_pelajaran',$key);
		$query=$this->db->get('tb_kitab');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) {
				$isi['kode_pelajaran'] 	= $row->kode_pelajaran;
				$isi['nama_pelajaran'] 	= $row->nama_pelajaran;
				$isi['kitab']			= $row->kitab;
				$isi['grade'] 			= $row->grade;
			}
		}else
		{
			$isi['kode_pelajaran'] 		= '';
			$isi['grade'] 				= '';
			$isi['nama_pelajaran'] 		= '';
			$isi['kitab']				= '';
		}

		$this->load->view('v_tampilan_home',$isi);
	}

	public function simpan()
	{

		$this->M_model_security->getsecurity();

		$key= $this->input->post('kode_pelajaran');
		$data['kode_pelajaran'] = $this->input->post('kode_pelajaran');
		$data['nama_pelajaran'] = $this->input->post('nama_pelajaran');
		$data['kitab'] = $this->input->post('kitab');
		$data['grade'] = $this->input->post('grade');
		
		$this->load->model('M_model_kitab');
		$query = $this->M_model_kitab->getdata($key);
		if($query->num_rows()>0)
		{
			$this->M_model_kitab->getupdate($key,$data);
			$this->session->set_flashdata('info','Data Sukses di Update');
		}
		else
		{
			$this->M_model_kitab->getInsert($data);
			$this->session->set_flashdata('info','Data Sukses di Simpan');
		}
		redirect('kitab');
	}
	public function delete()
	{
		$this->M_model_security->getsecurity();
		$this->load->model('M_model_kitab');
		$key=$this->uri->segment(3);
		$this->db->where('kode_pelajaran',$key);
		$query=$this->db->get('tb_kitab');
		if($query->num_rows()>0)
		{
			$this->M_model_kitab->getdelete($key);
		}
		redirect('kitab');
	}
}
