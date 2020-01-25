<?php defined('BASEPATH') OR exit('No direct script access allowed!');
/**
 * Filename: Answers.php
 * Filepath: controllers/Answers.php
 * Author: Saddam
 */
class Answers extends CI_Controller
{
    /**
     * Responsible for all the answers CRUD.
     */
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
    	$data['title'] = 'Answers';
    	$data['body'] = 'answers';
    	$this->load->view('components/template', $data);
    }
}

?>