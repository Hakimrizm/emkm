@extends('layouts.dashboard')

@section('title', 'Edit Pemasukan')

@section('content')
<div class="mb-3 flex justify-between items-center">
  <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">
    Edit Pemasukan
  </h3>
  <a href="{{ route('income.index') }}" class="button bg-blue-600 hover:bg-blue-700 text-white">Kembali</a>
</div>

<div class="card">
  <form method="POST" action="{{ route('income.update', $income->id) }}">
    @csrf
    @method('PUT')

    {{-- Dropdown Kategori --}}
    <div class="mb-3">
      <label for="income_category_id" class="form-label">Kategori</label>
      <select id="income_category_id" name="income_category_id" class="form-select">
        @forelse($incomeCategories as $category)
          <option value="{{ $category->id }}" {{ $income->income_category_id == $category->id ? 'selected' : '' }}>
            {{ $category->name }}
          </option>
        @empty
          <option value="">Silahkan tambah kategori terlebih dahulu.</option>
        @endforelse
      </select>
      @error('income_category_id')
      <div class="text-red-600 text-sm">{{ $message }}</div>
      @enderror
    </div>

    {{-- Deskripsi --}}
    <div class="mb-3">
      <label for="description" class="form-label">Deskripsi</label>
      <textarea name="description" id="description" rows="3" class="form-textarea" placeholder="Contoh: Penjualan produk A">{{ old('description', $income->description) }}</textarea>
      @error('description')
      <span class="text-red-500 text-sm">{{ $message }}</span>
      @enderror
    </div>

    {{-- Jumlah --}}
    <div class="mb-3">
      <label for="amount" class="form-label">Jumlah (Rp)</label>
      <input type="number" name="amount" id="amount" required placeholder="Contoh: 100000"
             value="{{ old('amount', $income->amount) }}" class="form-control" />
      @error('amount')
      <span class="text-red-500 text-sm">{{ $message }}</span>
      @enderror
    </div>

    {{-- Tanggal --}}
    <div class="mb-3">
      <label for="date" class="form-label">Tanggal</label>
      <div class="relative">
        <input type="date" id="date" name="date" required class="form-date" onclick="this.showPicker()"
               value="{{ old('date', $income->date) }}" />
        <span class="pointer-events-none absolute top-1/2 right-3 -translate-y-1/2 text-gray-500 dark:text-gray-40">
          {{-- Icon SVG kalender --}}
        </span>
      </div>
      @error('date')
      <div class="text-red-600 text-sm">{{ $message }}</div>
      @enderror
    </div>

    <div class="text-right">
      <button type="submit" class="button bg-blue-600 hover:bg-blue-700 text-white">
        Simpan Perubahan
      </button>
    </div>
  </form>
</div>
@endsection
