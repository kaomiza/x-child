<style>
    body {
        background-color: #212121;
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
        border-radius: 5px;
        height: 500px;
    }


    @media (min-width: 768px) and (max-width: 1024px) {
        .list_live_box {
            height: 300px;
        }
    }

    @media (min-width: 200px) and (max-width: 767px) {
        .list_live_box {
            height: 200px;
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
        border-radius: 5px;
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
<div class="container">
    <div class="p-4 mt-4 card" style="background-color: #ffffff;z-index: -1;">
        <div class="row">
            <div class="col-md-4">
                <h2 class="text-dark">วิดีโอความรู้</h2>
            </div>
        </div>
    </div>

    <div class="sticky-top col rounded mt-3" style="background-color: #ffffff;">
        <div class="row p-2">
            <div class="col-12 col-md-4">
                <select name="selectSm" id="selectSm" class="form-control m-1" required="">
                    <option value="0">Please select</option>
                    <option value="1">เด็กที่มีความบกพร่องทางสติปัญญา</option>
                    <option value="2">เด็กที่มีความบกพร่องทางการได้ยิน</option>
                    <option value="3">เด็กที่มีความบกพร่องทางการมองเห็น</option>
                    <option value="4">เด็กที่มีความบกพร่องทางร่างกายและสุขภาพ</option>
                    <option value="5">เด็กที่มีความบกพร่องทางการพูดและภาษา</option>
                    <option value="6">เด็กที่มีความบกพร่องทางพฤติกรรมและอารมณ์</option>
                    <option value="7">เด็กที่มีปัญหาทางการเรียนรู้</option>
                    <option value="8">เด็กออทิสติก</option>
                    <option value="9">เด็กพิการซ้ำซ้อน</option>
                    <option value="10">test1</option>
                    <option value="11">test2</option>
                </select>
            </div>
            <div class="col-12 col-md-8">
                <div class="input-group m-1">
                    <input type="text" class="form-control" placeholder="Search this blog">
                    <div class="input-group-append">
                        <button class="btn btn-secondary" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
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
    var similarity = stringSimilarity.compareTwoStrings('ยินดีที่ได้รู้จักครับ', 'ยินดีที่ได้รู้จักค่ะ');
    console.log(similarity);
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
                <a class="list_live_item" href="` + '<?php echo base_url('live'); ?>?v=' + element.l_id_url + `">
                    <div class="card_live">
                        ` + element.l_title + ` <span class="badge badge-danger">สด</span>
                    </div>
                </a>
                `);
                    if (element.l_id_url == watch) {
                        $('#live_detail').append(`
                    <div>
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
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/` + res.data[0].l_id_url + `" frameborder="0" allowfullscreen></iframe>
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
                } else {
                    $('#live_video').append(`
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/` + watch + `" frameborder="0" allowfullscreen></iframe>
                    </div>
                `);
                }
            }

        });
    }
</script>