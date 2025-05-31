<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = auth()->user()->products;
        return view('pages.dashboard.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $productCategories = auth()->user()->productCategories;
        return view('pages.dashboard.product.create', compact('productCategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'product_category_id' => 'required|exists:product_categories,id',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0'
        ], [
            'name.required' => 'Nama produk wajib diisi.',
            'name.string' => 'Nama produk harus berupa teks.',
            'name.max' => 'Nama produk maksimal 255 karakter.',

            'product_category_id.required' => 'Kategori produk wajib dipilih.',
            'product_category_id.exists' => 'Kategori yang dipilih tidak valid.',

            'price.required' => 'Harga produk wajib diisi.',
            'price.numeric' => 'Harga produk harus berupa angka.',
            'price.min' => 'Harga produk tidak boleh kurang dari 0.',

            'stock.required' => 'Stok produk wajib diisi.',
            'stock.integer' => 'Stok produk harus berupa angka bulat.',
            'stock.min' => 'Stok produk tidak boleh kurang dari 0.',
        ]);

        $product = Product::create([
            'name' => $request->name,
            'user_id' => auth()->user()->id,
            'product_category_id' => $request->product_category_id,
            'price' => $request->price,
            'stock' => $request->stock,
        ]);

        return redirect()->route('product.index')->with([
            'success', 'Produk berhasil ditambahkan!',
            'product_id' => $product->id,
            'status' => 'Added'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $this->authorize('update', $product);

        $productCategories = auth()->user()->productCategories;

        return view('pages.dashboard.product.edit', compact('product', 'productCategories'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $this->authorize('update', $product);

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'product_category_id' => ['required', 'exists:product_categories,id'],
            'price' => ['required', 'numeric', 'min:0'],
            'stock' => ['required', 'integer', 'min:0'],
        ], [
            'name.required' => 'Nama produk wajib diisi.',
            'name.max' => 'Nama produk maksimal 255 karakter.',

            'product_category_id.required' => 'Kategori produk wajib dipilih.',
            'product_category_id.exists' => 'Kategori tidak valid.',

            'price.required' => 'Harga produk wajib diisi.',
            'price.numeric' => 'Harga harus berupa angka.',
            'price.min' => 'Harga minimal 0.',

            'stock.required' => 'Stok produk wajib diisi.',
            'stock.integer' => 'Stok harus berupa angka bulat.',
            'stock.min' => 'Stok minimal 0.',
        ]);

        $product->update($validated);

        return redirect()->route('product.index')->with([
            'success', 'Produk berhasil diperbarui.',
            'product_id' => $product->id,
            'status' => 'Edit'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $this->authorize('delete', $product);
        $product->delete();
        return redirect()->route('product.index')
            ->with('success', 'Produk berhasil dihapus.');
    }
}
