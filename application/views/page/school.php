<style>
    body {
        background-color: #212121;
    }

    h2 {
        color: black;
    }

    #map {
        height: 600px;
        width: 100%;
    }
</style>

<script>
    var map;

    function init() {
        map = new longdo.Map({
            placeholder: document.getElementById('map')
        });
        map.location(longdo.LocationMode.Geolocation);
        map.Ui.Toolbar.visible(false);
        map.Ui.LayerSelector.visible(false);
        map.Ui.Fullscreen.visible(false);
    }
</script>

<div class="container">
    <div class="container p-4 mt-4 card" style="background-color: #f9ed69;">
        <div class="row">
            <div class="col-md-4">
                <h2>ค้นหาโรงเรียน</h2>
            </div>
            <div class="col-md-6">
                <form>
                    <div class="input-group md-form form-sm form-1 pl-0 mt-1">
                        <input style="height: 36px;" class="form-control my-0 py-1" id="search" name="search" value="" placeholder="ค้นหาชื่อโรงเรียน,จังหวัด" type="text" aria-label="Search">
                        <div class="input-group-prepend">
                            <button style="width: 60px;" onclick="click_search();return false;">
                                <span class="w-100" id="btn-reset"><i class="fas fa-search" aria-hidden="true"></i></span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container p-4 mt-4 card">
    <div id="map"></div>
</div>

<script>
    var markers = [];
    var maploca = [];
    var path = "<?= base_url() ?>";
    var locations = [];

    $.get(path + 'api/mapdata', (res) => {
        console.log(res);
        locations = res.map((e) => {
            return [
                e.sc_nameTH + '(' + e.sc_nameEN + ')',
                e.latitude,
                e.longitude
            ];
        })
        initMap();
    });

    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {
                lat: 13.7750905,
                lng: 101.1008421
            },
            zoom: 6
        });

        maploca.push(map);
        setMarkers(map);
    }

    function click_search() {
        txt = document.getElementById('search').value;
        var list = [];
        var h = 0
        for (var i = 0; i < locations.length; i++) {
            if (locations[i][0].search(txt) >= 0) {
                list.push(i);
                h++
            }
        }
        hideAllInfoWindows(maploca[0])
        list.forEach(function(l) {
            console.log(l)
            markers[l].infowindow.open(maploca[0], markers[l]);
        });
    }

    function setMarkers(map) {
        for (var i = 0; i < locations.length; i++) {

            var location = locations[i];
            var locationInfowindow = new google.maps.InfoWindow({
                content: locations[i][0],
            });

            var marker = new google.maps.Marker({
                position: {
                    lat: parseFloat(location[1]),
                    lng: parseFloat(location[2])
                },
                map: map,
                title: location[0],
                infowindow: locationInfowindow
            });

            markers.push(marker);

            google.maps.event.addListener(marker, 'click', function() {
                hideAllInfoWindows(map);
                this.infowindow.open(map, this);
            });

        }
    }

    function hideAllInfoWindows(map) {
        markers.forEach(function(marker) {
            marker.infowindow.close(map, marker);
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGhJrZXYbgVyFaW4VWXI7kVkntUmrnTH8&callback=initMap" async defer></script>