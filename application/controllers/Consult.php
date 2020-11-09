<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consult extends CI_Controller
{
    public function index()
    {
        $data = [
            'title' => 'ปรึกษาผู้เชี่ยวชาญ | X-Child',
            'main_content' => $this->load->view('page/consult',NULL,TRUE)
        ];
        $this->load->view('index', $data);
    }
}
