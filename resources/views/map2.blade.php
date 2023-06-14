<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel - Leaflet</title>

    <link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />

    {{-- Pada view map.blade ini kita menambahkan beberapa cdn diantaranya
    bootstrap, leaflet css dan js, leaflet control search css dan js --}}

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.1/dist/leaflet.css"
        integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin="" />

    <script src="https://unpkg.com/leaflet@1.9.1/dist/leaflet.js"
        integrity="sha256-NDI0K41gVbWqfkkaHj15IzU7PtMoelkzyKp8TOaFQ3s=" crossorigin=""></script>

    {{-- cdn leaflet search --}}
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/leaflet-search/3.0.9/leaflet-search.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-search/3.0.9/leaflet-search.src.js"></script>


    <style>
        html,
        body {
            height: 100%;
            margin: 0;
        }

        .leaflet-container {
            height: 400px;
            width: 600px;
            max-width: 100%;
            max-height: 100%;
        }
    </style>

    <style>
        body {
            padding: 0;
            margin: 0;
        }

        #map {
            height: 450px;
            width: 1000px;
            max-width: 100%;
            max-height: 100%;
        }
    </style>
</head>

<body>
<div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="page-title-content">
                        <div class="">
                            <h2 class="text-uppercase font-weight-bold text-center pt-5">
                                Peta Kabupaten Malang
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
<div class="container py-4 justify-content-center">
        <div class="row">
            <div class="col-md-4 col-xs-6 mb-2">
                <div class="card">
                    <div class="card-body">
                    <table class="table">
                            <tbody><tr>
                                <th colspan="2" class="text-center">Legenda</th>
                            </tr>
                            <tr>
                                    <td width="80px" class="p-1">
                                    <div style="background: #2F2CCD;">​</div>
                                    </td>
                                    <td class="p-1 align-middle text-left">
                                        Geodiversity
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50px" class="p-1">
                                        <div style="background: #2CCD45;">​</div>
                                    </td>
                                    <td class="p-1 align-middle text-left">
                                        Biodiversity
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50px" class="p-1">
                                        <div style="background: #AD3711;">​</div>
                                    </td>
                                    <td class="p-1 align-middle text-left">
                                        Culture Diversity
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        <a href="/homepage" class="btn btn-outline-primary">Kembali</a>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-xs-6">
                <div class="card">
                    <div class="card-body">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <svg width="1440" height="192" viewBox="0 0 1440 192" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0_357_923)">
        <path opacity="0.33" d="M779.84 62.784C1171.33 -106.752 1284.99 128.064 1394.82 62.784C1561.28 -36.672 1688 77.376 1688 77.376V192L-232 192V77.376C-232 77.376 -112.768 27.264 -49.7919 21.12C13.1841 14.784 70.7841 44.736 95.744 63.552C140.48 96.768 257.024 175.296 353.792 182.976C450.56 190.656 742.592 78.72 779.84 62.784Z" fill="#9CC7DD"/>
        <path opacity="0.66" d="M278.72 62.784C366.08 62.784 426.944 107.328 526.592 137.856C581.504 154.56 815.168 157.248 1014.27 62.784C1213.38 -31.68 1190.34 128.832 1300.74 62.784C1465.86 -35.136 1688 115.584 1688 115.584V192L-232 192V121.92C-232 121.92 -177.856 157.44 -55.168 157.44C132.416 157.248 198.656 62.784 278.72 62.784Z" fill="#495555"/>
        <path d="M217.088 136.512C601.088 246.912 727.808 10.752 975.68 99.072C1223.36 188.544 1223.36 181.632 1333.18 152.448C1442.24 123.264 1433.98 105.792 1515.39 91.2C1633.09 69.696 1688 192 1688 192L-232 192C-232 192 -212.992 113.472 -71.488 99.648C70.016 85.824 95.1681 101.76 217.088 136.512Z" fill="#D2E4E5"/>
        </g>
        <defs>
        <clipPath id="clip0_357_923">
        <rect width="1457" height="192" fill="white" transform="matrix(-1 0 0 -1 1457 192)"/>
        </clipPath>
        </defs>
        </svg>


    
    <script>
        var map = L.map('map').setView([-8.351620144146487, 112.40159750298284
    ], 10);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);


    var MyIcon = L.Icon.extend({
    options: {
        iconSize:  [30, 35],
    }
});

    @foreach ($spaces as $item)
            L.marker([<?=$item->location?>], {icon: new MyIcon({iconUrl: '<?=($item->marker=='')?url('storage/icon-biru.png') : url('storage/'.$item->marker)?>'})}).addTo(map)
                .bindPopup(
                    "<div class='my-2'><img src='{{ url('storage/'.$item->image) }}' class='img-fluid' width='700px'></div>" +
                    "<div class='my-2'><strong>Nama Space:</strong> <br>{{ $item->name }}</div>" +
                    "<div><a href='{{ route('map.show', $item->slug) }}' class='btn btn-outline-info btn-sm'>Read More</a></div>" +
                    "<div class='my-2'></div>"
                ).addTo(map);
        @endforeach

        // pada koding ini kita menambahkan control pencarian data        
        var markersLayer = new L.LayerGroup();
        map.addLayer(markersLayer);
        var controlSearch = new L.Control.Search({
            position: 'topleft',
            layer: markersLayer,
            initial: false,
            zoom: 17,
            markerLocation: true
        })


        //menambahkan variabel controlsearch pada addControl
        map.addControl(controlSearch);

        // looping variabel datas utuk menampilkan data space ketika melakukan pencarian data
        for (i in datas) {

            var title = datas[i].title,
                loc = datas[i].loc,
                marker = new L.Marker(new L.latLng(loc), {
                    title: title
                });
            markersLayer.addLayer(marker);

            // melakukan looping data untuk memunculkan popup dari space yang dipilih
            @foreach ($spaces as $item)
                
            L.marker([<?=$item->location?>], {icon: new MyIcon({iconUrl: '<?=($item->marker=='')?url('storage/icon-biru.png') : url('storage/'.$item->marker)?>'})}).addTo(map)
                .bindPopup(
                    "<div class='my-2'><img src=''{{ url('storage/'.$item->image) }}'' class='img-fluid' width='700px'></div>" +
                    "<div class='my-2'><strong>Nama Space:</strong> <br>{{ $item->name }}</div>" +
                    "<div><a href='{{ route('map.show', $item->slug) }}' class='btn btn-outline-info btn-sm'>Detail Space</a></div>" +
                    "<div class='my-2'></div>"
                ).addTo(map);
            @endforeach
        }
        L.control.layers(baseLayers, overlays).addTo(map);
    </script>
</body>

</html>