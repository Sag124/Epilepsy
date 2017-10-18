<!DOCTYPE html> 
<html lang="en">
<head>
  @include('partials._head')
  @yield('header')
</head>

  <body>
            
          <div class="container">
            
          @yield('content')
          
          @include('partials._footer')
          
          </div>
          <!-- end of .container -->

          @include('partials._scripts')
          
          @yield('scripts') 
  </body>
</html>