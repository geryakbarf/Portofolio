<?php
defined('BASEPATH') or exit('No Access Allowed!');

class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('i_data');
	}

	public function index()
	{
		$data['judul'] = 'Gery - Home';
		$data['project'] = $this->i_data->getProject()->result();
		$data['identitas'] = $this->i_data->getIdentitas()->result();
		$this->load->helper('html', 'url');
		$this->load->view('home', $data);
	}
}
