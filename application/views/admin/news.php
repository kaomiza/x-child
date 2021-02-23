<div class="modal fade show" tabindex="-1" role="dialog" id="insertNews" style="display:none;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-heading">เพิ่มข่าวประชาสัมพันธ์</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary text_btn" data-dismiss="modal">ปิด</button>
                <button type="button" class="btn text_btn" style="background-color: #1e7e34; color:white;" onclick="onClickSave('insert')">บันทึก</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade show" tabindex="-1" role="dialog" id="editNews" style="display:none;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-heading">แก้ไขข่าวประชาสัมพันธ์</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary text_btn" data-dismiss="modal">ปิด</button>
                <button type="button" class="btn text_btn" style="background-color: #1e7e34; color:white;" onclick="onClickSave('insert')">บันทึก</button>
            </div>
        </div>
    </div>
</div>

<div class="main-margin padding_main">
    <div class="padding_main bgWhite mainBoxRadius boxHeader">
        <div>
            <h1 class="h1-title">จัดการข่าวประชาสัมพันธ์</h1>
        </div>
    </div>
    <div class="bgWhite padding_main mainBoxRadius main-margin">
        <div>
            <button class="btn_backend text_btn btn" id="btnInsert" data-toggle="modal" data-target="#insertParents" onclick="add_fetchData()"><i class="fa fa-plus"></i>&nbsp;&nbsp;เพิ่มผู้ปกครอง</button>
        </div>
        <table id="parents" class="table table-bordered table-striped nowrap">
            <thead>
                <tr>
                    <th></th>
                    <th class="th_text">สถานะ</th>
                    <th class="th_text">ลำดับ</th>
                    <th class="th_text">รหัสผู้ปกครอง</th>
                    <th class="th_text">ชื่อเรื่อง</th>
                    <th class="th_text">วันที่สร้าง</th>
                    <th class="th_text">แก้ไข</th>
                    <th class="th_text"></th>
                </tr>
            </thead>
        </table>
    </div>
</div>

<script>
    $('#insertParents').on('hidden.bs.modal', function() {
        reset_form('add');
    })
    $('#editParents').on('hidden.bs.modal', function() {
        reset_form('edit');
    })
</script>
<!-- datateble -->
<script>
    $("#parents").DataTable({
        "processing": true,
        "responsive": {
            details: {
                type: 'column'
            }
        },
        "autoWidth": false,
        "ajax": {
            url: "<?php echo base_url('admin/parents/getAll'); ?>",
            type: "GET"
        },
        "order": [
            [2, "asc"]
        ],
        "columns": [{
                data: null,
                width: 30,
                className: 'dtr-control',
                orderable: false,
                "defaultContent": ''
            },
            {
                "data": null,
                'orderable': false,
                "render": (data, type, row, meta) => {
                    return `
                            <label for="toggle-` + row.pa_id + `" class="toggle-1">
                                <input type="checkbox" id="toggle-` + row.pa_id + `" 
                                class="toggle-1__input"  ` + (row.pa_status == 1 ? 'checked' : '') + `
                                onchange="onClickActivate(` + row.pa_id + `)">
                                <span class="toggle-1__button"></span>
                            </label> 
                        `;
                },
            },
            {
                "data": null,
                className: "td_text",
                width: 50,
                "render": (data, type, row, meta) => {
                    return meta.row + 1;
                }
            },
            {
                "data": "pa_id",
                className: "td_text"
            },
            {
                data: null,
                className: "td_text",
                render: (data, type, row, meta) => {
                    return row.n_thainame + ' ' + row.pa_fnameTH + ' ' + row.pa_lnameTH;
                }
            },
            {
                "data": null,
                className: "td_text",
                render: (data, type, row, meta) => {
                    return row.sc_nameTH;
                }
            },
            {
                "data": "phone",
                className: "td_text"
            },
            {
                "data": null,
                className: "td_text",
                render: (data, type, row, meta) => {
                    return (row.pa_house_no == '' ? ' - ' : row.pa_house_no) + ' หมู่ ' +
                        (row.pa_village_no == '' ? ' - ' : row.pa_village_no) + ' ถนน ' +
                        row.pa_road + ' จังหวัด ' + row.PROVINCE_NAME + ' ตำบล ' + row.DISTRICT_NAME +
                        ' อำเภอ ' + row.AMPHUR_NAME + row.POSTCODE;
                }
            },
            {
                "data": null,
                "render": (data, type, row, meta) => {
                    return `
                        <button class="btn btn-flat" style="padding: 2px .75rem; color: #199a6f;" data-toggle="modal" data-target="#editParents"
                        onclick="onClickEdit(` + row.pa_id + `)"><i class="fa fa-edit"></i>
                        </button>
                        `;
                }
            },
            {
                "data": null,
                "render": (data, type, row, meta) => {
                    return `
                        <button class="btn btn-outline-info" data-toggle="modal" data-target="#ParentInfo"
                        onclick="onClickListChilddetail(` + row.pa_id + `)"> รายชื่อเด็กที่ดูแล </button>
                        `;
                }
            }
        ]
    });
</script>

<script></script>