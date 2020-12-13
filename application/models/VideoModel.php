<?php
class TypeVideoModel extends CI_Model
{
    protected $table = 'video_info';
    protected $primaryKey = 'v_id';
    protected $fields = [
        'tv_id',
        'v_name',
        'v_detail',
        'v_user_upload',
        'v_register_date',
        'v_path_video',
        'v_status'
    ];

    protected $table_join = [
        'type_video'
    ];

    protected $join = [
        'type_video.tv_id = video_info.tv_id'
    ];


    public function findAll()
    {
        $this->db->select('doc_id,td_name,doc_name,doc_status');
        $this->db->join($this->table_join[0], $this->join[0]);
        return $this->db->get($this->table)->result();
    }

    public function create()
    {
    }

    public function edit($id)
    {
    }

    public function delete($id)
    {
    }
}
