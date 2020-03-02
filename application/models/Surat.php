<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 5/28/2019
 * Time: 3:20 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat extends CI_Model
{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	} 

	public function buat_surat($data){
		$this->db->insert('sism_surat', $data);
		return $this->db->affected_rows();
	}

	public function  tampil_surat(){
		$this->db->from('sism_surat');
		$this->db->order_by('surat_date_created', 'DESC');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function lihat_surat($id){
		$this->db->from('sism_surat');
		$this->db->where('surat_id', $id);
		$query = $this->db->get();
		return $query->row_array();
	}
	public function hapus_surat($where) {
		$this->db->where($where);
		$this->db->delete('sism_surat');
	}

	public function edit_surat($where) {
		return $this->db->get_where('sism_surat',$where);
	}
	public function update_surat($where,$data){
		$this->db->where($where);
		$this->db->update('sism_surat',$data);
	}

	public function total_surat(){
		$this->db->from('sism_surat');
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function total_surat_setuju(){
		$this->db->from('sism_surat');
		$this->db->where('surat_disposisi','Jawab');
		$query = $this->db->get();
		return $query->num_rows();
	}
	public function total_surat_tolak(){
		$this->db->from('sism_surat');
		$this->db->where('surat_disposisi','Tolak');
		$query = $this->db->get();
		return $query->num_rows();
	}

}
