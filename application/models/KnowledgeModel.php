<?php
class KnowledgeModel extends CI_Model
{
    protected $table = 'knowledge_info';
    protected $primaryKey = 'k_id';
    protected $Fields = [
        'k_img', 
        'k_title', 
        'status'
    ];

    public function getLimit($limit)
    {
        $query = $this->db->get($this->table, $limit + 4, $limit);
        return $query->result();
    }

    public function create(){

    }

    public function edit(){

    }
    public function delete(){

    }
}
