<?php
class LiveStreamModel extends CI_Model
{
    protected $table = 'livestream';
    protected $primaryKey = 'l_id';
    protected $fields = [
        'l_title',
        'l_detail',
        'l_embed',
        'ex_id'
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
