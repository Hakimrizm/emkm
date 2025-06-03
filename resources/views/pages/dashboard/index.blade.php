@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
  <h2 class="text-2xl font-bold mb-4 dark:text-white">Selamat Malam {{ auth()->user()->name }}</h2>

  <div class="grid grid-cols-1 lg:grid-cols-4 gap-3 mb-3">
    <div class="card flex gap-2 items-center">
      <div class="rounded-lg bg-sky-500 flex justify-center items-center h-18 w-18 text-white">
        <i class="bi bi-cash-stack text-3xl"></i>
      </div>
      <div class="wrapper">
        <h5 class="dark:text-gray-400 text-slate-500">Pemasukan</h5>
        <span class="dark:text-gray-500 text-gray-900">10.000.000</span>
      </div>
    </div>
    <div class="card flex gap-2 items-center">
      <div class="rounded-lg bg-sky-500 flex justify-center items-center h-18 w-18 text-white">
        <i class="bi bi-cash text-3xl"></i>
      </div>
      <div class="wrapper">
        <h5 class="dark:text-gray-400 text-slate-500">Pengeluaran</h5>
        <span class="dark:text-gray-500 text-gray-900">1.000.000</span>
      </div>
    </div>
    <div class="card flex gap-2 items-center">
      <div class="rounded-lg bg-sky-500 flex justify-center items-center h-18 w-18 text-white">
        <i class="bi bi-wallet2 text-3xl"></i>
      </div>
      <div class="wrapper">
        <h5 class="dark:text-gray-400 text-slate-500">Saldo Bersih</h5>
        <span class="dark:text-gray-500 text-gray-900">20.000.000</span>
      </div>
    </div>
    <div class="card flex gap-2 items-center">
      <div class="rounded-lg bg-sky-500 flex justify-center items-center h-18 w-18 text-white">
        <i class="bi bi-journal-arrow-down text-3xl"></i>
      </div>
      <div class="wrapper">
        <h5 class="dark:text-gray-400 text-slate-500">Piutang Aktif</h5>
        <span class="dark:text-gray-500 text-gray-900">1.000.000</span>
      </div>
    </div>
  </div>

  <div class="grid md:grid-cols-3 grid-cols-1 gap-3 mb-3">
    <div class="card flex gap-3 items-center">
      <div class="rounded-lg bg-sky-500 flex justify-center items-center h-18 w-18 text-white">
        <i class="bi bi-receipt-cutoff"></i>
      </div>
      <div class="wrapper">
        <h5 class="dark:text-gray-400 text-slate-500">Invoice Belum Dibayar</h5>
        <span class="dark:text-gray-500 text-gray-900">1.000.000</span>
      </div>
    </div>
    <div class="card flex gap-3 items-center">
      <div class="rounded-lg bg-sky-500 flex justify-center items-center h-18 w-18 text-white">
        <i class="bi bi-journal-minus text-3xl"></i>
      </div>
      <div class="wrapper">
        <h5 class="dark:text-gray-400 text-slate-500">Hutang Aktif</h5>
        <span class="dark:text-gray-500 text-gray-900">2.000.000</span>
      </div>
    </div>
    <div class="card flex gap-3 items-center">
      <div class="rounded-lg bg-sky-500 flex justify-center items-center h-18 w-18 text-white">
        <i class="bi bi-exclamation-circle text-3xl"></i>
      </div>
      <div class="wrapper">
        <h5 class="dark:text-gray-400 text-slate-500">Produk Hampir Habis</h5>
        <span class="dark:text-gray-500 text-gray-900">10</span>
      </div>
    </div>
  </div>

  <div class="mb-3 flex justify-between items-center">
    <h3 class="text-2xl font-semibold text-gray-800 dark:text-white/90">
      Grafik Income & Expense per Bulan
    </h3>
  </div>

  <div class="card mb-3">
    <canvas id="line-chart" height="120"></canvas>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 gap-3 mb-3">
    <div class="card p-4 max-w-full">
      <canvas id="income-pie-chart" height="200"></canvas>
    </div>
    <div class="card p-4 max-w-full">
      <canvas id="expense-pie-chart" height="200"></canvas>
    </div>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
  <!-- Kolom kiri (utama) span 2 kolom -->
    <div class="md:col-span-2">
      <div class="mb-3 flex justify-between items-center">
        <h3 class="text-2xl font-semibold text-gray-800 dark:text-white/90">
          Transaksi Terbaru
        </h3>
      </div>
      <div class="card mb-6">
        <div class="mb-3 flex justify-between items-center">
          <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">
            Pemasukan
          </h3>
        </div>

        <div class="w-full overflow-x-auto">
          <table class="min-w-full">
            <!-- table header start -->
            <thead>
              <tr class="border-gray-100 border-y dark:border-gray-800">
                <th class="py-3">
                  <div class="flex items-center">
                    <p
                      class="font-medium text-gray-500 text-theme-xs dark:text-gray-400"
                    >
                      Kategori
                    </p>
                  </div>
                </th>
                <th class="py-3">
                  <div class="flex items-center">
                    <p
                      class="font-medium text-gray-500 text-theme-xs dark:text-gray-400"
                    >
                      Deskripsi
                    </p>
                  </div>
                </th>
                <th class="py-3">
                  <div class="flex items-center">
                    <p
                      class="font-medium text-gray-500 text-theme-xs dark:text-gray-400"
                    >
                      Tanggal
                    </p>
                  </div>
                </th>
                <th class="py-3 whitespace-nowrap w-1">
                  <div class="flex items-center">
                    <p
                      class="font-medium text-gray-500 text-theme-xs dark:text-gray-400"
                    >
                      Aksi
                    </p>
                  </div>
                </th>
              </tr>
            </thead>
            <!-- table header end -->
        
            <tbody class="divide-y divide-gray-100 dark:divide-gray-800">
              <tr>
                <td class="py-3">
                  <div class="flex items-center">
                    <p class="text-gray-500 text-theme-sm dark:text-gray-400">
                      Investasi
                    </p>
                  </div>
                </td>
                <td class="py-3">
                  <div class="flex items-center">
                    <p class="text-gray-500 text-theme-sm dark:text-gray-400">
                      Lorem ipsum dolor sit amet, consectetur
                    </p>
                  </div>
                </td>
                <td class="py-3">
                  <div class="flex items-center">
                    <p class="text-gray-500 text-theme-sm dark:text-gray-400">
                      7 menit yang lalu
                    </p>
                  </div>
                </td>
                <td class="py-3">
                  <div class="flex items-center gap-2">
                    <a href="#" class="button button-sm bg-blue-600 hover:bg-blue-700 text-white">Edit</a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="card mb-6">
        <div class="mb-3 flex justify-between items-center">
          <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">
            Pengeluaran
          </h3>
        </div>

        <div class="w-full overflow-x-auto">
          <table class="min-w-full">
            <!-- table header start -->
            <thead>
              <tr class="border-gray-100 border-y dark:border-gray-800">
                <th class="py-3">
                  <div class="flex items-center">
                    <p
                      class="font-medium text-gray-500 text-theme-xs dark:text-gray-400"
                    >
                      Kategori
                    </p>
                  </div>
                </th>
                <th class="py-3">
                  <div class="flex items-center">
                    <p
                      class="font-medium text-gray-500 text-theme-xs dark:text-gray-400"
                    >
                      Deskripsi
                    </p>
                  </div>
                </th>
                <th class="py-3">
                  <div class="flex items-center">
                    <p
                      class="font-medium text-gray-500 text-theme-xs dark:text-gray-400"
                    >
                      Tanggal
                    </p>
                  </div>
                </th>
                <th class="py-3 whitespace-nowrap w-1">
                  <div class="flex items-center">
                    <p
                      class="font-medium text-gray-500 text-theme-xs dark:text-gray-400"
                    >
                      Aksi
                    </p>
                  </div>
                </th>
              </tr>
            </thead>
            <!-- table header end -->
        
            <tbody class="divide-y divide-gray-100 dark:divide-gray-800">
              <tr>
                <td class="py-3">
                  <div class="flex items-center">
                    <p class="text-gray-500 text-theme-sm dark:text-gray-400">
                      Bahan Baku
                    </p>
                  </div>
                </td>
                <td class="py-3">
                  <div class="flex items-center">
                    <p class="text-gray-500 text-theme-sm dark:text-gray-400">
                      Lorem ipsum dolor sit amet, consectetur
                    </p>
                  </div>
                </td>
                <td class="py-3">
                  <div class="flex items-center">
                    <p class="text-gray-500 text-theme-sm dark:text-gray-400">
                      7 menit yang lalu
                    </p>
                  </div>
                </td>
                <td class="py-3">
                  <div class="flex items-center gap-2">
                    <a href="#" class="button button-sm bg-blue-600 hover:bg-blue-700 text-white">Edit</a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="card mb-6">
        <div class="mb-3 flex justify-between items-center">
          <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">
            Invoice
          </h3>
        </div>

        <div class="w-full overflow-x-auto">
          <table class="min-w-full">
            <!-- table header start -->
            <thead>
              <tr class="border-gray-100 border-y dark:border-gray-800">
                <th class="py-3">
                  <div class="flex items-center">
                    <p
                      class="font-medium text-gray-500 text-theme-xs dark:text-gray-400"
                    >
                      No Invoice
                    </p>
                  </div>
                </th>
                <th class="py-3">
                  <div class="flex items-center">
                    <p
                      class="font-medium text-gray-500 text-theme-xs dark:text-gray-400"
                    >
                      Deskripsi
                    </p>
                  </div>
                </th>
                <th class="py-3">
                  <div class="flex items-center">
                    <p
                      class="font-medium text-gray-500 text-theme-xs dark:text-gray-400"
                    >
                      Quantity
                    </p>
                  </div>
                </th>
                <th class="py-3 whitespace-nowrap w-1">
                  <div class="flex items-center">
                    <p
                      class="font-medium text-gray-500 text-theme-xs dark:text-gray-400"
                    >
                      Aksi
                    </p>
                  </div>
                </th>
              </tr>
            </thead>
            <!-- table header end -->
        
            <tbody class="divide-y divide-gray-100 dark:divide-gray-800">
              <tr>
                <td class="py-3">
                  <div class="flex items-center">
                    <p class="text-gray-500 text-theme-sm dark:text-gray-400">
                      6788765
                    </p>
                  </div>
                </td>
                <td class="py-3">
                  <div class="flex items-center">
                    <p class="text-gray-500 text-theme-sm dark:text-gray-400">
                      Lorem ipsum dolor sit amet, consectetur
                    </p>
                  </div>
                </td>
                <td class="py-3">
                  <div class="flex items-center">
                    <p class="text-gray-500 text-theme-sm dark:text-gray-400">
                      100
                    </p>
                  </div>
                </td>
                <td class="py-3">
                  <div class="flex items-center gap-2">
                    <a href="#" class="button button-sm bg-blue-600 hover:bg-blue-700 text-white">Edit</a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="mb-3 flex justify-between items-center">
        <h3 class="text-2xl font-semibold text-gray-800 dark:text-white/90">
          Produk Dengan Stok Rendah
        </h3>
      </div>
      <div class="card">
        <div class="w-full overflow-x-auto">
          <table class="min-w-full">
            <!-- table header start -->
            <thead>
              <tr class="border-gray-100 border-y dark:border-gray-800">
                <th class="py-3">
                  <div class="flex items-center">
                    <p
                      class="font-medium text-gray-500 text-theme-xs dark:text-gray-400"
                    >
                      Nama Produk
                    </p>
                  </div>
                </th>
                <th class="py-3">
                  <div class="flex items-center">
                    <p
                      class="font-medium text-gray-500 text-theme-xs dark:text-gray-400"
                    >
                      Kategori
                    </p>
                  </div>
                </th>
                <th class="py-3">
                  <div class="flex items-center">
                    <p
                      class="font-medium text-gray-500 text-theme-xs dark:text-gray-400"
                    >
                      Stok
                    </p>
                  </div>
                </th>
                <th class="py-3 whitespace-nowrap w-1">
                  <div class="flex items-center">
                    <p
                      class="font-medium text-gray-500 text-theme-xs dark:text-gray-400"
                    >
                      Aksi
                    </p>
                  </div>
                </th>
              </tr>
            </thead>
            <!-- table header end -->
        
            <tbody class="divide-y divide-gray-100 dark:divide-gray-800">
              @forelse ($lowStockProducts as $product)
                <tr>
                  <td class="py-3">
                    <div class="flex items-center">
                      <div class="flex items-center gap-3">
                        <div>
                          <p
                            class="font-medium text-gray-800 text-theme-sm dark:text-white/90"
                          >
                            {{ $product->name }}
                          </p>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="py-3">
                    <div class="flex items-center">
                      <p class="text-gray-500 text-theme-sm dark:text-gray-400">
                        {{ $product->productCategory->name }}
                      </p>
                    </div>
                  </td>
                  <td class="py-3">
                    <div class="flex items-center">
                      <p class="text-gray-500 text-theme-sm dark:text-gray-400">
                        {{ $product->stock }}
                      </p>
                    </div>
                  </td>
                  <td class="py-3">
                    <div class="flex items-center gap-2">
                      <a href="{{ route('product.edit', ['product' => $product]) }}" class="button button-sm bg-blue-600 hover:bg-blue-700 text-white">Edit</a>
                    </div>
                  </td>
                </tr>
              @empty
                <span class="dark:text-white">Belum ada Produk yang habis, atau produk belum ditambah</span>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Kolom kanan (lebih kecil) -->
    <div>
      <div class="mb-3 flex justify-between items-center">
        <h3 class="text-2xl font-semibold text-gray-800 dark:text-white/90">
          Reminder
        </h3>
      </div>
      <div class="card">
        <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">Reminder hari ini</h2>
        <ul class="max-w-md space-y-1 text-gray-500 list-disc list-outside pl-4 dark:text-gray-400">
          <li>
            3 Invoice jatuh tempo
          </li>
          <li>
            1 Hutang harus dibayar
          </li>
          <li>
            2 Piutang belum tertagih 
          </li>
        </ul>
      </div>
    </div>
  </div>


  @section('scripts')
    @vite('resources/js/dashboard.js')
  @endsection
@endsection
