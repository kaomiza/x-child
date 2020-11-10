<?php
class SchoolModel extends CI_Model
{
    protected $table = 'school';
    protected $primaryKey = 'sc_id';
    protected $Fields = [
        'sc_nameTH',
        'sc_nameEN',
        'sc_type',
        'sc_house_no',
        'sc_village_no',
        'sc_road',
        'sc_province',
        'sc_district',
        'sc_amphur',
        'sc_zip',
        'website',
        'phone',
        'latitude',
        'longitude',
        'sc_status'
    ];

    protected $table_join = [
        'type_school',
        'province',
        'district',
        'amphur'
    ];

    protected $join = [
        'type_school.tsc_id = school.sc_type',
        'province.PROVINCE_ID = school.sc_province',
        'district.DISTRICT_ID = school.sc_district',
        'amphur.AMPHUR_ID = school.sc_amphur'
    ];

    public function findAll()
    {
        $this->db->select('sc_id,sc_nameTH,
        sc_nameEN,
        tsc_name,
        sc_house_no,
        sc_village_no,
        sc_road,
        PROVINCE_NAME,
        DISTRICT_NAME,
        AMPHUR_NAME,
        POSTCODE,
        website,
        phone,
        latitude,
        longitude');
        $this->db->join($this->table_join[0], $this->join[0]);
        $this->db->join($this->table_join[1], $this->join[1]);
        $this->db->join($this->table_join[2], $this->join[2]);
        $this->db->join($this->table_join[3], $this->join[3]);
        return $this->db->get($this->table)->result();
    }

    public function findAllActive()
    {
        $this->db->where($this->Fields[14], 1);
        $this->db->order_by($this->primaryKey, 'DESC');
        $query =  $this->db->get($this->table);
        return $query->result();
    }

    public function create()
    {
    }

    public function update($id)
    {
    }

    public function delete($id)
    {
    }
}
