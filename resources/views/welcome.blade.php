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
<div class="container">
    <div class="row">
        <div class="col-sm">
            <select class="form-select">
                <option selected>Default</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>

        <div class="col-sm">
            <select class="form-select">
                <option selected>Default</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
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
                    62.0184199977287,
                    43.4964036673515
                ],
                [
                    63.3038203883535,
                    43.64763762606012
                ],
                [
                    63.9300410914781,
                    43.591964035981334
                ],
                [
                    64.50133015397859,
                    43.57604782748422
                ],
                [
                    64.90782429460404,
                    43.73502053379238
                ],
                [
                    65.00670124772796,
                    43.71120145824091
                ],
                [
                    65.5340449977287,
                    43.31282294808747
                ],
                [
                    65.86363484147873,
                    42.84741086663692
                ],
                [
                    63.95201374772802,
                    40.94218532151018
                ],
                [
                    62.56773640397796,
                    41.47116831988046
                ],
                [
                    61.699816482102904,
                    41.90599185578591
                ],
                [
                    61.98546101335319,
                    42.01219764469715
                ],
                [
                    61.86461140397796,
                    42.25661212822439
                ],
                [
                    61.9744746852289,
                    42.6052937953161
                ],
                [
                    62.435900466478444,
                    43.208813874889046
                ],
                [
                    62.21617390397796,
                    43.29683311746771
                ],
                [
                    62.0074336696031,
                    43.51234091466762
                ]
            ],
            "type": "LineString"
        }
    };

    L.geoJSON(geojsonFeature).addTo(map);
</script>
</body>
</html>
