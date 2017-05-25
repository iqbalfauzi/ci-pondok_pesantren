<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {
	public function __construct()
	{	
		parent::__construct();
	}

	public function index()

	{
		$this->load->model('M_model_kelas');
		$this->M_model_security->getsecurity();

		$status = $this->session->userdata('status');

		if($status == 'admin'){
			$isi['content'] 		='Kelas/v_tampil_datakelas';
			$isi['content_ustadz']	='Kelas/v_tampil_datakelas';
			$isi['content_santri'] 	='Kelas/v_tampil_datakelas';
		}else if ($status != 'admin'){
			$isi['content'] 		='Kelas/v_tampil_tampil_datakelas';
			$isi['content_ustadz']	='Kelas/v_tampil_tampil_datakelas';
			$isi['content_santri'] 	='Kelas/v_tampil_tampil_datakelas';
		}
		$isi['judul']			=' Kelas';
		$isi['sub_judul']		= 'Kelas';
		
		$isi['data'] 			=$this->db->get('tb_kelas');
		
		$this->load->view('v_tampilan_home',$isi);
	}

	public function tambah()
	{
		$this->M_model_security->getsecurity();
		$isi['content']				='Kelas/v_form_tambahkelas';
		$isi['content_ustadz']		='Kelas/v_form_tambahkelas';
		$isi['content_santri']		='Kelas/v_form_tambahkelas';
		$isi['judul']				='Kelas';
		$isi['sub_judul']			='Tambah Kelas';
		$isi['kode_kelas'] 			= '';
		$isi['grade'] 				= '';
		$isi['th_pel'] 				= '';
		$isi['wali_kelas']			= '';
		$isi['kelas'] 				= '';
		$this->load->view('v_tampilan_home',$isi);
	}

	public function edit()
	{
		$this->M_model_security->getsecurity();
		$isi['content']			='Kelas/v_form_editkelas';
		$isi['content_ustadz']	='Kelas/v_form_editkelas';
		$isi['content_santri']	='Kelas/v_form_editkelas';
		$isi['judul']			='Kelas';
		$isi['sub_judul']		='Edit Kelas';

		$key=$this->uri->segment(3);
		$this->db->where('kode_kelas',$key);
		$query=$this->db->get('tb_kelas');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) {
				$isi['kode_kelas'] 		= $row->kode_kelas;
				$isi['grade'] 			= $row->grade;
				$isi['th_pel'] 			= $row->th_pel;
				$isi['wali_kelas']		= $row->kode_ustadz;
				$isi['kelas'] 			= $row->kelas;
			}
		}else
		{
			$isi['kode_kelas'] 	= '';
			$isi['grade'] 		= '';
			$isi['th_pel'] 		= '';
			$isi['wali_kelas']	= '';
			$isi['kelas'] 		= '';
		}

		$this->load->view('v_tampilan_home',$isi);
	}

	public function simpan()
	{

		$this->M_model_security->getsecurity();

		$key= $this->input->post('kode_kelas');
		$data['kode_kelas'] = $this->input->post('kode_kelas');
		$data['grade'] = $this->input->post('grade');
		$data['th_pel'] = $this->input->post('th_pel');
		$data['kode_ustadz'] = $this->input->post('wali_kelas');
		$data['kelas'] = $this->input->post('kelas');
		
		$this->load->model('M_model_kelas');
		$query = $this->M_model_kelas->getdata($key);
		if($query->num_rows()>0)
		{
			$this->M_model_kelas->getupdate($key,$data);
			$this->session->set_flashdata('info','Data Sukses di Update');
		}
		else
		{
			$this->M_model_kelas->getInsert($data);
			$this->session->set_flashdata('info','Data Sukses di Simpan');
		}
		redirect('kelas');
	}
	public function delete()
	{
		$this->M_model_security->getsecurity();
		$this->load->model('M_model_kelas');
		$key=$this->uri->segment(3);
		$this->db->where('kode_kelas',$key);
		$query=$this->db->get('tb_kelas');
		if($query->num_rows()>0)
		{
			$this->M_model_kelas->getdelete($key);
		}
		redirect('kelas');
	}
}
