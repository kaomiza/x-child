<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Diseased extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('U_admin') == 1 || $this->session->userdata('U_admin') == 2) {
            $this->load->model('DiseasedModel');
        } else {
            $this->session->set_flashdata('error-login', 'กรุณา login ก่อนเพื่อใช้งาน');
            redirect('login');
        }
    }

    public function index()
    {
        $data = [
            'title' => 'จัดการโรคประจำตัว | Admin X-Child',
            'admin_content' => $this->load->view('admin/diseased', NULL, TRUE)
        ];
        $this->load->view('index_admin', $data);
    }

    public function getListSelect()
    {
        if ($this->input->server('REQUEST_METHOD') == 'GET') {
            header('Content-Type: application/json');
            $data = [
                'data' => $this->DiseasedModel->listSelect()
            ];
            echo json_encode($data);
        } else {
            show_error('Allow Form GET', 405);
        }
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
