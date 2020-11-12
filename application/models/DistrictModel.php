<?php
class DistrictModel extends CI_Model
{
    protected $table = 'district';
    protected $primaryKey = 'DISTRICT_ID';
    protected $fields = [
        'DISTRICT_NAME',
        'AMPHUR_ID',
        'PROVINCE_ID'
    ];

    protected $table_join = 'amphur';
    protected $join = 'amphur.AMPHUR_ID = district.AMPHUR_ID';

    public function findByProvince($id_amphur)
    {
        $this->db->select('DISTRICT_ID,DISTRICT_NAME');
        $this->db->join($this->table_join, $this->join);
        return $this->db->get_where($this->table, array('amphur.' . $this->fields[1] => $id_amphur))->result();
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
