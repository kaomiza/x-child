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

    public function findAll()
    {
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
