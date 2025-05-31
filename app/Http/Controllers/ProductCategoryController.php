<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productCategories = auth()->user()
            ->productCategories()
            ->withCount('products')
            ->get();
        
        return view('pages.dashboard.product.category.index', compact('productCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.product.category.create');
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

        $category = ProductCategory::create([
            'name' => $validated['name'],
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('productCategory.index')->with([
            'success' => 'Kategori berhasil ditambahkan!',
            'category_id' => $category->id,
            'status' => 'Added'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductCategory $productCategory)
    {
        // return view('pages.dashboard.product.category.category');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductCategory $productCategory)
    {
        return view('pages.dashboard.product.category.edit', compact('productCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductCategory $productCategory)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255'
        ], [
            'name.required' => 'Nama kategori wajib diisi.',
            'name.string'   => 'Nama kategori harus berupa teks.',
            'name.max'      => 'Nama kategori tidak boleh lebih dari 255 karakter.'
        ]);

        $productCategory->update([
            'name' => $validated['name'],
        ]);

        return redirect()->route('productCategory.index')->with([
            'success' => 'Kategori berhasil diubah!',
            'place_id' => $productCategory->id,
            'status' => 'Added'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductCategory $productCategory)
    {
        $productCategory->delete();
        return redirect()->route('productCategory.index')
            ->with('success', 'Kategori produk berhasil dihapus.');
    }
}
