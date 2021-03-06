<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Game extends CI_Controller {

	function __construct()
	{
		// Construct the parent class
		parent::__construct();

		$this->load->database();
		$this->load->model("scoreModel");
		date_default_timezone_set('Europe/Paris');
	}

	/**
	 * Cette fonction a pour objectif d'ajouter un pseudo et lancer le jeu
	 *
	 * @author          Yassine Zitouni
	 */
	public function index()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		$this->form_validation->set_rules('pseudo', 'pseudo', 'required');

		$data = array('pseudo' => $this->input->post("pseudo"));


		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('menu');
		}
		else
		{
			$this->load->view('game', $data);
		}
	}

	/**
	 * Cette fonction a pour objectif d'ajouter un score
	 *
	 * @author          Yassine Zitouni
	 */
	public function addScore()
	{
		$tableSetup = array(
			'Pseudo' => $this->input->post("pseudo"),
			'Score' => $this->input->post("score"),
			'Date' => Date('Y-m-d h:i:s'));

		$this->scoreModel->addScore($tableSetup);

		echo($this->input->post("score"));
	}

	/**
	 * Cette fonction a pour objectif de récupérer les scores
	 *
	 * @author          Yassine Zitouni
	 */
	public function getScore()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		$scores = $this->scoreModel->getScores();
		$data = array('scores' => $this->scoreModel->getScores());
		$this->load->view('score', $data);
	}
}
