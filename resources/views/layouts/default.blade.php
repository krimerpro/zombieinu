<!doctype html>
<html lang="en-US" class="no-js no-svg">
  <head>
     @include('includes.head')
  </head>

  <body data-spy="scroll" data-offset="80" class="home theme-vizion vizion-front-page colors-light space-science " style="margin-left:10px;margin-right:-25px">
     <header class="row">
         @include('includes.header')
     </header>

     @yield('content')

     <footer class="row">
         @include('includes.footer')
     </footer>
  </body>
</html>
