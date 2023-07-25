@extends('layouts.main')

@section('navbar')
  <!-- Contact Start -->
  <div class="contact100-form-title container">
    <div class="row text-center">
      <h3 class="black-text">{{ $event2->nama }}</h3>

        <img class="img-fluid" width="500" src="{{ url('storage/'.$event2->foto) }}"alt="">

                          </br></br></br>

                          <h5 class="black-text">{{ $event2->deskripsi }}</h5>
    </div>
                          </br></br></br>

                          <div class="px-100px">
                          <p class="black-text">
                          <strong>Tempat : </strong>{{ $event2->alamat }}
                          </p>

                          <p class="black-text">
                          <strong>Tanggal : </strong>{{ $event2->tanggal_kegiatan }}
                          </p>

                          <p class="black-text">
                          <strong>Waktu : </strong>{{ $event2->waktu_kegiatan}}
                          </p>

                          <p class="black-text">
                          <strong>Penyelenggara : </strong>{{ $event2->penyelenggara}}
                          </p>
                        
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          </div>
      </div>
	<!-- end advertisement section -->
      </div>

<!--====  End of Contact Form  ====-->

@endsection

</html>