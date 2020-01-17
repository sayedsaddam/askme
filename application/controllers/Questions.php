<?php defined('BASEPATH') OR exit('No direct script access allowed!');
/**
 * Author: Saddam
 */
class Questions extends CI_Controller
{
    /**
     * Responsible for all the questions CRUD.
     */
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
    	$data['title'] = 'Questions';
    	$data['body'] = 'questions';
    	$this->load->view('components/template', $data);
    }
}


?>