<?php
class ChildDiseasedModel extends CI_Model
{
    protected $table = 'children_diseased';
    protected $fields = [
        'c_id',
        'd_id'
    ];

    protected $table_join = 'diseased_info';

    protected $join = 'diseased_info.d_id = children_diseased.d_id';

    public function SelectedById($id)
    {
        $this->db->select('children_diseased.c_id,children_diseased.d_id,d_nameTH');
        $this->db->join($this->table_join, $this->join);
        return $this->db->get_where($this->table, array('children_diseased.' . $this->fields[0] => $id))->result();
    }

    public function findAll()
    {
        return $this->db->get($this->table)->result();
    }

    public function findById($id)
    {
        $this->db->select('d_id');
        return $this->db->get_where($this->table, array($this->fields[0] => $id))->result();
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
        $this->db->where($this->fields[0], $id);
        return ($this->db->delete($this->table)) ? true : false;
    }
}
