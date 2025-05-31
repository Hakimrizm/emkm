<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $expenses = auth()->user()->expenses;
        return view('pages.dashboard.expense.index', compact('expenses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $expenseCategories = auth()->user()->expenseCategories;
        return view('pages.dashboard.expense.create', compact('expenseCategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'expense_category_id' => ['required', 'exists:expense_categories,id'],
            'description' => ['nullable', 'string', 'max:255'],
            'amount' => ['required', 'numeric', 'min:1'],
            'date' => ['required', 'date'],
        ], [
            'expense_category_id.required' => 'Kategori pengeluaran wajib dipilih.',
            'expense_category_id.exists' => 'Kategori tidak valid.',

            'description.string' => 'Deskripsi harus berupa teks.',
            'description.max' => 'Deskripsi maksimal 255 karakter.',
            
            'amount.required' => 'Jumlah pengeluaran wajib diisi.',
            'amount.numeric' => 'Jumlah harus berupa angka.',
            'amount.min' => 'Jumlah minimal 1.',

            'date.required' => 'Tanggal pengeluaran wajib diisi.',
            'date.date' => 'Format tanggal tidak valid.',
        ]);

        $expense = auth()->user()->expenses()->create($validated);

        return redirect()->route('expense.index')->with([
            'success', 'Pengeluaran berhasil disimpan.',
            'expense_id' => $expense->id,
            'status' => 'Added'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Expense $expense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Expense $expense)
    {
        $expenseCategories = auth()->user()->expenseCategories;
        return view('pages.dashboard.expense.edit', compact('expense', 'expenseCategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Expense $expense)
    {
        $validated = $request->validate([
            'expense_category_id' => ['required', 'exists:expense_categories,id'],
            'description' => ['nullable', 'string', 'max:255'],
            'amount' => ['required', 'numeric', 'min:1'],
            'date' => ['required', 'date'],
        ], [
            'expense_category_id.required' => 'Kategori pengeluaran wajib dipilih.',
            'expense_category_id.exists' => 'Kategori tidak valid.',

            'description.string' => 'Deskripsi harus berupa teks.',
            'description.max' => 'Deskripsi maksimal 255 karakter.',
            
            'amount.required' => 'Jumlah pengeluaran wajib diisi.',
            'amount.numeric' => 'Jumlah harus berupa angka.',
            'amount.min' => 'Jumlah minimal 1.',

            'date.required' => 'Tanggal pengeluaran wajib diisi.',
            'date.date' => 'Format tanggal tidak valid.',
        ]);

        $expense->update($validated);

        return redirect()->route('expense.index')->with([
            'success', 'Pengeluaran berhasil diperbarui.',
            'expense_id' => $expense->id,
            'status' => 'Edit'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Expense $expense)
    {
        $expense->delete();
        return redirect()->route('expense.index')
            ->with('success', 'Pengeluaran berhasil dihapus.');
    }
}
