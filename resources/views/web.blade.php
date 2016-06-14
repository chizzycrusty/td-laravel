<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Find Food</title>

  <!--SEO Meta Tags-->
  <meta name="description" content="Tron - Multiconcept App Showcase Theme" />
  <meta name="keywords" content="multipurpose, multiconcept, app showcase, mobile, blog, portfolio, specialty pages, landing, elements, shortcodes, html5, css3, jquery, js, modernizr, gallery, slider, touch, creative" />
  <meta name="author" content="8Guild" />

  <!--Mobile Specific Meta Tag-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

  <!--Favicon-->
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
  <link rel="icon" href="img/logo.png" type="image/x-icon">

  <!-- Pixeden Stroke Icons -->
  <link rel="stylesheet" type="text/css" href="{{ asset("css/pixeden.css") }}"/>

  <!-- All Theme Styles including Bootstrap, FontAwesome, etc. compiled from styles.scss-->
  <link rel="stylesheet" type="text/css" href="{{asset("css/web-style.css")}}"/>

  <!--Modernizr / Detectizr-->
  <script src="{{asset("js/vendor/modernizr.custom.js")}}"></script>
  <script src="{{asset("js/vendor/detectizr.min.js")}}"></script>
</head>

<!-- Body -->
<!-- "is-preloader preloading" is a helper classes if preloader is enabled. -->
<body class="is-preloader preloading">

  <!-- Google Tag Manager -->  
  <noscript><iframe src="http://www.googletagmanager.com/ns.html?id=GTM-K57FHH" 
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> 
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': 
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], 
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src= 
  '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f); 
  })(window,document,'script','dataLayer','GTM-K57FHH');</script> 
  


  <!-- End Google Tag Manager -->
  
  <!-- Preloader -->
  <!-- 
      Data API:
      data-spinner - Options: 'spinner1', 'spinner2', 'spinner3', 'spinner4', 'spinner5', 'spinner6', 'spinner7'
      data-screenbg - Screen background color. Hex, RGB or RGBA colors
   -->
  <div id="preloader" data-spinner="spinner1" data-screenbg="#fff"></div>

  <!-- Page Wrapper -->
  <div class="page-wrapper" id="top">


    <!-- Navbar -->
    <!-- Add class ".navbar-sticky" to make navbar stuck when it hits the top of the page. You can also use modifier class like: "navbar-light" to change navbar apperance. The screen width at which navbar collapses can be controlled through the variable "$nav-collapse" in sass/variables.scss -->
    <header class="navbar navbar-light navbar-sticky">
      <div class="container">
        <a href="#top" class="site-logo">
          <img src="img/logo.png" class="logo-default Tron" alt="Tron">
          <img src="img/logo.png" class="logo-alt Tron" alt="Tron">
        </a><!-- .site-logo -->

        <!-- Mobile Menu Toggle -->
        <div class="nav-toggle"><span></span></div>

        <div class="clearfix">

          <!-- Use modifier class to apply different submenu (dropdown) animations. Possible options: .submenu-slideUp, .submenu-slideDown, .submenu-flipIn. Please note if no class added to .main-navigation default fadeIn animation will be applied. Note: this is applicable only for Desktop. -->
          <nav class="main-navigation submenu-slideUp">
            <ul class="menu">
              @if (Auth::guest())
                      <li><a href="{{ url('/login') }}">Se connecter</a></li>
                      <li><a href="{{ url('/register') }}">Créer un compte</a></li>
              @else

                
                <li><a href="{{ url('/user') }}"><i class="fa fa-user"></i> Mon profil</a></li>
                <li><a href="{{ route('post.create') }}">Poster un restaurant</a></li>
                <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out"></i> Se déconnecter</a></li>
              @endif
            </ul>
          </nav><!-- .main-navigation -->
        </div><!-- .clearfix -->
      </div><!-- .container -->
    </header><!-- .navbar

    
    <!-- Device Slider -->
    <section class="device-slider" style="background-image: url('img/resto-flou.jpg');">
      <span class="angle"></span>
      <div class="container">
        <div class="row">
          <div class="col-sm-5">
            <!-- Phone Carousel -->
            <!-- Data API:
              data-loop="true/false" enable/disable looping
              data-autoplay="true/false" enable/disable carousel autoplay
              data-interval="3000" autoplay interval timeout in miliseconds 
             -->
            <div class="phone-carousel" data-loop="true" data-autoplay="true" data-interval="4000">
              <img src="img/device-slider/phone.png" class="phone-mask" alt="Phone">
              <!-- Fallback Cover Screen -->
              <div class="cover">
                <img src="img/device-slider/screen01.png" alt="Screen 1">
              </div>
              <div class="carousel">
                <div class="inner">
                  <img src="img/device-slider/screen01.png" alt="Screen 1">
                  <img src="img/device-slider/screen02.png" alt="Screen 2">
                  <img src="img/device-slider/screen03.png" alt="Screen 3">
                  <img src="img/device-slider/screen04.png" alt="Screen 4">
                </div>
              </div>
            </div><!-- .phone-carousel -->
          </div>
          <div class="col-sm-7 padding-top mobile-center">
            <h1 class="text-light space-bottom-2x">Find Food</h1>
            <p class="text-light text-thin space-bottom-2x">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor similique a ratione eveniet quas, sunt asperiores, quam ad voluptas distinctio, aliquid culpa consectetur! Quisquam, incidunt culpa corporis fuga aperiam quos.</p>
            <!-- App Store Button -->
            <a href="index.html#" class="btn btn-app-store">
              <i class="fa fa-apple"></i>
              <div>
                <span>Download on the</span>
                App Store
              </div>
            </a>
            <!-- Google Play Button -->
            <a href="index.html#" class="btn btn-google-play">
              <img src="img/google-play.png" alt="Google Play">
              <span>Get it on</span>
            </a>
          </div>
        </div><!-- .row -->
      </div><!-- .container -->
    </section><!-- .device-slider -->
     
    <!-- Introduction -->
    


    <a href="index.html#" class="scroll-to-top-btn">
      <i class="fa fa-angle-up"></i>
    </a><!-- .scroll-to-top-btn -->

      <!-- Footer -->
      <div class="container-fluid">
        <div class="row footerc">
          <div class="col-md-12">
            <p>Copyrights 2016 © Find Food</p>
          </div>
        </div>
      </div>

  <!-- JavaScript (jQuery) libraries, plugins and custom scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="{{asset("js/vendor/preloader.min.js")}}"></script>
  <script src="{{asset("js/vendor/placeholder.js")}}"></script>
  <script src="{{asset("js/vendor/velocity.min.js")}}"></script>
  <script src="{{asset("js/vendor/magnific-popup.min.js")}}"></script>
  <script src="{{asset("js/vendor/owl.carousel.min.js")}}"></script>
  <script src="{{asset("js/scripts.js")}}"></script>
  <script>
  $("#phone-carousel").owlCarousel({
    dots : false
  });
  </script>



</body><!-- <body> -->

</html>
