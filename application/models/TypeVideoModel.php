<?php
class TypeVideoModel extends CI_Model
{
    protected $table = 'type_video';
    protected $primaryKey = 'tv_id';
    protected $fields = [
        'tv_name',
        'tv_status'
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
