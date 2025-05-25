@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto p-6 bg-white shadow-md rounded-lg mt-8">
    <h2 class="text-2xl font-semibold mb-4">Tambah Pemasukan</h2>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('income.store') }}">
        @csrf

        {{-- Dropdown Kategori --}}
        <div class="mb-4">
            <label for="kategori" class="block text-sm font-medium text-gray-700 mb-1">Kategori Pemasukan</label>
            <select name="kategori" required class="block w-full mt-1 border rounded">
                <option value="">-- Pilih Kategori --</option>
                <option value="Penjualan Produk">Penjualan Produk</option>
    <option value="Jasa">Jasa</option>
    <option value="Investasi">Investasi</option>
    <option value="Donasi">Donasi</option>
    <option value="Lain-lain">Lain-lain</option>
            </select>
            @error('kategori')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        {{-- Deskripsi --}}
        <div class="mb-4">
            <label for="deskripsi" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" rows="3" class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring focus:border-blue-300" placeholder="Contoh: Penjualan produk A">{{ old('deskripsi') }}</textarea>
            @error('deskripsi')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        {{-- Jumlah --}}
        <div class="mb-4">
            <label for="jumlah" class="block text-sm font-medium text-gray-700 mb-1">Jumlah (Rp)</label>
            <input type="text" name="jumlah" id="jumlah" required placeholder="Contoh: 100000" class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring focus:border-blue-300">
            @error('jumlah')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        {{-- Tanggal --}}
        <div class="mb-4">
            <label for="tanggal" class="block text-sm font-medium text-gray-700 mb-1">Tanggal</label>
            <input type="date" name="tanggal" id="tanggal" value="{{ old('tanggal') }}" required class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring focus:border-blue-300">
            @error('tanggal')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="text-right">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                Simpan
            </button>
        </div>
    </form>
</div>

@push('scripts')
<script>
    const jumlahInput = document.getElementById('jumlah');
    jumlahInput.addEventListener('input', function (e) {
        let value = e.target.value.replace(/[^,\d]/g, '');
        let split = value.split(',');
        let sisa = split[0].length % 3;
        let rupiah = split[0].substr(0, sisa);
        let ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        if (ribuan) {
            let separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] !== undefined ? rupiah + ',' + split[1] : rupiah;
        e.target.value = rupiah ? 'Rp ' + rupiah : '';
    });
</script>
@endpush

@endsection
