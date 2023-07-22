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
  <section id="section6" class="contact">
            <div class="contact100-form-title container">
                <h3>Bappeda Kabupaten Malang</h3>
                <h2>Kritik & Saran</h2>
                    <form  class="contact100-form validate-form" method="post" action="/kritik" enctype= multipart/form-data>
                @csrf

                        <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required" >
                            <span class="label-input100">Nama</span>
                            <input class="input100" type="text" name="nama" placeholder="Masukkan nama anda" id="nama">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz" id="email">
                            <span class="label-input100">Email</span>
                            <input class="input100" type="text" name="email" placeholder="Masukkan alamat email anda">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Message is required" id="no_hp">
                            <span class="label-input100">No. Hp/WhatsApp</span>
                            <input class="input100" name="no_hp" placeholder="Masukkan no. hp atau Wa anda"></input>
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Message is required" id="isi_pesan">
                            <span class="label-input100">Kritik dan Saran</span>
                            <textarea class="input100" name="isi_pesan" placeholder="Sampaikan kritik dan saran anda di sini..."></textarea>
                            <span class="focus-input100"></span>
                        </div>
                    <!-- submit button -->
            <div class="col-md-12 text-right">
            </div>
                        <div class="container-contact100-form-btn">
                            <button class="contact100-form-btn" type="submit">
                                <span>
                                    Kirim
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
        </section>
        <!-- Contact End -->
</section>
<!--====  End of Contact Form  ====-->

@endsection

</html>