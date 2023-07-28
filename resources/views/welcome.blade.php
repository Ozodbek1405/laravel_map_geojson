<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.8.0/leaflet.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.8.0/leaflet.js"></script>
    <title>Map</title>
</head>
<body>
<div class="container mt-4">
    <div class="row">
        <div class="col-sm">
            <select class="form-select">
                <option selected>Select region name</option>
                @foreach($regions as $region)
                    <option value="{{$region->id}}">{{$region->id}} - {{$region->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-sm">
            <select class="form-select">
                <option selected>Select district name</option>
                @foreach($districts as $district)
                    <option value="{{$district->id}}">{{$district->region_id}} - {{$district->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>

<div class="mt-4">
    <div id="map" style="width:900px; height:580px"></div>
</div>

<script>
    var map = L.map('map').setView([42.132890957140546,65.28135555060638],6);

    var Google_Map = L.tileLayer('http://www.google.uz/maps/vt?ROADMAP=s@189&gl=ru&x={x}&y={y}&z={z}', {
        maxZoom: 18,
        fullscreenControl: true,
        attribution: '"IJARA UNICON" AT',
        id: 'mapbox/light-v9',
        tileSize: 512,
        zoomOffset: -1,
        scrollWheelZoom: false,
        name: "Google Map"
    }).addTo(map);

    var Google_Map_Hybrid = L.tileLayer('http://www.google.uz/maps/vt?lyrs=s,h&ROADMAP=s@189&gl=ru&x={x}&y={y}&z={z}', {
        maxZoom: 18,
        fullscreenControl: true,
        attribution: '"IJARA UNICON" AT',
        id: 'mapbox/light-v9',
        tileSize: 512,
        zoomOffset: -1,
        scrollWheelZoom: false,
        name: "Google Map Hybrid"
    });

    var Open_Street_Map = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 18,
        fullscreenControl: true,
        attribution: '"IJARA UNICON" AT',
        id: 'mapbox/light-v9',
        tileSize: 512,
        zoomOffset: -1,
        scrollWheelZoom: false,
        name: "Open Street Map"
    });

    var baseMaps = {
        'Google Map': Google_Map,
        'Google Map Hybrid' : Google_Map_Hybrid,
        'Open Street Map' : Open_Street_Map
    }

    L.control.layers(baseMaps).addTo(map);

    var geojsonFeature = {
        "type": "Feature",
        "properties": {},
        "geometry": {
            "coordinates": [
                [
                    62.036296883179006,
                    43.508250828520914
                ],
                [
                    62.43407721033043,
                    43.529617432137684
                ],
                [
                    63.288568283472074,
                    43.65765814775534
                ],
                [
                    64.51874077670172,
                    43.566990781441916
                ],
                [
                    64.93125370856325,
                    43.73222274859032
                ],
                [
                    65.17434168626676,
                    43.502907995387375
                ],
                [
                    65.52792419929119,
                    43.29952997408037
                ],
                [
                    65.83730889818696,
                    42.863735909326266
                ],
                [
                    66.08776317824558,
                    42.928493569891316
                ],
                [
                    66.10249578295571,
                    42.34867206863612
                ],
                [
                    65.99200124763479,
                    42.35411596576182
                ],
                [
                    65.99936754998987,
                    41.939036610593604
                ],
                [
                    66.52974131952564,
                    41.87873394759481
                ],
                [
                    66.69916627368369,
                    41.139568987033385
                ],
                [
                    62.60350216448842,
                    41.466062053900714
                ],
                [
                    62.19835553498194,
                    41.3832103253533
                ],
                [
                    61.69008067250965,
                    41.9171149604212
                ],
                [
                    61.99946537140542,
                    42.004756359125594
                ],
                [
                    61.8595056266677,
                    42.25060130160074
                ],
                [
                    61.94053495256824,
                    42.56063459284934
                ],
                [
                    62.47827502445912,
                    43.229796570221765
                ],
                [
                    62.22045444204545,
                    43.27808205009006
                ],
                [
                    62.036296883179006,
                    43.51359318876678
                ]
            ],
            "type": "LineString"
        }
    };
    var myStyle = {
        "color": "#2a7afa",
        "fill": "#659ffc",
    };

    L.geoJSON(geojsonFeature, {
        style: myStyle
    }).addTo(map);
</script>
</body>
</html>
