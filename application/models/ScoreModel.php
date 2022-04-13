<?php

class ScoreModel extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  function addScore($data){
	  $this->db->insert('t_scores', $data);
  }

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
