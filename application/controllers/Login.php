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
        unset($_SESSION['v_user']);
        unset($_SESSION['error']);
        unset($_SESSION['is-invalid']);
        unset($_SESSION['is-invalid username']);
        unset($_SESSION['error user']);
        unset($_SESSION['is-invalid password']);
        unset($_SESSION['error pass']);
    }


    public function haveUser()
    {
        header('Content-Type: application/json');
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $data = $this->input->post();
            $username = $data['username'];
            $output = [
                "hasUser" => true
            ];
            if ($this->AuthModel->haveUserAdmin($username)) {
                $output = [
                    "hasUser" => false
                ];
            }
            if ($this->AuthModel->haveUserExpert($username)) {
                $output = [
                    "hasUser" => false
                ];
            }
            if ($this->AuthModel->haveUserParent($username)) {
                $output = [
                    "hasUser" => false
                ];
            }
            echo json_encode($output);
        } else {
            show_error('Allow Form POST', 405);
        }
    }

    /* 
        U_admin - status
        0 - parent
        1 - expert
        3 - admin
    */
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
                // Admin
                if ($this->AuthModel->haveUserAdmin($username)) {
                    if ($this->AuthModel->verifypasswordAdmin($username, $passhash)) {
                        $result = $this->AuthModel->getAdmin($username);
                        $session_data = array(
                            'U_id' => $result->id_admin,
                            'U_user' => $result->admin_user,
                            'U_pass' => $result->admin_pass,
                            'U_fname' => $result->admin_user,
                            'U_lname' => '',
                            'U_status' => $result->admin_status,
                            'U_img' => 'upload/images/admin.png',
                            'U_admin' => 2,
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
                // Expert
                if ($this->AuthModel->haveUserExpert($username)) {
                    if ($this->AuthModel->verifypasswordExpert($username, $passhash)) {
                        $result = $this->AuthModel->getExpert($username);
                        $session_data = array(
                            'U_id' => $result->e_id,
                            'U_user' => $result->e_user,
                            'U_pass' => $result->e_pass,
                            'U_fname' => $result->e_fnameEN,
                            'U_lname' => $result->e_lnameEN,
                            'U_status' => $result->e_status,
                            'U_img' => $result->e_img,
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
                // Parent
                if ($this->AuthModel->haveUserParent($username)) {
                    if ($this->AuthModel->verifypasswordParent($username, $passhash)) {
                        $result = $this->AuthModel->getParent($username);
                        $session_data = array(
                            'U_id' => $result->pa_id,
                            'U_user' => $result->pa_user,
                            'U_pass' => $result->pa_pass,
                            'U_fname' => $result->pa_fnameEN,
                            'U_lname' => $result->pa_lnameEN,
                            'U_status' => $result->pa_status,
                            'U_img' => $result->pa_img,
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

                $this->session->set_flashdata('v_user', $username);
                $this->session->set_flashdata('error', 'Invalid Username and Password');
                $this->session->set_flashdata('is-invalid', 'is-invalid');
                redirect($_SERVER['HTTP_REFERER']);
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
