<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="Voice of Bangladesh | Nonprofit Organization, Alor Pothe Nobojatray (APON) Foundation is a non-profit, government approved, charitable organisation dedicated towards enlightening and improving the lives of the economically and socially deprived members of the community. " />
    <meta name="keywords" content="street children, child labor, slum children, child education, health, shelter, poverty reduction, hunger, quality education, nutrition, disaster,  women, youth , charitable organization, development organization, NGO, empowerment, development, social enterprises, livelihood,  climate change, migration, climate refugee, underprivileged children, rehabilitation,  child rights, child trafficking, child protection, child abuse, girls club, early marriage, dowry, sexual and physical abuse, gender based violence , preventing violent extremism, combating violent extremism, social harmony, social cohesion, inclusion, no one left behind, minority, ethnic minority, tribal community, COVID-19 victims, cyclone victims, climate affected, flood, research, program development" />

    <!-- Page Title -->
    <title>{{setting('site.title')}} | {{setting('site.description')}}</title>

    <!-- Favicon and Touch Icons -->
    <link rel="icon" type="image/png" href="{{ Voyager::image( Voyager::setting('site.favicon')) }}">
    {{-- <link href="{{ asset('assets/images/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <link href="{{ asset('assets/images/apple-touch-icon-72x72.png')}}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{ asset('assets/images/apple-touch-icon-114x114.png')}}" rel="apple-touch-icon" sizes="114x114">
    <link href="{{ asset('assets/images/apple-touch-icon-144x144.png')}}" rel="apple-touch-icon" sizes="144x144"> --}}

    <!-- Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/jquery-ui.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/css-plugin-collections.css')}}" rel="stylesheet" />
    <!-- CSS | menuzord megamenu skins -->
    <link id="menuzord-menu-skins" href="{{ asset('assets/css/menuzord-skins/menuzord-rounded-boxed.css')}}" rel="stylesheet" />
    <!-- CSS | Main style file -->
    <link href="{{ asset('assets/css/style-main.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="{{ asset('assets/css/preloader.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="{{ asset('assets/css/custom-bootstrap-margin-padding.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="{{ asset('assets/css/responsive.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href="assets/css/style.css" rel="stylesheet" type="text/css"> -->

    <!-- Revolution Slider 5.x CSS settings -->
    <link href="{{ asset('assets/js/revolution-slider/css/settings.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/js/revolution-slider/css/layers.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/js/revolution-slider/css/navigation.css')}}" rel="stylesheet" type="text/css" />

     <link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css')}}">
     <link rel="stylesheet" href="{{ asset('assets/css/register-page-responsive.css')}}">

    <!-- CSS | Theme Color -->
    <link href="{{ asset('assets/css/colors/theme-skin-color-set-4.css')}}" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- external javascripts -->
    <script src="{{ asset('assets/js/jquery-2.2.4.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="{{ asset('assets/js/jquery-plugin-collection.js')}}"></script>

    <!-- Revolution Slider 5.x SCRIPTS -->
    <script src="{{ asset('assets/js/revolution-slider/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{ asset('assets/js/revolution-slider/js/jquery.themepunch.revolution.min.js')}}"></script>


    <style type="text/css">
        .menuzord .menuzord-menu > li.donate > a
        {
            background: #ED1C24 none repeat scroll 0 0;
            color: #fff;
        }
    </style>
</head>
<body class="">
    <div id="wrapper" class="clearfix">
        <!-- preloader -->
      {{--   <div id="preloader">
            <div id="spinner">
                <img src="{{ asset('assets/images/logo-1.jpg')}}" alt="">
            </div>
            <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
        </div> --}}

        <!-- Header -->
        <header id="header" class="header">

            <div class="header-nav">
                <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
                    <div class="container">
                        <nav id="menuzord-right" class="menuzord default">
                            <a class="menuzord-brand pull-left flip" href="/">
                                <img src="{{ Voyager::image( Voyager::setting('site.logo')) }}" alt="">
                            </a>
                            <ul class="menuzord-menu onepage-nav">
                                <li ><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('news') }}">Events</a></li>
                                <li><a href="{{ route('volunteer') }}">Volunteer</a></li>
                                <li><a href="{{ route('volunteer-story') }}">Volunteer story</a></li>
                                <li class="donate"><a href="{{ route('register') }}">Join as volunteer</a></li>
                            </ul>
                        </nav>
                    </div>  
                    <div id="myOverlay" class="overlay">
                      <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                      <div class="overlay-content">
                        <form action="{{ route('search') }}" method="GET">
                          <input type="text" placeholder="Search.." name="search" required>
                          <select name="searchName" id="">
                              <option value="0">Events</option>
                              <option value="1">Volunteer Story</option>
                          </select>
                          <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                      </div>
                    </div>
                                    
                    <i class="fas fa-search top-search openBtn mb-lg-0 mb-xl-0 mb-2" onclick="openSearch()"></i>      
                </div>
            </div>
        </header>
    <!-- mainArea -->
    <main role="main">


        @yield('content')

        
    </main>
        @include('layouts.footer')
        <a class="scrollToTop" href="/"><i class="fa fa-angle-up"></i></a>
</div>
     <!-- Footer Scripts -->
    <!-- JS | Custom script for all pages -->
    <script src="{{ asset('assets/js/custom.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
    <script>
    function openSearch() {
    document.getElementById("myOverlay").style.display = "block";
    }
    function closeSearch() {
    document.getElementById("myOverlay").style.display = "none";
    }
    </script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) -->
    <script type="text/javascript" src="{{ asset('assets/js/revolution-slider/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/revolution-slider/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/revolution-slider/js/extensions/revolution.extension.video.min.js')}}"></script>
    <script src="{{ asset('assets/js/odometer.min.js')}}"></script>
    <script src="{{ asset('assets/js/oddometer-active.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.appear.min.js')}}"></script>
    <script src="{{ asset('assets/js/step-signup.js')}}"></script>


    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script> --}}
<script src="{{ asset('js/share.js') }}"></script>
  </body>
</html>