<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Parents extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ParentModel');
    }

    public function index()
    {
        $data = [
            'title' => 'จัดการผู้ปกครอง',
            'admin_content' => $this->load->view('admin/parents', NULL, TRUE)
        ];
        $this->load->view('index_admin', $data);
    }

    public function getListSelect()
    {
        if ($this->input->server('REQUEST_METHOD') == 'GET') {
            header('Content-Type: application/json');
            echo json_encode($this->ParentModel->listSelect());
        } else {
            show_error('Allow Form GET', 405);
        }
    }
}
