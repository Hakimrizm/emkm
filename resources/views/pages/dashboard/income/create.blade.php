@extends('layouts.dashboard')

@section('title', 'Tambah Pemasukan')

@section('content')
<div class="card">
    <h2 class="text-2xl font-semibold mb-4 dark:text-white">Tambah Pemasukan</h2>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('income.store') }}">
        @csrf

        {{-- Dropdown Kategori --}}
        <div class="mb-4">
            <label for="kategori" class="form-label">Kategori Pemasukan</label>
            <select name="kategori" required class="form-select">
                <option class="option-select" value="">-- Pilih Kategori --</option>
                <option class="option-select" value="Penjualan Produk">Penjualan Produk</option>
                <option class="option-select" value="Jasa">Jasa</option>
                <option class="option-select" value="Investasi">Investasi</option>
                <option class="option-select" value="Donasi">Donasi</option>
                <option class="option-select" value="Lain-lain">Lain-lain</option>
            </select>
            @error('kategori')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        {{-- Deskripsi --}}
        <div class="mb-4">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" rows="3" class="form-textarea" placeholder="Contoh: Penjualan produk A">{{ old('deskripsi') }}</textarea>
            @error('deskripsi')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        {{-- Jumlah --}}
        <div class="mb-4">
            <label for="jumlah" class="form-label">Jumlah (Rp)</label>
            <input type="number" name="jumlah" id="jumlah" required placeholder="Contoh: 100000" class="form-control">
            @error('jumlah')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        {{-- Tanggal --}}
        <div class="mb-4">
            <label for="tanggal" class="form-label">Tanggal</label>
            <div class="relative">
                <input type="date" name="tanggal" id="tanggal" value="{{ old('tanggal') }}" required class="form-date" onclick="this.showPicker()">
                <span class="pointer-events-none absolute top-1/2 right-3 -translate-y-1/2 text-gray-500 dark:text-gray-40">
                    <svg
                        class="fill-current"
                        width="20"
                        height="20"
                        viewBox="0 0 20 20"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M6.66659 1.5415C7.0808 1.5415 7.41658 1.87729 7.41658 2.2915V2.99984H12.5833V2.2915C12.5833 1.87729 12.919 1.5415 13.3333 1.5415C13.7475 1.5415 14.0833 1.87729 14.0833 2.2915V2.99984L15.4166 2.99984C16.5212 2.99984 17.4166 3.89527 17.4166 4.99984V7.49984V15.8332C17.4166 16.9377 16.5212 17.8332 15.4166 17.8332H4.58325C3.47868 17.8332 2.58325 16.9377 2.58325 15.8332V7.49984V4.99984C2.58325 3.89527 3.47868 2.99984 4.58325 2.99984L5.91659 2.99984V2.2915C5.91659 1.87729 6.25237 1.5415 6.66659 1.5415ZM6.66659 4.49984H4.58325C4.30711 4.49984 4.08325 4.7237 4.08325 4.99984V6.74984H15.9166V4.99984C15.9166 4.7237 15.6927 4.49984 15.4166 4.49984H13.3333H6.66659ZM15.9166 8.24984H4.08325V15.8332C4.08325 16.1093 4.30711 16.3332 4.58325 16.3332H15.4166C15.6927 16.3332 15.9166 16.1093 15.9166 15.8332V8.24984Z"
                            fill=""
                        />
                    </svg>
                </span>
            </div>
            @error('tanggal')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="text-right">
            <button type="submit" class="button bg-blue-600 hover:bg-blue-700 text-white">
                Simpan
            </button>
        </div>
    </form>
</div>


@endsection
