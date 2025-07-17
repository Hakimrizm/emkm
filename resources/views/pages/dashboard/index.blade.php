@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
  <h2 class="text-2xl font-bold mb-4 dark:text-white transition-all duration-500" data-aos="fade-down">Selamat Malam {{ auth()->user()->name }}</h2>

  <div class="grid grid-cols-1 lg:grid-cols-4 gap-3 mb-3">
    @php
      $cards = [
        ['title' => 'Pemasukan', 'icon' => 'cash-stack', 'value' => '10.000.000'],
        ['title' => 'Pengeluaran', 'icon' => 'cash', 'value' => '1.000.000'],
        ['title' => 'Saldo Bersih', 'icon' => 'wallet2', 'value' => '20.000.000'],
        ['title' => 'Piutang Aktif', 'icon' => 'journal-arrow-down', 'value' => '1.000.000'],
      ];
    @endphp
    @foreach ($cards as $card)
      <div class="card flex gap-2 items-center shadow-md hover:shadow-lg transition-all duration-300" data-aos="fade-up">
        <div class="rounded-lg bg-sky-500 flex justify-center items-center h-18 w-18 text-white">
          <i class="bi bi-{{ $card['icon'] }} text-3xl"></i>
        </div>
        <div class="wrapper">
          <h5 class="dark:text-gray-400 text-slate-500">{{ $card['title'] }}</h5>
          <span class="dark:text-gray-500 text-gray-900">{{ $card['value'] }}</span>
        </div>
      </div>
    @endforeach
  </div>

  <div class="grid md:grid-cols-3 grid-cols-1 gap-3 mb-3">
    @php
      $cards2 = [
        ['title' => 'Invoice Belum Dibayar', 'icon' => 'receipt-cutoff', 'value' => '1.000.000'],
        ['title' => 'Hutang Aktif', 'icon' => 'journal-minus', 'value' => '2.000.000'],
        ['title' => 'Produk Hampir Habis', 'icon' => 'exclamation-circle', 'value' => '10'],
      ];
    @endphp
    @foreach ($cards2 as $card)
      <div class="card flex gap-3 items-center shadow-md hover:shadow-lg transition-all duration-300" data-aos="zoom-in">
        <div class="rounded-lg bg-sky-500 flex justify-center items-center h-18 w-18 text-white">
          <i class="bi bi-{{ $card['icon'] }} text-3xl"></i>
        </div>
        <div class="wrapper">
          <h5 class="dark:text-gray-400 text-slate-500">{{ $card['title'] }}</h5>
          <span class="dark:text-gray-500 text-gray-900">{{ $card['value'] }}</span>
        </div>
      </div>
    @endforeach
  </div>

  <div class="mb-3 flex justify-between items-center">
    <h3 class="text-2xl font-semibold text-gray-800 dark:text-white/90" data-aos="fade-left">
      Grafik Income & Expense per Bulan
    </h3>
  </div>

  <div class="card mb-3" data-aos="fade-up">
    <canvas id="line-chart" height="50"></canvas>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 gap-3 mb-3">
    <div class="card p-4 max-w-full" data-aos="flip-left">
      <canvas id="income-pie-chart" height="50"></canvas>
    </div>
    <div class="card p-4 max-w-full" data-aos="flip-right">
      <canvas id="expense-pie-chart" height="50"></canvas>
    </div>
  </div>

  {{-- Transaksi dan lainnya dibiarkan seperti semula, agar tetap stabil tampilannya --}}

  {{-- Produk Dengan Stok Rendah --}}
  {{-- Reminder Kolom Kanan DIBIARKAN seperti aslinya agar fokus update ke depan --}}

  @section('scripts')
    @vite('resources/js/dashboard.js')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init();</script>
  @endsection
@endsection
