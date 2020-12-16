<?php
class SumResultModel extends CI_Model
{
    protected $table = [
        'document_info',
        'video_info',
        'children',
        'parent',
        'expert'
    ];


    public function getAll()
    {
        $data = array(
            $this->table[0] => $this->db->count_all($this->table[0]),
            $this->table[1] => $this->db->count_all($this->table[1]),
            $this->table[2] => $this->db->count_all($this->table[2]),
            $this->table[3] => $this->db->count_all($this->table[3]),
            $this->table[4] => $this->db->count_all($this->table[4]),
        );
        return $data;
    }
}
