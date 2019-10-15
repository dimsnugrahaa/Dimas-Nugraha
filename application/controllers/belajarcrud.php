<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belajarcrud extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['mahasiswa']=$this->m_login->
		tampil_data()->result();
		$this->load->view('v_masuk', $data);
	}

	public function input()
{
	$this->load->view('input_pegawai');
}
public function simpan()
{
	$data = array('nama' => $this->input->post('nama'), 'alamat' => $this->input->post('alamat'), 'nim' => $this->input->post('nim'), 'fakultas' => $this->input->post('fakultas'), 'jk' => $this->input->post('jk'));
	$proses = $this->m_login->simpan($data);
	if (!$proses) {
		header('Location: Belajarcrud');
	} else {
		echo "Data Gagal Disimpan";
		echo "<br>";
		echo "<a href='".base_url('index.php/Belajarcrud/input/')."'>Kembali ke form</a>";
	};
	}


	public function tambah_aksi(){
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$fakultas = $this->input->post('fakultas');
		$jk = $this->input->post('jk');
			

		$data = array(
			'nim' => $nim,
			'nama' => $nama,
			'alamat' => $alamat,
			'fakultas'=>$fakultas,
			'jk'=>$jk
		);

		$this->m_login->input_data($data,'mahasiswa');
		redirect('masuk');
	}

	public function edit($nim){
		$where = array('nim' => $nim);
		$data['pegawai'] = $this->m_login->edit_data($where,'mahasiswa')->result();
		$this->load->view('v_edit',$data);
	}

	public function update(){
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$fakultas = $this->input->post('fakultas');
		$jk = $this->input->post('jk');
	
		
		$data = array(
			'nim' => $nim,
			'nama' => $nama,
			'alamat' => $alamat,
			'fakultas'=>$fakultas,
			'jk'=>$jk,
		
		);

		

		$where = array(
			'nim' => $nim
		);

		$this->m_login->update_data($where,$data,'mahasiswa');
		redirect('belajarcrud');
	}
	
	public function hapus($nim){
		$where = array('nim' => $nim);
		$this->m_login->hapus_data($where,'mahasiswa');
		redirect('belajarcrud');
	}
}
