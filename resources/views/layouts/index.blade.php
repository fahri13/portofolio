<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
     @vite('resources/css/app.css')
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="resources/css/app.css"> -->

    <title>Hello, world!</title>
  </head>
  <body>

  @include('layouts.navbar')
<div class="container mt-5">
@yield('content')
</div>

    
  </body>
</html>