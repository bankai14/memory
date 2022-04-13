<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		// Construct the parent class
		parent::__construct();

		$this->load->database();
		$this->load->model("scoreModel");
		date_default_timezone_set('Europe/Paris');
	}

	public function index()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$scores = $this->scoreModel->getScores();
		$data = array('scores' => $this->scoreModel->getScores());
		$this->load->view('menu', $data);
	}
}
