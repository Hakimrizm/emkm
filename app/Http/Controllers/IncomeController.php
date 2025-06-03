<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $incomes = auth()->user()->incomes;
        return view('pages.dashboard.income.index', compact('incomes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $incomeCategories = auth()->user()->incomeCategories;
        return view('pages.dashboard.income.create', compact('incomeCategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'income_category_id' => 'required|exists:income_categories,id',
            'description' => 'required',
            'amount' => 'required|numeric|min:1',
            'date' => 'required|date'
        ], [
            'income_category_id.required' => 'Kategori pengeluaran wajib dipilih.',
            'income_category_id.exists' => 'Kategori tidak valid.',

            'description.string' => 'Deskripsi harus berupa teks.',
            'description.max' => 'Deskripsi maksimal 255 karakter.',
            
            'amount.required' => 'Jumlah pengeluaran wajib diisi.',
            'amount.numeric' => 'Jumlah harus berupa angka.',
            'amount.min' => 'Jumlah minimal 1.',

            'date.required' => 'Tanggal pengeluaran wajib diisi.',
            'date.date' => 'Format tanggal tidak valid.',
        ]);

        $income = auth()->user()->incomes()->create($validated);

        return redirect()->route('income.index')->with([
            'success' => 'Pemasukan berhasil disimpan.',
            'income_id' => $income->id,
            'status' => 'added'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Income $income)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Income $income)
    {
        $incomeCategories = auth()->user()->incomeCategories;
        return view('pages.dashboard.income.edit', compact('income', 'incomeCategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Income $income)
    {
        $validated = $request->validate([
            'income_category_id' => 'required|exists:income_categories,id',
            'description' => 'required|string|max:255',
            'amount' => 'required|numeric|min:1',
            'date' => 'required|date'
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

        $income->update($validated);

        return redirect()->route('income.index')->with([
            'success', 'Pemasukan berhasil diperbarui.',
            'income_id' => $income->id,
            'status' => 'Edit'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Income $income)
    {
        $income->delete();
        return redirect()->route('income.index')
            ->with('success', 'Pemasukan berhasil dihapus.');
    }
}
