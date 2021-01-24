<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Video extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('U_id')) {
            $this->session->set_flashdata('error-login', 'กรุณา login ก่อนเพื่อใช้งาน');
            redirect('login');
        } else {
            $this->load->model('VideoModel');
            $this->load->model('TypeVideoModel');
        }
    }

    public function index()
    {
        $data = [
            'title' => 'video | X-Child',
            'main_content' => $this->load->view('page/video', NULL, TRUE)
        ];
        $this->load->view('index', $data);
    }

    public function loadTypeVideo()
    {
        if ($this->input->server('REQUEST_METHOD') == 'GET') {
            header('Content-Type: application/json');
            $result = [
                'data' => $this->TypeVideoModel->listSelect()
            ];
            echo json_encode($result);
        } else {
            show_error('Allow Form GET', 405);
        }
    }

    public function getAll()
    {
        if ($this->input->server('REQUEST_METHOD') == 'GET') {
            header('Content-Type: application/json');
            $result = [
                'data' => $this->VideoModel->findAll()
            ];
            echo json_encode($result);
        } else {
            show_error('Allow Form GET', 405);
        }
    }

    public function getById($id)
    {
        if ($this->input->server('REQUEST_METHOD') == 'GET') {
            header('Content-Type: application/json');
            echo json_encode($this->VideoModel->findById($id));
        } else {
            show_error('Allow Form GET', 405);
        }
    }

    public function search()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            header('Content-Type: application/json');
            $input = $this->input->post();
            $result = [
                'data' => $this->VideoModel->search($input['type'])
            ];
            echo json_encode($result);
        } else {
            show_error('Allow Form POST', 405);
        }
    }

    public function getLoad($start, $end)
    {
        if ($this->input->server('REQUEST_METHOD') == 'GET') {
            header('Content-Type: application/json');
            $result = [
                'data' => $this->VideoModel->loadMore($start, $end)
            ];
            echo json_encode($result);
        } else {
            show_error('Allow Form GET', 405);
        }
    }

    public function getList($type)
    {
        if ($this->input->server('REQUEST_METHOD') == 'GET') {
            header('Content-Type: application/json');
            $result = [
                'data' => $this->VideoModel->concernVideo($type)
            ];
            echo json_encode($result);
        } else {
            show_error('Allow Form GET', 405);
        }
    }
}
