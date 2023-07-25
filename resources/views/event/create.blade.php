@extends('layout-admin.main')

@section('judul')
Tables
@endsection

@section('title')
Form Create Event
@endsection

@section('highlight6')
active
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

        <div class="mb-md-0 mb-0 mt-5">
              <h3 class="font-weight-bold mb-0">Tambah Kegiatan</h3>
        </div>

<div class="row">
            <div class=" ml-5 mb-2 pt-4 px-3">
            <div class="d-sm-flex align-items-center">
            <div class="col-lg-10">      
            <form method="post" action="/event" enctype= multipart/form-data>
                @csrf

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" 
                    name="nama" required autofocus value = "{{ old('nama') }}">
                @error('nama')
                <div class="invalid-feedback">
                    {{ $messages }}
                </div>
                @enderror
                </div>

                <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input class="form-control @error('foto') is-invalid @enderror" type="file" id="foto" 
                name="foto" required autofocus value = "{{ old('foto') }}">
                @error('foto')
                <div class="invalid-feedback">
                {{ $messages }}
                </div>
                @enderror
            </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" 
                    name="deskripsi" required autofocus value = "{{ old('deskripsi') }}">
                @error('deskripsi')
                <div class="invalid-feedback">
                {{ $messages }}
                </div>
                @enderror
                </div>

                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" 
                    name="alamat" required autofocus value = "{{ old('alamat') }}">
                @error('alamat')
                <div class="invalid-feedback">
                {{ $messages }}
                </div>
                @enderror
                </div>


                <div class="mb-3">
                    <label for="tanggal_kegiatan" class="form-label">Tanggal</label>
                    <input type="text" class="form-control @error('tanggal_kegiatan') is-invalid @enderror" id="tanggal_kegiatan" 
                    name="tanggal_kegiatan" required autofocus value = "{{ old('tanggal_kegiatan') }}">
                @error('tanggal_kegiatan')
                <div class="invalid-feedback">
                {{ $messages }}
                </div>
                @enderror
                </div>

                <div class="mb-3">
                    <label for="waktu_kegiatan" class="form-label">Waktu</label>
                    <input type="text" class="form-control @error('waktu_kegiatan') is-invalid @enderror" id="waktu_kegiatan" 
                    name="waktu_kegiatan" required autofocus value = "{{ old('waktu_kegiatan') }}">
                @error('waktu_kegiatan')
                <div class="invalid-feedback">
                {{ $messages }}
                </div>
                @enderror
                </div>

                <div class="mb-3">
                    <label for="penyelenggara" class="form-label">Penyelenggara</label>
                    <input type="text" class="form-control @error('penyelenggara') is-invalid @enderror" id="penyelenggara" 
                    name="penyelenggara" required autofocus value = "{{ old('penyelenggara') }}">
                @error('penyelenggara')
                <div class="invalid-feedback">
                {{ $messages }}
                </div>
                @enderror
                </div>

                <button type="submit" class="btn btn-primary">Tambah</button>
         </form>
        </div>
        </div>
        </div>
        </div>
        </div>
        @endsection