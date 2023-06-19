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
            <form method="post" action="{{ route('geodiversity.update', $geodiversity->id) }}" enctype= multipart/form-data>
            @method ('PUT')    
            @csrf
            <div class="form-group">
                <label for="id_category">Id Category</label>
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
                    <img id="preview-image-before-upload" src="{{ url('storage/'.$geodiversity->foto) }}"
                    alt="preview image" style="max-height: 150px;">
                </div>
                <input class="form-control @error('foto') is-invalid @enderror" type="file" id="foto" 
                name="foto" value = "{{ $geodiversity->foto }}">
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
                    <label for="titik_koordinat" class="form-label">Titik Koordinat</label>
                    <input type="text" class="form-control @error('titik_koordinat') is-invalid @enderror" id="titik_koordinat" 
                    name="titik_koordinat" required autofocus value = "{{ old('titik_koordinat') }}">
                @error('titik_koordinat')
                <div class="invalid-feedback">
                {{ $messages }}
                </div>
                @enderror
                </div>

                <div class="mb-3">
                    <label for="link_maps" class="form-label">Link Maps</label>
                    <input type="text" class="form-control @error('link_maps') is-invalid @enderror" id="link_maps" 
                    name="link_maps" required autofocus value = "{{ old('link_maps') }}">
                @error('link_maps')
                <div class="invalid-feedback">
                {{ $messages }}
                </div>
                @enderror
                </div>

                <div class="mb-3">
                    <label for="jam_buka" class="form-label">Jam Operasional</label>
                    <input type="text" class="form-control @error('jam_buka') is-invalid @enderror" id="jam_buka" 
                    name="jam_buka" required autofocus value = "{{ old('jam_buka') }}">
                @error('jam_buka')
                <div class="invalid-feedback">
                {{ $messages }}
                </div>
                @enderror
                </div>

                <div class="mb-3">
                    <label for="harga_weekday" class="form-label">harga Weekday</label>
                    <input type="text" class="form-control @error('harga_weekday') is-invalid @enderror" id="harga_weekday" 
                    name="harga_weekday" required autofocus value = "{{ old('harga_weekday') }}">
                @error('harga_weekday')
                <div class="invalid-feedback">
                {{ $messages }}
                </div>
                @enderror
                </div>

                <div class="mb-3">
                    <label for="harga_weekend" class="form-label">harga Weekend</label>
                    <input type="text" class="form-control @error('harga_weekend') is-invalid @enderror" id="harga_weekend" 
                    name="harga_weekend" required autofocus value = "{{ old('harga_weekend') }}">
                @error('harga_weekend')
                <div class="invalid-feedback">
                {{ $messages }}
                </div>
                @enderror
                </div>

                <div class="mb-3">
                    <label for="kontak" class="form-label">Kontak</label>
                    <input type="text" class="form-control @error('kontak') is-invalid @enderror" id="kontak" 
                    name="kontak" required autofocus value = "{{ old('kontak') }}">
                @error('kontak')
                <div class="invalid-feedback">
                {{ $messages }}
                </div>
                @enderror
                </div>

                <div class="mb-3">
                    <label for="sosmed" class="form-label">Sosial Media</label>
                    <input type="text" class="form-control @error('sosmed') is-invalid @enderror" id="sosmed" 
                    name="sosmed" required autofocus value = "{{ old('sosmed') }}">
                @error('sosmed')
                <div class="invalid-feedback">
                {{ $messages }}
                </div>
                @enderror
                </div>
                
                <div class="form-group">
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

                <button type="submit" class="btn btn-primary">Submit</button>
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
