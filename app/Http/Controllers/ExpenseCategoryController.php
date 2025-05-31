<?php

namespace App\Http\Controllers;

use App\Models\ExpenseCategory;
use Illuminate\Http\Request;

class ExpenseCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $expenseCategories = auth()->user()
            ->expenseCategories()
            ->withCount('expenses')
            ->get();
        return view('pages.dashboard.expense.category.index', compact('expenseCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.expense.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255'
        ], [
            'name.required' => 'Nama kategori wajib diisi.',
            'name.string'   => 'Nama kategori harus berupa teks.',
            'name.max'      => 'Nama kategori tidak boleh lebih dari 255 karakter.'
        ]);

        $category = ExpenseCategory::create([
            'name' => $validated['name'],
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('expenseCategory.index')->with([
            'success' => 'Kategori berhasil ditambahkan!',
            'expense_category_id' => $category->id,
            'status' => 'Added'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ExpenseCategory $expenseCategory)
    {
        return view('pages.dashboard.expense.category.edit', compact('expenseCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ExpenseCategory $expenseCategory)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255'
        ], [
            'name.required' => 'Nama kategori wajib diisi.',
            'name.string'   => 'Nama kategori harus berupa teks.',
            'name.max'      => 'Nama kategori tidak boleh lebih dari 255 karakter.'
        ]);

        $expenseCategory->update([
            'name' => $validated['name'],
        ]);

        return redirect()->route('expenseCategory.index')->with([
            'success' => 'Kategori berhasil diubah!',
            'expense_category_id' => $expenseCategory->id,
            'status' => 'Added'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExpenseCategory $expenseCategory)
    {
        $expenseCategory->delete();
        return redirect()->route('expenseCategory.index')
            ->with('success', 'Kategori pengeluaran berhasil dihapus.');
    }
}
