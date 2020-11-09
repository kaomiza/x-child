<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Diseased extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('DiseasedModel');
    }

    public function index()
    {
        $data = [
            'title' => 'จัดการโรคประจำตัว | Admin X-Child',
            'admin_content' => $this->load->view('admin/diseased', NULL, TRUE)
        ];
        $this->load->view('index_admin', $data);
    }

    public function getAll()
    {
        if ($this->input->server('REQUEST_METHOD') == 'GET') {
            header('Content-Type: application/json');
            $data = [
                'data' => $this->DiseasedModel->findAll()
            ];
            echo json_encode($data);
        } else {
            show_error('Allow Form GET', 405);
        }
    }

    public function getById($id)
    {
        if ($this->input->server('REQUEST_METHOD') == 'GET') {
            header('Content-Type: application/json');
            $result = $this->DiseasedModel->findById($id);
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
            $result = $this->DiseasedModel->create($data);
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
            $result = $this->DiseasedModel->edit($id, $data);
            echo json_encode($result);
        } else {
            show_error('Allow Form POST', 405);
        }
    }
}