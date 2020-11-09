<?php
class DocumentModel extends CI_Model
{
    protected $table = 'document_info';
    protected $primaryKey = 'doc_id';
    protected $fields = [
        'td_id',
        'doc_name',
        'doc_path',
        'doc_status'
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
