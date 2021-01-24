<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Live extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('U_id')) {
            $this->session->set_flashdata('error-login', 'กรุณา login ก่อนเพื่อใช้งาน');
            redirect('login');
        } else {
            $this->load->model('LiveStreamModel');
        }
    }

    public function index()
    {
        $data = [
            'title' => 'live | X-Child',
            'main_content' => $this->load->view('page/live', NULL, TRUE)
        ];
        $this->load->view('index', $data);
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
}
