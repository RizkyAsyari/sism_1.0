<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class AkunController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Akun');
		if($this->session->has_userdata('session_id')==null){
			redirect('login');
		}
	}
	public function index() {
		$data['akun'] = $this->Akun->tampil_semua_user();

		$this->load->view('templates/header');
		$this->load->view('akun/index',$data);
		$this->load->view('templates/footer');
	}
	public function hapus($id){
		$where = array('user_id' => $id);
		$this->Akun>hapus_akun($where, 'akun');
		redirect('akun');
	}
	public function edit($id) {
		$where = array('user_id' => $id);
		$data['akun'] =$this->Akun->edit_akun($where)->result();
//		$this->load->view('surat/edit', $data);
//		$id=$this->uri->segment(3);
//		$data['surat'] =$this->Surat->get_one($id)->row_array();
		$this->load->view('templates/header');
		$this->load->view('akun/edit', $data);
		$this->load->view('templates/footer');
	}

	public function update($id) {
//		$where = array('surat_id' => $id);
		$username = $this->input->post('user_name');
		$password = $this->input->post('user_password');
		$data = array(
			'user_name' => $username,
			'user_password' => md5($password),
		);
		$where = array(
			'user_id' => $id
		);
		$this->Akun->update_akun($where, $data,'akun');
		redirect('akun');
	}
}
