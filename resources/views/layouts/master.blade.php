<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Colegio Militarizado Aguilas de Mexico</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/complements.css">
  </head>
  <body>

    @include('layouts.header')


    @include('layouts.nav')


    <div class="container">

      @yield('content')
      
    </div>

    @include('layouts.footer')

  </body>
</html>
