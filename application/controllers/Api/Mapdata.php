<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapdata extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('SchoolModel');
        header('Content-Type: application/json');
    }
    
    public function index()
    {
        $data = $this->SchoolModel->get();
        echo json_encode($data);
    }
}
