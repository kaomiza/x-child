<?php

defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function index()
    {
        $data = [
            'title' => 'News | X-Child',
            'main_content' => $this->load->view('page/news_list', NULL, TRUE)
        ];
        $this->load->view('index', $data);
    }

    public function content($id)
    {
        if ($id == 1) {
            $data = [
                'title' => 'สกัด "เด็กพิเศษ" หลุดระบบ สพฐ.เปิดยุทธศาสตร์เชิงรุกขับเคลื่อนงานการศึกษาพิเศษ',
                'main_content' => $this->load->view('page/news1', NULL, TRUE)
            ];
            $this->load->view('index', $data);
        } else if ($id == 2) {
            $data = [
                'title' => 'เปลี่ยน “ภาระ” เป็น “พลัง” จูงใจคนพิการก้าวข้ามความบกพร่องของร่างกาย',
                'main_content' => $this->load->view('page/news2', NULL, TRUE)
            ];
            $this->load->view('index', $data);
        } else if ($id == 3) {
            $data = [
                'title' => 'เด็กพิการขอนแก่น คว้า 1 เหรียญเงิน 2 ทองแดง กีฬาเยาวชนโลกชิงแชมป์โลก',
                'main_content' => $this->load->view('page/news3', NULL, TRUE)
            ];
            $this->load->view('index', $data);
        } else {
            redirect('');
        }
    }
}
