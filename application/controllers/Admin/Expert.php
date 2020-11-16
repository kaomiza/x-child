<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Expert extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ExpertModel');
    }
    
    public function index()
    {
        $data = [
            'title' => 'จัดการผู้เชี่ยวชาญ',
            'admin_content' => $this->load->view('admin/expert', NULL, TRUE)
        ];
        $this->load->view('index_admin', $data);
    }

    public function getListSelect()
    {
        if ($this->input->server('REQUEST_METHOD') == 'GET') {
            header('Content-Type: application/json');
            echo json_encode($this->ExpertModel->listSelect());
        } else {
            show_error('Allow Form GET', 405);
        }
    }
}
