<?php

use App\Http\Controllers\GuestInterfaceController;
use App\Http\Controllers\Auth\GoogleController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HppExportController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [GuestInterfaceController::class, 'welcome']);
Route::get('/tentang-kami', [GuestInterfaceController::class, 'about'])->name('about');
Route::get('/edukasi', [GuestInterfaceController::class, 'education'])->name('education');
Route::get('/edukasi/detail', function () {
    return view('pages.education.education');
})->name('education.detail');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::resource('/dashboard/article', App\Http\Controllers\ArticleController::class)->middleware('admin');

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::middleware(['auth'])->group(function () {
    Route::get('/hpp/form', function () {
        return view('hpp.form');
    })->name('hpp.form');

    Route::view('/hpp/hasil', 'hpp.hasil')->name('hpp.hasil');

    Route::get('/hpp/export/pdf', [HppExportController::class, 'exportPdf'])->name('hpp.export.pdf');
    Route::get('/hpp/export/excel', [HppExportController::class, 'exportExcel'])->name('hpp.export.excel');
});
