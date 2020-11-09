<?php

class AuthModel extends CI_Model
{
    protected $table1 = 'expert';
    protected $table2 = 'parent';

    public function registereExpert($data)
    {
        $query = $this->db->table($this->table1)->insert($data);
        return $query ? true : false;
    }

    public function registerParent($data)
    {
        $query = $this->db->table($this->table2)->insert($data);
        return $query ? true : false;
    }

    public function verifypasswordExpert($username, $passwordhash)
    {
        $this->db->select('e_pass');
        $this->db->where('e_user', $username);
        $query = $this->db->get($this->table1)->row();
        $pass_check = $query->e_pass;
        for ($i = 0; $i < strlen($pass_check); $i++) {
            if ($pass_check[$i] != $passwordhash[$i]) {
                return false;
            }
        }
        return true;
    }

    public function verifypasswordParent($username, $passwordhash)
    {
        $this->db->select('pa_pass');
        $this->db->where('pa_user', $username);
        $query = $this->db->get($this->table2)->row();
        $pass_check = $query->pa_pass;
        for ($i = 0; $i < strlen($pass_check); $i++) {
            if ($pass_check[$i] != $passwordhash[$i]) {
                return false;
            }
        }
        return true;
    }

    public function getParent($username)
    {
        return $this->db->get_where($this->table2, array('pa_user' => $username))->row();
    }

    public function getExpert($username)
    {
        return $this->db->get_where($this->table1, array('e_user' => $username))->row();
    }

    public function haveUserExpert($username)
    {
        $where = "e_user='$username' AND e_status=1";
        $this->db->where($where);
        $query = $this->db->get($this->table1)->row();
        return $query ? true : false;
    }

    public function haveUserParent($username)
    {
        $where = "pa_user='$username' AND pa_status=1";
        $this->db->where($where);
        $query = $this->db->get($this->table2)->row();
        return $query ? true : false;
    }
}
