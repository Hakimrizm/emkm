@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto mt-10 bg-white p-6 rounded-lg shadow">
    <h2  href="{{ route('product.create') }} class="text-2xl font-bold text-green-700 mb-6">Tambah Produk</h2>
    {{-- <a href="{{ route('product.create') }}">+ Tambah Produk</a> --}}


    <form action="{{ route('product.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label for="nama" class="block font-medium text-gray-700">Nama Produk</label>
            <input type="text" name="nama" id="nama" required class="w-full border-gray-300 rounded-lg shadow-sm mt-1" value="{{ old('nama') }}">
        </div>

        <div>
            <label for="kategori" class="block font-medium text-gray-700">Kategori</label>
            <select name="kategori" id="kategori" class="w-full border-gray-300 rounded-lg shadow-sm mt-1">
                <option value="">-- Pilih Kategori --</option>
                <option value="Bahan Baku">Bahan Baku</option>
                <option value="Produk Jadi">Produk Jadi</option>
                <option value="Lain-lain">Lain-lain</option>
            </select>
        </div>

        <div>
            <label for="harga" class="block font-medium text-gray-700">Harga (Rp)</label>
            <input type="number" name="harga" id="harga" class="w-full border-gray-300 rounded-lg shadow-sm mt-1" value="{{ old('harga') }}">
        </div>

        <div>
            <label for="stok" class="block font-medium text-gray-700">Stok</label>
            <input type="number" name="stok" id="stok" class="w-full border-gray-300 rounded-lg shadow-sm mt-1" value="{{ old('stok', 0) }}">
        </div>

        <div class="pt-4">
            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">Simpan Produk</button>
        </div>
    </form>
</div>
@endsection
