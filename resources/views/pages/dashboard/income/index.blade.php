@extends('layouts.dashboard')

@section('title', 'Pemasukan Saya')

@section('content')
<div class="mb-3 flex justify-between items-center">
  <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">
    Pemasukan Saya
  </h3>
  <a href="{{ route('product.create') }}" class="button bg-blue-600 hover:bg-blue-700 text-white">Tambah Pemasukan</a>
</div>

@endsection