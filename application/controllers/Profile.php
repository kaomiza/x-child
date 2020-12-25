<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // if (!$this->session->userdata('U_id')) {
        //     $this->session->set_flashdata('error-login', 'กรุณา login ก่อนเพื่อใช้งาน');
        //     redirect('login');
        // } else {
        //     $this->load->model('AdminModel');
        //     $this->load->model('ExpertModel');
        //     $this->load->model('ParentModel');
        // }
    }

    public function index()
    {
        $data = [
            'title' => 'Profile | X-Child',
            'main_content' => $this->load->view('page/profile', NULL, TRUE)
        ];
        $this->load->view('index', $data);
    }

    public function getUser()
    {
        if ($this->input->server('REQUEST_METHOD') == 'GET') {
            header('Content-Type: application/json');
            $user_type = $this->input->get('userType',TRUE);
            $user_id = $this->input->get('userId',TRUE);
            echo json_encode($user_type);
        } else {
            show_error('Allow Form GET', 405);
        }
    }
}
