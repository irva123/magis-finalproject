<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>MAGIS</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Cemre Tellioğlu Tunçay">

        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap&subset=latin-ext" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet"> 
        <!-- Place favicon.ico in the root directory -->
        <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
        <link rel="stylesheet" href="{{ asset('tampilan/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('tampilan/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{ asset('tampilan/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{ asset('tampilan/css/reset.css')}}">
        <link rel="stylesheet" href="{{ asset('tampilan/css/style.css')}}">
        <link rel="stylesheet" href="{{ asset('tampilan/css/animate.css')}}">
        <link rel="stylesheet" href="{{ asset('tampilan/css/responsive.css')}}">
        <link rel="stylesheet" href="{{ asset('tampilan/plugins/themify-icons/themify-icons.css')}}">
        <!-- main style -->
	    <link rel="stylesheet" href="{{ asset('tampilan/css/main.css')}}">
      <!-- magnific popup -->
	    <link rel="stylesheet" href="{{ asset('tampilan/css/magnific-popup.css')}}">
        
        <script src="{{ asset('tampilan/js/vendor/modernizr-2.8.3.min.js')}}"></script>

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
     <!-- header -->
        <!-- Navbar -->

        <!-- Footer -->
        <footer class="footer pt-3  ">
        @include('layouts.footer')
        </footer>
        
        </div>
    </main>
    <script src="{{ asset('tampilan/js/vendor/jquery-1.12.0.min.js')}}"></script>
        <script src="{{ asset('tampilan/js/jquery-easing/jquery.easing.min.js')}}"></script>
        <script src="{{ asset('tampilan/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('tampilan/js/parallax.min.js')}}"></script>
        <script src="{{ asset('tampilan/js/ajax-mail.js')}}"></script>
        <script src="{{ asset('tampilan/js/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('tampilan/js/jquery.nicescroll.min.js')}}"></script>
        <script src="{{ asset('tampilan/js/main.js')}}"></script>
        <!-- magnific popup -->
	<script src="{{ asset('tampilan/js/jquery.magnific-popup.min.js')}}"></script>
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
            L.marker([<?=$item->titik_koordinat?>], {icon: new MyIcon({iconUrl: '<?=($item->marker->marker=='')?url('storage/icon-biru.png') : url('storage/'.$item->marker->marker)?>'})}).addTo(map)
                .bindPopup(
                    "<div class='my-2'><img src='{{ url('storage/'.$item->foto) }}' class='img-fluid mt-0' width='700px'></div>" +
                    "<div class='my-2'><strong>Objek Geopark:</strong> <br>{{ $item->nama }}</div>" + "<div class='my-2'><strong>Lokasi:</strong> <br>{{ $item->alamat }}</div>" + "<div class='my-2'><strong>Jam Operasional:</strong> <br>{{ $item->jam_buka }}</div>" +
                    "<div><a href='{{ route('map2.show', $item->nama) }}' class='btn btn-outline-info btn-sm'>Detail</a></div>" +
                    "<div class='my-2'></div>"
                ).addTo(map);
        @endforeach

     
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
                    "<div class='my-2'><img src=''{{ url('storage/'.$item->foto) }}'' class='img-fluid' width='700px'></div>" +
                    "<div class='my-2'><strong>Nama Space:</strong> <br>{{ $item->nama }}</div>" +
                    "<div><a href='{{ route('map2.show', $item->nama) }}' class='btn btn-outline-info btn-sm'>Detail Space</a></div>" +
                    "<div class='my-2'></div>"
                ).addTo(map);
            @endforeach
        }
        L.control.layers(baseLayers, overlays).addTo(map);
    </script>
    </body>
</html>