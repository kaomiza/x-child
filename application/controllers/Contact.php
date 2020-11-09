<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'ติดต่อ | X-Child',
            'main_content' => $this->load->view('page/contact', NULL, TRUE)
        ];
        $this->load->view('index', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'เกี่ยวกับเรา | X-Child',
            'main_content' => $this->load->view('page/about', NULL, TRUE)
        ];
        $this->load->view('index', $data);
    }
}
