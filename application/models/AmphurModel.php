<?php
class AmphurModel extends CI_Model
{
    protected $table = 'amphur';
    protected $primaryKey = 'AMPHUR_ID';
    protected $fields = [
        'AMPHUR_NAME',
        'POSTCODE',
        'PROVINCE_ID'
    ];

    protected $table_join = 'province';
    protected $join = 'province.PROVINCE_ID = amphur.PROVINCE_ID';

    public function findByProvince($id_province)
    {
        $this->db->select('AMPHUR_ID,AMPHUR_NAME');
        $this->db->join($this->table_join, $this->join);
        return $this->db->get_where($this->table, array( 'amphur.'.$this->fields[2] => $id_province))->result();
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

    public function update($id, $data)
    {
        return ($this->db->update($this->table, $data, array($this->primaryKey => $id))) ? true : false;
    }

    public function delete($id)
    {
    }
}
