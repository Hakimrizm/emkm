<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>@yield('title', 'E-MKM')</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body>
    @yield('content')
  </body>
</html>
