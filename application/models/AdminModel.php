<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AdminModel extends CI_Model
{
    protected $table = 'admin';
    protected $primaryKey = 'id_admin';
    protected $fields = [
        'admin_user',
        'admin_pass',
        'admin_status'
    ];

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
