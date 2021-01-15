<?php
class VideoModel extends CI_Model
{
    protected $table = 'video_info';
    protected $primaryKey = 'v_id';
    protected $fields = [
        'tv_id',
        'v_name',
        'v_detail',
        'v_user_upload',
        'v_register_date',
        'v_path_video',
        'v_status'
    ];

    protected $table_join = [
        'type_video',
        'expert'
    ];

    protected $join = [
        'type_video.tv_id = video_info.tv_id',
        'expert.e_id = video_info.v_user_upload'
    ];


    public function findAll()
    {
        $this->db->select('*');
        $this->db->join($this->table_join[0], $this->join[0]);
        return $this->db->get($this->table)->result();
    }

    public function concernVideo($type)
    {
        $this->db->where($this->fields[0] . ' = ' . $type);
        $this->db->order_by('v_register_date', 'DESC');
        return $this->db->get($this->table, 10, 0)->result();
    }

    public function loadMore($start, $end)
    {
        $this->db->order_by('v_register_date', 'DESC');
        return $this->db->get($this->table, $end, $start)->result();
    }

    public function search($type)
    {
        if ($type != 0) {
            $this->db->where($this->fields[0] . ' = ' . $type);
        }
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
