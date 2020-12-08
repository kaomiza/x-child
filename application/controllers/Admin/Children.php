<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Children extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ChildrenModel');
        $this->load->model('ChildDiseasedModel');
        $this->load->model('DrugAllergyModel');
    }

    public function index()
    {
        $data = [
            'title' => 'จัดการเด็กพิเศษ - Admin X-Child',
            'admin_content' => $this->load->view('admin/children', NULL, TRUE)
        ];
        $this->load->view('index_admin', $data);
    }

    public function getAll()
    {
        if ($this->input->server('REQUEST_METHOD') == 'GET') {
            header('Content-Type: application/json');
            $output = [
                'data' => $this->ChildrenModel->findAll()
            ];
            echo json_encode($output);
        } else {
            show_error('Allow Form GET', 405);
        }
    }

    public function getById($id)
    {
        if ($this->input->server('REQUEST_METHOD') == 'GET') {
            header('Content-Type: application/json');
            $result = $this->ChildrenModel->findById($id);
            echo json_encode($result);
        } else {
            show_error('Allow Form GET', 405);
        }
    }


    public function DrugSelected($id)
    {
        if ($this->input->server('REQUEST_METHOD') == 'GET') {
            header('Content-Type: application/json');
            $result = $this->DrugAllergyModel->SelectedById($id);
            echo json_encode($result);
        } else {
            show_error('Allow Form GET', 405);
        }
    }

    public function DiseasedSelected($id)
    {
        if ($this->input->server('REQUEST_METHOD') == 'GET') {
            header('Content-Type: application/json');
            $result = $this->ChildDiseasedModel->SelectedById($id);
            echo json_encode($result);
        } else {
            show_error('Allow Form GET', 405);
        }
    }

    public function storeImage()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            header('Content-Type: application/json');
            $config['upload_path'] = './upload/images/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 2000000;
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file')) {
                $error = array('error' => $this->upload->display_errors());
                echo json_encode($error);
            } else {
                $data = array('image_metadata' => $this->upload->data());
                echo json_encode($data);
            }
        } else {
            show_error('Allow Form POST', 405);
        }
    }

    public function storeDrug($c_id)
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            header('Content-Type: application/json');
            $data = $this->DrugAllergyModel->findById($c_id);
            $input = $this->input->post();
            try {
                if ($data != null) {
                    $del = $this->DrugAllergyModel->delete($c_id);
                    if ($del) {
                        foreach ($input['drug'] as $item) {
                            $insert = [
                                'c_id' => $c_id,
                                'drug_id' => $item
                            ];
                            $this->DrugAllergyModel->create($insert);
                        }
                    }
                } else {
                    foreach ($input['drug'] as $item) {
                        $insert = [
                            'c_id' => $c_id,
                            'drug_id' => $item
                        ];
                        $this->DrugAllergyModel->create($insert);
                    }
                }
                echo json_encode(['status' => 'success']);
            } catch (\Throwable $th) {
                echo json_encode(['status' => $th]);
            }
        } else {
            show_error('Allow Form POST', 405);
        }
    }

    public function storeDiseased($c_id)
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            header('Content-Type: application/json');
            $data = $this->ChildDiseasedModel->findById($c_id);
            $input = $this->input->post();
            try {
                if ($data != null) {
                    $del = $this->ChildDiseasedModel->delete($c_id);
                    if ($del) {
                        foreach ($input['diseased'] as $item) {
                            $insert = [
                                'c_id' => $c_id,
                                'd_id' => $item
                            ];
                            $this->ChildDiseasedModel->create($insert);
                        }
                    }
                } else {
                    foreach ($input['diseased'] as $item) {
                        $insert = [
                            'c_id' => $c_id,
                            'd_id' => $item
                        ];
                        $this->ChildDiseasedModel->create($insert);
                    }
                }
                echo json_encode(['status' => 'success']);
            } catch (\Throwable $th) {
                echo json_encode(['status' => $th]);
            }
        } else {
            show_error('Allow Form POST', 405);
        }
    }

    public function create()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            header('Content-Type: application/json');
            $data = $this->input->post();
            $result = [
                'insert_id' => $this->ChildrenModel->create($data)
            ];
            echo json_encode($result);
        } else {
            show_error('Allow Form POST', 405);
        }
    }

    public function update($id)
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            header('Content-Type: application/json');
            $data = $this->input->post();
            $result = $this->ChildrenModel->update($id, $data);
            echo json_encode($result);
        } else {
            show_error('Allow Form POST', 405);
        }
    }
}
