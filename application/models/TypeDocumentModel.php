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
        return $this->db->get($this->table)->result();
    }

    public function listSelect()
    {
        return $this->db->get_where($this->table, array($this->fields[1] => 1))->result();
    }

    public function findById($id)
    {
        return $this->db->get_where($this->table, array($this->primaryKey => $id))->row();
    }

    public function create($data)
    {
        return ($this->db->insert($this->table, $data)) ? true : false;
    }

    public function update($id, $data)
    {
        return ($this->db->update($this->table, $data, array($this->primaryKey => $id))) ? true : false;
    }

    public function delete($id)
    {
    }
}
