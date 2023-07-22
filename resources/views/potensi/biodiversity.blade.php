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
                <h3>Biodiversity</h3>
                <h5 class="black-text">Biodiversity adalah keragaman diantara makhluk hidup, dari berbagai sumber termasuk daratan, pesisir, lautan dan ekosistem perairan lainnya serta kompleksitas ekologis dimana mereka merupakan bagiannya.</h5>
                <hr>
            </div>
            </div>
            <form action="{{ url()->current() }}" method="get">
            <input type="search"
            name="keyword"
            value="{{ request('keyword') }}"
            placeholder="Search ....."
            class="block w-full pl-4 pr-10 text-sm leading-5 transition rounded-full shadow-sm border-secondary-300 bg-secondary-50 focus:bg-white focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
            <button type="submit"
            class="absolute top-0 right-0 inline-flex items-center px-2 py-2 ml-1 mr-2 text-sm focus:outline-none">
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12.5 11.2549H11.71L11.43 10.9849C12.41 9.84488 13 8.36488 13 6.75488C13 3.16488 10.09 0.254883 6.5 0.254883C2.91 0.254883 0 3.16488 0 6.75488C0 10.3449 2.91 13.2549 6.5 13.2549C8.11 13.2549 9.59 12.6649 10.73 11.6849L11 11.9649V12.7549L16 17.7449L17.49 16.2549L12.5 11.2549ZM6.5 11.2549C4.01 11.2549 2 9.24488 2 6.75488C2 4.26488 4.01 2.25488 6.5 2.25488C8.99 2.25488 11 4.26488 11 6.75488C11 9.24488 8.99 11.2549 6.5 11.2549Z" fill="#394040"/>
            </svg>

    </button>
</div>
</form>
@if ($spaces->count() > 0)
          @foreach ($spaces as $space)
          <div class="col-lg-4 text-center">
            <img src="{{ url('storage/'.$space->foto) }}" alt="" class="img-fluid2 rounded-circle w-50 mb-4">
            <div class="container-contact100-form-btn">
                            <button class="contact100-form-btn">
                                <span>
                                    Detail
                                </span>
                            </button>
                        </div>
                        <hr>
            <h4><span class="black-text">{{ $space->nama }}</span></h4>
            <span class="d-block mb-3 text-uppercase"><svg width="11" height="13" viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5.9375 5.94805C5.45798 5.94805 4.9981 5.79001 4.65903 5.50871C4.31995 5.2274 4.12946 4.84587 4.12946 4.44805C4.12946 4.05022 4.31995 3.66869 4.65903 3.38739C4.9981 3.10608 5.45798 2.94805 5.9375 2.94805C6.41702 2.94805 6.8769 3.10608 7.21597 3.38739C7.55505 3.66869 7.74554 4.05022 7.74554 4.44805C7.74554 4.64503 7.69877 4.84008 7.60791 5.02207C7.51704 5.20406 7.38387 5.36942 7.21597 5.50871C7.04808 5.64799 6.84877 5.75848 6.62941 5.83387C6.41004 5.90925 6.17493 5.94805 5.9375 5.94805ZM5.9375 0.248047C4.59484 0.248047 3.30717 0.690546 2.35777 1.4782C1.40837 2.26585 0.875 3.33414 0.875 4.44805C0.875 7.59805 5.9375 12.248 5.9375 12.248C5.9375 12.248 11 7.59805 11 4.44805C11 3.33414 10.4666 2.26585 9.51723 1.4782C8.56782 0.690546 7.28016 0.248047 5.9375 0.248047Z" fill="#2C3333"/>
</svg>
{{ $space->alamat }}</span>
          </div>
          @endforeach
          @endif
          </div>
        </div>
      </div>
      

<!--====  End of Contact Form  ====-->

@endsection

</html>