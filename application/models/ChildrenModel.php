<?php
class ChildrenModel extends CI_Model
{
    protected $table = 'children';
    protected $primaryKey = 'c_id';
    protected $Fields = [
        'c_prenameTH',
        'c_prenameEN',
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
        'c_lane',
        'c_road',
        'c_district',
        'c_amphur',
        'c_zip',
        'c_img',
        'c_status'
    ];
    public function findAll()
    {
    }

    public function create()
    {
    }

    public function edit($id)
    {
    }

    public function delete($id)
    {
    }
}
