<style>
    body {
        background-color: #feffe4;
    }

    .bannerimg {
        width: 100%;
        height: 700px;
    }

    @media (min-width: 1025px) and (max-width: 1280px) {
        .bannerimg {
            width: 100%;
            height: auto;
        }
    }

    @media (min-width: 768px) and (max-width: 1024px) {
        .bannerimg {
            width: 100%;
            height: auto;
        }
    }

    @media (min-width: 200px) and (max-width: 767px) {
        .bannerimg {
            width: 100%;
            height: auto;
        }
    }

    .content_warpper {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }

    .live_warpper {
        width: 40%;
        border-radius: 10px;
        display: flex;
        flex-direction: column;
    }

    .live_warpper>div:not(:last-child) {
        margin-bottom: 10px;
    }

    .knowledge_warpper {
        width: 59%;
        background-color: white;
        padding: 20px;
        border-radius: 10px;
    }

    .knowledge_warpper>div:not(:last-child) {
        margin-bottom: 10px;
    }

    @media (min-width: 768px) and (max-width: 1024px) {
        .content_warpper {
            flex-direction: column;
            justify-content: center;
        }

        .live_warpper {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .knowledge_warpper {
            width: 100%;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
        }
    }

    @media (min-width: 200px) and (max-width: 767px) {
        .content_warpper {
            flex-direction: column;
            justify-content: center;
        }

        .live_warpper {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .knowledge_warpper {
            width: 100%;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
        }
    }

    .img_live_box {
        border-radius: 10px;
        cursor: pointer;
    }

    @media (min-width: 768px) and (max-width: 1024px) {
        .img_live_box {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    }

    @media (min-width: 200px) and (max-width: 767px) {
        .img_live_box {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    }

    .content_live_box {
        border-radius: 10px;
        background-color: white;
        padding: 20px;
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .content_live_box>div:not(:last-child) {
        margin-bottom: 10px;
        border-bottom: 1px solid rgba(0, 0, 0, .2);
    }

    p {
        margin: 0px;
    }

    .content_live_item {
        padding: 10px 0px;
    }

    .content_knowledge_box {
        display: flex;
        flex-direction: column;
    }

    .content_knowledge_box>div:not(:last-child) {
        border-bottom: 1px solid rgba(0, 0, 0, .2);
    }

    .content_knowledge_item {
        padding: 10px 0px;
        display: flex;
        flex-direction: row;
    }

    .img_knowledge_box {
        width: 40%;
        border-radius: 10px;
    }

    .img_knowledge_box>img {
        border-radius: 10px;
        height: 180px;
    }

    .detail_knowledge_box {
        width: 60%;
        padding: 0px 20px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    @media (min-width: 200px) and (max-width: 767px) {
        .content_knowledge_box>div:not(:last-child) {
            margin-bottom: 20px;
        }

        .content_knowledge_item {
            padding: 0px 0px;
            display: flex;
            flex-direction: column;
        }

        .content_knowledge_item>div:not(:last-child) {
            margin-bottom: 10px;
        }


        .img_knowledge_box {
            width: 100%;
            border-radius: 00px;
        }

        .img_knowledge_box>img {
            border-radius: 0px;
        }

        .detail_knowledge_box {
            width: 100%;
            padding: 0px 0px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }


    }
</style>
<div>
    <img src="<?php echo base_url(); ?>/assets/images/background.png" alt="bg" class="bannerimg">
</div>
<div class="site-section">
    <div class="container">
        <div class="row justify-content-center align-items-stretch section-overlap">

            <div class="col-4 col-sm-4 col-md-2 mb-4 mb-lg-0 p-sm-1 banner-2 h-100 d-flex">
                <a href="<?php echo base_url('school'); ?>">
                    <img class="banner-wrap img-fluid" src="<?php echo base_url(); ?>assets/images/fun_1.png" alt="school">
                </a>
            </div>

            <div class="col-4 col-sm-4 col-md-2 mb-4 mb-lg-0 p-sm-1 banner-2 h-100 d-flex">
                <a title="ฟังก์ชันอ่านนิทาน" href="<?php echo base_url('child_speech'); ?>">
                    <img class="banner-wrap img-fluid" src="<?php echo base_url(); ?>assets/images/fun_2.png" alt="stttts">
                </a>
            </div>

            <div class="col-4 col-sm-4 col-md-2 mb-4 mb-lg-0 p-sm-1 banner-2 h-100 d-flex">
                <a title="วิดีโอความรู้" href="<?php echo base_url('video'); ?>">
                    <img class="banner-wrap img-fluid" src="<?php echo base_url(); ?>/assets/images/fun_3.png" alt="video">
                </a>
            </div>
            <div class="col-4 col-sm-4 col-md-2 mb-4 mb-lg-0 p-sm-1 banner-2 h-100 d-flex">
                <a title="ปรึกษาผู้เชี่ยวชาญ" href="<?php echo base_url('consult'); ?>">
                    <img class="banner-wrap img-fluid" src="<?php echo base_url(); ?>/assets/images/fun_4.png" alt="videocall">
                </a>
            </div>
            <div class="col-4 col-sm-4 col-md-2 mb-4 mb-lg-0 p-sm-1 banner-2 h-100 d-flex">
                <a title="ถ่ายทดสด" href="<?php echo base_url('live'); ?>">
                    <img class="banner-wrap img-fluid" src="<?php echo base_url(); ?>/assets/images/fun_5.png" alt="live">
                </a>
            </div>
            <div class="col-4 col-sm-4 col-md-2 mb-4 mb-lg-0 p-sm-1 banner-2 h-100 d-flex">
                <a title="ติดต่อ" href="<?php echo base_url('contact'); ?>">
                    <img class="banner-wrap img-fluid" src="<?php echo base_url(); ?>/assets/images/fun_6.png" alt="contact">
                </a>
            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">

        <div class="content_warpper">
            <div class="live_warpper">
                <div class="img_live_box">
                    <img class="banner-wrap img-fluid" src="<?php echo base_url(); ?>/assets/images/live-picture-4.png" alt="live">
                </div>
                <div class="content_live_box">
                    <div class="content_live_item">
                        <a href="<?php echo base_url('live'); ?>">
                            <p> [Live 🔴] การถ่ายทอดสดจากผู้เชี่ยวชาญเด็กพิการทางสายตา 25/01/2563</p>
                        </a>
                    </div>
                    <div class="content_live_item">
                        <a href="<?php echo base_url('live'); ?>">
                            <p> [Live 🔴] การถ่ายทอดสดจากผู้เชี่ยวชาญเด็กพิการทางสายตา 25/01/2563</p>
                        </a>
                    </div>
                    <div class="content_live_item">
                        <a href="<?php echo base_url('live'); ?>">
                            <p> [Live 🔴] การถ่ายทอดสดจากผู้เชี่ยวชาญเด็กพิการทางสายตา 25/01/2563</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="knowledge_warpper">
                <div>
                    <h3>
                        ความรู้เกี่ยวกับเด็กพิเศษ
                    </h3>
                </div>
                <div class="content_knowledge_box">
                    <div class="content_knowledge_item">
                        <div class="img_knowledge_box">
                            <img src="<?php echo base_url(); ?>/assets/images/knowledge/1.jpg" width="100%">
                        </div>
                        <div class="detail_knowledge_box">
                            <div>
                                <div>
                                    <a href="#">
                                        <h7>เด็กพิเศษ หมายถึงอะไร?</h7>
                                    </a>
                                </div>
                                <div>
                                    <label>
                                        เด็กพิเศษ คือ เด็กที่มีความต้องการพิเศษในการดูแลและส่งเสริมด้านต่างๆ เป็นพิเศษมากกว่าเด็กปกติทั่วไป อาจต้องจัดการเรียนรู้ให้เหมาะสม
                                    </label>
                                </div>

                            </div>
                            <div>
                                <label><i class="far fa-clock"></i> 18 มีนาคม 2563</label>
                            </div>
                        </div>
                    </div>
                    <div class="content_knowledge_item">
                        <div class="img_knowledge_box">
                            <img src="<?php echo base_url(); ?>/assets/images/knowledge/2.jpg" width="100%">
                        </div>
                        <div class="detail_knowledge_box">
                            <div>
                                <div>
                                    <a href="#">
                                        <h7>เด็กออทิสติกเรียนร่วมกับเด็กปกติได้หรือไม่</h7>
                                    </a>
                                </div>
                                <div>
                                    <label>
                                        เด็กออทิสติกสามารถเรียนร่วมกับเด็กทั่วไปได้หรือไม่ ขึ้นอยู่กับระดับความรุนแรงของปัญหาและความพร้อมบางด้านที่จำเป็น โดยทั่วไปเด็กสามารถเรียนร่วมได้
                                    </label>
                                </div>

                            </div>
                            <div>
                                <label><i class="far fa-clock"></i> 18 มีนาคม 2563</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- <div class="site-section">
    <div class="container">

        <div class="row">
            <div class="title-section text-center col">
                <h2 class="text-uppercase">ความรู้เกี่ยวกับเด็กพิเศษ</h2>
            </div>
        </div>
        <div id="show">
            <div class="row" id="subrow0">

            </div>
        </div>

        <div class="row">
            <div class="col text-center">
                <a href="#" id="addshow" class="btn btn-primary  pl-5 pr-5">ดูเพิ่ม</a>
            </div>
        </div>

    </div>
</div> -->

<!-- <div class="site-section">
    <div class="container">
        <div class="row">
            <div class="title-section text-center col-12">
                <h2 class="text-uppercase">ข่าวประชาสัมพันธ์การถ่ายทอดสด</h2>
            </div>
        </div>
        <div class="row" style="background-color: white;">
            <div class="col block-3 products-wrap">
                <div class="row item">
                    <div class="col-md-6">
                        <a> <img class="owl-image raimg" src="<?php echo base_url(); ?>/assets/images/about.jpg" alt="Image"></a>
                    </div>
                    <div class="col-md-6">
                        <hr width="90%" size="50%" color="#8c92a0">
                        <a href="<?php echo base_url('live'); ?>">
                            <p> [Live 🔴] การถ่ายทอดสดจากผู้เชี่ยวชาญเด็กพิการทางสายตา 25/01/2563</p>
                        </a>
                        <hr width="90%" size="50%" color="#8c92a0">
                        <a href="<?php echo base_url('live'); ?>">
                            <p> [Live 🔴] การถ่ายทอดสดจากผู้เชี่ยวชาญเด็กที่มีความบกพร่องด้านการฟัง 25/01/2563</p>
                        </a>
                        <hr width="90%" size="50%" color="#8c92a0">
                        <a href="<?php echo base_url('live'); ?>">
                            <p> [Live 🔴] การให้ความรู้จากผู้เชี่ยวชาญ 05/11/2562</p>
                        </a>
                        <hr width="90%" size="50%" color="#8c92a0">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div style=" padding-bottom: 2em; ">
    <div class="container">
        <div class="row" style="background-color: white; margin:0px; border-radius:10px;">
            <div style="
                    padding-top: 20px;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    width:100%;
                ">
                <div>
                    <h3>
                        ข่าวประชาสัมพันธ์อื่นๆ
                    </h3>
                </div>
            </div>
            <div>
                
            </div>
            <div class="col block-3 products-wrap">
                <div class="owl-carousel owl-theme">

                    <div class="row item">
                        <div class="col-md-6">
                            <a href="<?php echo base_url('news1'); ?>"><img class="owl-image raimg" src="<?php echo base_url(); ?>/assets/images/news/n-1.jpg" alt="Image"></a>
                        </div>
                        <div class="col-md-6">
                            <h4 class="text-dark"><a href="<?php echo base_url('news1'); ?>">สกัด "เด็กพิเศษ" หลุดระบบ สพฐ.เปิดยุทธศาสตร์เชิงรุกขับเคลื่อนงานการศึกษาพิเศษ</a></h4>
                            <p style="margin-top: 2%;" class="text-dark"> ลูกเกิดมามีร่างกายครบ 32 ประการ คือ สุดยอดปรารถนาของพ่อแม่ทุกคน ที่ต้องการเห็นลูกมีทั้งร่างกาย รวมถึงจิตใจ ...</p>
                            <a style="margin-top: 10%;" href="<?php echo base_url('news1'); ?>" class="btn btn-info"> อ่านเพิ่มเติม </a>
                        </div>
                    </div>

                    <div class="row item">
                        <div class="col-md-6">
                            <a href="<?php echo base_url('news2'); ?>"> <img class="owl-image raimg" src="<?php echo base_url(); ?>/assets/images/news/n-2.jpg" alt="Image"></a>
                        </div>
                        <div class="col-md-6">
                            <h4 class="text-dark"><a href="<?php echo base_url('news2'); ?>">เปลี่ยน “ภาระ” เป็น “พลัง” จูงใจคนพิการก้าวข้ามความบกพร่องของร่างกาย</a></h4>
                            <p style="margin-top: 2%;" class="text-dark"> เปลี่ยน “ภาระ” เป็น “พลัง” ก้าวข้ามความบกพร่องของร่างกาย ที่ไม่ได้เป็นอุปสรรคของชีวิตอีกต่อไป โดย เอ็ม บี เค กรุ๊ป ได้ร่วมกับองค์กรที่พัฒนาศักยภาพ ...</p>
                            <a style="margin-top: 10%;" href="<?php echo base_url('news2'); ?>" class="btn btn-info"> อ่านเพิ่มเติม </a>
                        </div>
                    </div>

                    <div class="row item">
                        <div class="col-md-6">
                            <a href="<?php echo base_url('news3'); ?>"> <img class="owl-image raimg" src="<?php echo base_url(); ?>/assets/images/news/n-3.jpg" alt="Image"></a>
                        </div>
                        <div class="col-md-6">
                            <h4 class="text-dark"><a href="<?php echo base_url('news3'); ?>"> เด็กพิการขอนแก่น คว้า 1 เหรียญเงิน 2 ทองแดง กีฬาเยาวชนโลกชิงแชมป์โลก</a></h4>
                            <p style="margin-top: 2%;" class="text-dark"> ชื่อนชมคนเก่ง! เด็กพิการ ร.ร.ศรีสังวาลย์ขอนแก่น คว้า 1 เหรียญเงิน 2 เหรียญทองแดง การแข่งขันกีฬาเยาวชนโลกชิงแชมป์โลก ...</p>
                            <a style="margin-top: 10%;" href="<?php echo base_url('news3'); ?>" class="btn btn-info"> อ่านเพิ่มเติม </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        autoplay: true,
        items: 1,
    })
</script>
<script>
    jQuery(document).ready(function($) {
        var start = 0;
        var row = 0;
        var path = "<?= base_url() ?>";
        load_info(start);

        function load_info(start) {
            $.get(path + 'api/knowledge/' + start, (res) => {
                read_info(res);
            });
        }

        function read_info(result) {
            if (result != []) {
                var show = $('#show');
                show.append(
                    '<div class="row" id="subrow' + row + '">' +
                    '</div>'
                );
                var subrow = $('#subrow' + row + '');
                for (var i = 0; i < result.length; i++) {
                    subrow.append(
                        `<div class="col-12 col-md-4 col-xl-3">
                        <a href="<?php echo base_url('knowledge'); ?>` + i + `"> 
                        <img class="illustration" src="<?php echo base_url(); ?>` + result[i].k_img + `" alt="` + result[i].k_title + `"></a>
                        <div class="title card shadow-sm p-3 mb-5 bg-white rounded">
                        <h6 class="text-dark"><a href="#">` + result[i].k_title + `</a></h6>
                        </div>
                        </div>`
                    );
                }
                row += 1;
                start += result.length;
            } else {
                var show = $('#show');
                show.append(
                    `<div class="row text-center">
                        <h2>Not Found</h2>
                    </div>`
                );
            }
        }

        $(document).on('click', '#addshow', function() {
            load_info(start);
            $("html, body").animate({
                scrollTop: $("#addshow").offset().top - 600
            }, 800);

            return false;
        });

    });
</script>