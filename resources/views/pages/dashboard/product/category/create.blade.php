@extends('layouts.dashboard')

@section('title', 'Produk Tambah Kategori')

@section('content')

<div class="mb-3 flex justify-between items-center">
  <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">
    Produk Kategori
  </h3>
  <a href="{{ route('productCategory.index') }}" class="button bg-blue-600 hover:bg-blue-700 text-white">Kembali</a>
</div>

<div class="card max-w-md">
  <form action="{{ route('productCategory.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Masukan Nama Kategori Produk</label>
      <input required type="text" id="name" name="name" value="{{ old('name') }}" class="form-control @error('name') form-error @enderror">
      @error('name')
        <p class="text-theme-xs text-error-500">
          {{ $message }}
        </p>
      @enderror
    </div>

    <button type="submit" class="button bg-blue-600 hover:bg-blue-700 text-white">Simpan</button>
  </form>
</div>

@endsection