@extends('layouts.dashboard')

@section('title', 'Beranda')

@section('content')
  <h2 class="text-2xl font-bold mb-4">Selamat Datang</h2>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
    <div class="bg-white shadow rounded p-4 transition hover:scale-105 duration-300">
      <h3 class="font-semibold text-gray-700">Statistik</h3>
      <p class="text-gray-500">Data pengguna hari ini</p>
    </div>
    <div class="bg-white shadow rounded p-4 transition hover:scale-105 duration-300">
      <h3 class="font-semibold text-gray-700">Laporan</h3>
      <p class="text-gray-500">Laporan mingguan</p>
    </div>
    <div class="bg-white shadow rounded p-4 transition hover:scale-105 duration-300">
      <h3 class="font-semibold text-gray-700">Aktivitas</h3>
      <p class="text-gray-500">Pengguna aktif</p>
    </div>
  </div>
@endsection
