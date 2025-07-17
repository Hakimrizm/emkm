<!doctype html>
<html lang="id">
  <!-- AOS CSS -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>


  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>@yield('title', 'E-MKM')</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
  </head>
  <body class="bg-gray-50 text-gray-900 font-sans leading-relaxed">

    {{-- Content area --}}
    @yield('content')

    @stack('scripts')

    <script>
      document.addEventListener('alpine:init', () => {
        Alpine.plugin(window.AlpineCollapse)
      })
    </script>
  </body>
</html>
