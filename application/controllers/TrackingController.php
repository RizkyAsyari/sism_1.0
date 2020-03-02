<?php


class TrackingController extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('SuratKeluar');
		if ($this->session->has_userdata('session_id') == null) {
			redirect('login');
		}
	}
	public function index(){
		$data['tracking'] = $this->SuratKeluar->tampil_surat();

		$this->load->view('templates/header');
		$this->load->view('tracking/index',$data);
		$this->load->view('templates/footer');
	}
	public function timeline(){
		$data['tracking'] = $this->SuratKeluar->tampil_surat();

		$this->load->view('templates/header');
		$this->load->view('tracking/timeline',$data);
		$this->load->view('templates/footer');
	}
	public function lihat()
	{
		if (isset($_POST['lihat'])) {
			$nomor_surat = $this->input->post('nomor_surat');
			if($this->SuratKeluar->cari_surat($nomor_surat)!=null){

				$data['tracking'] = $this->SuratKeluar->cari_surat($nomor_surat);

				$this->load->view('templates/header');
				$this->load->view('tracking/timeline',$data);
				$this->load->view('templates/footer');
			}else{
				$this->session->set_flashdata('alert','nomor_surat_tidak_ditemukan');
				redirect('tracking');
			}
		}
	}
	public function tracking($id){
		$data['surat_keluar'] = $this->SuratKeluar->tampil_surat();
	}
}
