<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>AssesoryTime S.A</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--GOOGLE FONTS-->
      <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/fuentes.css"/>
      <link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
    
</head>
<body>
    <div id="app">
        

        @yield('content')
    </div>

    <!-- Scripts -->
     <!-- Scripts -->
    <script src="/js/app.js"></script>
    <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script src="{{ asset('plugins/riot/riot.min.js') }}"></script>
      <script src="{{ asset('plugins/riot/riot-compiler.min.js') }}"></script>
      <script type="text/javascript">
    $(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });
  </script>

  <script type="text/javascript">
  $(document).ready(function(){
      $('.slider').slider();
    });

  </script>

  <script type="text/javascript">
    $(".button-collapse").sideNav();
  </script>

<!--slide louvers-->
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>

</body>
</html>
