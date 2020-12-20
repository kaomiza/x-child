<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home_admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        
        if ($this->session->userdata('U_admin') == 1 || $this->session->userdata('U_admin') == 2) {
            $this->load->model('SumResultModel');
        } else {
            $this->session->set_flashdata('error-login', 'กรุณา login ก่อนเพื่อใช้งาน');
            redirect('login');
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'admin_content' => $this->load->view('admin/dashboard', NULL, TRUE)
        ];
        $this->load->view('index_admin', $data);
    }

    public function countAll()
    {
        if ($this->input->server('REQUEST_METHOD') == 'GET') {
            header('Content-Type: application/json');
            echo json_encode($this->SumResultModel->getAll());
        } else {
            show_error('Allow Form GET', 405);
        }
    }
}
