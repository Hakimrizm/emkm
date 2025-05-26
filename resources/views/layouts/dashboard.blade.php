<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
      UMKM
    </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body
    x-data="{ page: 'ecommerce', 'loaded': true, 'darkMode': false, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
    x-init="
         darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="{'dark bg-gray-900': darkMode === true}"
  >
    <!-- ===== Preloader Start ===== -->
    @include('components.preloader')
    <!-- ===== Preloader End ===== -->

    <!-- ===== Page Wrapper Start ===== -->
    <div class="flex h-screen overflow-hidden">
      <!-- ===== Sidebar Start ===== -->
      @include('components.sidebar')
      <!-- ===== Sidebar End ===== -->

      <!-- ===== Content Area Start ===== -->
      <div
        class="relative flex flex-col flex-1 overflow-x-hidden overflow-y-auto"
      >
        <!-- Small Device Overlay Start -->
        @include('components.overlay')
        <!-- Small Device Overlay End -->

        <!-- ===== Header Start ===== -->
        @include('components.header')
        <!-- ===== Header End ===== -->

        <!-- ===== Main Content Start ===== -->
        <main>
          <div class="p-4 mx-auto max-w-(--breakpoint-2xl) md:p-6">
            @yield('content')
            <div class="mt-8 grid gap-4 md:grid-cols-2">
  <a href="{{ route('income.create') }}" class="block p-6 bg-white shadow-md rounded-lg hover:bg-blue-50">
    <h3 class="text-lg font-semibold text-blue-700">➕ Tambah Pemasukan</h3>
    <p class="text-gray-600 mt-2">Catat pemasukan seperti penjualan, investasi, dan lainnya.</p>
  </a>

  <a href="{{ route('expense.create') }}" class="block p-6 bg-white shadow-md rounded-lg hover:bg-red-50">
    <h3 class="text-lg font-semibold text-red-700">💸 Catat Pengeluaran</h3>
    <p class="text-gray-600 mt-2">Tambah data pengeluaran agar arus kas usahamu lebih terkontrol.</p>
  </a>

<a href="{{ route('produk.index') }}" class="block p-6 bg-white shadow-md rounded-lg hover:bg-green-50">
    <h3 class="text-lg font-semibold text-green-700">📦 Produk Saya</h3>
    <p class="text-gray-600 mt-2">Kelola produk, lihat daftar & tambah produk baru.</p>
</a>


  <a href="{{ route('hpp.form') }}" class="block p-6 bg-white shadow-md rounded-lg hover:bg-green-50">
    <h3 class="text-lg font-semibold text-green-700">📊 Hitung HPP & Harga Jual</h3>
    <p class="text-gray-600 mt-2">Akses kalkulasi HPP dan dapatkan harga jual ideal.</p>
  </a>

  
</div>

          </div>
        </main>
        <!-- ===== Main Content End ===== -->
      </div>
      <!-- ===== Content Area End ===== -->
    </div>
    <!-- ===== Page Wrapper End ===== -->
  </body>
</html>
