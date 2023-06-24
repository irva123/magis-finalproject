@extends('layout-admin.main')

@section('judul')
Tables
@endsection

@section('title')
Form Cretae Event
@endsection

@section('highlight2')
active
@endsection

@section('navbar')
<div class="row">
        <div class="col-12">
          <div class="card border shadow-xs mb-4">
            <div class="card-header border-bottom pb-0">
              <div class="d-sm-flex align-items-center">
            <div class="col-lg-8">        
            <form method="post" action="/even" enctype= multipart/form-data>
                @csrf

                <div class="form-group">
                <label for="id_event>Id Event</label>
                <select class="form-select" name="id_event">
                @foreach($event as $event)
                @if(old('id_event') == $event->id)
                    <option value="{{$event->id}}" selected>{{ $event->nama }}</option>
                @else 

                @endif
                @endforeach
                </select></br>
                </div>

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
                    <label for="alamat_kegiatan" class="form-label">Alamat</label>
                    <input type="text" class="form-control @error('alamat_kegiatan') is-invalid @enderror" id="alamat_kegiatan" 
                    name="alamat_kegiatan" required autofocus value = "{{ old('alamat_kegiatan') }}">
                @error('alamat_kegiatan')
                <div class="invalid-feedback">
                {{ $messages }}
                </div>
                @enderror
                </div>


                <div class="mb-3">
                    <label for="tanggal_kegiatan" class="form-label">tanggal</label>
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
                    <label for="penyelenggara_kegiatan" class="form-label">Penyelenggara</label>
                    <input type="text" class="form-control @error('penyelenggara_kegiatan') is-invalid @enderror" id="penyelenggara_kegiatan" 
                    name="penyelenggara_kegiatan" required autofocus value = "{{ old('penyelenggara_kegiatan') }}">
                @error('penyelenggara_kegiatan')
                <div class="invalid-feedback">
                {{ $messages }}
                </div>
                @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
         </form>
        </div>
        </div>
        </div>
        </div>
        </div>
@endsection