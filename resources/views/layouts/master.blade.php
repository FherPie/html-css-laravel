<!doctype html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="{{ URL::to('css/bootstrap.min.css')}}"/>
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ URL::to('css/mdb.min.css')}}"/>
<link rel="stylesheet" href="{{ URL::to('src/slick/slick.css')}}"/>
<link rel="stylesheet" href="{{ URL::to('src/slick/slick-theme.css')}}"/>
<link rel="stylesheet" href="{{ URL::to('src/css/app.css')}}"/>
 @yield('styles')
</head>
<body>
@include('partials.header')
<!-- <aside class="aside"> -->

<!-- </aside> -->
<div class="container-fuid mt-3">
    @yield('content')
</div>
<!-- <script -->
<!--   src="https://code.jquery.com/jquery-3.4.1.min.js" -->
<!--   integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" -->
<!--   crossorigin="anonymous"></script> -->
   
<!--     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
<!--     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
@include('partials.footer')
     <script type="text/javascript"  src="{{ URL::to('js/jquery-2.2.0.min.js')}}"></script>
     <script type="text/javascript"  src="{{ URL::to('js/popper.min.js')}}"></script>
     <script type="text/javascript"  src="{{ URL::to('js/bootstrap.min.js')}}"></script>
     <script type="text/javascript"  src="{{ URL::to('js/mdb.min.js')}}"></script>
       <script type="text/javascript"  src="{{ URL::to('js/scrolling-nav.js')}}"></script>
       <script type="text/javascript" src="https://cdn.rawgit.com/igorlino/elevatezoom-plus/1.1.6/src/jquery.ez-plus.js"></script>
       <script type="text/javascript"  src="{{ URL::to('src/slick/slick.min.js')}}"></script>
       <script type="text/javascript"  src="{{ URL::to('js/pais.js')}}"></script>
       <script type="text/javascript"  src="{{ URL::to('js/megamenu.js')}}"></script>
       <script>

    $('.carousel').carousel({
      interval: 3000,
    })
  </script>
@yield('scripts')
</body>
</html>
