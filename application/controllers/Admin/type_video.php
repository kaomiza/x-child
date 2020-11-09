<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Type_video extends CI_Controller
{
    public function index()
    {
        $data = [
            'title' => 'จัดการประเภทวิดีโอความรู้',
            'admin_content' => $this->load->view('admin/type_video',NULL,TRUE)
        ];
        $this->load->view('index_admin', $data);
    }
}