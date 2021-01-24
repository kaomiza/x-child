<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Tale extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        // if (!$this->session->userdata('U_id')) {
        //     $this->session->set_flashdata('error-login', 'กรุณา login ก่อนเพื่อใช้งาน');
        //     redirect('login');
        // } else {
        //     $this->load->model('DocumentModel');
        // }
        $this->load->model('DocumentModel');
    }

    public function index()
    {
        $data = [
            'title' => 'Tale - X-Child',
            'main_content' => $this->load->view('page/tale', NULL, TRUE)
        ];
        $this->load->view('index', $data);
    }

    public function search()
    {
        if ($this->input->server('REQUEST_METHOD') == 'GET') {
            header('Content-Type: application/json');
            $result = [
                'data' => $this->DocumentModel->search()
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
            $result = [
                'data' => $this->DocumentModel->findById($id)
            ];
            echo json_encode($result);
        } else {
            show_error('Allow Form GET', 405);
        }
    }
}
