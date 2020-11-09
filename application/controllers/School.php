<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class School extends CI_Controller
{
    public function index()
    {
        $data = [
            'title' => 'ค้นหาโรงเรียน | X-Child',
            'main_content' => $this->load->view('page/school',NULL,TRUE)
        ];
        $this->load->view('index', $data);
    }
}
