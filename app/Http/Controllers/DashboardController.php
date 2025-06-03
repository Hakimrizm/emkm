<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $lowStockProducts = Product::select('id', 'name', 'stock', 'product_category_id')
            ->where('stock', '<=', 5)
            ->get();
        
        return view('pages.dashboard.index', compact('lowStockProducts'));
    }
}
