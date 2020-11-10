<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Parents extends CI_Controller
{
    public function index()
    {
        $data = [
            'title' => 'จัดการผู้ปกครอง',
            'admin_content' => $this->load->view('admin/parents',NULL,TRUE)
        ];
        $this->load->view('index_admin', $data);
    }
}