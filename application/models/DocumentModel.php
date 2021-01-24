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

    protected $table_join = [
        'type_document'
    ];

    protected $join = [
        'type_document.td_id = document_info.td_id'
    ];

    public function findAll()
    {
        $this->db->select('doc_id,td_name,doc_name,doc_status');
        $this->db->join($this->table_join[0], $this->join[0]);
        return $this->db->get($this->table)->result();
    }

    public function search()
    {
        $this->db->select('doc_id,td_name,doc_name,doc_status');
        $this->db->join($this->table_join[0], $this->join[0]);
        $this->db->where($this->fields[3], 1);
        return $this->db->get($this->table)->result();
    }

    public function findById($id)
    {
        return $this->db->get_where($this->table, array($this->primaryKey => $id))->row();
    }

    public function create($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function update($id, $data)
    {
        return ($this->db->update($this->table, $data, array($this->primaryKey => $id))) ? true : false;
    }

    public function delete($id)
    {
    }
}
