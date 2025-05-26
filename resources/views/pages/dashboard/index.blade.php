@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
  <h2 class="text-2xl font-bold mb-4 dark:text-white">Selamat Datang</h2>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
    <a href="{{ route('income.create') }}" class="card block">
      <h3 class="text-lg font-semibold text-blue-700">➕ Tambah Pemasukan</h3>
      <p class="text-gray-600 mt-2">Catat pemasukan seperti penjualan, investasi, dan lainnya.</p>
    </a>

    <a href="{{ route('expense.create') }}" class="card block">
      <h3 class="text-lg font-semibold text-red-700">💸 Catat Pengeluaran</h3>
      <p class="text-gray-600 mt-2">Tambah data pengeluaran agar arus kas usahamu lebih terkontrol.</p>
    </a>

    <a href="{{ route('produk.index') }}" class="card block">
      <h3 class="text-lg font-semibold text-green-700">📦 Produk Saya</h3>
      <p class="text-gray-600 mt-2">Kelola produk, lihat daftar & tambah produk baru.</p>
    </a>
    <a href="{{ route('hpp.form') }}" class="card block">
      <h3 class="text-lg font-semibold text-green-700">📊 Hitung HPP & Harga Jual</h3>
      <p class="text-gray-600 mt-2">Akses kalkulasi HPP dan dapatkan harga jual ideal.</p>
    </a>
  </div>
@endsection
