<?php
defined('BASEPATH') or exit("Access not allowed!");

class Project extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('i_data');
	}

	function index()
	{
		$data['judul'] = 'Gery - Project';
		$data['project'] = $this->i_data->getAllProject()->result();
		$this->load->view('project', $data);
	}

}
