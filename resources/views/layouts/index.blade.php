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
<!-- <div class="container mt-5"> -->
@yield('content')
<!-- </div> -->

    <script>
      window.onscroll = function() {
        const header = document.querySelector('#header');
        const navFix = header.offsetTop;
        if(window.pageYOffset > navFix) {
          header.classList.add('navbar-fixed');
        } else {
          header.classList.remove('navbar-fixed');
        }
      }


      const hamburger = document.querySelector('#hamburger');
      hamburger.addEventListener('click', function(){
        hamburger.classList.toggle('hamburger-active');
        const navMenu = document.querySelector('#nav-menu');
        navMenu.classList.toggle('hidden');
      });
    </script>
  </body>
</html>