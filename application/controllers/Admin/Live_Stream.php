<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Live_Stream extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('LiveStreamModel');
    }

    public function index()
    {
        $data = [
            'title' => 'จัดการการถ่ายทอดสด',
            'admin_content' => $this->load->view('admin/live_stream', NULL, TRUE)
        ];
        $this->load->view('index_admin', $data);
    }

    public function getAll()
    {
        if ($this->input->server('REQUEST_METHOD') == 'GET') {
            header('Content-Type: application/json');
            $result = [
                'data' => $this->LiveStreamModel->findAll()
            ];
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
            $result = [
                'insert_id' => $this->LiveStreamModel->create($data)
            ];
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
            $result = $this->LiveStreamModel->update($id, $data);
            echo json_encode($result);
        } else {
            show_error('Allow Form POST', 405);
        }
    }

    public function getById($id)
    {
        if ($this->input->server('REQUEST_METHOD') == 'GET') {
            header('Content-Type: application/json');
            $result = $this->LiveStreamModel->findById($id);
            echo json_encode($result);
        } else {
            show_error('Allow Form GET', 405);
        }
    }

    public function Delete($id)
    {
        if ($this->input->server('REQUEST_METHOD') == 'GET') {
            header('Content-Type: application/json');
            $result = $this->LiveStreamModel->delete($id);
            echo json_encode($result);
        } else {
            show_error('Allow Form GET', 405);
        }
    }
}
