@extends('layout-admin.main')

@section('judul')
Tables
@endsection

@section('highlight7')
Active
@endsection

@section('navbar')
<div class="container-fluid py-4 px-5">
    <div class="row">
        <div class="col-12">
        <div class="card card-background card-background-after-none align-items-start mt-1 mb-1">
            <div class="full-background" style="background: #D2E4E5"></div>
            <div class="card-body text-start p-4 w-100">
              <h3 class="text-black mb-2 mt-3">Malang Geopark Information System</h3>
              <p class=" text-black mb-4 font-weight">
              Badan Perencanaan Pembangunan Daerah Kabupaten Malang
              </p>
            </div>
        </div>
        </div>
    </div>
      
<div class="body5">
<div class="center5 mt-3 mb-3">
<h2>Kritik dan Saran</h2>
</div>
@foreach ($kritik_dan_saran as $kritik)
<div class="flip-card5">
<div class="center5">
<div class="card5">
  <div class="container5">
  <div class="row5 p-3">
  <img src='{{ url('storage/FotoProfil.jpg') }}' alt="Avatar" style="width:50px" class="rounded-circle img5">
  <span class="time-right5">{{ $kritik->created_at }}</span>
  <p5><span>{{ $kritik->nama }}</span></p5>
  <div>
  <a><span>{{ $kritik->email }}</span></a>
</div>
  <div>
  <a><span>{{ $kritik->no_hp }}</span></a>
  </div>
    <a>{{ $kritik->isi_pesan }}</a> 
    
  </div>
  </div>
  </div>
</div>
</div>
</div>
</div>
@endforeach
  @endsection

  
