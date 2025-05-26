@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">📦 Daftar Produk Anda</h1>
        <a href="{{ route('product.create') }}" class="...">+ Tambah Produk</a>
    </div>

    @if(session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
            {{ session('success') }}
        </div>
    @endif

    @if(isset($products) && $products->isNotEmpty())
    {{-- Tampilkan produk --}}
        @else
    <div class="text-gray-600">Belum ada produk yang ditambahkan.</div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($products as $product)
                <div class="bg-white shadow rounded p-4 hover:shadow-md transition">
                    <h3 class="text-lg font-semibold text-green-700">{{ $product->nama }}</h3>
                    <p class="text-sm text-gray-600">Kategori: {{ $product->kategori ?? '-' }}</p>
                    <p class="text-sm text-gray-600">Harga: Rp{{ number_format($product->harga ?? 0, 0, ',', '.') }}</p>
                    <p class="text-sm text-gray-600">Stok: {{ $product->stok }}</p>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
