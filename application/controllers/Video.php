<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Video extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = [
            'title' => 'video | X-Child',
            'main_content' => $this->load->view('page/video', NULL, TRUE)
        ];
        $this->load->view('index', $data);
    }
}

/* End of file Controllername.php */
