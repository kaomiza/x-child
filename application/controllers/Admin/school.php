<?php
defined('BASEPATH') or exit('No direct script access allowed');
class School extends CI_Controller
{
    public function index()
    {
        $data = [
            'title' => 'จัดการโรงเรียนสำหรับเด็กพิเศษ',
            'admin_content' => $this->load->view('admin/school',NULL,TRUE)
        ];
        $this->load->view('index_admin', $data);
    }
}
