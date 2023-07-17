<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CANEB - @yield('titulo')</title>
    <meta name="theme-color" content="#ffffff">
    <link href="{{asset('portal/lib/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="{{asset('portal/lib/animate.css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('portal/lib/components-font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('portal/lib/et-line-font/et-line-font.css')}}" rel="stylesheet">
    <link href="{{asset('portal/lib/flexslider/flexslider.css')}}" rel="stylesheet">
    <link href="{{asset('portal/lib/owl.carousel/dist/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('portal/lib/owl.carousel/dist/assets/owl.theme.default.min.css')}}" rel="stylesheet">
    <link href="{{asset('portal/lib/magnific-popup/dist/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('portal/lib/simple-text-rotator/simpletextrotator.css')}}" rel="stylesheet">
    <script src="{{asset('portal/lib/jquery/dist/jquery.js')}}"></script>
    <!-- Main stylesheet and color file-->
    <link href="{{asset('portal/css/style.css')}}" rel="stylesheet">
    <link id="color-scheme" href="{{asset('portal/css/colors/default.css')}}" rel="stylesheet">
    @yield('hojaEstilos')
</head>
<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
        <div class="page-loader">
            <div class="loader">Cargando...</div>
        </div>
        @include('portal.menu')

        @yield('contenido')

        <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>
    
    <script src="{{asset('portal/lib/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('portal/lib/wow/dist/wow.js')}}"></script>
    <script src="{{asset('portal/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js')}}"></script>
    <script src="{{asset('portal/lib/isotope/dist/isotope.pkgd.js')}}"></script>
    <script src="{{asset('portal/lib/imagesloaded/imagesloaded.pkgd.js')}}"></script>
    <script src="{{asset('portal/lib/flexslider/jquery.flexslider.js')}}"></script>
    <script src="{{asset('portal/lib/owl.carousel/dist/owl.carousel.min.js')}}"></script>
    <script src="{{asset('portal/lib/smoothscroll.js')}}"></script>
    <script src="{{asset('portal/lib/magnific-popup/dist/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('portal/lib/simple-text-rotator/jquery.simple-text-rotator.min.js')}}"></script>
    <script src="{{asset('portal/js/plugins.js')}}"></script>
    <script src="{{asset('portal/js/main.js')}}"></script>
    @yield('javascripts')
</body>
</html>