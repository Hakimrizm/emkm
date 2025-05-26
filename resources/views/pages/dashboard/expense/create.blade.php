@extends('layouts.dashboard')

@section('title', 'Tambah Pengeluaran')

@section('content')
<div class="card">
    <h2 class="text-2xl font-semibold mb-4 dark:text-white">Tambah Pengeluaran</h2>

        
    {{-- @if(session('success'))
        <div class="mb-4 text-green-600 font-medium">{{ session('success') }}</div> --}}
        
    <form action="{{ route('expense.store') }}" method="POST">
        @csrf

        <!-- Kategori -->
        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
               {{-- <select id="kategori" name="kategori" class="w-full border border-gray-300 rounded px-3 py-2">
                    <option value="Kategori Pengeluaran">Kategori Pengeluaran</option>
                    <option value="Pembelian Bahan Baku">Pembelian Bahan Baku</option>
                    <option value="Gaji Karyawan">Gaji Karyawan</option>
                    <option value="Sewa Tempat">Sewa Tempat</option>
                    <option value="Biaya Operasional">Biaya Operasional</option>
                    <option value="Pemasaran">Pemasaran</option>
                    <option value="Transportasi">Transportasi</option>
                    <option value="Lain-lain">Lain-lain</option>
                </select> --}}

                <select id="kategori" name="kategori" class="form-select">
                    <option class="option-select" value="">-- Pilih Kategori --</option>
                    <option class="option-select" value="Kategori Pengeluaran">Kategori Pengeluaran</option>
                    <option class="option-select" value="Pembelian Bahan Baku">Pembelian Bahan Baku</option>
                    <option class="option-select" value="Gaji Karyawan">Gaji Karyawan</option>
                    <option class="option-select" value="Sewa Tempat">Sewa Tempat</option>
                    <option class="option-select" value="Biaya Operasional">Biaya Operasional</option>
                    <option class="option-select" value="Pemasaran">Pemasaran</option>
                    <option class="option-select" value="Transportasi">Transportasi</option>
                    <option class="option-select" value="Lain-lain">Lain-lain</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->nama }}</option>
            @endforeach

        </select>


            @error('kategori')
                <div class="text-red-600 text-sm">{{ $message }}</div>
            @enderror
        </div>

        <!-- Deskripsi -->
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <input type="text" id="deskripsi" name="deskripsi"
                class="form-control"
                placeholder="Contoh: Belanja bahan baku" />
            @error('deskripsi')
                <div class="text-red-600 text-sm">{{ $message }}</div>
            @enderror
        </div>

        <!-- Jumlah -->
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah (Rp)</label>
            <input type="number" id="jumlah" name="jumlah" required
                class="form-control"
                placeholder="Contoh: 50000" />
            @error('jumlah')
                <div class="text-red-600 text-sm">{{ $message }}</div>
            @enderror
        </div>

        <!-- Tanggal -->
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" id="tanggal" name="tanggal" required
                class="form-control" />
            @error('tanggal')
                <div class="text-red-600 text-sm">{{ $message }}</div>
            @enderror
        </div>

        <!-- Tombol Submit -->
        <div class="text-right">
            <button type="submit"
                class="bg-blue-600 hover:bg-blue-700 button text-white">
                Simpan
            </button>
        </div>
    </form>
</div>
@endsection
