<?php
class LiveStreamModel extends CI_Model
{
    protected $table = 'livestream';
    protected $primaryKey = 'l_id';
    protected $fields = [
        'l_title',
        'l_id_url',
        'l_detail',
        'ex_id',
        'l_Startdate',
        'l_EndDate',
        'l_status'
    ];

    protected $table_join = [
        'expert'
    ];

    protected $join = [
        'expert.e_id = livestream.ex_id'
    ];


    public function findAll()
    {
        $this->db->select('
        l_id,
        l_title,
        l_detail,
        l_id_url,
        e_user,
        l_Startdate,
        l_EndDate,
        l_status,
        ');
        $this->db->join($this->table_join[0], $this->join[0]);
        return $this->db->get($this->table)->result();
    }

    public function findActivate()
    {
        $this->db->select('
        l_id,
        l_title,
        l_detail,
        l_id_url,
        e_user,
        l_Startdate,
        l_EndDate,
        l_status,
        ');
        $this->db->where($this->fields[6], 1);
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
        return ($this->db->delete($this->table, array($this->primaryKey => $id))) ? true : false;
    }
}
