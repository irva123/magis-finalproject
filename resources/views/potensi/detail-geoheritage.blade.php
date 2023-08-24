@extends('layouts.main')

@section('navbar')
  <!-- Contact Start -->
      <div class="contact100-form-title container pb-10">
        <div class="row mt-5">
          <div class="col-12 text-center ">
            <div class="row text-center mt-5">
              <div class="col-lg-12">
                <h3>{{ $geoheritage2->nama }}</h3>
                <hr>
              </div>
            </div>
          <!-- advertisement section -->
          <div class="container py-4 justify-content-center mt-3 px-4">
            <div class="card-body">
              <img class="img-fluid" width="500" height="300" src="{{ url('storage/'.$geoheritage2->foto) }}"
                  alt="">
            </div>    

            <p>
            <p class="black-text2">{{ $geoheritage2->deskripsi }}</p>
            </p>
            </br></br></br>
          <div class="row mb-10">
            <div class="col-md-6 col-xs-6 text-left ">
              <div class="card">
                <div class="card-body">

                  <p>
                  <h5 class="black-text"><strong>Alamat :</strong></h5>
                  <p class="black-text3">{{ $geoheritage2->alamat }}</p>
                  </p>

                  <p>
                  <h5 class="black-text"><strong>Titik Koordinat :</strong></h5>
                  <p class="black-text3">{{ $geoheritage2->jam_buka}}</p>
                  </p>

                  <p>
                  <h5 class="black-text"><strong>Jam Operasional :</strong></h5>
                  <p class="black-text3">{{ $geoheritage2->jam_buka}}</p>
                  </p>

                  <p>
                  <h5 class="black-text"><strong>Harga Hari Kerja :</strong></h5>
                  <p class="black-text3">{{ $geoheritage2->harga_weekday}}</p>
                  </p>

                  <p>
                  <h5 class="black-text"><strong>Harga Akhir Pekan :</strong></h5>
                  <p class="black-text3">{{ $geoheritage2->harga_weekend}}</p>
                  </p>

                  <p>
                  <h5 class="black-text"><strong>Kontak :</strong></h5>
                  <p class="black-text3">{{ $geoheritage2->kontak}}</p>
                  </p>

                  <p>
                  <h5 class="black-text"><strong>Sosial Media :</strong></h5>
                  <p class="black-text3">{{ $geoheritage2->sosmed}}</p>
                  </p>

                </div>
              </div>
            </div>
            <div class="col-md-6 col-xs-6">
              <div class="card">
                <div class="card-body">
                  <iframe src="{{ $geoheritage2->link_maps }}" width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
            </div>
          </div>
          </div>
          </div>
        </div>
      </div>
	<!-- end advertisement section -->
          </div>
        </div>
        </div>

<!--====  End of Contact Form  ====-->

@endsection

</html>