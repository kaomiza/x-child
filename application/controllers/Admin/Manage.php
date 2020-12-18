<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Manage extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function index()
    {
        $data = [
            'title' => 'Manage - X-Child',
            'admin_content' => $this->load->view('admin/manage', NULL, TRUE)
        ];
        $this->load->view('index_admin', $data);
    }
}
