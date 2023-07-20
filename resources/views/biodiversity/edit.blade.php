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
<div class="container-fluid py-4 px-5">
      <div class="row">
        <div class="col-12">
          <div class="card card-background card-background-after-none align-items-start mt-1 mb-1">
            <div class="full-background" style="background: linear-gradient(90deg, #0A7AFE -1.83%, #13FFE3 52.33%, rgba(15, 14, 14, 0.3) 100%);"></div>
            <div class="card-body text-start p-4 w-100">
              <h3 class="text-white mb-2">Malang Geopark Information System</h3>
              <p class="mb-4 font-weight-semibold">
              Badan Perencanaan Pembangunan Daerah Kabupaten Malang
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="mb-md-0 mb-0 mt-5">
              <h3 class="font-weight-bold mb-0">Edit Potensi</h3>
            </div>

<div class="row ">
          <div class=" ml-5 mb-2 pt-4 px-3">
              <div class="d-sm-flex align-items-center">
            <div class="col-lg-10">        
            <form method="post" action="{{ route('biodiversity.update', $biodiversity->id) }}" enctype= multipart/form-data>
            @method ('PUT')    
            @csrf
                <div class="row">
                <div class=" col-6">
                <label for="id_category">Jenis Potensi</label>
                <select class="form-select" name="id_category">
                @foreach($category as $category)
                    <option @selected($category->id == $biodiversity->id_category) value="{{$category->id}}"  @class([
                'bg-purple-600 text-white' => $category->id == $biodiversity->id_category ])> {{ $category->nama }}</option>
                
                @endforeach
                </select></br>
                </div>
                <div class="col-6">
                <label for="id_marker">Warna Marker</label>
                <select class="form-select" name="id_marker">
                @foreach($marker as $marker)
                <option @selected($marker->id == $biodiversity->id_marker) value="{{$marker->id}}"  @class([
                'bg-purple-600 text-white' => $marker->id == $biodiversity->id_marker ])> {{ $marker->marker }}</option>
                
                @endforeach
                </select></br>
                </div>
                </div>

                <div class="row">
                <div class="col-6">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" 
                    name="nama" value = "{{ $biodiversity->nama}}">
                @error('nama')
                <div class="invalid-feedback">
                    {{ $messages }}
                </div>
                @enderror
                </div>
                
                <div class="col-6">
                <label for="foto" class="form-label">Foto</label>
                <div class="col-md-12 mb-2">
                    <img id="preview-image-before-upload" src="{{ url('storage/'.$biodiversity->foto) }}"
                    alt="preview image" style="max-height: 150px;">
                </div>
                <input class="form-control @error('foto') is-invalid @enderror" type="file" id="foto" 
                name="foto" value = "{{ $biodiversity->foto }}">
                @error('foto')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
                @enderror
            </div>
                </div>

                <div class="row">
                <div class="mb-3 col-6">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" 
                    name="alamat" value = "{{ $biodiversity->alamat}}">
                @error('alamat')
                <div class="invalid-feedback">
                {{ $messages }}
                </div>
                @enderror
                </div>

                <div class="mb-3 col-6">
                    <label for="titik_koordinat" class="form-label">Titik Koordinat</label>
                    <input type="text" class="form-control @error('titik_koordinat') is-invalid @enderror" id="titik_koordinat" 
                    name="titik_koordinat" value = "{{ $biodiversity->titik_koordinat}}">
                @error('titik_koordinat')
                <div class="invalid-feedback">
                {{ $messages }}
                </div>
                @enderror
                </div>
                </div>

                <div class="row">
                <div class="mb-3 col-6">
                    <label for="link_maps" class="form-label">Tautan Google Maps</label>
                    <input type="text" class="form-control @error('link_maps') is-invalid @enderror" id="link_maps" 
                    name="link_maps" value = "{{ $biodiversity->link_maps}}">
                @error('link_maps')
                <div class="invalid-feedback">
                {{ $messages }}
                </div>
                @enderror
                </div>

                <div class="mb-3 col-6">
                    <label for="jam_buka" class="form-label">Jam Operasional</label>
                    <input type="text" class="form-control @error('jam_buka') is-invalid @enderror" id="jam_buka" 
                    name="jam_buka" value = "{{ $biodiversity->jam_buka}}">
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
                    name="harga_weekday" value = "{{ $biodiversity->harga_weekday}}">
                @error('harga_weekday')
                <div class="invalid-feedback">
                {{ $messages }}
                </div>
                @enderror
                </div>

                <div class="mb-3 col-6">
                    <label for="harga_weekend" class="form-label">Harga Tiket Akhir Pekan</label>
                    <input type="text" class="form-control @error('harga_weekend') is-invalid @enderror" id="harga_weekend" 
                    name="harga_weekend" value = "{{ $biodiversity->harga_weekend}}">
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
                    name="kontak" value = "{{ $biodiversity->kontak}}">
                @error('kontak')
                <div class="invalid-feedback">
                {{ $messages }}
                </div>
                @enderror
                </div>

                <div class="mb-3 col-6">
                    <label for="sosmed" class="form-label">Sosial Media</label>
                    <input type="text" class="form-control @error('sosmed') is-invalid @enderror" id="sosmed" 
                    name="sosmed" value = "{{ $biodiversity->sosmed}}">
                @error('sosmed')
                <div class="invalid-feedback">
                {{ $messages }}
                </div>
                @enderror
                </div>
                </div>

                <div class="mb-3 col-12">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" 
                    name="deskripsi" value = "{{ $biodiversity->deskripsi}}">
                @error('deskripsi')
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
