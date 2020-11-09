<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		$data = [
			'title' => 'X-Child | ระบบช่วยเหลือผู้ปกครองสำหรับเด็กพิเศษ',
			'main_content' => $this->load->view('page/home', NULL, TRUE)
		];
		$this->load->view('index', $data);
	}
}
