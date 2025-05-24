<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>@yield('title', 'Dashboard')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-100 text-gray-900" x-data="{ sidebarOpen: false }">

  <!-- Overlay (Mobile) -->
  <div 
    class="fixed inset-0 bg-black bg-opacity-50 z-40 lg:hidden"
    x-show="sidebarOpen"
    x-transition.opacity
    @click="sidebarOpen = false"
></div>

  <!-- Sidebar -->
  <aside 
    class="fixed inset-y-0 left-0 z-50 w-64 bg-blue-900 text-white transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out"
    :class="{ '-translate-x-full': !sidebarOpen, 'translate-x-0': sidebarOpen }"
  >
    <div class="p-4 font-bold text-xl">
      Dashboard
    </div>
    <nav class="mt-6">
      <a href="#" class="block px-4 py-2 hover:bg-blue-700">Beranda</a>
      <a href="#" class="block px-4 py-2 hover:bg-blue-700">Pengguna</a>
      <a href="#" class="block px-4 py-2 hover:bg-blue-700">Laporan</a>
    </nav>
  </aside>

  <!-- Main content -->
  <div class="lg:pl-64 min-h-screen flex flex-col">

    <!-- Topbar -->
    <header class="bg-white shadow p-4 flex justify-between items-center">
      <button @click="sidebarOpen = !sidebarOpen" class="lg:hidden text-blue-900">
        ☰
      </button>
      <h1 class="text-xl font-semibold">@yield('title', 'Dashboard')</h1>
    </header>

    <!-- Content -->
    <main class="p-6 flex-1">
      @yield('content')
    </main>

  </div>

</body>
</html>
