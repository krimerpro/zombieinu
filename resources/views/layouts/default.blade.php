<!doctype html>
<html lang="en-US" class="no-js no-svg">
  <head>
     @include('includes.head')
  </head>

  <body>
     <header class="row">
         @include('includes.header')
     </header>

     @yield('content')

     <footer class="row">
         @include('includes.footer')
     </footer>
  </body>
</html>
