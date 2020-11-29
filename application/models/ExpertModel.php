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
        'prename'
    ];

    protected $join = [
        'prename.n_id = expert.e_prename'
    ];

    public function listSelect()
    {
        $this->db->select('e_id,n_thainame,n_engname,e_fnameTH,e_lnameTH,e_fnameEN,e_lnameEN');
        $this->db->join($this->table_join[0], $this->join[0]);
        return $this->db->get_where($this->table, array($this->fields[19] => 1))->result();
    }

    public function findAll()
    {
        $this->db->select('e_id,n_thainame,n_engname,e_fnameTH,e_lnameTH,e_fnameEN,e_lnameEN,e_status,e_img');
        $this->db->join($this->table_join[0], $this->join[0]);
        return $this->db->get($this->table)->result();
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
