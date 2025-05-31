@extends('layouts.dashboard')

@section('title', 'Edit Pengeluaran Saya')

@section('content')
<div class="mb-3 flex justify-between items-center">
  <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">
    Edit Pengeluaran
  </h3>
  <a href="{{ route('expense.index') }}" class="button bg-blue-600 hover:bg-blue-700 text-white">Kembali</a>
</div>

<div class="card">
    <form action="{{ route('expense.update', ['expense' => $expense]) }}" method="POST">
        @csrf

        @method('PUT')
        <div class="mb-3">
            <label for="price" class="form-label">Kategori</label>
            <select name="expense_category_id" id="kategori" class="form-select @error('expense_category_id') form-error @enderror">
                @forelse ($expenseCategories as $category)
                    <option value="{{ $category->id }}"
                        {{ old('expense_category_id', $expense->expense_category_id) == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @empty
                    <option value="">Silahkan tambah kategori terlebih dahulu.</option>
                @endforelse
            </select>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <input type="text" id="description" name="description" class="form-control" placeholder="Contoh: Belanja bahan baku" value="{{ $expense->description }}" />
            @error('description')
                <div class="text-red-600 text-sm">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="amount" class="form-label">Jumlah (Rp)</label>
            <input type="number" id="amount" name="amount" required class="form-control" placeholder="Contoh: 50000" value="{{ $expense->amount }}" />
            @error('amount')
                <div class="text-red-600 text-sm">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Tanggal</label>
            <div class="relative">
                <input type="date" id="date" name="date" required class="form-date" onclick="this.showPicker()" value="{{ $expense->date }}" />
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
            @error('date')
                <div class="text-red-600 text-sm">{{ $message }}</div>
            @enderror
        </div>

        <div class="text-right">
            <button type="submit"
                class="bg-blue-600 hover:bg-blue-700 button text-white">
                Simpan
            </button>
        </div>
    </form>
</div>
@endsection