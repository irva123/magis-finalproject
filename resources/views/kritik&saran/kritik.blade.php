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
<div class="container-fluid py-4 px-5">
      <div class="row">
        <div class="col-12">
          <div class="card card-background card-background-after-none align-items-start mt-1 mb-1">
            <div class="full-background" style="background: linear-gradient(90deg, #0A7AFE -1.83%, #13FFE3 52.33%, rgba(15, 14, 14, 0.3) 100%);"></div>
            <div class="card-body text-start p-4 w-100">
              <h3 class="text-white mb-2">Malang Geopark Information Sistem 🔥</h3>
              <p class="mb-4 font-weight-semibold">
              Badan Perencanaan Pembangunan Daerah Kabupaten Malang
              </p>
            </div>
          </div>
        </div>
      </div>
<div class="body5">
<div class="center5 mt-3 mb-3">
<h2>Riview Kritik Dan Saran</h2>
</div>
@foreach ($kritik_dan_saran as $kritik)
<div class="flip-card5">
<div class="center5">
<div class="card5">
  <div class="container5">
  <div class="row5">
  <img src='{{ url('storage/FotoProfil.jpg') }}' alt="Avatar" style="width:50px">
  <span class="time-right5">{{ $kritik->created_at }}</span>
  <p5><span>{{ $kritik->nama }}</span></p>
  <p5><span>{{ $kritik->email }}</span></p>
  <p5><span>{{ $kritik->no_hp }}</span></p>
    <h3>{{ $kritik->isi_pesan }}</h3> 
  </div>
  </div>
  </div>
</div>
</div>
</div>
</div>
@endforeach
  @endsection
