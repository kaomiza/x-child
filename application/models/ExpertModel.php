<?php
class ExpertModel extends CI_Model
{
    protected $table = 'expert';
    protected $primaryKey = 'e_id';
    protected $fields = [
        'e_user',
        'drug_id',
        'e_pass',
        'e_prenameTH',
        'e_prenameEN',
        'e_fnameTH',
        'e_lnameTH',
        'e_fnameEN',
        'e_lnameEN',
        'school_id',
        'position_id',
        'e_phone',
        'e_house_no',
        'e_village_no',
        'e_lane',
        'e_road',
        'e_province',
        'e_district',
        'e_amphur',
        'e_zip',
        'e_img',
        'e_status'
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
