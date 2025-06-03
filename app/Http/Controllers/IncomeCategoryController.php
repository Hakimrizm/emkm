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
        $incomeCategories = auth()->user()
            ->incomeCategories()
            ->withCount('incomes')
            ->get();
        return view('pages.dashboard.income.category.index', compact('incomeCategories'));
    }

    /**
     * Tampilkan form untuk menambahkan kategori baru.
     */
    public function create()
    {
        return view('pages.dashboard.income.category.create');
    }

    /**
     * Simpan kategori pemasukan baru ke database.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
            ]);

            IncomeCategory::create([
                'name' => $request->name,
                'user_id' => auth()->user()->id
            ]);
            
            return redirect()->route('incomeCategory.index')->with('success', 'Kategori berhasil ditambahkan.');
        } catch (\Throwable $th) {
            return redirect()->route('incomeCategory.create')->with('fail', 'Kategori gagal ditambahkan.');
        }
    }

    /**
     * Tampilkan form edit kategori pemasukan.
     */
    public function edit(IncomeCategory $incomeCategory)
    {
        return view('pages.dashboard.income.category.edit', ['category' => $incomeCategory]);
    }

    /**
     * Update kategori pemasukan di database.
     */
    public function update(Request $request, IncomeCategory $incomeCategory)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
            ]);
    
            $incomeCategory->update([
                'name' => $request->name,
            ]);
    
            return redirect()->route('incomeCategory.index')->with('success', 'Kategori berhasil diperbarui.');
        } catch (\Throwable $th) {
            return redirect()->route('incomeCategory.edit')->with('fail', 'Kategori gagal diperbarui. Silahkan coba kembali.');
        }
    }

    /**
     * Hapus kategori pemasukan dari database.
     */
    public function destroy(IncomeCategory $incomeCategory)
    {
        try {
            $incomeCategory->delete();
            return redirect()->route('incomeCategory.index')->with('success', 'Kategori dihapus.');
        }catch(\Throwable $th) {
            return redirect()->route('incomeCategory.index')->with('fail', 'Kategori gagal dihapus. Silahkan coba kembali.');
        }
    }
}
