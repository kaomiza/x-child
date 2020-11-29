<?php
class ParentModel extends CI_Model
{
    protected $table = 'parent';
    protected $primaryKey = 'pa_id';
    protected $fields = [
        'pa_user',
        'pa_pass',
        'pa_prename',
        'pa_fnameTH',
        'pa_lnameTH',
        'pa_fnameEN',
        'pa_lnameEN',
        'school_id',
        'phone',
        'email',
        'pa_house_no',
        'pa_village_no',
        'pa_road',
        'pa_province',
        'pa_district',
        'pa_amphur',
        'pa_zip',
        'pa_img',
        'pa_status'
    ];

    protected $table_join = [
        'prename'
    ];

    protected $join = [
        'prename.n_id = parent.pa_prename'
    ];


    public function listSelect()
    {
        $this->db->select('pa_id,n_thainame,n_engname,pa_fnameTH,pa_lnameTH,pa_fnameEN,pa_lnameEN');
        $this->db->join($this->table_join[0], $this->join[0]);
        return $this->db->get_where($this->table, array($this->fields[18] => 1))->result();
    }

    public function findAll()
    {
        $this->db->select('pa_id,n_thainame,n_engname,pa_fnameTH,pa_lnameTH,pa_fnameEN,pa_lnameEN,pa_status,pa_img');
        $this->db->join($this->table_join[0], $this->join[0]);
        return $this->db->get($this->table)->result();
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
