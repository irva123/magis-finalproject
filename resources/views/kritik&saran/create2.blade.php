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

<!DOCTYPE html>
<html lang="zxx">
<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>Medic | Medical HTML Template</title>

  <!-- ** Mobile Specific Metas ** -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Medical HTML Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Medical HTML Template v1.0">
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <!-- FancyBox -->
  <link rel="stylesheet" href="plugins/fancybox/jquery.fancybox.min.css">
  <!-- fontawesome -->
  <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
  <!-- animate.css -->
  <link rel="stylesheet" href="plugins/animation/animate.min.css">
  <!-- jquery-ui -->
  <link rel="stylesheet" href="plugins/jquery-ui/jquery-ui.css">
  <!-- timePicker -->
  <link rel="stylesheet" href="plugins/timePicker/timePicker.css">
  
  <!-- Stylesheets -->
  <link href="css/style.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="icon" href="images/favicon.png" type="image/x-icon">

</head>


<body>
  
  <div class="page-wrapper">

<!--Page Title-->
<section class=" text-center">
    <div class="container">
            <h1>KRITIK & SARAN</h1>
    </div>
</section>
<!--End Page Title-->

<section class="section contact">
  <!-- container start -->
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-5 ">
        <!-- address start -->
        <div class="address-block">
          <!-- Location -->
          <div class="media">
            <i class="far fa-map"></i>
            <div class="media-body">
              <h3>Location</h3>
              <p>Jl. Kenangan yang tidak sampai jadian sampai sekarang Kecamatan Kepanjen, kabupaten Malang, Jawa Timur, Indonesia, 68156</p>
            </div>
          </div>
          <!-- Phone -->
          <div class="media">
            <i class="fas fa-phone"></i>
            <div class="media-body">
              <h3>Phone</h3>
              <p>
                0123-4567-8910
              </p>
            </div>
          </div>
          <!-- Email -->
          <div class="media">
            <i class="far fa-envelope"></i>
            <div class="media-body">
              <h3>Email</h3>
              <p>
              Kepanjen@gmail.com
              </p>
            </div>
          </div>
        </div>
        <!-- address end -->
      </div>
      <div class="col-lg-8 col-md-7">
        <div class="contact-form">
          <!-- contact form start -->
          <form  class="row" method="post" action="/kritik" enctype= multipart/form-data>
                @csrf
            <!-- name -->
            <div class="col-lg-6">
              <input type="text" name="nama" class="form-control main" placeholder="Name" id="nama" required>
            </div>
            <!-- email -->
            <div class="col-lg-6">
              <input type="email" name="email" class="form-control main" placeholder="Email" id="email" required>
            </div>
            <!-- phone -->
            <div class="col-lg-12">
              <input type="text" name="no_hp" class="form-control main" placeholder="No Hp" id="no_hp" required>
            </div>
            <!-- message -->
            <div class="col-lg-12">
              <textarea type="text" name="isi_pesan"  class="form-control main" placeholder="Isi Pesan" id="isi_pesan" required></textarea>
            </div>
            <!-- submit button -->
            <div class="col-md-12 text-right">
              <button class="btn btn-style-one" type="submit">Send Message</button>
            </div>
          </form>
          <!-- contact form end -->
        </div>
      </div>
    </div>
  </div>
  <!-- container end -->
</section>
<!--====  End of Contact Form  ====-->




<!-- jquery -->
<script src="plugins/jquery.min.js"></script>
<!-- bootstrap -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- Slick Slider -->
<script src="plugins/slick/slick.min.js"></script>
<script src="plugins/slick/slick-animation.min.js"></script>
<!-- FancyBox -->
<script src="plugins/fancybox/jquery.fancybox.min.js" defer></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
<script src="plugins/google-map/gmap.js" defer></script>

<!-- jquery-ui -->
<script src="plugins/jquery-ui/jquery-ui.js" defer></script>
<!-- timePicker -->
<script src="plugins/timePicker/timePicker.js" defer></script>

<!-- script js -->
<script src="js/script.js"></script>
</body>

</html>