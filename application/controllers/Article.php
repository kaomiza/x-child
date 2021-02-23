<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Article extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }


    public function index()
    {
        $data = [
            'title' => 'Articles | X-Child',
            'main_content' => $this->load->view('page/articles_list', NULL, TRUE)
        ];
        $this->load->view('index', $data);
    }

    public function content($id)
    {
        if ($id == 1) {

            $data = [
                'title' => 'เด็กพิเศษ หมายถึงอะไร? ต้องมีความผิดปกติแบบไหน ด้านใดบ้าง?',
                'main_content' => $this->load->view('page/articles1', NULL, TRUE)
            ];
            $this->load->view('index', $data);
        } else if ($id == 2) {

            $data = [
                'title' => 'เด็กออทิสติกเรียนร่วมกับเด็กปกติได้หรือไม่',
                'main_content' => $this->load->view('page/articles2', NULL, TRUE)
            ];
            $this->load->view('index', $data);
        } else {
            redirect('');
        }
    }
}

/* End of file Article.php */
