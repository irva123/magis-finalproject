@extends('layout-admin.main')

@section('judul')
Tables
@endsection

@section('title')
Form Edit Table Mobil
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
            <form method="post" action="{{ route('event.update', $event->id) }}" enctype= multipart/form-data>
            @csrf
            @method ('PUT')    
            
            
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
                <div class="col-md-12 mb-2">
                    <img id="preview-image-before-upload" src="{{ url('storage/'.$event->foto) }}"
                    alt="preview image" style="max-height: 150px;">
                </div>
                <input class="form-control @error('foto') is-invalid @enderror" type="file" id="foto" 
                name="foto" value = "{{ $event->foto }}">
                @error('foto')
                <div class="invalid-feedback">
                {{ $message }}
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


                <button type="submit" class="btn btn-primary">Simpan</button>
         </form>
        </div>
        </div>
        </div>
        </div>
        </div>
        @endsection

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        
        <script type="text/javascript">

        $(document).ready(function (e) {
        
        $('#foto').change(function(){
                    
            let reader = new FileReader();
        
            reader.onload = (e) => { 
        
            $('#preview-image-before-upload').attr('src', e.target.result); 
            }
        
            reader.readAsDataURL(this.files[0]); 
        
        });
        
        });
 
</script>