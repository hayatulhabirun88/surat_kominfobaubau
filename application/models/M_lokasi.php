<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_unit extends CI_Model {

	function __construct()
	{
		parent:: __construct();
	}

	public function create($id,$nama)
	{
		return $this->db->insert(
			'lokasi',
			array('id_lokasi' => $id, 'nama' => $nama)
		);
	}

	public function get_all()
	{
		return $this->db->get('lokasi')->result();
	}

	public function get_id($id)
	{
		$this->db->where('id_lokasi',$id);
		return $this->db->get('lokasi')->result();
	}

	public function update($id, $nama)
	{
		$this->db->where('id_lokasi',$id);
		return $this->db->update(
			'lokasi', 
			array('nama' => $nama)
		);
	}

	public function delete($id)
	{
		$this->db->where('id_lokasi',$id);
		return $this->db->delete('lokasi');
	}

}
