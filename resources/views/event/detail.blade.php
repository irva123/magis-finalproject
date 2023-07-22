@extends('layout-admin.main')

@section('judul')
Tables
@endsection

@section('highlight2')
active
@endsection

@section('navbar')
<section class="vh-100" style="background-color: #e6e6fa;">
  <div class="container py-8 h-110" >
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-md-9 col-lg-9 col-xl-9">
            <div class="d-flex text-black mt-3">
              <div class="flex-shrink-0">
              <div class="d-flex justify-content-start rounded-3 mb-2 pt-5 pb-5 mt-5 me-3"
                  style="background-color: #e6e6fa;">
                <img src ="{{ url('storage/'.$event->foto) }}"
                  alt="Generic placeholder image" class="img-fluid"
                  style="width: 200px; border-radius: 10px;">
                  </div>
              </div>
              <div class="col-lg-8">
              <div class="card mb-5">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Id Kegiatan</p>
                    </div>
                    <div class="col-sm-3">
                      <p class="text-muted mb-0">: {{$event->id}}</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Nama</p>
                    </div>
                    <div class="col-sm-5">
                      <p class="text-muted mb-0">: {{$event->nama}}</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Deskripsi</p>
                    </div>
                    <div class="col-sm-3">
                      <p class="text-muted mb-0">: {{$event->deskripsi}}</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Alamat</p>
                    </div>
                    <div class="col-sm-3">
                      <p class="text-muted mb-0">: {{$event->alamat}}</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Tanggal</p>
                    </div>
                    <div class="col-sm-3">
                      <p class="text-muted mb-0">: {{$event->tanggal_kegiatan}}</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Waktu</p>
                    </div>
                    <div class="col-sm-3">
                      <p class="text-muted mb-0">: {{$event->waktu_kegiatan}}</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Penyelenggara</p>
                    </div>
                    <div class="col-sm-3">
                      <p class="text-muted mb-0">: {{$event->penyelenggara}}</p>
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