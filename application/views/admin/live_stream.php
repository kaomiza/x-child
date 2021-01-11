<style>
    .status_box {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .status_red {
        width: 18px;
        height: 18px;
        border-radius: 50%;
        background-color: red;
        margin: 0px 10px;
    }

    .status_orange {
        width: 18px;
        height: 18px;
        border-radius: 50%;
        background-color: orange;
        margin: 0px 10px;
    }

    .status_green {
        width: 18px;
        height: 18px;
        border-radius: 50%;
        background-color: #0ce40c;
        margin: 0px 10px;
    }

    @media (min-width: 200px) and (max-width: 767px) {
        .status_box {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .status_box>div {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    }
</style>

<div class="modal fade show" tabindex="-1" role="dialog" id="insertLive" style="display:none;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-heading">เพิ่มการถ่ายทอดสด</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <label class="text-paragraph">ชื่อเรื่อง</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input id="namelive1" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น การถ่ายทอดสดเกี่ยวกับการเรียนรู้ของเด็กตาบอด">
                            <label class="text-paragraph" id="ernamelive1" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอกชื่อเรื่องให้ถูกต้อง
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <label class="text-paragraph">วันและเวลาเริ่มการถ่ายทอดสด</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input id="start_date_1" placeholder="วัน/เดือน/ปี เวลา" readonly>
                            <label class="text-paragraph" id="erstart_date_1" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกเวลาเริ่มให้ถูกต้อง เช่น เลือกวันและเวลาให้มากกว่าปัจจุบัน
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <label class="text-paragraph">วันและเวลาจบการถ่ายทอดสด</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input id="end_date_1" placeholder="วัน/เดือน/ปี เวลา" readonly>
                            <label class="text-paragraph" id="erend_date_1" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกเวลาจบให้ถูกต้อง เช่น เลือกวันและเวลาให้มากกว่าเวลาเริ่มการถ่ายทอดสด
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <label class="text-paragraph">URL Youtube</label>
                        </div>
                        <div>
                            <input id="url1" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น https://www.youtube.com/watch?v=xxxxxx">
                            <label class="text-paragraph" id="erurl1" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอก URL Youtube ให้ถูกต้อง เช่น https://www.youtube.com/watch?v=ไอดี
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <label class="text-paragraph">รายละเอียดของการถ่ายทอดสด</label>
                        </div>
                        <div>
                            <textarea id="l_detail1" class="form-control"></textarea>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary text_btn" data-dismiss="modal">ปิด</button>
                <button type="button" class="btn text_btn" style="background-color: #1e7e34; color:white;" onclick="onClickSave('insert')">บันทึก</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade show" tabindex="-1" role="dialog" id="editLive" style="display:none;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-heading">แก้ไขการถ่ายทอดสด</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <label class="text-paragraph">ชื่อเรื่อง</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input id="namelive2" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น การถ่ายทอดสดเกี่ยวกับการเรียนรู้ของเด็กตาบอด">
                            <label class="text-paragraph" id="ernamelive2" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอกชื่อเรื่องให้ถูกต้อง
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <label class="text-paragraph">วันและเวลาเริ่มการถ่ายทอดสด</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input id="start_date_2" placeholder="วัน/เดือน/ปี เวลา" readonly>
                            <label class="text-paragraph" id="erstart_date_2" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกเวลาเริ่มให้ถูกต้อง เช่น เลือกวันและเวลาให้มากกว่าปัจจุบัน
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <label class="text-paragraph">วันและเวลาจบการถ่ายทอดสด</label>
                            <label class="text-paragraph" style="color: red;">*</label>
                        </div>
                        <div>
                            <input id="end_date_2" placeholder="วัน/เดือน/ปี เวลา" readonly>
                            <label class="text-paragraph" id="erend_date_2" style="color: red; display:none; padding-top:5px;">
                                กรุณาเลือกเวลาจบให้ถูกต้อง เลือกวันและเวลาให้มากกว่าเวลาเริ่มการถ่ายทอดสด
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <label class="text-paragraph">URL Youtube</label>
                        </div>
                        <div>
                            <input id="url2" style="font-family: 'Kanit';" type="text" class="form-control" placeholder="เช่น https://www.youtube.com/watch?v=xxxxxx">
                            <label class="text-paragraph" id="erurl2" style="color: red; display:none; padding-top:5px;">
                                กรุณากรอก URL Youtube ให้ถูกต้อง เช่น https://www.youtube.com/watch?v=ไอดี
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <label class="text-paragraph">รายละเอียดของการถ่ายทอดสด</label>
                        </div>
                        <div>
                            <textarea id="l_detail2" class="form-control"></textarea>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary text_btn" data-dismiss="modal">ปิด</button>
                <button type="button" class="btn text_btn edit_btn" style="background-color: #1e7e34; color:white;" onclick="onClickSave('edit')">บันทึก</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade show" tabindex="-1" role="dialog" id="previewLive" style="display:none;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-heading">หน้าจอทดสอบการแสดงผลการถ่ายทอดสด</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <label class="text-paragraph">ชื่อเรื่อง : </label>
                            <label id="p_title" class="text-paragraph"></label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <label class="text-paragraph">URL Youtube : </label>
                            <label id="p_url" class="text-paragraph"></label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="embed">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <label class="text-paragraph">รายละเอียดของการถ่ายทอดสด</label>
                        </div>
                        <div>
                            <label id="p_detail" class="text-paragraph"></label>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary text_btn" data-dismiss="modal">ปิด</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade show" tabindex="-1" role="dialog" id="statusLive" style="display:none;">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-heading">สถานะการถ่ายทอดสด</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div id="embed_web">

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div style="display: flex;align-items: center;justify-content: center;flex-direction: column;">
                            <div>
                                <label class="text-paragraph">กรุณาเลือกสถานะ</label>
                            </div>
                            <div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" value="0" name="status_radio" id="pending">รอดำเนินการ
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" value="1" name="status_radio" id="online">ออนไลน์
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" value="2" name="status_radio" id="finish">เสร็จสิ้น
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary text_btn" data-dismiss="modal">ปิด</button>
                <button type="button" class="btn text_btn btn_status" style="background-color: #1e7e34; color:white;" onclick="onSaveStatus()">บันทึก</button>
            </div>
        </div>
    </div>
</div>

<div class="main-margin padding_main">
    <div class="padding_main bgWhite mainBoxRadius boxHeader">
        <div>
            <h1 class="h1-title">จัดการถ่ายทอดสด</h1>
        </div>
    </div>
    <div class="bgWhite padding_main mainBoxRadius main-margin">
        <div class="status_box">
            <div><button class="btn_backend text_btn btn" id="btnInsert" data-toggle="modal" data-target="#insertLive">เพิ่มการถ่ายทอดสด</button></div>
            <div class="status_box">
                <div>
                    <label>Status :</label>
                </div>
                <div style="display: flex;">
                    <div class="status_orange"></div>
                    <label>รอดำเนินการ</label>
                </div>
                <div style="display: flex;">
                    <div class="status_green"></div>
                    <label>ออนไลน์</label>
                </div>
                <div style="display: flex;">
                    <div class="status_red"></div>
                    <label>เสร็จสิ้น</label>
                </div>
            </div>
        </div>
        <table id="Live" class="table table-bordered table-striped nowrap" style="width:100%">
            <thead>
                <tr>
                    <th class="th_text">ลำดับ</th>
                    <th class="th_text">ชื่อเรื่อง</th>
                    <th class="th_text">ผู้สร้าง</th>
                    <th class="th_text">ช่วงเวลา</th>
                    <th class="th_text">แก้ไข</th>
                    <th class="th_text">สถานะ</th>
                </tr>
            </thead>
        </table>

    </div>
</div>

<!-- datateble -->
<script>
    $('#Live').DataTable({
        "processing": true,
        "autoWidth": false,
        "ajax": {
            url: "<?php echo base_url('admin/Live_Stream/getAll'); ?>",
            type: "GET"
        },
        "order": [
            [1, "asc"]
        ],
        "columns": [{
                "data": null,
                className: "td_text",
                width: 50,
                "render": (data, type, row, meta) => {
                    return meta.row + 1;
                }
            },
            {
                "data": "l_title",
                className: "td_text"
            },
            {
                "data": 'e_user',
                className: "td_text"
            },
            {
                "data": null,
                className: "td_text",
                "render": (data, type, row, meta) => {
                    return row.l_Startdate + ` ถึง ` + row.l_EndDate;
                }
            },
            {
                "data": null,
                "render": (data, type, row, meta) => {
                    return `
                        <button class="btn" style="padding: 2px .75rem; color: #199a6f;" data-toggle="modal" data-target="#editLive"
                        onclick="onClickEdit(` + row.l_id + `)"><i class="fa fa-edit"></i>
                        </button>
                        <button class="btn" style="padding: 2px .75rem; color: #007bff;" data-toggle="modal" data-target="#previewLive"
                        onclick="onClickPreview(` + row.l_id + `)"><i class="fas fa-eye"></i>
                        </button>
                        <button class="btn" style="padding: 2px .75rem; color: #c82333;"
                        onclick="onDelete(` + row.l_id + `)"><i class="fas fa-trash"></i>
                        </button>
                        `;
                }
            },
            {
                "data": null,
                "render": (data, type, row, meta) => {
                    var bt;
                    if (row.l_status == 0) {
                        bt = `<button style="background-color: orange;" class="btn btn-block btn-default btn-flat p-3" onclick="onClickStatus(` + row.l_id +
                            `)" data-toggle="modal" data-target="#statusLive"></button>`;
                    }
                    if (row.l_status == 1) {
                        bt = `<button style="background-color: #0ce40c;" class="btn btn-block btn-default btn-flat p-3" onclick="onClickStatus(` + row.l_id +
                            `)" data-toggle="modal" data-target="#statusLive"></button>`;
                    }
                    if (row.l_status == 2) {
                        bt = `<button style="background-color: red;" class="btn btn-block btn-default btn-flat p-3" onclick="onClickStatus(` + row.l_id +
                            `)" data-toggle="modal" data-target="#statusLive"></button>`;
                    }
                    return bt;
                }
            }
        ]
    });
</script>

<!-- modal reset form -->
<script>
    $('#insertLive').on('hidden.bs.modal', function() {
        reset_form('add');
    })
    $('#editLive').on('hidden.bs.modal', function() {
        reset_form('edit');
    })
    $('#previewLive').on('hidden.bs.modal', function() {
        $('#p_title').empty();
        $('#p_url').empty();
        $('#p_detail').empty();
        $('#embed').empty();
        $('#Live').DataTable().ajax.reload();
    })
    $('#statusLive').on('hidden.bs.modal', function() {
        $('#Live').DataTable().ajax.reload();
    })

    function reset_form(fn) {
        if (fn == 'add') {
            $('#namelive1').val('');
            $('#start_date_1').val('');
            $('#end_date_1').val('');
            $('#url1').val('');
            $('#l_detail1').val('');
        }
        if (fn == 'edit') {
            $('#namelive2').val('');
            $('#start_date_2').val('');
            $('#end_date_2').val('');
            $('#url2').val('');
            $('#l_detail2').val('');
        }
        $('#Live').DataTable().ajax.reload();
    }
</script>

<!-- action function -->
<script>
    function onClickEdit(id) {
        $.get('<?php echo base_url('admin/Live_Stream/getById'); ?>/' + id).done((res) => {
            console.log(res);
            $('.edit_btn').attr('id', res.l_id);
            $('#namelive2').val(res.l_title);
            $('#start_date_2').val(res.l_StartDate);
            $('#end_date_2').val(res.l_EndDate);
            if (res.l_id_url != '') {
                $('#url2').val('https://www.youtube.com/watch?v=' + res.l_id_url);
            } else {
                $('#url2').val(res.l_id_url);
            }
            $('#l_detail2').val(res.l_detail);
        });
    }

    function onClickPreview(id) {
        $.get('<?php echo base_url('admin/Live_Stream/getById'); ?>/' + id).done((res) => {
            $('#p_title').html(res.l_title);
            $('#p_detail').html(res.l_detail);
            if (res.l_id_url != '') {
                $('#p_url').html('https://www.youtube.com/watch?v=' + res.l_id_url);
                $('#embed').html(`
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/` + res.l_id_url + `" allowfullscreen></iframe>
                    </div>
                `);
            } else {
                $('#p_url').html(res.l_id_url);
                $('#embed').html(`
                    <div class="text-center p-5">
                        <dt style="color: red;">Youtube Live Stream Not Available</dt>
                    </div>
                `);
            }
        });
    }

    function onSaveStatus() {
        var id = $('.btn_status').attr('id');
        var radioValue = $("input[name='status_radio']:checked").val();
        $.post('<?php echo base_url('admin/Live_Stream/update'); ?>/' + id, {
            l_status: radioValue
        }).done((res) => {
            $('#statusLive').modal('hide');
            toastr.success('อัพเดตสถานะสำเร็จ');
        }).fail((xhr, status, error) => {
            toastr.error('Error')
        })
    }

    function onClickStatus(id) {
        $('.btn_status').attr('id', id);
        $.get('<?php echo base_url('admin/Live_Stream/getById'); ?>/' + id).done((res) => {
            if (res.l_id_url != '') {
                $('#embed_web').html(`
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="<?php echo base_url('live') ?>?v=` + res.l_id_url + `" allowfullscreen></iframe>
                    </div>
                `);
            } else {
                $('#embed_web').html(`
                    <div class="text-center p-5">
                        <dt style="color: red;">Youtube Live Stream Not Available</dt>
                    </div>
                `);
            }

            if (res.l_status == 0) {
                $('#pending').attr('checked', '');
            }
            if (res.l_status == 1) {
                $('#online').attr('checked', '');
            }
            if (res.l_status == 2) {
                $('#finish').attr('checked', '');
            }

        });
    }

    function onDelete(id) {
        Swal.fire({
            title: 'Are you sure?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.get('<?php echo base_url('admin/Live_Stream/Delete'); ?>/' + id).done((res) => {
                    Swal.fire(
                        'Deleted!',
                        'Your liveStream has been deleted.',
                        'success'
                    );
                    $('#Live').DataTable().ajax.reload();
                });
            }
        })
    }
</script>

<!-- datepickker -->
<script>
    //*********start datepickker************ */
    $('#start_date_1').datetimepicker({
        format: 'yyyy-mm-dd HH:MM',
        footer: true,
        uiLibrary: 'bootstrap4'
    });
    $('#end_date_1').datetimepicker({
        format: 'yyyy-mm-dd HH:MM',
        footer: true,
        uiLibrary: 'bootstrap4'
    });
    $('#start_date_2').datetimepicker({
        format: 'yyyy-mm-dd HH:MM',
        footer: true,
        uiLibrary: 'bootstrap4'
    });
    $('#end_date_2').datetimepicker({
        format: 'yyyy-mm-dd HH:MM',
        footer: true,
        uiLibrary: 'bootstrap4'
    });
</script>
<!-- summit function -->
<script>
    function datetimeToDate(datetime) {
        var splitD = datetime.split(' ');
        var date = splitD[0];
        var time = splitD[1];
        var splitdate = date.split('-');
        var dateselect = new Date(splitdate[0] + "-" + splitdate[1] + "-" + splitdate[2] + " " + time);
        return dateselect;
    }


    function youtube_parser(url) {
        var regExp = /^https?\:\/\/(?:www\.youtube(?:\-nocookie)?\.com\/|m\.youtube\.com\/|youtube\.com\/)?(?:ytscreeningroom\?vi?=|youtu\.be\/|vi?\/|user\/.+\/u\/\w{1,2}\/|embed\/|watch\?(?:.*\&)?vi?=|\&vi?=|\?(?:.*\&)?vi?=)([^#\&\?\n\/<>"']*)/i;
        var match = url.match(regExp);
        return (match && match[1].length == 11) ? match[1] : false;
    }


    function onClickSave(func) {
        console.log(func);
        var id_youtube;
        var checkError = true;
        if (func == 'insert') {
            var namelive1 = document.getElementById("namelive1").value;
            var start_date_1 = document.getElementById("start_date_1").value;
            var end_date_1 = document.getElementById("end_date_1").value;
            var url1 = document.getElementById("url1").value;
            var detail = document.getElementById("l_detail1").value;
            if (namelive1 == "") {
                document.getElementById("ernamelive1").style.display = "block";
                document.getElementById("namelive1").style.border = "1px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("ernamelive1").style.display = "none";
                document.getElementById("namelive1").style.border = "1px solid #ced4da";
            }

            if (start_date_1 == 'วัน/เดือน/ปี เวลา' || start_date_1 == '') {
                document.getElementById("erstart_date_1").style.display = "block";
                document.getElementById("start_date_1").style.border = "1px solid #bd2130";
                checkError = false;
            } else {
                var start_date_1 = document.getElementById("start_date_1").value;
                var dateselect = datetimeToDate(start_date_1)
                var currentDate = new Date();
                if (dateselect <= currentDate) {
                    document.getElementById("erstart_date_1").style.display = "block";
                    document.getElementById("start_date_1").style.border = "1px solid #bd2130";
                    checkError = false;
                } else {
                    document.getElementById("erstart_date_1").style.display = "none";
                    document.getElementById("start_date_1").style.border = "1px solid #ced4da";
                }
            }

            if (end_date_1 == 'วัน/เดือน/ปี เวลา' || end_date_1 == '') {
                document.getElementById("erend_date_1").style.display = "block";
                document.getElementById("end_date_1").style.border = "1px solid #bd2130";
                checkError = false;
            } else {
                var end_date_1 = document.getElementById("end_date_1").value;
                var start_date_1 = document.getElementById("start_date_1").value;
                var dateselect = datetimeToDate(end_date_1);
                var datestart = datetimeToDate(start_date_1);
                if (dateselect <= datestart) {
                    document.getElementById("erend_date_1").style.display = "block";
                    document.getElementById("end_date_1").style.border = "1px solid #bd2130";
                    checkError = false;
                } else {
                    document.getElementById("erend_date_1").style.display = "none";
                    document.getElementById("end_date_1").style.border = "1px solid #ced4da";
                }
            }

            if (url1 != '') {
                if (youtube_parser(url1)) {
                    id_youtube = youtube_parser(url1);
                    document.getElementById("erurl1").style.display = "none";
                    document.getElementById("url1").style.border = "1px solid #ced4da";
                } else {
                    document.getElementById("erurl1").style.display = "block";
                    document.getElementById("url1").style.border = "1px solid #bd2130";
                    checkError = false;
                }
            }

            if (checkError == true) {
                $.post('<?php echo base_url('admin/Live_Stream/create'); ?>', {
                    l_title: namelive1,
                    l_Startdate: start_date_1,
                    l_EndDate: end_date_1,
                    l_id_url: id_youtube,
                    ex_id: '<?php echo $this->session->userdata('U_id'); ?>',
                    l_detail: detail
                }).done((res) => {
                    $('#insertLive').modal('hide');
                    toastr.success('เพิ่มข้อมูลสำเร็จ');
                }).fail((xhr, status, error) => {
                    toastr.error('ไม่สามารถเพิ่มข้อมูลได้ โปรดลองใหม่ภายหลัง');
                });
            }
        } else if (func == 'edit') {
            var namelive2 = document.getElementById("namelive2").value;
            var start_date_2 = document.getElementById("start_date_2").value;
            var end_date_2 = document.getElementById("end_date_2").value;
            var url2 = document.getElementById("url2").value;
            if (namelive2 == "") {
                document.getElementById("ernamelive2").style.display = "block";
                document.getElementById("namelive2").style.border = "1px solid #bd2130";
                checkError = false;
            } else {
                document.getElementById("ernamelive2").style.display = "none";
                document.getElementById("namelive2").style.border = "1px solid #ced4da";
            }

            if (start_date_2 == 'วัน/เดือน/ปี เวลา' || start_date_2 == '') {
                document.getElementById("erstart_date_2").style.display = "block";
                document.getElementById("start_date_2").style.border = "1px solid #bd2130";
                checkError = false;
            } else {
                var start_date_2 = document.getElementById("start_date_2").value;
                var dateselect = datetimeToDate(start_date_2)
                var currentDate = new Date();
                if (dateselect <= currentDate) {
                    document.getElementById("erstart_date_2").style.display = "block";
                    document.getElementById("start_date_2").style.border = "1px solid #bd2130";
                    checkError = false;
                } else {
                    document.getElementById("erstart_date_2").style.display = "none";
                    document.getElementById("start_date_2").style.border = "1px solid #ced4da";
                }
            }
            if (end_date_2 == 'วัน/เดือน/ปี เวลา' || end_date_2 == '') {
                document.getElementById("erend_date_2").style.display = "block";
                document.getElementById("end_date_2").style.border = "1px solid #bd2130";
                checkError = false;
            } else {
                var end_date_2 = document.getElementById("end_date_2").value;
                var start_date_2 = document.getElementById("start_date_2").value;
                var dateselect = datetimeToDate(end_date_2);
                var datestart = datetimeToDate(start_date_2);
                if (dateselect <= datestart) {
                    document.getElementById("erend_date_2").style.display = "block";
                    document.getElementById("end_date_2").style.border = "1px solid #bd2130";
                    checkError = false;
                } else {
                    document.getElementById("erend_date_2").style.display = "none";
                    document.getElementById("end_date_2").style.border = "1px solid #ced4da";
                }
            }

            if (url2 != '') {
                if (youtube_parser(url2)) {
                    id_youtube = youtube_parser(url2);
                    document.getElementById("erurl2").style.display = "none";
                    document.getElementById("url2").style.border = "1px solid #ced4da";
                } else {
                    document.getElementById("erurl2").style.display = "block";
                    document.getElementById("url2").style.border = "1px solid #bd2130";
                    checkError = false;
                }
            } else {
                id_youtube = '';
            }

            if (checkError == true) {
                var id = $('.edit_btn').attr('id');
                console.log();
                $.post('<?php echo base_url('admin/Live_Stream/update') ?>/' + id, {
                    l_title: namelive1,
                    l_Startdate: start_date_1,
                    l_EndDate: end_date_1,
                    l_id_url: id_youtube,
                    l_detail: detail
                }).done((res) => {
                    $('#editLive').modal('hide');
                    toastr.success('แก้ไขข้อมูลสำเร็จ');
                }).fail((xhr, status, error) => {
                    toastr.error('ไม่สามารถแก้ไขข้อมูลได้ โปรดลองใหม่ภายหลัง');
                });
            }
        }

    }
</script>