<?php
class DrugModel extends CI_Model
{
    protected $table = 'drug';
    protected $primaryKey = 'drug_id';
    protected $fields = [
        'drug',
        'gd_id',
        'drug_name_th',
        'drug_name_en',
        'drug_status'
    ];
    protected $table_join = 'group_drug';
    protected $join = 'group_drug.gd_id = drug.gd_id';

    public function findAll()
    {
        $this->db->select('drug_id,gd_name,drug_name_th,drug_name_en,drug_status');
        $this->db->join($this->table_join, $this->join);
        return $this->db->get($this->table)->result();
    }

    public function listSelect()
    {
        return $this->db->get_where($this->table, array($this->fields[4] => 1))->result();
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
