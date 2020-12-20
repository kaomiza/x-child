<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HashPassword extends CI_Controller
{
    protected $salt = 'IntL@a';
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('U_admin') == 1 || $this->session->userdata('U_admin') == 2) {
            header('Content-Type: application/json');
        } else {
             show_error('401 (Unauthorized)', 401);
        }
    }

    public function hashpass()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $input = $this->input->post();
            $passhash = hash('sha256', $this->salt . $input['password']);
            $output = [
                "hasdata" => $passhash
            ];
            echo json_encode($output);
        } else {
            show_error('Allow Form POST', 405);
        }
    }
}
