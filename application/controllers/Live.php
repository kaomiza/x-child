<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Live extends CI_Controller
{
    public function index()
    {
        $data = [
            'title' => 'live | X-Child',
            'main_content' => $this->load->view('page/live', NULL, TRUE)
        ];
        $this->load->view('index', $data);
    }
}
