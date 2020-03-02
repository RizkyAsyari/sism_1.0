<?php


class SuratKeluar extends CI_Model {
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function buat_surat($data){
		$this->db->insert('sism_surat_keluar', $data);
		return $this->db->affected_rows();
	}
	public function  tampil_surat(){
		$this->db->from('sism_surat_keluar');
//		$this->db->join('sism_surat','sism_surat.surat_id = sism_surat_keluar.keluar_surat_id');
		$this->db->order_by('keluar_tanggal', 'DESC');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function update_surat($where,$data){
		$this->db->where($where);
		$this->db->update('sism_surat_keluar',$data);
	}
	public function hapus_surat($where) {
		$this->db->where($where);
		return $this->db->delete('sism_surat_keluar');
	}

	public function total_surat(){
		$this->db->from('sism_surat_keluar');
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function total_surat_setuju(){
		$this->db->from('sism_surat_keluar');
		$this->db->where('keluar_status','Setuju');
		$query = $this->db->get();
		return $query->num_rows();
	}
	public function total_surat_tolak(){
		$this->db->from('sism_surat_keluar');
		$this->db->where('keluar_status','Tolak');
		$query = $this->db->get();
		return $query->num_rows();
	}
	public function getOne($id){

	}
	public function lihat_surat($id){
		$this->db->from('sism_surat_keluar');
		$this->db->where('keluar_id', $id);
		$query = $this->db->get();
		return $query->row_array();
	}
	public function cari_surat($id){
		$this->db->from('sism_surat_keluar');
		$this->db->where('keluar_nomor', $id);
		$query = $this->db->get();
		return $query->row_array();
	}

}
