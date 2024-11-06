<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manage_product extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		echo "Database";
	}

	public function getProducts()
	{
		$data['query'] = $this->pm->getAllv2();
		$this->load->view('show_product', $data);
	}

	public function viewProducts($cd = 'C2499')
	{
		$data['query'] = $this->pm->getByCodev2($cd);
		$this->load->view('show_product', $data);
	}

	public function deleteProducts($cd)
	{
		$this->pm->removeByCode($cd);
		$this->getProducts();
	}
}
