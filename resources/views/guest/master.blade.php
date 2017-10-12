<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--
    Document Title
    =============================================
    -->
    <title>Terasi Payangan</title>
    <!--
    Favicons
    =============================================
    -->
    <link rel="apple-touch-icon" sizes="57x57"
          href="{{asset('titan/assets/images/favicons/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60"
          href="{{asset('titan/assets/images/favicons/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72"
          href="{{asset('titan/assets/images/favicons/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76"
          href="{{asset('titan/assets/images/favicons/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114"
          href="{{asset('titan/assets/images/favicons/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120"
          href="{{asset('titan/assets/images/favicons/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144"
          href="{{asset('titan/assets/images/favicons/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152"
          href="{{asset('titan/assets/images/favicons/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180"
          href="{{asset('titan/assets/images/favicons/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"
          href="{{asset('titan/assets/images/favicons/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32"
          href="{{asset('titan/assets/images/favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96"
          href="{{asset('titan/assets/images/favicons/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('titan/assets/images/favicons/favicon-16x16.png')}}">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('titan/assets/images/favicons/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">
    <!--
    Stylesheets
    =============================================

    -->
    <!-- Default stylesheets-->
    <link rel="stylesheet" href="{{asset('titan/assets/lib/bootstrap/dist/css/bootstrap.min.css')}}">

    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="{{asset('titan/assets/lib/animate.css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('titan/assets/lib/components-font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('titan/assets/lib/et-line-font/et-line-font.css')}}" rel="stylesheet">
    <link href="{{asset('titan/assets/lib/flexslider/flexslider.css" rel="stylesheet')}}">
    <link href="{{asset('titan/assets/lib/owl.carousel/dist/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('titan/assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css')}}"
          rel="stylesheet">
    <link href="{{asset('titan/assets/lib/magnific-popup/dist/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('titan/assets/lib/simple-text-rotator/simpletextrotator.css')}}" rel="stylesheet">

    <!-- Main stylesheet and color file-->
    <link href="{{asset('titan/assets/css/style.css')}}" rel="stylesheet">
    <link id="color-scheme" href="{{asset('titan/assets/css/colors/default.css')}}" rel="stylesheet">

    @yield('head-css')
</head>

<body>
<main>
    <div class="page-loader">
        <div class="loader">Loading...</div>
    </div>
    <nav class="navbar navbar-custom navbar-fixed-top navbar-" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span
                            class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                            class="icon-bar"></span><span class="icon-bar"></span></button>
                <a class="navbar-brand" href="index.html">TERASI PAYANGAN</a>
            </div>
            <div class="collapse navbar-collapse" id="custom-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/">Beranda</a></li>
                    <li><a href="/produk">Produk Kami</a></li>
                    <li><a href="/contact">Hubungi Kami</a></li>
                    <li><a href="/registrasi">Registrasi</a></li>
                </ul>
            </div>
        </div>
    </nav>
</main>

<div class="main">

    @yield('content')

</div>    <!--/.main-->

<script src="{{asset('titan/assets/lib/jquery/dist/jquery.js')}}"></script>
<script src="{{asset('titan/assets/lib/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('titan/assets/lib/wow/dist/wow.js')}}"></script>
<script src="{{asset('titan/assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js')}}"></script>
<script src="{{asset('titan/assets/lib/isotope/dist/isotope.pkgd.js')}}"></script>
<script src="{{asset('titan/assets/lib/imagesloaded/imagesloaded.pkgd.js')}}"></script>
<script src="{{asset('titan/assets/lib/flexslider/jquery.flexslider.js')}}"></script>
<script src="{{asset('titan/assets/lib/owl.carousel/dist/owl.carousel.min.js')}}"></script>
<script src="{{asset('titan/assets/lib/smoothscroll.js')}}"></script>
<script src="{{asset('titan/assets/lib/magnific-popup/dist/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('titan/assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js')}}"></script>
<script src="{{asset('titan/assets/js/plugins.js')}}"></script>
<script src="{{asset('titan/assets/js/main.js')}}"></script>

<script type="text/javascript">
    jQuery.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

@stack('scripts')
</body>

</html>
