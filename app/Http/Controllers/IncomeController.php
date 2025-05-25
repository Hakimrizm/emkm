<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Income;

class IncomeController extends Controller
{
    public function create()
    {
        return view('income.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'jumlah' => 'required|numeric|min:0',
            'tanggal' => 'required|date',
        ]);

        Income::create([
            'user_id' => auth()->id(),
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'jumlah' => $request->jumlah,
            'tanggal' => $request->tanggal,
        ]);

        return redirect()->route('dashboard')->with('success', 'Pemasukan berhasil ditambahkan!');
    }
}
