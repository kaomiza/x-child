<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Document extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'จัดการเอกสารความรู้',
            'admin_content' => $this->load->view('admin/document', NULL, TRUE)
        ];
        $this->load->view('index_admin', $data);
    }
}
