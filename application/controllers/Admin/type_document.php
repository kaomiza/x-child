<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Type_document extends CI_Controller
{
    public function index()
    {
        $data = [
            'title' => 'จัดการประเภทเอกสารความรู้',
            'admin_content' => $this->load->view('admin/type_document',NULL,TRUE)
        ];
        $this->load->view('index_admin', $data);
    }
}
