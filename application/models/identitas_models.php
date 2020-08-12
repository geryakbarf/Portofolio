<?php
defined('BASEPATH') or exit ("No Access Allowed!");

class Identitas_models extends CI_Model
{

	public function getIdentitas()
	{
		return $this->db->get('identitas', 1);
	}

	public function getProject()
	{
		return $this->db->get('project', 3);
	}

	public function getAllProject()
	{
		return $this->db->get('project');
	}

	public function getRiwayatKerja()
	{
		return $this->db->query("SELECT * FROM riwayat WHERE tipe = 'Perusahaan'");
	}

	public function getRiwayatSekolah()
	{
		return $this->db->query("SELECT * FROM riwayat WHERE tipe = 'Sekolah'");
	}

	public function getKemampuan()
	{
		return $this->db->get('kemampuan');
	}

}
