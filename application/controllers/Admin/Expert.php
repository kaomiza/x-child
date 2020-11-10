<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Expert extends CI_Controller
{
    public function index()
    {
        $data = [
            'title' => 'จัดการผู้เชี่ยวชาญ',
            'admin_content' => $this->load->view('admin/expert',NULL,TRUE)
        ];
        $this->load->view('index_admin', $data);
    }
}