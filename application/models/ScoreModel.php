<?php

class ScoreModel extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

	/**
	 * Cette fonction a pour objectif d'ajouter un score dans la BDD
	 *
	 * @author          Yassine Zitouni
	 */
  function addScore($data){
	  $this->db->insert('t_scores', $data);
  }

	/**
	 * Cette fonction a pour objectif de récupérer les scores
	 *
	 * @author          Yassine Zitouni
	 */
  function getScores(){
        $sql = $this->db->select(array('Pseudo', 'Score', 'Date'))
			->order_by('Score', 'DESC')
			->get_compiled_select('t_scores', FALSE);

        $data = $this->db->get()->result_array();
        if (isset($data)){
            return $data;
        }
        else{
            return false;
        }
    }

}
?>
