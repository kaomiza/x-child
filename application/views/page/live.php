<style>
    body {
        background-color: #212121;
    }

    .site-footer{
        display: none;
    }

    h2 {
        color: white;
    }

    h3,
    p {
        color: black;
    }

    .live_warpper {
        display: flex;
        flex-direction: row;
    }

    .live_video_warpper {
        display: flex;
        width: 70%;
        padding: 20px 10px 10px 0px;
    }

    .list_live_warpper {
        display: flex;
        width: 30%;
        padding: 20px 0px 10px 0px;
    }

    @media (min-width: 200px) and (max-width: 767px) {
        .live_warpper {
            flex-direction: column;
        }

        .live_video_warpper {
            width: 100%;
            padding: 10px 0px;
        }

        .list_live_warpper {
            width: 100%;
            height: auto;
            padding: 10px 0px 20px 0px;
        }
    }

    .list_live_box {
        display: flex;
        flex-direction: column;
        width: 100%;
        background-color: white;
        height: 800px;
    }


    @media (min-width: 768px) and (max-width: 1024px) {
        .list_live_box {
            height: 400px;
        }
    }

    @media (min-width: 200px) and (max-width: 767px) {
        .list_live_box {
            height: 300px;
        }
    }

    .list_live_item {
        display: flex;
    }

    .card_live {
        color: #212121;
        width: 100%;
        border-bottom: 1px solid #00000021;
        padding: 20px 10px;
        cursor: pointer;
    }

    .card_live:hover {
        background-color: #c9f0ff66;
    }

    .detail_live_warpper {
        display: flex;
        margin-bottom: 20px;
    }

    .detail_live_box {
        background-color: white;
        height: auto;
        width: 100%;
        padding: 20px;
        display: flex;
        flex-direction: column;
    }

    .detail_live_box>div {
        word-wrap: break-word;
    }

    .detail_live_box>div:not(:last-child) {
        margin-bottom: 10px;
    }
</style>
<div class="container-fluid">
    <div class="p-4 mt-4" style="background-color: #a00000;z-index: -1;">
        <div class="row">
            <div class="col-md-4">
                <h2>ไลฟ์สด</h2>
            </div>
        </div>
    </div>

    <div class="live_warpper">
        <div class="live_video_warpper" id="live_video">
        </div>
        <div class="list_live_warpper">
            <div class="list_live_box overflow-auto" id="list_live">
            </div>
        </div>
    </div>
    <div class="detail_live_warpper">
        <div class="detail_live_box" id="live_detail">

        </div>
    </div>
</div>
<script>
    const urlParams = new URLSearchParams(window.location.search);
    const myParam = urlParams.get('v');
    get_list_livestream(myParam);

    function get_list_livestream(watch) {
        $.get('<?php echo base_url('Live/getAll'); ?>').done((res) => {
            if (res.data.length == 0) {
                console.log(res);
                $('#live_video,#list_live,#live_detail').append(`
                <div style="background-color: White;" class="d-flex justify-content-center align-items-center w-100">
                liveStream Not Found
                </div>
                `);
            } else {
                res.data.forEach(element => {
                    $('#list_live').append(`
                <a class="list_live_item" href="` + '<?php echo base_url('live'); ?>?v=' + element.l_id + `">
                    <div class="card_live">
                        ` + element.l_title + ` <span class="badge badge-danger">สด</span>
                    </div>
                </a>
                `);
                    if (element.l_id == watch) {
                        $('#live_video').append(`
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/` + element.l_id_url + `?autoplay=1&mute=1" frameborder="0" allowfullscreen></iframe>
                            </div>
                        `);
                        $('#live_detail').append(`
                            <div data-toggle="collapse" href="#collapse-title" role="button" aria-expanded="false" aria-controls="collapse-title">
                                <h2 style="color: #333333;">` + element.l_title + `</h2>
                            </div>
                            <div>
                                ` + element.l_detail + `
                            </div>
                        `);
                    }
                });
                if (watch == null) {
                    $('#live_video').append(`
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/` + res.data[0].l_id_url + `?autoplay=1&mute=1" frameborder="0" allowfullscreen></iframe>
                    </div>
                `);
                    $('#live_detail').append(`
                    <div>
                        <h2 style="color: #333333;">` + res.data[0].l_title + `</h2>
                    </div>
                    <div>
                        ` + res.data[0].l_detail + `
                    </div>
                `);
                }
            }

        });
    }
</script>