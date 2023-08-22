@extends('layout-admin.main')

@section('judul')
Tables
@endsection

@section('title')
Form Cretae Geodiversity
@endsection

@section('highlight4')
active
@endsection

@section('navbar')
<div class="container-fluid py-4 px-5">
      <div class="row">
        <div class="col-12">
          <div class="card card-background card-background-after-none align-items-start mt-1 mb-1">
            <div class="full-background" style="background: #D2E4E5"></div>
            <div class="card-body text-start p-4 w-100">
              <h3 class="text-black mb-2 mt-3">Malang Geopark Information System </h3>
              <p class="text-black mb-4 font-weight">
              Badan Perencanaan Pembangunan Daerah Kabupaten Malang
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="mb-md-0 mb-0 mt-5">
              <h3 class="font-weight-bold mb-0">Tambah Potensi Biodiversity</h3>
            </div>

<div class="row ">
          <div class=" ml-5 mb-2 pt-4 px-3">
              <div class="d-sm-flex align-items-center">
            <div class="col-lg-10">        
            <form method="post" action="/biodiversity" enctype= multipart/form-data>
                @csrf
                <div class="row">
                <div class=" col-6">
                <label for="id_category">Jenis Potensi</label>
                <select class="form-select" name="id_category">
                @foreach($category as $category)
                @if(old('id_category') == $category->id)
                    <option value="{{$category->id}}" selected>{{ $category->nama }}</option>
                @else 
                    <option value="{{$category->id}}">{{ $category->nama }}</option>
                @endif
                @endforeach
                </select></br>
                </div>
                <div class="col-6">
                <label for="id_marker">Warna Marker</label>
                <select class="form-select" name="id_marker">
                @foreach($marker as $marker)
                @if(old('id_marker') == $marker->id)
                    <option value="{{$marker->id}}" selected>{{ $marker->marker }}</option>
                @else 
                    <option value="{{$marker->id}}">{{ $marker->marker }}</option>
                @endif
                @endforeach
                </select></br>
                </div>
                </div>

                <div class="row">
                <div class="col-6">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" 
                    name="nama" required autofocus value = "{{ old('nama') }}">
                @error('nama')
                <div class="invalid-feedback">
                    {{ $messages }}
                </div>
                @enderror
                </div>
                
                <div class="mb-3 col-6">
                <label for="foto" class="form-label">Foto</label>
                <input class="form-control @error('foto') is-invalid @enderror" type="file" id="foto" 
                name="foto" required autofocus value = "{{ old('foto') }}">
                @error('foto')
                <div class="invalid-feedback">
                {{ $messages }}
                </div>
                @enderror
                </div>
                </div>

                <div class="row">
                <div class="mb-3 col-6">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" 
                    name="alamat" required autofocus value = "{{ old('alamat') }}">
                @error('alamat')
                <div class="invalid-feedback">
                {{ $messages }}
                </div>
                @enderror
                </div>

                <div class="mb-3 col-6">
                    <label for="titik_koordinat" class="form-label">Titik Koordinat</label>
                    <input type="text" class="form-control @error('titik_koordinat') is-invalid @enderror" id="titik_koordinat" 
                    name="titik_koordinat" required autofocus value = "{{ old('titik_koordinat') }}">
                @error('titik_koordinat')
                <div class="invalid-feedback">
                {{ $messages }}
                </div>
                @enderror
                </div>
                </div>

                <div class="row">
                <div class="mb-3 col-6">
                    <label for="link_maps" class="form-label">Tautan Google</label>
                    <input type="text" class="form-control @error('link_maps') is-invalid @enderror" id="link_maps" 
                    name="link_maps" required autofocus value = "{{ old('link_maps') }}">
                @error('link_maps')
                <div class="invalid-feedback">
                {{ $messages }}
                </div>
                @enderror
                </div>

                <div class="mb-3 col-6">
                    <label for="jam_buka" class="form-label">Jam Operasional</label>
                    <input type="text" class="form-control @error('jam_buka') is-invalid @enderror" id="jam_buka" 
                    name="jam_buka" required autofocus value = "{{ old('jam_buka') }}">
                @error('jam_buka')
                <div class="invalid-feedback">
                {{ $messages }}
                </div>
                @enderror
                </div>
                </div>

                <div class="row">
                <div class="mb-3 col-6">
                    <label for="harga_weekday" class="form-label">Harga Tiket Hari Kerja</label>
                    <input type="text" class="form-control @error('harga_weekday') is-invalid @enderror" id="harga_weekday" 
                    name="harga_weekday" required autofocus value = "{{ old('harga_weekday') }}">
                @error('harga_weekday')
                <div class="invalid-feedback">
                {{ $messages }}
                </div>
                @enderror
                </div>

                <div class="mb-3 col-6">
                    <label for="harga_weekend" class="form-label">Harga Tiket Akhir Pekan</label>
                    <input type="text" class="form-control @error('harga_weekend') is-invalid @enderror" id="harga_weekend" 
                    name="harga_weekend" required autofocus value = "{{ old('harga_weekend') }}">
                @error('harga_weekend')
                <div class="invalid-feedback">
                {{ $messages }}
                </div>
                @enderror
                </div>
                </div>
                
                <div class="row">
                <div class="mb-3 col-6">
                    <label for="kontak" class="form-label">Kontak</label>
                    <input type="text" class="form-control @error('kontak') is-invalid @enderror" id="kontak" 
                    name="kontak" required autofocus value = "{{ old('kontak') }}">
                @error('kontak')
                <div class="invalid-feedback">
                {{ $messages }}
                </div>
                @enderror
                </div>

                <div class="mb-3 col-6">
                    <label for="sosmed" class="form-label">Sosial Media</label>
                    <input type="text" class="form-control @error('sosmed') is-invalid @enderror" id="sosmed" 
                    name="sosmed" required autofocus value = "{{ old('sosmed') }}">
                @error('sosmed')
                <div class="invalid-feedback">
                {{ $messages }}
                </div>
                @enderror
                </div>
                </div>

                <div class="mb-3 col-12">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" 
                    name="deskripsi" required autofocus value = "{{ old('deskripsi') }}"></textarea>
                @error('deskripsi')
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
        @endsection