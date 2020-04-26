<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->m_peminjaman->cek_keterlambatan();
		$this->m_riwayat_inaktif->status_check();
		$this->m_riwayat_retensi->status_check();
		$this->load->view('login');
	}
}
