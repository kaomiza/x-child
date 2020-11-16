<?php
class PrenameModel extends CI_Model
{
    protected $table = 'prename';
    protected $primaryKey = 'n_id';
    protected $fields = [
        'n_thainame',
        'n_engname',
        'n_status'
    ];


    public function listSelect()
    {
        return $this->db->get_where($this->table, array($this->fields[2] => 1))->result();
    }

    public function findAll()
    {
        return $this->db->get($this->table)->result();
    }

    public function findById($id)
    {
        return $this->db->get_where($this->table, array($this->primaryKey => $id))->row();
    }

    public function create($data)
    {
        return ($this->db->insert($this->table, $data)) ? true : false;
    }

    public function edit($id, $data)
    {
        return ($this->db->update($this->table, $data, array($this->primaryKey => $id))) ? true : false;
    }

    public function delete($id)
    {
    }
}
