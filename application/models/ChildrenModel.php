<?php
class ChildrenModel extends CI_Model
{
    protected $table = 'children';
    protected $primaryKey = 'c_id';
    protected $Fields = [
        'c_prename',
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
        'c_road',
        'c_province',
        'c_district',
        'c_amphur',
        'c_zip',
        'c_img',
        'c_status'
    ];

    protected $table_join = [
        'prename',
        'school',
        'type_children',
        'province',
        'district',
        'amphur'
    ];

    protected $join = [
        'prename.n_id = children.c_prename',
        'school.sc_id = children.school_id',
        'type_children.tc_id = children.tc_id',
        'province.PROVINCE_ID = children.c_province',
        'district.DISTRICT_ID = children.c_district',
        'amphur.AMPHUR_ID = children.c_amphur'
    ];

    public function findAll()
    {
        // $this->db->select('*');
        $this->db->select('
        c_id,
        n_thainame,
        n_engname,
        c_fnameTH,
        c_lnameTH,
        c_fnameEN,
        c_lnameEN,
        c_house_no,
        c_village_no,
        c_road,
        date,
        sc_nameTH,
        sc_nameEN,
        tc_name,
        c_status,
        PROVINCE_NAME,
        DISTRICT_NAME,
        AMPHUR_NAME,
        POSTCODE
        ');
        $this->db->join($this->table_join[0], $this->join[0]);
        $this->db->join($this->table_join[1], $this->join[1]);
        $this->db->join($this->table_join[2], $this->join[2]);
        $this->db->join($this->table_join[3], $this->join[3]);
        $this->db->join($this->table_join[4], $this->join[4]);
        $this->db->join($this->table_join[5], $this->join[5]);
        return $this->db->get($this->table)->result();
    }

    public function getListChildByParent($parent_id)
    {
        $this->db->select('c_id,n_thainame,c_fnameTH,c_lnameTH');
        $this->db->join($this->table_join[0], $this->join[0]);
        return $this->db->get_where($this->table, array('c_parent_id' => $parent_id))->result();
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
