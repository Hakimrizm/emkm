@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto mt-10 bg-white p-6 rounded-2xl shadow-lg dark:bg-gray-800">
    <h2 class="text-2xl font-semibold mb-4 text-gray-800 dark:text-gray-100">Tambah Pengeluaran</h2>

    {{-- @if(session('success'))
        <div class="mb-4 text-green-600 font-medium">{{ session('success') }}</div> --}}
        
    <form action="{{ route('expense.store') }}" method="POST" class="space-y-5">
        @csrf

        <!-- Kategori -->
        <div>
            <label for="kategori" class="block font-medium text-gray-700 dark:text-gray-200">Kategori</label>
               <select id="kategori" name="kategori" class="w-full border border-gray-300 rounded px-3 py-2">
                    <option value="Kategori Pengeluaran">Kategori Pengeluaran</option>
                    <option value="Pembelian Bahan Baku">Pembelian Bahan Baku</option>
                    <option value="Gaji Karyawan">Gaji Karyawan</option>
                    <option value="Sewa Tempat">Sewa Tempat</option>
                    <option value="Biaya Operasional">Biaya Operasional</option>
                    <option value="Pemasaran">Pemasaran</option>
                    <option value="Transportasi">Transportasi</option>
                    <option value="Lain-lain">Lain-lain</option>
                </select>

            @error('kategori')
                <div class="text-red-600 text-sm">{{ $message }}</div>
            @enderror
        </div>

        <!-- Deskripsi -->
        <div>
            <label for="deskripsi" class="block font-medium text-gray-700 dark:text-gray-200">Deskripsi</label>
            <input type="text" id="deskripsi" name="deskripsi"
                class="w-full mt-1 p-2 border rounded-lg dark:bg-gray-700 dark:text-white dark:border-gray-600"
                placeholder="Contoh: Belanja bahan baku" />
            @error('deskripsi')
                <div class="text-red-600 text-sm">{{ $message }}</div>
            @enderror
        </div>

        <!-- Jumlah -->
        <div>
            <label for="jumlah" class="block font-medium text-gray-700 dark:text-gray-200">Jumlah (Rp)</label>
            <input type="number" id="jumlah" name="jumlah" required
                class="w-full mt-1 p-2 border rounded-lg dark:bg-gray-700 dark:text-white dark:border-gray-600"
                placeholder="Contoh: 50000" />
            @error('jumlah')
                <div class="text-red-600 text-sm">{{ $message }}</div>
            @enderror
        </div>

        <!-- Tanggal -->
        <div>
            <label for="tanggal" class="block font-medium text-gray-700 dark:text-gray-200">Tanggal</label>
            <input type="date" id="tanggal" name="tanggal" required
                class="w-full mt-1 p-2 border rounded-lg dark:bg-gray-700 dark:text-white dark:border-gray-600" />
            @error('tanggal')
                <div class="text-red-600 text-sm">{{ $message }}</div>
            @enderror
        </div>

        <!-- Tombol Submit -->
        <div class="text-right">
            <button type="submit"
                class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow-md">
                Simpan
            </button>
        </div>
    </form>
</div>
@endsection
