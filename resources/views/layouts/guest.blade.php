<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="Indiro - Factory & Industrial HTML Template" />
    <meta property="og:title" content="Indiro - Factory & Industrial HTML Template" />
    <meta property="og:description" content="Industry – Factory & Industrial HTML Template is particularly designed for factory, industry, architecture, plants, mechanical, power and energy Business Template." />
    <meta property="og:image" content="https://indiro.dexignzone.com/xhtml/social-image.png" />
    <meta name="format-detection" content="telephone=no">

    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Title -->
    <title>NORET Engineering Technologies Ltd</title>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}" />

    <!-- Stylesheet -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet" />
    <link
      href="{{ asset('assets/vendor/lightgallery/css/lightgallery.min.css') }}"
      rel="stylesheet"
    />
    <link
      href="{{ asset('assets/vendor/magnific-popup/magnific-popup.min.css') }}"
      rel="stylesheet"
    />
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/animate/animate.css') }}" rel="stylesheet" />

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/rangeslider/rangeslider.css') }}" />
    <link rel="stylesheet" class="skin" href="{{ asset('assets/css/skin/skin-1.css') }}" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Roboto:wght@100;300;400;500;700;900&display=swap"
      rel="stylesheet"
    />
    @livewireStyles
  </head>

  <body id="bg" class="layout-dark">
    {{-- <div id="loading-area" class="loading-page-3">
      <div class="loading-inner">
        <div class="loader">
          <div class="circle"></div>
        </div>
        <div class="loader">
          <div class="circle"></div>
        </div>
      </div>
    </div> --}}
    <div class="page-wraper">
      <!-- Header -->
      @livewire('header-component')



      {{ $slot }}

      <!-- Footer -->
      @livewire('footer-component')
      <!-- Footer End -->
      <button class="scroltop icon-up" type="button">
        <i class="fas fa-arrow-up"></i>
      </button>
    </div>
    <!-- JAVASCRIPT FILES ========================================= -->
    {{-- <script
      data-cfasync="false"
      src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"
    ></script> --}}
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <!-- JQUERY.MIN JS -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- BOOTSTRAP.MIN JS -->
    <script src="{{ asset('assets/vendor/magnific-popup/magnific-popup.js') }}"></script>
    <!-- MAGNIFIC POPUP JS -->
    <script src="{{ asset('assets/vendor/lightgallery/js/lightgallery-all.min.js') }}"></script>
    <!-- LIGHTGALLERY -->
    <script src="{{ asset('assets/vendor/counter/waypoints-min.js') }}"></script>
    <!-- WAYPOINTS JS -->
    <script src="{{ asset('assets/vendor/counter/counterup.min.js') }}"></script>
    <!-- COUNTERUP JS -->
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
     <!-- SWIPER SLIDER -->
     <script src="{{ asset('assets/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script>
    <!-- OWL-CAROUSEL -->
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <!-- AOS -->
    <script src="{{ asset('assets/vendor/particles/particles.js') }}"></script>
    <!-- PARTICLES JS  -->
    <script src="{{ asset('assets/vendor/particles/particles.app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <!-- PARTICLES JS  -->
    <!-- Google API For Recaptcha  -->
    <script src="{{ asset('assets/js/dz.carousel.js') }}"></script>
    <!-- OWL CAROUSEL -->
    <script src="{{ asset('assets/js/dz.ajax.js') }}"></script>
    <!-- AJAX -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <!-- CUSTOM JS -->
    <script src="{{ asset('assets/vendor/rangeslider/rangeslider.js') }}"></script>
    <!-- RANGESLIDER -->
    <script src="{{ asset('assets/vendor/switcher/switcher.js') }}"></script>
    <!-- SWITCHER -->
    @livewireScripts
  </body>
</html>
