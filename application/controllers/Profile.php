<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('U_id')) {
            $this->session->set_flashdata('error-login', 'กรุณา login ก่อนเพื่อใช้งาน');
            redirect('login');
        } else {
            $this->load->model('AdminModel');
            $this->load->model('ExpertModel');
            $this->load->model('ParentModel');
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Profile | X-Child',
            'main_content' => $this->load->view('page/profile', NULL, TRUE)
        ];
        $this->load->view('index', $data);
        unset($_SESSION['success']);
        unset($_SESSION['error']);
    }

    public function upload_image($id, $type)
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            header('Content-Type: application/json');
            $data = $this->input->post();
            if ($type == 0) {
                $result = $this->ParentModel->update($id, $data);
                echo json_encode($result);
            }
            if ($type == 1) {
                $result = $this->ExpertModel->update($id, $data);
                echo json_encode($result);
            }
        } else {
            show_error('Allow Form GET', 405);
        }
    }

    public function getUser()
    {
        if ($this->input->server('REQUEST_METHOD') == 'GET') {
            header('Content-Type: application/json');
            $user_type = $this->input->get('userType', TRUE);
            $user_id = $this->input->get('userId', TRUE);
            if ($user_type == 0) {
                echo json_encode($this->ParentModel->findById($user_id));
            } else if ($user_type == 1) {
                echo json_encode($this->ExpertModel->findById($user_id));
            } else if ($user_type == 2) {
                echo json_encode($this->AdminModel->findById($user_id));
            } else {
                echo json_encode(["error" => 'Not Allow UserType']);
            }
        } else {
            show_error('Allow Form GET', 405);
        }
    }

    public function update($type, $id)
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $input = $this->input->post();
            $result = false;
            if ($type == 0) {
                $data = [
                    "pa_prename" => $input['prenameTH'],
                    "pa_fnameTH" => $input['fnameTH'],
                    "pa_lnameTH" => $input['lnameTH'],
                    "pa_fnameEN" => $input['fnameEN'],
                    "pa_lnameEN" => $input['lnameEN'],
                    "phone" => $input['phone'],
                    "email" => $input['email'],
                    "pa_house_no" => $input['no_house'],
                    "pa_village_no" => $input['no_village'],
                    "pa_road" => $input['road'],
                    "pa_province" => $input['province'],
                    "pa_amphur" => $input['amphur'],
                    "pa_district" => $input['district'],
                    "pa_zip" => $input['zip']
                ];
                $result = $this->ParentModel->update($id, $data);
            }
            if ($type == 1) {
                $data = [
                    "e_prename" => $input['prenameTH'],
                    "e_fnameTH" => $input['fnameTH'],
                    "e_lnameTH" => $input['lnameTH'],
                    "e_fnameEN" => $input['fnameEN'],
                    "e_lnameEN" => $input['lnameEN'],
                    "e_phone" => $input['phone'],
                    "e_email" => $input['email'],
                    "e_house_no" => $input['no_house'],
                    "e_village_no" => $input['no_village'],
                    "e_road" => $input['road'],
                    "e_province" => $input['province'],
                    "e_amphur" => $input['amphur'],
                    "e_district" => $input['district'],
                    "e_zip" => $input['zip']
                ];
                $result = $this->ExpertModel->update($id, $data);
            }
            if ($result) {
                $this->session->set_flashdata('success', 'save profile successfully');
            } else {
                $this->session->set_flashdata('error', 'error save profile');
            }
            redirect($_SERVER['HTTP_REFERER']);
        }
    }
}
