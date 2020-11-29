<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Live_Stream extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'จัดการการถ่ายทอดสด',
            'admin_content' => $this->load->view('admin/live_stream', NULL, TRUE)
        ];
        $this->load->view('index_admin', $data);
    }
}
