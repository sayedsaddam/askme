<?php defined('BASEPATH') OR exit('No direct script access allowed!');
/**
 * Filename: Answers_model.php
 * Filepath: models/Answers_model.php
 * Author: Saddam
 */
class Answers_model extends CI_Model
{
    /**
     * Responsible for all the answers related stuff.
     */
    public function __construct()
    {
        parent::__construct();
    }
    // Read Answers.
    public function read_answers(){
    	$this->db->select('id, question_id, answer');
    	$this->db->from('answers');
    	return $this->db->get()->result();
    }
    // Insert answers into the database.
    public function create_answers($data){
    	$this->db->insert('answers');
    	if($this->db->cubrid_affected_rows()> 0 )
    		return true;
    	else
    		return false;
    }
}

?>