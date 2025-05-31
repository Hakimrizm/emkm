@extends('layouts.dashboard')

@section('title', 'Tambah Produk')

@section('content')
<div class="mb-3 flex justify-between items-center">
    <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">
        Tambah Produk
    </h3>
    <a href="{{ route('product.index') }}" class="button bg-blue-600 hover:bg-blue-700 text-white">Kembali</a>
</div>

<div class="card">
    <form action="{{ route('product.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama Produk</label>
            <input type="text" name="name" id="name" required class="form-control @error('name') form-error @enderror" value="{{ old('name') }}">
            @error('name')
                <p class="text-theme-xs text-error-500">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <select name="product_category_id" id="kategori" class="form-select @error('product_category_id') form-error @enderror">
                @forelse ($productCategories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @empty
                    <option class="option-select" value="">Silahkan tambah kategori terlebih dahulu.</option>
                @endforelse
            </select>
            @error('product_category_id')
                <p class="text-theme-xs text-error-500">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Harga (Rp)</label>
            <input type="number" name="price" id="price" class="form-control @error('price') form-error @enderror" value="{{ old('price') }}">
            @error('price')
                <p class="text-theme-xs text-error-500">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="stock" class="form-label">Stok</label>
            <input type="number" name="stock" id="stock" class="form-control @error('stock') form-error @enderror" value="{{ old('stock', 0) }}">
            @error('stock')
                <p class="text-theme-xs text-error-500">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <div class="pt-4">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Simpan Produk</button>
        </div>
    </form>
</div>
@endsection
