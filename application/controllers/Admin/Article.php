<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
    
    public function index()
    {
        
        $data = [
            'title' => 'จัดการบทความ',
            'admin_content' => $this->load->view('admin/article', NULL, TRUE)
        ];
        $this->load->view('index_admin', $data);
    }

}

/* End of file Article.php */
