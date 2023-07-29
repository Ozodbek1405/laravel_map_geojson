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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <title>Map</title>
</head>
<body>

<div class="container mt-4">
    <div class="row">
        <div class="col-sm">
            <form action="" method="get">
                <select class="form-select" name="region_id" id="select">
                    <option selected value="">Select region name</option>
                    @foreach($regions as $region)
                        <option @if(!empty($_GET['region_id'])) @selected($region->id == $_GET['region_id']) @endif  value="{{$region->id}}">{{$region->name}}
                        </option>
                    @endforeach
                </select>
                <input type="submit" id="submit" style="visibility: hidden">
            </form>
        </div>

        <div class="col-sm">
            <form action="" method="get">
                <select class="form-select" id="district_select" name="district_id">
                    <option selected value="">Select district name</option>
                    @if(isset($districts))
                        @foreach($districts as $district)
                            <option value="{{$district->id}}">{{$district->name}}</option>
                        @endforeach
                    @endif
                </select>
                <input type="submit" id="district_submit" style="visibility: hidden">
            </form>
        </div>
    </div>
</div>

<div class="mt-4">
    <div id="map" style="width:900px; height:580px"></div>
</div>

@php
if (!empty($_GET['region_id'])){
    $location = $regions->where('id',$_GET['region_id'])->first();
}
@endphp

<script>
    $('#select').on('change', function() {
        $('#submit').click();
    })
</script>
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
    @if(!empty($location))
        var geojsonFeature = {!!$location->geometry!!};
    @else
    var geojsonFeature;
    @endif
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
