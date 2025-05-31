@extends('layouts.dashboard')

@section('title', 'Pengeluaran Saya')

@section('content')
<div class="mb-3 flex justify-between items-center">
  <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">
    Pengeluaran Saya
  </h3>
  <a href="{{ route('expense.create') }}" class="button bg-blue-600 hover:bg-blue-700 text-white">Tambah Pengeluaran</a>
</div>

<div class="card">
  <div class="w-full overflow-x-auto">
    <table class="min-w-full">
      <!-- table header start -->
      <thead>
        <tr class="border-gray-100 border-y dark:border-gray-800">
          <th class="py-3">
            <div class="flex items-center">
              <p
                class="font-medium text-gray-500 text-theme-xs dark:text-gray-400"
              >
                Kategori
              </p>
            </div>
          </th>
          <th class="py-3">
            <div class="flex items-center">
              <p
                class="font-medium text-gray-500 text-theme-xs dark:text-gray-400"
              >
                Deskripsi
              </p>
            </div>
          </th>
          <th class="py-3">
            <div class="flex items-center">
              <p
                class="font-medium text-gray-500 text-theme-xs dark:text-gray-400"
              >
                Jumlah
              </p>
            </div>
          </th>
          <th class="py-3">
            <div class="flex items-center">
              <p
                class="font-medium text-gray-500 text-theme-xs dark:text-gray-400"
              >
                Tanggal
              </p>
            </div>
          </th>
          <th class="py-3 whitespace-nowrap w-1">
            <div class="flex items-center">
              <p
                class="font-medium text-gray-500 text-theme-xs dark:text-gray-400"
              >
                Aksi
              </p>
            </div>
          </th>
        </tr>
      </thead>
      <!-- table header end -->
  
      <tbody class="divide-y divide-gray-100 dark:divide-gray-800">
        @forelse ($expenses as $expense)
          <tr>
            <td class="py-3">
              <div class="flex items-center">
                <p class="text-gray-500 text-theme-sm dark:text-gray-400">
                  {{ $expense->expenseCategory->name }}
                </p>
              </div>
            </td>
            <td class="py-3">
              <div class="flex items-center">
                <p class="text-gray-500 text-theme-sm dark:text-gray-400">
                  {{ $expense->description }}
                </p>
              </div>
            </td>
            <td class="py-3">
              <div class="flex items-center">
                <p class="text-gray-500 text-theme-sm dark:text-gray-400">
                  Rp{{ number_format($expense->amount, 0, ',', '.') }}
                </p>
              </div>
            </td>
            <td class="py-3">
              <div class="flex items-center">
                <p class="text-gray-500 text-theme-sm dark:text-gray-400">
                  {{ $expense->date }}
                </p>
              </div>
            </td>
            <td class="py-3">
              <div class="flex items-center gap-2">
                <a href="{{ route('expense.edit', ['expense' => $expense]) }}" class="button button-sm bg-blue-600 hover:bg-blue-700 text-white">Edit</a>
                <form action="{{ route('expense.destroy', ['expense' => $expense]) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                  @csrf
                  @method('DELETE')

                  <button type="submit" class="button button-sm bg-red-600 hover:bg-red-700 text-white">Hapus</button>
                </form>
              </div>
            </td>
          </tr>
        @empty
          <span>Pengeluaran belum ada</span>
        @endforelse
      </tbody>
    </table>
  </div>
</div>

@endsection