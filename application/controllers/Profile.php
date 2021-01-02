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

        $this->load->model('AdminModel');
        $this->load->model('ExpertModel');
        $this->load->model('ParentModel');
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
            $user_type = $this->input->get('userType', TRUE);
            $user_id = $this->input->get('userId', TRUE);
            if ($user_type == 0) {
                echo json_encode($this->ParentModel->findById($user_id));
            } else if ($user_type == 1) {
                echo json_encode($this->ExpertModel->findById($user_id));
            } else if ($user_type == 2) {
                echo json_encode($this->AdminModel->findById($user_id));
            } else {
                echo json_encode(["error" => 'Not Allow UserType']);
            }
        } else {
            show_error('Allow Form GET', 405);
        }
    }

    public function create()
    {
        if ($this->input->server('REQUEST_METOHD') == 'GET') {
            header('Content-Type: application/json');
            $input = $this->input->post();
        }
    }
}
