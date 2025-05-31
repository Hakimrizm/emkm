<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\GuestInterfaceController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\HppExportController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\IncomeCategoryController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExpenseCategoryController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Models\ExpenseCategory;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| Public Routes (Guest)
|--------------------------------------------------------------------------
*/
Route::get('/', [GuestInterfaceController::class, 'welcome']);
Route::get('/tentang-kami', [GuestInterfaceController::class, 'about'])->name('about');
Route::get('/edukasi', [GuestInterfaceController::class, 'education'])->name('education');
Route::get('/edukasi/detail', fn() => view('pages.education.education'))->name('education.detail');

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/
Auth::routes();

// Google OAuth
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

/*
|--------------------------------------------------------------------------
| Protected Routes (Login Required)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function() {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // Mengganti Rute yang tadinya /hpp/form menjadin /dashboard/hpp/form jadi menambahkan /dashboard di awalan
    Route::prefix('/dashboard')->group(function() {
        // /dashboard
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        // Article (Admin Only)
        Route::resource('/article', ArticleController::class)->middleware('admin');

        // HPP Kalkulasi & Ekspor
        // Mengganti Rute yang tadinya /hpp/form menjadin /dashboard/hpp/form
        Route::get('/hpp/form', fn() => view('pages.dashboard.hpp.form'))->name('hpp.form');
        Route::view('/hpp/hasil', 'pages.dashboard.hpp.hasil')->name('hpp.hasil');
        Route::get('/hpp/export/pdf', [HppExportController::class, 'exportPdf'])->name('hpp.export.pdf');
        Route::get('/hpp/export/excel', [HppExportController::class, 'exportExcel'])->name('hpp.export.excel');

        // Product & Product Category
        Route::resource('expense/category', ExpenseCategoryController::class)->parameters(['category' => 'expenseCategory'])->names([
            'index' => 'expenseCategory.index',
            'create' => 'expenseCategory.create',
            'store' => 'expenseCategory.store',
            'edit' => 'expenseCategory.edit',
            'update' => 'expenseCategory.update',
            'destroy' => 'expenseCategory.destroy', 
        ])->except('show');
        Route::resource('expense', ExpenseController::class);

        // Product & Product Category
        Route::resource('product/category', ProductCategoryController::class)->parameters([ 'category' => 'productCategory' ])->names([
            'index' => 'productCategory.index',
            'create' => 'productCategory.create',
            'store' => 'productCategory.store',
            'edit' => 'productCategory.edit',
            'update' => 'productCategory.update',
            'destroy' => 'productCategory.destroy',
        ])->except(['show']);
        Route::resource('product', ProductController::class);
    });
});
