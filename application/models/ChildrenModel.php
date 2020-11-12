<?php
class ChildrenModel extends CI_Model
{
    protected $table = 'children';
    protected $primaryKey = 'c_id';
    protected $Fields = [
        'c_prenameTH',
        'c_prenameEN',
        'c_fnameTH',
        'c_lnameTH',
        'c_fnameEN',
        'c_lnameEN',
        'tc_id',
        'school_id',
        'c_parent_id',
        'c_expert_id',
        'date',
        'c_house_no',
        'c_village_no',
        'c_lane',
        'c_road',
        'c_district',
        'c_amphur',
        'c_zip',
        'c_img',
        'c_status'
    ];

    public function findAll()
    {
        $this->db->select('c_prenameTH,c_prenameEN,c_fnameTH,c_lnameTH,c_fnameEN,c_lnameEN,c_status');
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
