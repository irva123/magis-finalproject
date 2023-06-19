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
<section class="vh-100" style="background-color: #e6e6fa;">
  <div class="container py-2 h-100" >
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-md-9 col-lg-7 col-xl-5">
        <div class="card" style="border-radius: 15px; width: 650px; height: 420px">
          <div class="card-body p-4">
            <div class="d-flex text-black mt-3">
              <div class="flex-shrink-0">
              <div class="d-flex justify-content-start rounded-3 mb-2 pt-5 pb-5 mt-5 me-3"
                  style="background-color: #efefef;">
                <img src ="{{ url('storage/'.$geodiversity->foto) }}"
                  alt="Generic placeholder image" class="img-fluid"
                  style="width: 200px; border-radius: 10px;">
                  </div>
              </div>
              <div class="col-lg-10">
              <div class="card mb-4">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Id Category</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">: {{ $geodiversity->id_category }}</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Nama</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">: {{ $geodiversity->nama }}</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Deskripsi</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">: {{ $geodiversity->deskripsi }}</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Alamat</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">: {{ $geodiversity->alamat }}</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Titik Koordinat</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">: {{ $geodiversity->titik_koordinat }}</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Link Maps</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">: {{ $geodiversity->link_maps }}</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Jam Operasional</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">: {{ $geodiversity->jam_buka }}</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Harga Weekday</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">: {{ $geodiversity->harga_weekday }}</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Harga Weekend</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">: {{ $geodiversity->harga_weekend}}</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Kontak</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">: {{ $geodiversity->kontak }}</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Sosial Media</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">: {{ $geodiversity->sosmed }}</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Marker</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">: {{ $geodiversity->id_marker }}</p>
                    </div>
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  @endsection