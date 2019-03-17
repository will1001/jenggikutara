
<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
    <meta name="author" content="John Doe">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Title -->
    <title>Desa Jenggik Utara</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="{{asset('images/apple-touch-icon.png')}}">
    <link rel="shortcut icon" type="image/ico" href="{{asset('images/favicon.ico')}}" />
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
   <link rel="stylesheet" href="{{asset('css/transparansi.css')}}">
    <link rel="stylesheet" href="{{asset('css/statistik.css')}}">
    <link rel="stylesheet" href="{{asset('css/table.css')}}">
     <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>

    <!--[if lt IE 9]>
        <script src="{{asset('')}}//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="{{asset('')}}//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<!-- <body onload="startTime()" data-spy="scroll" data-target="#primary-menu"> -->
  <body>



    <!--Mainmenu-area-->
    <div class="mainmenu-area" data-spy="affix" data-offset-top="100">
        <div class="container">
            <!--Logo-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle butto" data-toggle="collapse" data-target="#primary-menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="{{url('/')}}" class="navbar-brand logo">
                  <img id="logo" src="images/kabupaten-lombok-timur-ntb (1).png" alt="">
                    <h5><strong>Website Resmi Pemerintah</strong></h5>
                    <h2>Desa Jenggik Utara</h2>
                </a>
            </div>
            <!--Logo/-->
    <nav class="collapse navbar-collapse" id="primary-menu">
      <ul class="nav navbar-nav navbar-right">
              <li>
                  <a href="{{URL::previous()}}" class="nav-link">KEMBALI</a>
              </li>
       </ul>
      </nav>
    </div>
    </div>
    <!--Mainmenu-area/-->



    <section id="statistik" style="margin-top: 91px;">
      <div class="container" id="app">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center">Data statistik Desa</h1>
              <div :is="currentchart" class="wow fadeIn"  @clicked="gantichart" keep-alive></div>
          </div>
        </div>
      </div>
    </section>


  

 <!--  <footer style="padding-top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 text-light text-left">
                <p><i class="text-light fas fa-map-marker"></i> Jl. Jurusan Kotaraja - Montong Gading, 83663</p>
                <p><i class="text-light fas fa-phone"></i> +62 877-6344-4202</p>
                <p class="text-light text-left"><i class="text-light fas fa-envelope"></i> pringgajurang@gmail.com</p>
            </div>
            <div class="col-md-4">
                <br>
                <br>
                <br>
                <p class="text-light text-center">&copy; Copyright 2019 by <a class="text-light" href="https://winchy.tech">Winchy.tech</a></p>
            </div>
            <div class="col-md-4">
                <br>
                <p class="text-light text-right" id="date"></p>
                <p class="text-light text-right" id="txt"></p>
            </div>
        </div>
    </div>
</footer> -->




    <!-- <script src="{{ asset('/js/date.js') }}" type="text/javascript" charset="utf-8" async defer></script> -->
    <script src="{{ asset('/js/app.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/wow.min.js') }}" type="text/javascript"></script>
</body>

</html>