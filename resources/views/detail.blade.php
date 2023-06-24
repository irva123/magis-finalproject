<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
        integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
        crossorigin="" />

    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
        integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
        crossorigin=""></script>

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
</head>

<body>
    <div class="container py-4 justify-content-center">
        <div class="row">
            <div class="col-md-6 col-xs-6 mb-2">
                <div class="card">
                    <div class="card-body">
                        <p>
                        <h4><strong>Nama Space :</strong></h4>
                        <h5>{{ $spaces->nama }}</h5>
                        </p>

                        <p>
                        <h4><strong>Keterangan Space :</strong></h4>
                        <p>{{ $spaces->deskripsi }}</p>
                        </p>

                        <p>
                        <h4>
                            <strong>Foto</strong>
                        </h4>
                        <img class="img-fluid" width="200" src="{{ url('storage/'.$spaces->foto) }}"
                            alt="">
                        </p>

                        <p>
                        <h4>
                            <strong>Peta</strong>
                        </h4>
                            <div class=""><iframe style="border: 0;" src="{{ $spaces->link_maps }}" allowfullscreen="allowfullscreen"><span data-mce-type="bookmark" style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;" class="mce_SELRES_start"></span></iframe></div></p>
                    </div>
                    <div class="card-footer">
                        <a href="/map2" class="btn btn-outline-primary">Kembali</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xs-6">
                    <div class="card-body">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d31572.725922792568!2d112.67733622884157!3d-8.441787691597929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zOMKwMjYnMzAuNCJTIDExMsKwNDEnNTIuNiJF!5e0!3m2!1sid!2sid!4v1687293157902!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
            </div>
        </div>
        </div>
    </div>
    {{-- karena hanya akan menampilkan single data dari marker yang dipilih jadi kita tidak 
    melakukan looping untuk halaman detail ini --}}
    
</body>

</html>