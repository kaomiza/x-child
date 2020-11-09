<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home_admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'admin_content' => $this->load->view('admin/dashboard', NULL, TRUE)
        ];
        $this->load->view('index_admin', $data);
    }
}
