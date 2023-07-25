@extends('layout-admin.main')

@section('judul')
Tables
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
              <h3 class="font-weight-bold mb-0">Edit Kegiatan</h3>
            </div>


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
                    name="nama"  value = "{{ $event->nama}}">
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
                name="foto" value = "{{ $event->foto}}">
                @error('foto')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" 
                    name="deskripsi" value = "{{ $event->deskripsi}}">
                @error('deskripsi')
                <div class="invalid-feedback">
                {{ $messages }}
                </div>
                @enderror
                </div>

                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" 
                    name="alamat" value = "{{ $event->alamat}}">
                @error('alamat')
                <div class="invalid-feedback">
                {{ $messages }}
                </div>
                @enderror
                </div>

                <div class="mb-3">
                    <label for="tanggal_kegiatan" class="form-label">Tanggal</label>
                    <input type="text" class="form-control @error('tanggal_kegiatan') is-invalid @enderror" id="tanggal_kegiatan" 
                    name="tanggal_kegiatan" value = "{{ $event->tanggal_kegiatan}}">
                @error('tanggal_kegiatan')
                <div class="invalid-feedback">
                {{ $messages }}
                </div>
                @enderror
                </div>

                <div class="mb-3">
                    <label for="waktu_kegiatan" class="form-label">Waktu</label>
                    <input type="text" class="form-control @error('waktu_kegiatan') is-invalid @enderror" id="waktu_kegiatan" 
                    name="waktu_kegiatan" value = "{{ $event->waktu_kegiatan}}">
                @error('waktu_kegiatan')
                <div class="invalid-feedback">
                {{ $messages }}
                </div>
                @enderror
                </div>

                <div class="mb-3">
                    <label for="penyelenggara" class="form-label">Penyelenggara</label>
                    <input type="text" class="form-control @error('penyelenggara') is-invalid @enderror" id="penyelenggara"
                    name="penyelenggara"  value = "{{ $event->penyelenggara}}">
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