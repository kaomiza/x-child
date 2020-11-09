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

    public function get()
    {
        $this->db->where($this->Fields[14], 1);
        $this->db->order_by($this->primaryKey, 'DESC');
        $query =  $this->db->get($this->table);
        return $query->result();
    }

    public function create(){

    }

    public function edit($id){

    }

    public function delete($id){

    }

}
