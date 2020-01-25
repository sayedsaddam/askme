<?php defined('BASEPATH') OR exit('No direct script access allowed!');
/**
 * Filename: Questions_model.php
 * Filepath: models/Questions_model.php
 * Author: Saddam
 */
class Name extends ExtendsName
{
    /**
     * All the queries for the questions will be written here in this model file.
     */
    public function __construct()
    {
        parent::__construct();
    }
    // Read questions from database.
    public function read_questions($limit, $offset){
    	$this->db->select('id, question');
    	$this->db->from('questions');
    	$this->db->limit($limit, $offset);
    	return $this->db->get()->result();
    }
    // Insert new question into the database.
    public function create_questions($data){
    	$this->db->insert('questions', $data);
    	if($this->db->cubrid_affected_rows() > 0){
    		return true;
    	}else{
    		return false;
    	}
    }
}

?>