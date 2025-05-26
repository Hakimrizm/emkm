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
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\ProductController;


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
Route::middleware(['auth'])->group(function () {

    // Dashboard & Home
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Article (Admin Only)
    Route::resource('/dashboard/article', ArticleController::class)->middleware('admin');

    // HPP Kalkulasi & Ekspor
    Route::get('/hpp/form', fn() => view('hpp.form'))->name('hpp.form');
    Route::view('/hpp/hasil', 'hpp.hasil')->name('hpp.hasil');
    Route::get('/hpp/export/pdf', [HppExportController::class, 'exportPdf'])->name('hpp.export.pdf');
    Route::get('/hpp/export/excel', [HppExportController::class, 'exportExcel'])->name('hpp.export.excel');

    // Pemasukan
    Route::get('/pemasukan/create', [IncomeController::class, 'create'])->name('income.create');
    Route::post('/pemasukan', [IncomeController::class, 'store'])->name('income.store');


    Route::get('/pengeluaran/create', [ExpenseController::class, 'create'])->name('expense.create');
    Route::post('/pengeluaran', [ExpenseController::class, 'store'])->name('expense.store');

    // Pengeluaran
    Route::get('/produk', [ProductController::class, 'index'])->name('produk.index');
    Route::get('/produk/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/produk', [ProductController::class, 'store'])->name('product.store');







});
