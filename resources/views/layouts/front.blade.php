<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Capital Amigo">
    <!-- keywords -->
    <meta name="keywords" content="Capital Amigo">
    <!-- Page Title -->
    <title>Capital Amigo | Inversiones Inmobiliarias</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('capital_amigo/img/favicon.ico')}}">
    <!-- Bundle -->
    <link rel="stylesheet" href="{{ asset('capital_amigo/vendor/css/bundle.min.css') }}">
    <!-- Plugin Css -->
    <link rel="stylesheet" href="{{ asset('capital_amigo/vendor/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('capital_amigo/vendor/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('capital_amigo/vendor/css/swiper.min.css') }}">

    <link rel="stylesheet" href="{{ asset('capital_amigo/vendor/css/cubeportfolio.min.css') }}">
    <!-- Revolution Slider CSS Files -->
    <link rel="stylesheet" href="{{ asset('capital_amigo/css/navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('capital_amigo/css/settings.css') }}">
    <!-- Slick CSS Files -->
    <link rel="stylesheet" href="{{ asset('capital_amigo/vendor/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('capital_amigo/vendor/css/slick-theme.css') }}">
    <!-- Select -->
    <link rel="stylesheet" href="{{ asset('capital_amigo/vendor/css/select2.min.css') }}">
    <!-- Style Sheet -->
    <link rel="stylesheet" href="{{ asset('capital_amigo/css/style.css') }}">
    <!-- Custom Style CSS File -->
    <link rel="stylesheet" href="{{ asset('capital_amigo/css/custom.css') }}">
</head>
<body data-spy="scroll" data-target=".navbar-nav" data-offset="90">

<!-- Loader -->
<div class="loader" id="loader-fade">
    <div class="loader-container">
        <ul class="loader-box">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
</div>
<!-- Loader ends -->

<!-- Header start -->
<header>
    <nav class="navbar navbar-top-default navbar-expand-lg static-nav transparent-bg nav-bottom-line">
        <div class="container">
            <a class="logo" href="javascript:void(0)">
                <img src="{{ asset('capital_amigo/img/logo.png')}}" alt="logo" title="Logo" class="logo-default">
                <img src="{{ asset('capital_amigo/img/logo.png')}}" alt="logo" title="Logo" class="logo-scrolled">
            </a>
            <div class="collapse navbar-collapse d-none d-lg-block">
                <ul class="nav navbar-nav ml-auto mr-4">
                    <li class="nav-item"> <a href="#inicio" class="scroll nav-link">Inicio</a></li>
                    <li class="nav-item"> <a href="#aboutus" class="scroll nav-link">Acerca de</a></li>
                    <li class="nav-item"> <a href="#cases" class="scroll nav-link">Proyectos</a></li>
                    <li class="nav-item"> <a href="#prices" class="scroll nav-link">Estrategia de inversión</a></li>
                    <!-- <li class="nav-item"> <a href="#blog" class="scroll nav-link">blog</a></li> -->
                    <li class="nav-item"> <a href="#contact" class="scroll nav-link">Contacto</a></li>
                </ul>
            </div>

            <!-- <a href="#request" class="scroll btn-setting btn-scale btn-green text-white d-none d-lg-block">free consultation</a> -->

            <!-- side menu open button -->
            <a class="menu_bars d-inline-block menu-bars-setting" id="sidemenu_toggle">
                <div class="menu-lines">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </a>
        </div>
    </nav>
    <div class="side-menu">
        <div class="inner-wrapper nav-icon">
            <span class="btn-close" id="btn_sideNavClose"></span>
            <nav class="side-nav w-100">
                <div class="navbar-nav">
                    <a href="#inicio" class="scroll nav-link">inicio</a>
                    <a href="#aboutus" class="scroll nav-link">Acerca de</a>
                    <a href="#cases" class="scroll nav-link">Proyectos</a>
                    <a href="#prices" class="scroll nav-link">Estrategia de Inversión</a>
                    <!-- <a href="#blog" class="scroll nav-link">blog</a> -->
                    <a href="#contact" class="scroll nav-link">Contacto</a>
                    <a class="menu-line"><i class="fa fa-angle-right font-14" aria-hidden="true"></i></a>
                </div>
            </nav>

            <div class="side-footer text-white w-100">
                <ul class="social-icons-simple">
                    <li class="side-menu-icons"><a href="javascript:void(0)"><i class="fab fa-facebook-f color-white"></i> </a> </li>
                    <li class="side-menu-icons"><a href="javascript:void(0)"><i class="fab fa-instagram color-white"></i> </a> </li>
                    <li class="side-menu-icons"><a href="javascript:void(0)"><i class="fab fa-twitter color-white"></i> </a> </li>
                </ul>
                <p class="text-white">&copy; {{ now()->year }} Capital Amigo. Hecho con <span style="color: rgb(201, 0, 0);">&#x2764;</span> por <a href="javascript:void(0)" style="color: white;">Tooring</a></p>
            </div>
        </div>
    </div>
    <a id="close_side_menu" href="javascript:void(0);"></a>
    <!--Side Menu-->
</header>
<!-- Header end -->

@yield('content')

<!-- Footer starts -->
<footer class="bg-light-gray ">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <p class="copyrights px-0 py-5">© {{ now()->year }} Capital Amigo. Hecho con <span style="color: rgb(201, 0, 0);">&#x2764;</span> por <a href="javascript:void(0)">Tooring</a></p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer ends -->


<!-- JavaScript -->
<script src="{{ asset('capital_amigo/vendor/js/bundle.min.js')}}"></script>

<!-- Plugin Js -->
<script src="{{ asset('capital_amigo/vendor/js/jquery.fancybox.min.js')}}"></script>
<script src="{{ asset('capital_amigo/vendor/js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('capital_amigo/vendor/js/swiper.min.js')}}"></script>
<script src="{{ asset('capital_amigo/vendor/js/jquery.cubeportfolio.min.js')}}"></script>
<script src="{{ asset('capital_amigo/vendor/js/jquery.appear.js')}}"></script>
<script src="{{ asset('capital_amigo/vendor/js/parallaxie.min.js')}}"></script>
<script src="{{ asset('capital_amigo/vendor/js/wow.min.js')}}"></script>
<script src="{{ asset('capital_amigo/vendor/js/select2.min.js')}}"></script>
<!-- Slick JS File -->
<script src="{{ asset('capital_amigo/vendor/js/slick.min.js')}}"></script>

<!-- REVOLUTION JS FILES -->
<script src="{{ asset('capital_amigo/vendor/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{ asset('capital_amigo/vendor/js/jquery.themepunch.revolution.min.js')}}"></script>
<!-- SLIDER REVOLUTION EXTENSIONS -->
<script src="{{ asset('capital_amigo/vendor/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{ asset('capital_amigo/vendor/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{ asset('capital_amigo/vendor/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{ asset('capital_amigo/vendor/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{ asset('capital_amigo/vendor/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{ asset('capital_amigo/vendor/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{ asset('capital_amigo/vendor/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{ asset('capital_amigo/vendor/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{ asset('capital_amigo/vendor/js/extensions/revolution.extension.video.min.js')}}"></script>

<!-- Google Map Api -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgIfLQi8KTxTJahilcem6qHusV-V6XXjw"></script>
<script src="{{ asset('capital_amigo/js/maps.min.js')}}"></script>

<!--contact form-->
<script src="{{ asset('capital_amigo/vendor/js/contact_us.js')}}"></script>

<!-- custom script -->
<script src="{{ asset('capital_amigo/js/script.js')}}"></script>

</body>
</html>