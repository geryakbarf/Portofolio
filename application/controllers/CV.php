<?php
defined('BASEPATH') or exit ("Access not allowed!");

class CV extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('i_data');
	}

	public function index()
	{
		$data['judul'] = 'Gery - CV';
		$data['riwayat'] = $this->i_data->getRiwayatKerja()->result();
		$data['sekolah'] = $this->i_data->getRiwayatSekolah()->result();
		$data['kemampuan'] = $this->i_data->getKemampuan()->result();
		$this->load->helper('html', 'url');
		$this->load->view('cv', $data);
	}

}
