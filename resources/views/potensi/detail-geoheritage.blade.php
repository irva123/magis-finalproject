<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<!-- 
THEME: Medic | Medical HTML Template
VERSION: 1.0.0
AUTHOR: Themefisher

HOMEPAGE: https://themefisher.com/products/medic-medical-template/
DEMO: https://demo.themefisher.com/themefisher/medic/
GITHUB: https://github.com/themefisher/Medic-Bootstrap-Medical-Template

WEBSITE: https://themefisher.com
TWITTER: https://twitter.com/themefisher
FACEBOOK: https://www.facebook.com/themefisher
-->



@extends('layouts.main')

@section('navbar')
  <!-- Contact Start -->
        <div class="contact100-form-title container">
        <div class="row mt-10">
          <div class="col-12 text-center ">
            <div class="row text-center">
              <div class="col-lg-12">
                <h3>{{ $geoheritage2->nama }}</h3>
                <hr>
            </div>
            </div>
          <!-- advertisement section -->
          <div class="container py-4 justify-content-center mt-3 px-4">
        <div class="row">
            <div class="col-md-6 col-xs-6 ">
                <div class="card">
                    <div class="card-body">

                        <p>
                        <h5 class="black-text"><strong>Deskripsi :</strong></h5>
                        <p class="black-text">{{ $geoheritage2->deskripsi }}</p>
                        </p>

                        <p>
                        <h5 class="black-text"><strong>Alamat :</strong></h5>
                        <p class="black-text">{{ $geoheritage2->alamat }}</p>
                        </p>

                        <p>
                        <h5 class="black-text"><strong>Titik Koordinat :</strong></h5>
                        <p class="black-text">{{ $geoheritage2->titik_koordinat }}</p>
                        </p>

                        <p>
                        <h5 class="black-text"><strong>Jam Operasional :</strong></h5>
                        <p class="black-text">{{ $geoheritage2->jam_buka}}</p>
                        </p>

                        <p>
                        <h5 class="black-text"><strong>Harga Hari Kerja :</strong></h5>
                        <p class="black-text">{{ $geoheritage2->harga_weekday}}</p>
                        </p>

                        <p>
                        <h5 class="black-text"><strong>Harga Akhir Pekan :</strong></h5>
                        <p class="black-text">{{ $geoheritage2->harga_weekend}}</p>
                        </p>

                        <p>
                        <h5 class="black-text"><strong>Kontak :</strong></h5>
                        <p class="black-text">{{ $geoheritage2->kontak}}</p>
                        </p>

                        <p>
                        <h5 class="black-text"><strong>Sosial Media :</strong></h5>
                        <p class="black-text">{{ $geoheritage2->sosmed}}</p>
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xs-6">
            <div class="card">
                    <div class="card-body">
                    <iframe src="{{ $geoheritage2->link_maps }}" width="490" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                        <img class="img-fluid" width="500" height="300" src="{{ url('storage/'.$geoheritage2->foto) }}"
                            alt="">
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