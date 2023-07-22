@extends('layout-admin.main')

@section('judul')
Tables
@endsection

@section('title')
Table Mobil
@endsection

@section('highlight2')
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
                        <p>{{ $biodiversity->nama }}</p>
                        </p>

                        <p>
                        <h5><strong>Deskripsi :</strong></h5>
                        <p>{{ $biodiversity->deskripsi }}</p>
                        </p>

                        <p>
                        <h5><strong>Alamat :</strong></h5>
                        <p>{{ $biodiversity->alamat }}</p>
                        </p>

                        <p>
                        <h5><strong>Titik Koordinat :</strong></h5>
                        <p>{{ $biodiversity->titik_koordinat }}</p>
                        </p>

                        <p>
                        <h5><strong>Jam Operasional :</strong></h5>
                        <p>{{ $biodiversity->jam_buka}}</p>
                        </p>

                        <p>
                        <h5><strong>Tiket Hari Kerja :</strong></h5>
                        <p>{{ $biodiversity->harga_weekday}}</p>
                        </p>

                        <p>
                        <h5><strong>Tiket Akhir Pekan :</strong></h5>
                        <p>{{ $biodiversity->harga_weekend}}</p>
                        </p>

                        <p>
                        <h5><strong>Kontak :</strong></h5>
                        <p>{{ $biodiversity->kontak}}</p>
                        </p>

                        <p>
                        <h5><strong>Sosial Media :</strong></h5>
                        <p>{{ $biodiversity->sosmed}}</p>
                        </p>

                    </div>
                    <div class="card-footer">
                        <a href="/biodiversity" class="btn btn-outline-primary">Kembali</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xs-6">
            <div class="card">
                    <div class="card-body">
                    <iframe src="{{ $biodiversity->link_maps }}" width="490" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    </div>
                    <p>
                        <h5>
                            <strong>Foto</strong>
                        </h5>
                        <img class="img-fluid" width="500" height="300" src="{{ url('storage/'.$biodiversity->foto) }}"
                            alt="">
                        </p>
                  </div>
            </div>
        </div>
        </div>
    </div>
  @endsection