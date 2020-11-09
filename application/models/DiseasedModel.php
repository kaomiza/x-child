<?php
class DiseasedModel extends CI_Model
{
    protected $table = 'diseased_info';
    protected $primaryKey = 'd_id';
    protected $Fields = [
        'd_nameTH',
        'd_nameEN',
        'd_status'
    ];
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
