<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>@yield('title', 'E-MKM')</title>
    
    @vite('resources/css/app.css')
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="//unpkg.com/alpinejs" defer></script>


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
