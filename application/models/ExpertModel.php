<?php
class ExpertModel extends CI_Model
{
    protected $table = 'expert';
    protected $primaryKey = 'e_id';
    protected $fields = [
        'e_user',
        'drug_id',
        'e_pass',
        'e_prename',
        'e_fnameTH',
        'e_lnameTH',
        'e_fnameEN',
        'e_lnameEN',
        'school_id',
        'position_id',
        'e_phone',
        'e_house_no',
        'e_village_no',
        'e_road',
        'e_province',
        'e_district',
        'e_amphur',
        'e_zip',
        'e_img',
        'e_status'
    ];

    protected $table_join = [
        'prename',
        'position',
        'school',
        'province',
        'district',
        'amphur'
    ];

    protected $join = [
        'prename.n_id = expert.e_prename',
        'position.p_id = expert.position_id',
        'school.sc_id = expert.school_id',
        'province.PROVINCE_ID = expert.e_province',
        'district.DISTRICT_ID = expert.e_district',
        'amphur.AMPHUR_ID = expert.e_amphur'
    ];

    public function listSelect()
    {
        $this->db->select('e_id,n_thainame,n_engname,e_fnameTH,e_lnameTH,e_fnameEN,e_lnameEN');
        $this->db->join($this->table_join[0], $this->join[0]);
        return $this->db->get_where($this->table, array($this->fields[19] => 1))->result();
    }

    public function findById($id)
    {
        return $this->db->get_where($this->table, array($this->primaryKey => $id))->row();
    }

    public function findAll()
    {
        $this->db->select('
        e_id,
        n_thainame,
        e_fnameTH,
        e_lnameTH,
        e_email,
        e_phone,
        sc_nameTH,
        p_name,
        e_status,
        e_house_no,
        e_village_no,
        e_road,
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
