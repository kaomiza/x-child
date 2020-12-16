<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home_admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('SumResultModel');
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'admin_content' => $this->load->view('admin/dashboard', NULL, TRUE)
        ];
        $this->load->view('index_admin', $data);
    }

    public function countAll()
    {
        if ($this->input->server('REQUEST_METHOD') == 'GET') {
            header('Content-Type: application/json');
            echo json_encode($this->SumResultModel->getAll());
        } else {
            show_error('Allow Form GET', 405);
        }
    }
}
