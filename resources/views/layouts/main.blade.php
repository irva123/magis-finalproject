<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>MAGIS</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Cemre Tellioğlu Tunçay">

        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap&subset=latin-ext" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet"> 
        <!-- Place favicon.ico in the root directory -->
        <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
        <link rel="stylesheet" href="{{ asset('tampilan/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('tampilan/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{ asset('tampilan/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{ asset('tampilan/css/reset.css')}}">
        <link rel="stylesheet" href="{{ asset('tampilan/css/style.css')}}">
        <link rel="stylesheet" href="{{ asset('tampilan/css/animate.css')}}">
        <link rel="stylesheet" href="{{ asset('tampilan/css/responsive.css')}}">
        <link rel="stylesheet" href="{{ asset('tampilan/plugins/themify-icons/themify-icons.css')}}">
        <!-- main style -->
	    <link rel="stylesheet" href="{{ asset('tampilan/css/main.css')}}">
      <!-- magnific popup -->
	    <link rel="stylesheet" href="{{ asset('tampilan/css/magnific-popup.css')}}">
        
        <script src="{{ asset('tampilan/js/vendor/modernizr-2.8.3.min.js')}}"></script>

    </head>
    <body>
     <!-- header -->
        <!-- Navbar -->
        @include('layouts.header')
        @yield('navbar')

        <!-- Footer -->
        <footer class="footer pt-3  ">
        @include('layouts.footer')
        </footer>
        
        </div>
    </main>
    <script src="{{ asset('tampilan/js/vendor/jquery-1.12.0.min.js')}}"></script>
        <script src="{{ asset('tampilan/js/jquery-easing/jquery.easing.min.js')}}"></script>
        <script src="{{ asset('tampilan/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('tampilan/js/parallax.min.js')}}"></script>
        <script src="{{ asset('tampilan/js/ajax-mail.js')}}"></script>
        <script src="{{ asset('tampilan/js/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('tampilan/js/jquery.nicescroll.min.js')}}"></script>
        <script src="{{ asset('tampilan/js/main.js')}}"></script>
        <!-- magnific popup -->
	<script src="{{ asset('tampilan/js/jquery.magnific-popup.min.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        $(function(){
            $(document).on('click', '#kirim', function(e){
                e.preventDefault();
                var link = $(this).attr("href");

                Swal.fire({
                position: 'top-center',
                icon: 'success',
                title: 'Kritik & Saran Anda Telah Terkirim',
                showConfirmButton: true,
                timer: 1500
                })
            });
        });
        </script>
    </body>
</html>