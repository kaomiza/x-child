<?php
class TypeDocumentModel extends CI_Model
{
    protected $table = 'type_children';
    protected $primaryKey = 'tc_id';
    protected $fields = [
        'tc_name',
        'tc_status'
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
