<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
    
    public function index()
    {
        
        $data = [
            'title' => 'จัดการข่าวประชาสัมพันธ์',
            'admin_content' => $this->load->view('admin/news', NULL, TRUE)
        ];
        $this->load->view('index_admin', $data);
    }

}

/* End of file News.php */
