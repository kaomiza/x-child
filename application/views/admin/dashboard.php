<div class="main-margin padding_main">
    <div class="padding_main bgWhite mainBoxRadius">
        <div>
            <h1 class="h1-title">Dashboard</h1>
        </div>
    </div>
    <div class="bgWhite padding_main mainBoxRadius">
        <div class="box-content">
            <div class="box-item">
                <div class="cardBox main-margin">
                    <div class="main-margin">
                        <div>
                            <h1 class="body__text-title">จำนวนเอกสาร</h1>
                        </div>
                        <div>
                            <img src="<?php echo base_url(); ?>assets/images/admin/document.png">
                        </div>
                        <div>
                            <h1 id="doc" class="h1-title"></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-item">
                <div class="cardBox main-margin">
                    <div class="main-margin">
                        <div>
                            <h1 class="body__text-title">จำนวนวิดีโอ</h1>
                        </div>
                        <div>
                            <img src="<?php echo base_url(); ?>assets/images/admin/video-player.png">
                        </div>
                        <div>
                            <h1 id="vdo" class="h1-title"></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-item">
                <div class="cardBox main-margin">
                    <div class="main-margin">
                        <div>
                            <h1 class="body__text-title">จำนวนเด็กพิเศษ</h1>
                        </div>
                        <div>
                            <img src="<?php echo base_url(); ?>assets/images/admin/boy.png">
                        </div>
                        <div>
                            <h1 id="child" class="h1-title"></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-item">
                <div class="cardBox main-margin">
                    <div class="main-margin">
                        <div>
                            <h1 class="body__text-title">จำนวนผู้ปกครอง</h1>
                        </div>
                        <div>
                            <img src="<?php echo base_url(); ?>assets/images/admin/parents.png">
                        </div>
                        <div>
                            <h1 id="parent" class="h1-title"></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-item">
                <div class="cardBox main-margin">
                    <div class="main-margin">
                        <div>
                            <h1 class="body__text-title">จำนวนผู้เชี่ยวชาญ</h1>
                        </div>
                        <div>
                            <img src="<?php echo base_url(); ?>assets/images/admin/admin.png">
                        </div>
                        <div>
                            <h1 id="expert" class="h1-title"></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div>

    <script>
        $.get('<?php echo base_url('admin/Home_admin/countAll'); ?>').done((res) => {
            console.log(res);
            $('#doc').html(res.document_info);
            $('#vdo').html(res.video_info);
            $('#child').html(res.children);
            $('#parent').html(res.parent);
            $('#expert').html(res.expert);
        });
    </script>