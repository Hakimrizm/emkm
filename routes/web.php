<?php

use App\Http\Controllers\GuestInterfaceController;
use App\Http\Controllers\Auth\GoogleController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [GuestInterfaceController::class, 'welcome']);
Route::get('/tentang-kami', [GuestInterfaceController::class, 'about'])->name('about');
Route::get('/edukasi', function() {
    return view('pages.education.index');
})->name('education');
Route::get('/edukasi/detail', function(){
    return view('pages.education.education');
})->name("education.detail");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::resource('/dashboard/article', App\Http\Controllers\ArticleController::class)->middleware('admin');
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
