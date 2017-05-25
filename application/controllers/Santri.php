<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Santri extends CI_Controller {
	public function __construct()
	{	
		parent::__construct();
	}

	public function index()

	{
		$this->M_model_security->getsecurity();

		$status = $this->session->userdata('status');

		if(($status == 'admin')or($status == 'ustadz')){
			$isi['content'] 		='Santri/v_tampil_datasantri';
			$isi['content_ustadz'] 	='Santri/v_tampil_datasantri';
			$isi['content_santri'] 	='Santri/v_tampil_datasantri';
		}else if ($status == 'santri'){
			$isi['content'] 		='Santri/v_tampil_tampil_datasantri';
			$isi['content_ustadz'] 	='Santri/v_tampil_tampil_datasantri';
			$isi['content_santri'] 	='Santri/v_tampil_tampil_datasantri';
		}
		$isi['judul']			=' Santri';
		$isi['sub_judul']		= 'Data Santri';
		$isi['data'] =$this->db->get('tb_santri');
		$this->load->view('v_tampilan_home',$isi);
	}

	public function tambah()
	{
		$this->M_model_security->getsecurity();
		$isi['content']		='Santri/v_form_tambahsantri';
		$isi['content_ustadz']		='Santri/v_form_tambahsantri';
		$isi['content_santri']		='Santri/v_form_tambahsantri';
		$isi['judul']		='Santri';
		$isi['sub_judul']	='Tambah Santri';
		$isi['nis'] 		= '';
		$isi['nama'] 		= '';
		$isi['gender'] 		= '';
		$isi['status_aktif']= '';
		$isi['nama_wali'] 	= '';
		$isi['alamat'] 		= '';
		$isi['tgl_masuk']	= '';
		$isi['kamar'] 		= '';
		$isi['tmp_lahir']	= '';
		$isi['tgl_lahir'] 	= '';
		$this->load->view('v_tampilan_home',$isi);
	}

	public function edit()
	{
		$this->M_model_security->getsecurity();
		$isi['content']			='Santri/v_form_editsantri';
		$isi['content_ustadz']	='Santri/v_form_editsantri';
		$isi['content_santri']	='Santri/v_form_editsantri';
		$isi['judul']			='Santri';
		$isi['sub_judul']		='Edit Santri';

		$key=$this->uri->segment(3);
		$this->db->where('NIS',$key);
		$query=$this->db->get('tb_santri');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) {
				$isi['NIS'] 		= $row->NIS;
				$isi['nama'] 		= $row->nama_santri;
				$isi['gender'] 		= $row->gender;
				$isi['status_aktif']= $row->status_aktif;
				$isi['nama_wali'] 	= $row->nama_wali;
				$isi['alamat'] 		= $row->alamat;
				$isi['tgl_masuk'] 	= $row->tgl_masuk;
				$isi['kamar'] 		= $row->kamar;
				$isi['tmp_lahir'] 	= $row->tmp_lahir;
				$isi['tgl_lahir'] 	= $row->tgl_lahir;
			}
		}else
		{
			$isi['NIS'] 		= '';
			$isi['nama'] 		= '';
			$isi['gender'] 		= '';
			$isi['status_aktif']= '';
			$isi['nama_wali'] 	= '';
			$isi['alamat'] 		= '';
			$isi['tgl_masuk']	= '';
			$isi['kamar'] 		= '';
			$isi['tmp_lahir']	= '';
			$isi['tgl_lahir'] 	= '';
		}

		$this->load->view('v_tampilan_home',$isi);
	}

	public function simpan()
	{

		$this->M_model_security->getsecurity();

		$key= $this->input->post('nis');
		$data['NIS'] = $this->input->post('nis');
		$data['nama_santri'] = $this->input->post('nama');
		$data['gender'] = $this->input->post('gender');
		$data['status_aktif'] = $this->input->post('status_aktif');
		$data['nama_wali'] = $this->input->post('nama_wali');
		$data['alamat'] = $this->input->post('alamat');
		$data['tgl_masuk'] = $this->input->post('tgl_masuk');
		$data['kamar'] = $this->input->post('kamar');
		$data['tmp_lahir'] = $this->input->post('tmp_lahir');
		$data['tgl_lahir'] = $this->input->post('tgl_lahir');
		
		$this->load->model('M_model_santri');
		$query = $this->M_model_santri->getdata($key);
		if($query->num_rows()>0)
		{
			$this->M_model_santri->getupdate($key,$data);
			$this->session->set_flashdata('info','Data Sukses di Update');
		}
		else
		{
			$this->M_model_santri->getInsert($data);
			$this->session->set_flashdata('info','Data Sukses di Simpan');
		}
		redirect('santri');
	}
	public function delete()
	{
		$this->M_model_security->getsecurity();
		$this->load->model('M_model_santri');
		$key=$this->uri->segment(3);
		$this->db->where('NIS',$key);
		$query=$this->db->get('tb_santri');
		if($query->num_rows()>0)
		{
			$this->M_model_santri->getdelete($key);
		}
		redirect('santri');
	}
}
