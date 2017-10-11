<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Administrador</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('css/style.default.css') }}" id="theme-stylesheet">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="{{ asset('css/grasp_mobile_progress_circle-1.0.0.min.css') }}">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
    <!-- Font Awesome CDN-->
    <!-- you can replace it by local Font Awesome-->
    <script src="{{ asset('https://use.fontawesome.com/99347ac47f.js') }}"></script>
    <!-- Font Icons CSS-->
    <link rel="stylesheet" href="{{ asset('https://file.myfontastic.com/da58YPMQ7U5HY8Rb6UxkNf/icons.css') }}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          @guest
          <p>Prohibido</p>
          @else
          <div class="sidenav-header-inner text-center"><img src="{{ Auth::user()->avatar }}" alt="person" class="img-fluid rounded-circle">

            <h2 class="h5 text-uppercase">{{ Auth::user()->name }}</h2><span class="">{{ Auth::user()->email }}</span>
          @endguest
          </div>
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>A</strong><strong class="text-primary">T</strong></a></div>
        </div>
        <div class="main-menu">
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li class="active"><a href="index.html"> <i class="icon-home"></i><span>Inicio</span></a></li>
          </ul>
        </div>

        <div class="admin-menu">
          <ul id="side-admin-menu" class="side-menu list-unstyled"> 
            <li>
              <a href="#pages-nav-list" data-toggle="collapse" aria-expanded="false">
                <i class="icon-interface-windows"></i>
                <span>Personal</span>
                <div class="arrow pull-right">
                  <i class="fa fa-angle-down"></i>
                </div>
              </a>
              <ul id="pages-nav-list" class="collapse list-unstyled">
                <li><a href="#">Administradores</a></li>
                <li><a href="#">Tutores</a></li>
              </ul>
            </li>
          </ul>
        </div>

        <div class="admin-menu">
          <ul id="side-admin-menu" class="side-menu list-unstyled"> 
            <li>
              <a href="#pages-nav-list1" data-toggle="collapse" aria-expanded="false">
                <i class="icon-interface-windows"></i>
                <span>Cursos</span>
                <div class="arrow pull-right">
                  <i class="fa fa-angle-down"></i>
                </div>
              </a>
              <ul id="pages-nav-list1" class="collapse list-unstyled">
                <li><a href="{{ route('asseadm.category.index') }}">Categorías</a></li>
                <li><a href="#">Cursos</a></li>
              </ul>
            </li>
          </ul>
        </div>

        <div class="main-menu">
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li class=""><a href="index.html"> <i class="icon-home"></i><span>Reportes</span></a></li>
          </ul>
        </div>

      </div>
    </nav>
    <div class="page home-page" style="background-color: white">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.html" class="navbar-brand">
                  <div class="brand-text hidden-sm-down"><strong class="text-default">Administrador</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                
                
                <li class="nav-item"><a href="{{ route('logout')}}" class="nav-link logout" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">Cerrar sesión<i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <!-- Counts Section -->
      <div id="app">
          
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
          @yield('content')
      </div>

          </div>
        </div>
      </section>
      
    </div>
    <!-- Javascript files-->
    <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js') }}"></script>
    <script src="{{ asset('js/tether.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.cookie.js') }}"> </script>
    <script src="{{ asset('js/grasp_mobile_progress_circle-1.0.0.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/front.js') }}"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <!---->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
  </body>
</html>