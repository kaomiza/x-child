<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Children extends CI_Controller
{
    public function index()
    {
        $data = [
            'title' => 'จัดการเด็กพิเศษ',
            'admin_content' => $this->load->view('admin/children',NULL,TRUE)
        ];
        $this->load->view('index_admin', $data);
    }
}