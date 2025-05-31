@extends('layouts.dashboard')

@section('title', 'Pengeluaran Edit Kategori')

@section('content')

<div class="mb-3 flex justify-between items-center">
  <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">
    Edit Pengeluaran Kategori
  </h3>
  <a href="{{ route('expenseCategory.index') }}" class="button bg-blue-600 hover:bg-blue-700 text-white">Kembali</a>
</div>

<div class="card max-w-md">
  <form action="{{ route('expenseCategory.update', ['expenseCategory' => $expenseCategory]) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="name" class="form-label">Nama Kategori Produk</label>
      <input required type="text" id="name" name="name" value="{{ $expenseCategory->name }}" class="form-control @error('name') form-error @enderror">
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