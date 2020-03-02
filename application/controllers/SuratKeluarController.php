<?php


class SuratKeluarController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('SuratKeluar');
		if ($this->session->has_userdata('session_id') == null) {
			redirect('login');
		}

	}
	public function index(){
		$data['surat'] = $this->SuratKeluar->tampil_surat();

		$this->load->view('templates/header');
		$this->load->view('surat_keluar/index',$data);
		$this->load->view('templates/footer');
	}
	public function create($id){
		if (isset($_POST['simpan'])){
			$config['upload_path'] = './assets/upload/upload_suratkeluar/';
			$config['allowed_types'] ='doc|docx';
			$config['max_size']=9000;

			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if(!$this->upload->do_upload('upload')){
				$error = array('error' =>$this->upload->display_errors());

				$this->session->set_flashdata('alert','gagal_upload_dokumen');
				redirect('surat_keluar');
				//var_dump($error);
			} else {
				$jenis = $this->input->post('jenis_surat');
				$documen = $this->upload->data('file_name');
				$nomor_surat = $this->input->post('nomor_surat');
				$tanggal_surat = $this->input->post('tanggal_surat');
				$pembuat_surat = $this->session->userdata('session_level');
				$alamat_tujuan = $this->input->post('alamat_tujuan');
				$kode_pos = $this->input->post('kode_pos');
				$tipe_pengiriman = $this->input->post('tipe_pengiriman');
				$keterangan = "-";
				$data = array(
					'jenis_surat' => $jenis,
					'keluar_nomor' => $nomor_surat,
					'keluar_tanggal' => $tanggal_surat,
					'keluar_upload' =>  $documen,
					'keluar_surat_id' => $id,
					'keluar_pembuat_surat' =>$pembuat_surat,
					'keluar_alamat' =>$alamat_tujuan,
					'keluar_pos' =>$kode_pos,
					'keluar_pengiriman' =>$tipe_pengiriman,
					'keluar_keterangan' =>$keterangan
				);
				$simpan = $this->SuratKeluar->buat_surat($data);
				if ($simpan>0) {
					$this->session->set_flashdata('alert','berhasil_buat_surat');
					redirect('surat_keluar');
				}
				else{
					$this->session->set_flashdata('alert','gagal_upload_surat');
					redirect('surat_keluar');
				}
			}

		}
		$data['id'] = $id;

		$this->load->view('templates/header');
		$this->load->view('surat_keluar/create', $data);
		$this->load->view('templates/footer');
	}
	public function setujui_surat($id){
		$data_disposisi = array(
			'keluar_status' => 'Setuju'
		);

		$where = array(
			'keluar_id' => $id
		);
		$this->SuratKeluar->update_surat($where, $data_disposisi);
		$this->session->set_flashdata('alert','berhasil_setujui_surat');
		redirect('surat_keluar');
	}
	public function tolak_surat(){
		$id = $this->input->post('id');
		$data_disposisi = array(
			"keluar_keterangan"=>$this->input->post('keterangan'),
			'keluar_status' => 'Tolak'
		);
		$where = array(
			'keluar_id' => $id
		);
		$this->SuratKeluar->update_surat($where, $data_disposisi);
		$this->session->set_flashdata('alert','berhasil_menolak_surat');
		redirect('surat_keluar');
	}
//	public function jsonSurat(){
//		$id = $this->input->post('surat_id');
//
//		$simpan = $this->SuratKeluar->buat_surat($data);
//	}
	public function hapus($id){
		$where = array('keluar_id' => $id);
		$this->SuratKeluar->hapus_surat($where, 'surat_keluar');
		$this->session->set_flashdata('alert','berhasil_menghapus_surat');
		redirect('surat_keluar');
	}
	public function lihat($id)
	{
		if (isset($_POST['lihat'])) {
			$nomor_surat = $this->input->post('nomor_surat');
			if($this->Surat_Keluar->cari_surat($nomor_surat)!=null){

				$data['tracking'] = $this->SuratKeluar->cari_surat($id);

				$this->load->view('templates/header');
				$this->load->view('tracking/timeline',$data);
				$this->load->view('templates/footer');
			}else{
				$this->session->set_flashdata('alert','nomor_surat_tidak_ditemukan');
				redirect('tracking');
			}
		}
	}
	public function cetak_surat($id){
		$data_disposisi = array(
			'keluar_status' => 'Cetak'
		);

		$where = array(
			'keluar_id' => $id
		);
		$this->SuratKeluar->update_surat($where, $data_disposisi);
//		$this->session->set_flashdata('alert','berhasil_cetak_surat');
		redirect('surat_keluar');
	}

}
