<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Children extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ChildrenModel');
    }

    public function index()
    {
        $data = [
            'title' => 'จัดการเด็กพิเศษ - Admin X-Child',
            'admin_content' => $this->load->view('admin/children', NULL, TRUE)
        ];
        $this->load->view('index_admin', $data);
    }

    public function getAll()
    {
        if ($this->input->server('REQUEST_METHOD') == 'GET') {
            header('Content-Type: application/json');
            echo json_encode($this->ChildrenModel->findAll());
        } else {
            show_error('Allow Form GET', 405);
        }
    }

    public function getById($id)
    {
        if ($this->input->server('REQUEST_METHOD') == 'GET') {
            header('Content-Type: application/json');
            $result = $this->ChildrenModel->findById($id);
            echo json_encode($result);
        } else {
            show_error('Allow Form GET', 405);
        }
    }

    public function create()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            header('Content-Type: application/json');
            $data = $this->input->post();
            $result = $this->ChildrenModel->create($data);
            echo json_encode($result);
        } else {
            show_error('Allow Form POST', 405);
        }
    }

    public function update($id)
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            header('Content-Type: application/json');
            $data = $this->input->post();
            $result = $this->ChildrenModel->edit($id, $data);
            echo json_encode($result);
        } else {
            show_error('Allow Form POST', 405);
        }
    }
}
