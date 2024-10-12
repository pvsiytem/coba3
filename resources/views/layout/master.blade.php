<!DOCTYPE html>
  <html lang="en">	
    <head>	
      <title>@yield('title')</title>	
    </head>	
    <body>	
    @include('layout.header')

    <div class="content">
        @yield('content')
    </div>

    @include('layout.footer')
    </body>
   </html>
