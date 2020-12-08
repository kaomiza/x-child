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

    public function getAll()
    {
        if ($this->input->server('REQUEST_METHOD') == 'GET') {
            header('Content-Type: application/json');
            $output = [
                'data' => $this->ParentModel->findAll()
            ];
            echo json_encode($output);
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
                'insert_id' => $this->ParentModel->create($data)
            ];
            echo json_encode($result);
        } else {
            show_error('Allow Form POST', 405);
        }
    }

    public function storeImage()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            header('Content-Type: application/json');
            $config['upload_path'] = './upload/images/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 2000000;
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file')) {
                $error = array('error' => $this->upload->display_errors());
                echo json_encode($error);
            } else {
                $data = array('image_metadata' => $this->upload->data());
                echo json_encode($data);
            }
        } else {
            show_error('Allow Form POST', 405);
        }
    }

    public function getById($id)
    {
        if ($this->input->server('REQUEST_METHOD') == 'GET') {
            header('Content-Type: application/json');
            $result = $this->ParentModel->findById($id);
            echo json_encode($result);
        } else {
            show_error('Allow Form GET', 405);
        }
    }

    public function update($id)
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            header('Content-Type: application/json');
            $data = $this->input->post();
            $result = $this->ParentModel->update($id, $data);
            echo json_encode($result);
        } else {
            show_error('Allow Form POST', 405);
        }
    }
}
