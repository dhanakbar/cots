<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Makanan extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		// Desak
	}
	public function index()
	{
		$this->load->view('Makanan');
	}
}
