<style>
    h2 {
        color: black;
    }

    td {
        word-break: break-word;
    }

    tbody tr {
        cursor: pointer;
    }

    .border {
        border: 3px solid #eee !important;
    }

    .map {
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

<div class="container p-0">
    <div class="p-4 mt-1 rounded" style="background-color: #f9ed69;z-index: -1;">
        <div class="row">
            <div class="col-12 col-md-4">
                <h2>ค้นหาโรงเรียน</h2>
            </div>
        </div>
    </div>

    <div class="mt-1 mb-1 pt-3 pb-3 rounded" style="background-color: #ffffff;z-index: -1;">
        <div class="form-inline">
            <div class="form-group col-md-3 col-sm-6">
                <label for="provice" class="col-sm-2 col-form-label">จังหวัด</label>
                <div class="col-sm-10">
                    <select name="provice" id="provice" class="form-control w-100">
                    </select>
                </div>
            </div>

            <div class="form-group col-md-3 col-sm-6">
                <label for="amphure" class="col-sm-2 col-form-label">อำเภอ</label>
                <div class="col-sm-10">
                    <select name="amphure" id="amphure" class="form-control w-100" disabled="">
                    </select>
                </div>
            </div>

            <div class="form-group col-md-3 col-sm-6">
                <label for="district" class="col-sm-2 col-form-label">ตำบล</label>
                <div class="col-sm-10">
                    <select name="district" id="district" class="form-control w-100" disabled="">
                    </select>
                </div>
            </div>

            <div class="form-group col-md-3 col-sm-6">
                <div class="input-group col">
                    <input class="form-control" id="search" value="" placeholder="ค้นหาชื่อโรงเรียน,จังหวัด" type="text" aria-label="Search">
                    <div class="input-group-prepend">
                        <button type="button" class="btn btn-primary" onclick="click_search()">
                            <i class="fas fa-search" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="m-2 d-none" id="table-search">
            <table class="table table-sm table-bordered table-hover responsive" style="width:100%">
                <thead>
                    <tr>
                        <th style="width: 50%">โรงเรียน</th>
                        <th style="width: 50%">ที่อยู่</th>
                    </tr>
                </thead>
                <tbody id="result-search">

                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-1 mb-1 border border-light rounded">
        <div class="map" id="map"></div>
    </div>
</div>



<script>
    var markers = [];
    var maploca = [];
    var path = "<?= base_url() ?>";
    var locations = [];
    var map;

    $.get(path + 'Api/Mapdata', (res) => {
        locations = res.map((e) => {
            return {
                "id": e.sc_id,
                "nameTH": e.sc_nameTH,
                "nameEN": e.sc_nameEN,
                "typeName": e.tsc_name,
                "latitude": e.latitude,
                "longitude": e.longitude,
                "address": e.sc_house_no + ' หมู่ ' + ((e.sc_village_no != '') ? e.sc_village_no : '-') + 'ตำบล ' +
                    e.DISTRICT_NAME.trim() + 'อำเภอ ' + e.AMPHUR_NAME.trim() + 'จังหวัด ' + e.PROVINCE_NAME.trim() + ' ' + e.POSTCODE
            };
        });
        console.log(res);
        console.log(locations);
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

        setMarkers(map);
        google.maps.event.addListener(map, 'click', function() {
            markers.forEach(function(marker) {
                if (marker.getAnimation() !== null) {
                    marker.setAnimation(null);
                }
                marker.infowindow.close(map, marker);
            });
        });
    }

    function find_position(id_marker) {
        hideAllInfoWindows(map);
        markers[id_marker].infowindow.open(map, markers[id_marker]);
        var center = new google.maps.LatLng(locations[id_marker].latitude, locations[id_marker].longitude);
        map.zoom = 11;
        map.panTo(center);
    }

    function click_search() {
        keyword = document.getElementById('search').value;
        if (keyword == '') {
            alert('กรุณากรอกคำค้นหา');
            return false;
        }
        $('#table-search').addClass('d-block');
        $("#result-search").empty();
        var list = [];
        for (var i = 0; i < locations.length; i++) {
            var similarity = stringSimilarity.compareTwoStrings(keyword, locations[i].nameTH + ',' + locations[i].nameEN);
            if (similarity > 0) {
                list.push({
                    "id_marker": i,
                    "similarity": similarity
                });
            }
        }
        if (list.length == 0) {
            $("#result-search").append(`
                <tr>
                    <td colspan="2" class="text-center"> Not Found</td>
                </tr>
            `);
        }
        hideAllInfoWindows(map);
        list.sort((a, b) => parseFloat(b.similarity) - parseFloat(a.similarity));
        list.forEach(function(element) {
            $("#result-search").append(
                `<tr onclick="find_position(` + element.id_marker + `)">
                    <td>` + locations[element.id_marker].nameTH + '(' + locations[element.id_marker].nameEN + ')' + `</td>
                    <td>` + locations[element.id_marker].address + `</td>
                </tr>`
            );
            markers[element.id_marker].infowindow.open(map, markers[element.id_marker]);
        });
    }

    function setMarkers(map) {

        for (var i = 0; i < locations.length; i++) {
            var locationInfowindow = new google.maps.InfoWindow({
                content: '<p class="m-0">ชื่อ(TH) : ' + locations[i].nameTH + '<br>ชื่อ(EN) : ' + locations[i].nameEN + '<br>ประเภทโรงเรียน : ' + locations[i].typeName + '</p>'
            });

            var marker = new google.maps.Marker({
                position: {
                    lat: parseFloat(locations[i].latitude),
                    lng: parseFloat(locations[i].longitude)
                },
                map: map,
                title: locations[i].nameTH + '(' + locations[i].nameEN + ')',
                infowindow: locationInfowindow
            });

            markers.push(marker);

            google.maps.event.addListener(marker, 'click', function() {
                hideAllInfoWindows(map);
                this.setAnimation(google.maps.Animation.BOUNCE);
                this.infowindow.open(map, this);
            });

        }
    }

    function hideAllInfoWindows(map) {
        markers.forEach(function(marker) {
            marker.infowindow.close(map, marker);
            marker.setAnimation(null);
        });
    }
</script>

<script>
    var provice_select = $('#provice');
    var amphure_select = $('#amphure');
    var district_select = $('#district');

    provice_select.append('<option value="-1">--- กรุณาเลือก ---</option>');
    amphure_select.append('<option value="-1">--- กรุณาเลือก ---</option>');
    district_select.append('<option value="-1">--- กรุณาเลือก ---</option>');

    amphure_select.prop('disabled', 'disabled');
    district_select.prop('disabled', 'disabled');

    $.get("<?php echo base_url('Api/Address/province'); ?>", ).done((res) => {
        res.forEach(element => {
            provice_select.append('<option value=' + element.PROVINCE_ID + '>' + element.PROVINCE_NAME + '</option>');
        });
    });

    provice_select.on('change', function() {
        var provice_id = this.value;
        if (this.value == -1) {
            amphure_select.prop('disabled', 'disabled');
            district_select.prop('disabled', 'disabled');
        } else {
            geocodeAddress($("#provice option:selected").text());
            $.get('<?php echo base_url('Api/Address/amphur'); ?>/' + provice_id, (res) => {
                amphure_select.empty();
                district_select.empty();
                amphure_select.append('<option value="-1">--- กรุณาเลือก ---</option>');
                district_select.append('<option value="-1">--- กรุณาเลือก ---</option>');

                amphure_select.prop('disabled', false);
                res.forEach(element => {
                    amphure_select.append('<option value=' + element.AMPHUR_ID + '>' + element.AMPHUR_NAME + '</option>');
                });
            })
        }
    });

    amphure_select.on('change', function() {
        if (this.value == -1) {
            district_select.prop('disabled', 'disabled');
            district_select.append('<option value="-1">--- กรุณาเลือก ---</option>');
        } else {
            geocodeAddress($("#provice option:selected").text() +
                $("#amphure option:selected").text());
            $.post("https://www.bev2dorn.com/site/innomedia/education/api/get_districts", {
                    provice_id: provice_select.val(),
                    amphure_id: this.value
                },
                function(result) {
                    district_select.empty();
                    district_select.append('<option value="-1">--- กรุณาเลือก ---</option>');

                    district_select.prop('disabled', false);
                    $.each(JSON.parse(result), function(key, value) {
                        district_select.append('<option value=' + value.district_id + '>' + value.district_name_th + '</option>');
                    });
                });
        }
    });

    district_select.on('change', function() {
        if (this.value != -1) {
            geocodeAddress($("#provice option:selected").text() +
                $("#amphure option:selected").text() +
                $("#district option:selected").text()
            );
        }
    });

    function geocodeAddress(address) {
        var geocoder = new google.maps.Geocoder();
        geocoder.geocode({
            'address': address
        }, function(results, status) {
            if (status === 'OK') {
                map.setCenter(results[0].geometry.location);
                map.setZoom(12);
            } else {
                alert('Geocode was not successful for the following reason: ' + status);
            }
        });
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBEXF6zA5BPQu6bm5MMfMUhUaKi7CqYblo&language=th&callback=initMap" async defer></script>