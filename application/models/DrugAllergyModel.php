<?php
class DrugAllergyModel extends CI_Model
{
    protected $table = 'drug_allergy';
    protected $fields = [
        'c_id',
        'drug_id',
    ];

    protected $table_join = 'drug';

    protected $join = 'drug.drug_id = drug_allergy.drug_id';

    public function findAll()
    {
        return $this->db->get($this->table)->result();
    }

    public function SelectedById($id)
    {
        $this->db->select('drug_allergy.c_id,drug_allergy.drug_id,drug_name_th');
        $this->db->join($this->table_join, $this->join);
        return $this->db->get_where($this->table, array('drug_allergy.' . $this->fields[0] => $id))->result();
    }

    public function findById($id)
    {
        $this->db->select('drug_id');
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
