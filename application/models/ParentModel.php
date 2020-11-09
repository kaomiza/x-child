<?php
class ParentModel extends CI_Model
{
    protected $table = 'parent';
    protected $primaryKey = 'pa_id';
    protected $fields = [
        'pa_user',
        'pa_pass',
        'pa_prenameTH',
        'pa_prenameEN',
        'pa_fnameTH',
        'pa_lnameTH',
        'pa_fnameEN',
        'pa_lnameEN',
        'school_id',
        'phone',
        'email',
        'pa_house_no',
        'pa_village_no',
        'pa_lane',
        'pa_road',
        'pa_province',
        'pa_district',
        'pa_amphur',
        'pa_zip',
        'pa_img',
        'pa_status'
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
