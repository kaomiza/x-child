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

    label {
        margin-bottom: 0px;
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
        display: flex;
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

    .status_live {
        background-color: #a00000;
        color: white;
        width: 40px;
        text-align: center;
        border-radius: 10px;
    }
</style>
<div class="container">
    <div class="p-4 mt-4 card" style="background-color: #a00000;z-index: -1;">
        <div class="row">
            <div class="col-md-4">
                <h2>ไลฟ์สด</h2>
            </div>
        </div>
    </div>

    <div class="live_warpper">
        <div class="live_video_warpper">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/SqwTZv-oa5U" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="list_live_warpper">
            <div class="list_live_box overflow-auto">
                <div class="list_live_item">
                    <div class="card_live">
                        <label>ชื่อการถ่ายทอดสด <label class="status_live">สด</label></label>
                    </div>
                </div>
                <div class="list_live_item">
                    <div class="card_live">
                        <label>ชื่อการถ่ายทอดสด <label class="status_live">สด</label></label>
                    </div>
                </div>
                <div class="list_live_item">
                    <div class="card_live">
                        <label>ชื่อการถ่ายทอดสด <label class="status_live">สด</label></label>
                    </div>
                </div>
                <div class="list_live_item">
                    <div class="card_live">
                        <label>ชื่อการถ่ายทอดสด <label class="status_live">สด</label></label>
                    </div>
                </div>
                <div class="list_live_item">
                    <div class="card_live">
                        <label>ชื่อการถ่ายทอดสด <label class="status_live">สด</label></label>
                    </div>
                </div>
                <div class="list_live_item">
                    <div class="card_live">
                        <label>ชื่อการถ่ายทอดสด <label class="status_live">สด</label></label>
                    </div>
                </div>
                <div class="list_live_item">
                    <div class="card_live">
                        <label>ชื่อการถ่ายทอดสด <label class="status_live">สด</label></label>
                    </div>
                </div>
                <div class="list_live_item">
                    <div class="card_live">
                        <label>ชื่อการถ่ายทอดสด <label class="status_live">สด</label></label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="detail_live_warpper">
        <div class="detail_live_box">
            <div>
                <h2 style="color: #333333;">test</h2>
            </div>
            <div class="">
                123456
            </div>
        </div>
    </div>
</div>
<script>
    const urlParams = new URLSearchParams(window.location.search);
    const myParam = urlParams.get('v');
    console.log(myParam);
</script>