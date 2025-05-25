<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IncomeCategory;
use Illuminate\Support\Facades\Auth;

class IncomeCategoryController extends Controller
{
    /**
     * Tampilkan semua kategori pemasukan milik user yang sedang login.
     */
    public function index()
    {
        $categories = Auth::user()->incomeCategories;
        return view('income_category.index', compact('categories'));
    }

    /**
     * Tampilkan form untuk menambahkan kategori baru.
     */
    public function create()
    {
        return view('income_category.create');
    }

    /**
     * Simpan kategori pemasukan baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $categories = Auth::user()->incomeCategories;
        return redirect()->route('kategori-pemasukan.index')->with('success', 'Kategori berhasil ditambahkan.');
    }

    /**
     * Tampilkan form edit kategori pemasukan.
     */
    public function edit(IncomeCategory $kategori_pemasukan)
    {
        // Pastikan hanya pemilik kategori yang dapat mengedit
        $this->authorizeCategory($kategori_pemasukan);

        return view('income_category.edit', ['category' => $kategori_pemasukan]);
    }

    /**
     * Update kategori pemasukan di database.
     */
    public function update(Request $request, IncomeCategory $kategori_pemasukan)
    {
        $this->authorizeCategory($kategori_pemasukan);

        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $kategori_pemasukan->update([
            'name' => $request->name,
        ]);

        return redirect()->route('kategori-pemasukan.index')->with('success', 'Kategori berhasil diperbarui.');
    }

    /**
     * Hapus kategori pemasukan dari database.
     */
    public function destroy(IncomeCategory $kategori_pemasukan)
    {
        $this->authorizeCategory($kategori_pemasukan);

        $kategori_pemasukan->delete();
        return redirect()->route('kategori-pemasukan.index')->with('success', 'Kategori dihapus.');
    }

    /**
     * Cek apakah user yang login adalah pemilik kategori.
     */
    private function authorizeCategory(IncomeCategory $category)
    {
        if ($category->user_id !== Auth::id()) {
            abort(403, 'Tidak diizinkan mengakses data ini.');
        }
    }
}
