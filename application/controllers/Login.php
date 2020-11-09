<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    protected $salt = 'IntL@a';
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AuthModel');
    }
    public function index()
    {
        $data = [
            'title' => 'login | X-Child',
            'main_content' => $this->load->view('page/login', NULL, TRUE)
        ];
        $this->load->view('index', $data);
    }

    public function Auth()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|trim');
        $data = $this->input->post();
        $username = $data['username'];
        $password = $data['password'];
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            if ($this->form_validation->run()) {
                $passhash = hash('sha256', $this->salt . $password);
                if ($this->AuthModel->haveUserExpert($username)) {
                    if ($this->AuthModel->verifypasswordExpert($username, $passhash)) {
                        $result = $this->AuthModel->getExpert($username);
                        $session_data = array(
                            'U_id' => $result->e_id,
                            'U_user' => $result->e_user,
                            'U_pass' => $result->e_pass,
                            'U_name' => $result->e_fnameEN . " " . $result->e_lnameEN,
                            'U_status' => $result->e_status,
                            'U_admin' => 1,
                        );
                        $this->session->set_userdata($session_data);
                        redirect('');
                    } else {
                        $this->session->set_flashdata('v_user', $username);
                        $this->session->set_flashdata('error', 'Invalid Username and Password');
                        $this->session->set_flashdata('is-invalid', 'is-invalid');
                        redirect($_SERVER['HTTP_REFERER']);
                    }
                }
                if ($this->AuthModel->haveUserParent($username)) {
                    if ($this->AuthModel->verifypasswordParent($username, $passhash)) {
                        $result = $this->AuthModel->getParent($username);
                        $session_data = array(
                            'U_id' => $result->pa_id,
                            'U_user' => $result->pa_user,
                            'U_pass' => $result->pa_pass,
                            'U_name' => $result->pa_fnameEN . " " . $result->pa_lnameEN,
                            'U_status' => $result->pa_status,
                            'U_admin' => 0,
                        );
                        $this->session->set_userdata($session_data);
                        redirect('');
                    } else {
                        $this->session->set_flashdata('v_user', $username);
                        $this->session->set_flashdata('error', 'Invalid Username and Password');
                        $this->session->set_flashdata('is-invalid', 'is-invalid');
                        redirect($_SERVER['HTTP_REFERER']);
                    }
                }
            } else {
                $this->session->set_flashdata('v_user', $username);
                if (form_error('username')) {
                    $this->session->set_flashdata('is-invalid username', 'is-invalid');
                    $this->session->set_flashdata('error user', form_error('username'));
                }
                if (form_error('password')) {
                    $this->session->set_flashdata('is-invalid password', 'is-invalid');
                    $this->session->set_flashdata('error pass', form_error('password'));
                }
                redirect($_SERVER['HTTP_REFERER']);
            }
        } else {
            show_error('Allow Form POST', 405);
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('');
    }
}
