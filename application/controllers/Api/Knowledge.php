<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Knowledge extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('KnowledgeModel');
        header('Content-Type: application/json');
    }
    
    public function index($id = null)
    {
        echo json_encode($this->KnowledgeModel->getLimit($id));
    }
}
