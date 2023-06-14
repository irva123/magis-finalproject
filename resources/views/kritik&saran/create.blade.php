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
                            <span class="label-input100">Your Name</span>
                            <input class="input100" type="text" name="nama" placeholder="Enter your name" id="nama">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz" id="email">
                            <span class="label-input100">Email</span>
                            <input class="input100" type="text" name="email" placeholder="Enter your email addess">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Message is required" id="no_hp">
                            <span class="label-input100">No.Hp</span>
                            <input class="input100" name="no_hp" placeholder="Your message here..."></input>
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Message is required" id="isi_pesan">
                            <span class="label-input100">Message</span>
                            <textarea class="input100" name="isi_pesan" placeholder="Your message here..."></textarea>
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