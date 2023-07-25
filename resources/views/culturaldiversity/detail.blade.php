@extends('layout-admin.main')

@section('judul')
Tables
@endsection

@section('highlight5')
active
@endsection

@section('navbar')
<div class="container py-4 justify-content-center mt-3 px-4">
        <div class="row">
            <div class="col-md-6 col-xs-6 mb-2">
                <div class="card">
                    <div class="card-body">
                        <p>
                        <h5><strong>Nama Potensi :</strong></h5>
                        <p>{{ $culturaldiversity->nama }}</p>
                        </p>

                        <p>
                        <h5><strong>Deskripsi :</strong></h5>
                        <p>{{ $culturaldiversity->deskripsi }}</p>
                        </p>

                        <p>
                        <h5><strong>Alamat :</strong></h5>
                        <p>{{ $culturaldiversity->alamat }}</p>
                        </p>

                        <p>
                        <h5><strong>Titik Koordinat :</strong></h5>
                        <p>{{ $culturaldiversity->titik_koordinat }}</p>
                        </p>

                        <p>
                        <h5><strong>Jam Operasional :</strong></h5>
                        <p>{{ $culturaldiversity->jam_buka}}</p>
                        </p>

                        <p>
                        <h5><strong>Harga Tiket Hari Kerja :</strong></h5>
                        <p>{{ $culturaldiversity->harga_weekday}}</p>
                        </p>

                        <p>
                        <h5><strong>Harga Tiket Akhir Pekan :</strong></h5>
                        <p>{{ $culturaldiversity->harga_weekend}}</p>
                        </p>

                        <p>
                        <h5><strong>Kontak :</strong></h5>
                        <p>{{ $culturaldiversity->kontak}}</p>
                        </p>

                        <p>
                        <h5><strong>Sosial Media :</strong></h5>
                        <p>{{ $culturaldiversity->sosmed}}</p>
                        </p>

                    </div>
                    <div class="card-footer">
                        <a href="/culturaldiversity" class="btn btn-outline-primary">Kembali</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xs-6">
            <div class="card mb-3">
                <p>
                    <h5>
                        <strong class="px-3">Foto</strong>
                    </h5>
                    <img class="img-fluid px-3" width="500" height="300" src="{{ url('storage/'.$culturaldiversity->foto) }}"alt="">
                </p>
                </div>
                <div class="card">
                    <div class="card-body">
                    <iframe src="{{ $culturaldiversity->link_maps }}" width="490" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    </div>
                    
            </div>
        </div>
        </div>
    </div>
  @endsection