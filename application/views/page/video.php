<style>
    body {
        background-color: #212121;
    }

    .site-footer {
        display: none;
    }

    .border-background {
        box-shadow: 0 4px 2px -2px rgba(0, 0, 0, 0.2);
    }

    @media only screen and (min-width: 769px) {
        .border-l {
            border-left: 2px solid #212121;
        }

        .border-r {
            border-right: 2px solid #212121;
        }

        .list-live-content {
            overflow: auto !important;
            max-height: 1000px;
        }
    }

    .details {
        color: #111111;
        background-color: #ECECEC;
        padding: 5px;
    }

    .card_live {
        color: #212121;
        width: 100%;
        margin: 2px 0px 2px 0px;
        cursor: pointer;
    }

    .card_live:hover {
        background-color: #c9f0ff66;
    }

    .text-o {
        box-orient: vertical;
        -webkit-box-orient: vertical;
        display: box;
        display: -webkit-box;
        max-height: 2.5em;
        -webkit-line-clamp: 2;
        overflow: hidden;
        line-height: 1.25;
        text-overflow: ellipsis;
        font-weight: normal;
    }

    [data-toggle="collapse"] .fa:after {
        content: "\f078";
    }

    [aria-expanded="true"] .fa:after {
        content: "\f077";
    }

    [data-toggle="collapse"].collapsed .fa:after {
        content: "\f078";
    }
</style>
<style>
    /* Absolute Center Spinner */
    .loading {
        position: fixed;
        z-index: 999;
        height: 2em;
        width: 2em;
        overflow: show;
        margin: auto;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        z-index: 2000;
    }

    /* Transparent Overlay */
    .loading:before {
        content: '';
        display: block;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: radial-gradient(rgba(20, 20, 20, .8), rgba(0, 0, 0, .8));

        background: -webkit-radial-gradient(rgba(20, 20, 20, .8), rgba(0, 0, 0, .8));
    }

    /* :not(:required) hides these rules from IE9 and below */
    .loading:not(:required) {
        /* hide "loading..." text */
        font: 0/0 a;
        color: transparent;
        text-shadow: none;
        background-color: transparent;
        border: 0;
    }

    .loading:not(:required):after {
        content: '';
        display: block;
        font-size: 10px;
        width: 1em;
        height: 1em;
        margin-top: -0.5em;
        -webkit-animation: spinner 150ms infinite linear;
        -moz-animation: spinner 150ms infinite linear;
        -ms-animation: spinner 150ms infinite linear;
        -o-animation: spinner 150ms infinite linear;
        animation: spinner 150ms infinite linear;
        border-radius: 0.5em;
        -webkit-box-shadow: rgba(255, 255, 255, 0.75) 1.5em 0 0 0, rgba(255, 255, 255, 0.75) 1.1em 1.1em 0 0, rgba(255, 255, 255, 0.75) 0 1.5em 0 0, rgba(255, 255, 255, 0.75) -1.1em 1.1em 0 0, rgba(255, 255, 255, 0.75) -1.5em 0 0 0, rgba(255, 255, 255, 0.75) -1.1em -1.1em 0 0, rgba(255, 255, 255, 0.75) 0 -1.5em 0 0, rgba(255, 255, 255, 0.75) 1.1em -1.1em 0 0;
        box-shadow: rgba(255, 255, 255, 0.75) 1.5em 0 0 0, rgba(255, 255, 255, 0.75) 1.1em 1.1em 0 0, rgba(255, 255, 255, 0.75) 0 1.5em 0 0, rgba(255, 255, 255, 0.75) -1.1em 1.1em 0 0, rgba(255, 255, 255, 0.75) -1.5em 0 0 0, rgba(255, 255, 255, 0.75) -1.1em -1.1em 0 0, rgba(255, 255, 255, 0.75) 0 -1.5em 0 0, rgba(255, 255, 255, 0.75) 1.1em -1.1em 0 0;
    }

    /* Animation */

    @-webkit-keyframes spinner {
        0% {
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -ms-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -ms-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    @-moz-keyframes spinner {
        0% {
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -ms-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -ms-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    @-o-keyframes spinner {
        0% {
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -ms-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -ms-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    @keyframes spinner {
        0% {
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -ms-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -ms-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }
</style>
<div class="loading" id="page-load">Loading&#8230;</div>
<div class="container-fluid">

    <nav class="row navbar navbar-expand-lg sticky-top border-background mt-1" style="background-color: #797a7e;">
        <div class="navbar-brand">
            <h2 class="text-white mb-0" onclick="reload()" style="cursor:pointer;">วิดีโอความรู้</h2>
        </div>
        <div class="float-right">
            <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="fas fa-search"></i></span>
            </button>
        </div>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">

            <div class="col-12 col-md-2 mb-1">
                <select name="selectSm" id="selectSm" class="custom-select" required="">
                </select>
            </div>
            <div class="col-12 col-md-6">
                <form onsubmit="return search_video()">
                    <div class="row">
                        <div class="col-12 col-md-6 mb-1">
                            <input id="search-value" type="text" class="form-control" placeholder="Search Video">
                        </div>
                        <div class="col-12 col-md-2 mb-1">
                            <button class="btn btn-light btn-block" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </nav>

    <div class="pt-1 pb-1">

        <div class="text-center d-none" id="load-search-word">
            <div class="col-12 p-5 d-flex justify-content-center align-items-center">
                <div class="spinner-border text-light m-5" role="status" style="width: 5rem; height: 5rem;">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        </div>

        <div id="not-found" class="text-center"></div>

        <div id="search-menu" style="background-color: #ffffff;margin-right:-15px;margin-left: -15px;">
            <div class="row ml-1 mr-1" id="search-menu-content">

            </div>

            <div id="loading-search" class="row ml-1 mr-1 d-none">
                <div class="col-12 p-3 d-flex justify-content-center">
                    <div class="spinner-border" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
            </div>
        </div>

        <div id="list-menu" style="background-color: #ffffff;margin-right:-15px;margin-left: -15px;">
            <div class="row ml-1 mr-1" id="list-menu-content">

            </div>
            <div id="loading" class="row ml-1 mr-1 d-none">
                <div class="col-12 p-3 d-flex justify-content-center">
                    <div class="spinner-border" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" id="content">
            <div class="col-12 col-md-8 p-0" style="background-color: #ffffff;">
                <div id="live_video">
                </div>
                <div class="p-3" id="live_detail">
                </div>
            </div>
            <div class="col-12 col-md-4 border-l p-0" style="background-color: #ffffff;">
                <div class="list-live-content" id="list_live">
                </div>
            </div>
        </div>

    </div>
</div>
<script>
    const urlParams = new URLSearchParams(window.location.search);
    const myParam = urlParams.get('v');
    var type_video;

    if (myParam == '') {
        window.location.href = "<?php echo base_url('Video'); ?>";
    }
    if (myParam == null) {
        $('#content').empty();
        loadVideo();
    } else {
        $('#list-menu').empty();
        get_list_livestream(myParam);
    }
    setTimeout(function() {
        $('#page-load').addClass('d-none');
    }, 2000);

    function reload() {
        window.location.replace("<?php echo base_url('Video'); ?>");
    }

    $.get('<?php echo base_url('Video/loadTypeVideo'); ?>').done((res) => {
        $('#selectSm').empty();
        $('#selectSm').append(`<option value="0">ทั้งหมด</option>`);
        res.data.forEach(element => {
            $('#selectSm').append(`<option value="` + element.tv_id + `">` + element.tv_name + `</option>`);
        })
    });


    function loadVideo() {
        var start = 0;
        var end = 8;

        $.get('<?php echo base_url('Video/getLoad'); ?>/' + start + '/' + 12).done((res) => {
            res.data.forEach(element => {
                $('#list-menu-content').append(`
                    <div class="col-12 col-md-3 p-1">
                        <a href="<?php echo base_url('Video?v='); ?>` + element.v_id + `">
                            <img class="img-fluid" src="https://i.ytimg.com/vi/` + element.v_path_video + `/hqdefault.jpg">
                            <div class="details">
                            ` + element.v_name + ` <br><span><small> อัพเดต · ` + moment(element.v_register_date, "YYYYMMDD").fromNow() + ` </small></span>
                            </div>
                        </a>
                    </div>
                `);
            })
        });

        $(window).scroll(function() {

            var position = $(window).scrollTop();
            var bottom = $(document).height() - $(window).height();

            if (position == bottom) {
                start = start + end;
                $('#loading').removeClass('d-none');
                $('#loading').addClass('d-block');
                setTimeout(function() {
                    $.get('<?php echo base_url('Video/getLoad'); ?>/' + start + '/' + end).done((res) => {
                        if (res.data.length == 0) {
                            $('#loading').empty();
                        }
                        res.data.forEach(element => {
                            $('#loading').removeClass('d-block');
                            $('#loading').addClass('d-none');
                            $('#list-menu-content').append(`
                                <div class="col-12 col-md-3 p-1">
                                    <a href="<?php echo base_url('Video?v='); ?>` + element.v_id + `">
                                        <img class="img-fluid" src="https://i.ytimg.com/vi/` + element.v_path_video + `/hqdefault.jpg">
                                        <div class="details">
                                        ` + element.v_name + ` <br><span><small> อัพเดต · ` + moment(element.v_register_date, "YYYYMMDD").fromNow() + ` </small></span> 
                                        </div>
                                    </a>
                                </div>
                            `);
                        })
                    });
                }, 1000);

            }

        });

    }

    function loadSearch(list) {
        var start = 12;
        var end = 8;

        for (var i in list) {
            if (i < 12) {
                $('#search-menu-content').append(`
                    <div class="col-12 col-md-3 p-1">
                        <a href="<?php echo base_url('Video?v='); ?>` + list[i].v_id + `">
                            <img class="img-fluid" src="https://i.ytimg.com/vi/` + list[i].v_path_video + `/hqdefault.jpg">
                            <div class="details">
                            ` + list[i].v_name + ` <br><span><small> อัพเดต · ` + moment(list[i].v_register_date, "YYYYMMDD").fromNow() + ` </small></span>
                            </div>
                        </a>
                    </div>
                `);
            }
        }

        $(window).scroll(function() {

            var position = $(window).scrollTop();
            var bottom = $(document).height() - $(window).height();

            if (position == bottom) {

                $('#loading-search').removeClass('d-none');
                $('#loading-search').addClass('d-block');
                setTimeout(function() {
                    if (start > list.length) {
                        $('#loading-search').empty();
                    } else {
                        $('#loading-search').removeClass('d-block');
                        $('#loading-search').addClass('d-none');
                        for (var i in list) {
                            if (i >= start && i < (start + end)) {
                                $('#search-menu-content').append(`
                                <div class="col-12 col-md-3 p-1">
                                    <a href="<?php echo base_url('Video?v='); ?>` + list[i].v_id + `">
                                        <img class="img-fluid" src="https://i.ytimg.com/vi/` + list[i].v_path_video + `/hqdefault.jpg">
                                        <div class="details">
                                        ` + list[i].v_name + ` <br><span><small> อัพเดต · ` + moment(list[i].v_register_date, "YYYYMMDD").fromNow() + ` </small></span>
                                        </div>
                                    </a>
                                </div>
                            `);
                            }
                        }
                        start = start + end;
                    }
                }, 1000);
            }

        });
    }


    async function get_list_livestream(watch) {
        $('#live_video').empty();
        await $.get('<?php echo base_url('Video') ?>/getById/' + watch).done((res) => {
            type_video = res.tv_id;
            $('#live_video').append(`
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/` + res.v_path_video + `" frameborder="0" allowfullscreen></iframe>
                </div>
            `);
            $('#live_detail').append(`
                <div class="d-flex align-items-center" style="cursor: pointer;" data-toggle="collapse" href="#collapse-title" role="button" aria-expanded="false" aria-controls="collapse-title">
                    <h2 style="color: #333333;">` + res.v_name + `</h2> 
                    <i class="fa ml-auto"></i>
                </div>
                <div class="collapse" id="collapse-title">
                    <span>
                        ` + res.v_detail + `
                    </span>
                </div>
            `);
        });

        await $.get('<?php echo base_url('Video/getList'); ?>/' + type_video).done((res) => {
            if (res.data.length == 0) {
                $('#live_video').append(`
                <div style="background-color: White;padding-top:18%;padding-bottom:18%;" class="d-flex justify-content-center align-items-center w-100">
                liveStream Not Found
                </div>
                `);
                $('#list_live,#live_detail').append(`
                <div style="background-color: White;padding-top:80px;padding-bottom:80px;" class="d-flex justify-content-center align-items-center w-100">
                liveStream Not Found
                </div>
                `);
            } else {
                res.data.forEach(element => {
                    $('#list_live').append(`
                        <a href="` + '<?php echo base_url('Video'); ?>?v=' + element.v_id + `">
                            <div class="row card_live p-1">
                                <div class="col-4 col-md-4 p-0">
                                    <img class="img-fluid" src="https://i.ytimg.com/vi_webp/` + element.v_path_video + `/mqdefault.webp"/>
                                </div>
                                <div class="col-8 col-md-8 pl-1">
                                    <div class="col-12 p-0">
                                        <p class="text-o m-0"> ` + element.v_name + ` </p>
                                    </div>
                                    <div class="col-12 p-0">
                                        <span class="text-o text-justify p-0" style="font-size:12px;opacity: .6;">วันที่อัพข้อมูล: ` + element.v_register_date + `</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    `);
                });
            }
        });
    }

    function search_video() {
        var keyword = $('#search-value').val();
        var type = $('#selectSm').val();
        if (keyword == '') {
            alert('กรุณากรอกข้อมูลค้นหา');
            return false;
        }
        var rateLow = [];
        var rateMid = [];
        var rateHigth = [];
        $('#list-menu').empty();
        $('#content').empty();
        $('#not-found').empty();
        $('#search-menu-content').empty();
        $('#load-search-word').removeClass('d-none');
        $('#load-search-word').addClass('d-block');
        $.post('<?php echo base_url('Video/search') ?>', {
            type: type
        }).done((res) => {
            $('#load-search-word').removeClass('d-block');
            $('#load-search-word').addClass('d-none');
            res.data.forEach(element => {
                var similarity = stringSimilarity.compareTwoStrings(keyword, element.v_name);
                if (similarity > 0 && similarity <= 0.3) {
                    rateLow.push(element);
                } else if (similarity > 0.3 && similarity <= 0.6) {
                    rateMid.push(element);
                } else if (similarity > 0.6 && similarity <= 1) {
                    rateHigth.push(element);
                }
            });
            var list1 = rateHigth.concat(rateMid);
            var list2 = list1.concat(rateLow);
            if (list2.length == 0) {
                $('#not-found').empty();
                $('#not-found').append(`
                    <div style="padding-top: 10%;color: white;">
                        <div>
                            <img style="width: 20%;margin-bottom: 2%;" src="<?php echo base_url('assets/images/not-found.svg') ?>" alt="not-found">
                            <h3>ไม่พบผลลัพธ์</h3>
                            <p>ลองใช้คีย์เวิร์ดอื่นๆ ในการค้นหา</p>
                        </div>
                    </div>
                `);
            } else {
                loadSearch(list2);
            }
        });
        return false;
    }
</script>