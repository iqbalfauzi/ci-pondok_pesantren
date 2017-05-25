<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ustadz extends CI_Controller {
	public function __construct()
	{	
		parent::__construct();
	}

	public function index()

	{
		$this->M_model_security->getsecurity();

		$status = $this->session->userdata('status');

		if($status == 'admin'){
			$isi['content'] 		='Ustadz/v_tampil_dataustadz';
			$isi['content_ustadz'] 	='Ustadz/v_tampil_dataustadz';
			$isi['content_santri'] 	='Ustadz/v_tampil_dataustadz';
		}else if ($status != 'admin'){
			$isi['content'] 		='Ustadz/v_tampil_tampil_dataustadz';
			$isi['content_ustadz'] 	='Ustadz/v_tampil_tampil_dataustadz';
			$isi['content_santri'] 	='Ustadz/v_tampil_tampil_dataustadz';
		}
		$isi['judul']			=' Ustadz';
		$isi['sub_judul']		= 'Data Ustadz';
		$isi['data'] 			= $this->db->get('tb_ustadz');
		$this->load->view('v_tampilan_home',$isi);
	}

	public function tambah()
	{
		$this->M_model_security->getsecurity();
		$isi['content']			='Ustadz/v_form_tambahustadz';
		$isi['content_ustadz']	='Ustadz/v_form_tambahustadz';
		$isi['content_santri']	='Ustadz/v_form_tambahustadz';
		$isi['judul']			='Ustadz';
		$isi['sub_judul']		='Tambah Ustadz';
		$isi['kode'] 			= '';
		$isi['nama'] 			= '';
		$isi['gender'] 			= '';
		$isi['status_aktif'] 	= '';
		$isi['alamat'] 			= '';
		$isi['tgl_lahir'] 		= '';
		$isi['no_telp'] 		= '';
		$this->load->view('v_tampilan_home',$isi);
	}

	public function edit()
	{
		$this->M_model_security->getsecurity();
		$isi['content']			='Ustadz/v_form_editustadz';
		$isi['content_ustadz']	='Ustadz/v_form_editustadz';
		$isi['content_santri']	='Ustadz/v_form_editustadz';
		$isi['judul']			='Ustadz';
		$isi['sub_judul']		='Edit Ustadz';

		$key=$this->uri->segment(3);
		$this->db->where('kode_ustadz',$key);
		$query=$this->db->get('tb_ustadz');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) {
				$isi['kode'] 		= $row->kode_ustadz;
				$isi['nama'] 		= $row->nama_ustadz;
				$isi['gender'] 		= $row->gender;
				$isi['status_aktif']= $row->status_aktif;
				$isi['alamat'] 		= $row->alamat;
				$isi['tgl_lahir'] 	= $row->tgl_lahir;
				$isi['no_telp'] 	= $row->no_telp;
			}
		}else
		{
			$isi['kode'] 		= '';
			$isi['nama'] 		= '';
			$isi['gender'] 		= '';
			$isi['status_aktif'] = '';
			$isi['alamat'] 		= '';
			$isi['tgl_lahir'] 	= '';
			$isi['no_telp'] 	= '';
		}

		$this->load->view('v_tampilan_home',$isi);
	}

	public function simpan()
	{

		$this->M_model_security->getsecurity();

		$key= $this->input->post('kode');
		$data['kode_ustadz'] = $this->input->post('kode');
		$data['nama_ustadz'] = $this->input->post('nama');
		$data['gender'] = $this->input->post('gender');
		$data['status_aktif'] = $this->input->post('status_aktif');
		$data['alamat'] = $this->input->post('alamat');
		$data['tgl_lahir'] = $this->input->post('tgl_lahir');
		$data['no_telp'] = $this->input->post('no_telp');

		$this->load->model('M_model_ustadz');
		$query = $this->M_model_ustadz->getdata($key);
		if($query->num_rows()>0)
		{
			$this->M_model_ustadz->getupdate($key,$data);
			$this->session->set_flashdata('info','Data Sukses di Update');
		}
		else
		{
			$this->M_model_ustadz->getInsert($data);
			$this->session->set_flashdata('info','Data Sukses di Simpan');
		}
		redirect('ustadz');
	}
	public function delete()
	{
		$this->M_model_security->getsecurity();
		$this->load->model('M_model_ustadz');
		$key=$this->uri->segment(3);
		$this->db->where('kode_ustadz',$key);
		$query=$this->db->get('tb_ustadz');
		if($query->num_rows()>0)
		{
			$this->M_model_ustadz->getdelete($key);
		}
		redirect('ustadz');
	}
}
