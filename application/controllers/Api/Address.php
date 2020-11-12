<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Address extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ProvinceModel');
        $this->load->model('DistrictModel');
        $this->load->model('AmphurModel');
        header('Content-Type: application/json');
    }

    public function province()
    {
        echo json_encode($this->ProvinceModel->findAll());
    }

    public function amphur($id_province)
    {
        echo json_encode($this->AmphurModel->findByProvince($id_province));
    }

    public function amphurById($id_amphur)
    {
        echo json_encode($this->AmphurModel->findById($id_amphur));
    }

    public function district($id_province)
    {
        echo json_encode($this->DistrictModel->findByProvince($id_province));
    }
}
