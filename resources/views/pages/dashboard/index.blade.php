@extends('layouts.dashboard')

@section('title', 'Beranda')

@section('content')
  <h2 class="text-2xl font-bold mb-4">Selamat Datang</h2>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
    <div class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03] md:p-6">
      <h3 class="font-semibold text-gray-700">Statistik</h3>
      <p class="text-gray-500">Data pengguna hari ini</p>
    </div>
    <div class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03] md:p-6">
      <h3 class="font-semibold text-gray-700">Laporan</h3>
      <p class="text-gray-500">Laporan mingguan</p>
    </div>
    <div class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03] md:p-6">
      <h3 class="font-semibold text-gray-700">Aktivitas</h3>
      <p class="text-gray-500">Pengguna aktif</p>
    </div>
  </div>
@endsection
