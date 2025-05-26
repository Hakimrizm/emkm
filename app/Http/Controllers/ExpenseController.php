<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense; 
use App\Models\ExpenseCategory; 

class ExpenseController extends Controller
{
    public function create()
    {
        $categories = auth()->user()->expenseCategories;
        return view('pages.dashboard.expense.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required|exists:expense_categories,id',
            'deskripsi' => 'nullable|string',
            'jumlah' => 'required|numeric',
            'tanggal' => 'required|date',
        ]);

        Expense::create([
            'user_id' => auth()->id(),
            'expense_category_id' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'jumlah' => $request->jumlah,
            'tanggal' => $request->tanggal,
        ]);

        return redirect()->back()->with('success', 'Pengeluaran berhasil ditambahkan.');
    }
}
