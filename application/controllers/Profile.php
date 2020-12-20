<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('U_admin')) {
            $this->session->set_flashdata('error-login', 'กรุณา login ก่อนเพื่อใช้งาน');
            redirect('login');
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Profile | X-Child',
            'main_content' => $this->load->view('page/profile', NULL, TRUE)
        ];
        $this->load->view('index', $data);
    }
}
