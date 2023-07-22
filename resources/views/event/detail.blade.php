@extends('layout-admin.main')

@section('judul')
Tables
@endsection

@section('highlight2')
active
@endsection

@section('navbar')
<div class="container py-5 justify-content-center px-5">
        <div class="row">
            <div class="col-md-6 col-xs-6">
                <div class="card ">
                    <div class="card-body py-0">
                        <p>
                        <h5><strong>Nama Kegiatan :</strong></h5>
                        <p>{{ $event->nama }}</p>
                        </p>

                        <p>
                        <h5><strong>Deskripsi :</strong></h5>
                        <p>{{ $event->deskripsi }}</p>
                        </p>

                        <p>
                        <h5><strong>Alamat :</strong></h5>
                        <p>{{ $event->alamat }}</p>
                        </p>

                        <p>
                        <h5><strong>Tanggal :</strong></h5>
                        <p>{{ $event->tanggal_kegiatan}}</p>
                        </p>

                        <p>
                        <h5><strong>Waktu :</strong></h5>
                        <p>{{ $event->waktu_kegiatan}}</p>
                        </p>

                        <p>
                        <h5><strong>Penyelenggara :</strong></h5>
                        <p>{{ $event->penyelenggara}}</p>
                        </p>

                    </div>
                    <div class="card-footer pb-0">
                        <a href="/event" class="btn btn-outline-primary">Kembali</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xs-6">
            <div class="card px-3">
                    <p>
                        <h5>
                            <strong>Foto</strong>
                        </h5>
                        <img class="img-fluid" width="500" height="300" src="{{ url('storage/'.$event->foto) }}"
                            alt="">
                        </p>
            </div>
            </div>
        </div>
        </div>
    </div>
  @endsection