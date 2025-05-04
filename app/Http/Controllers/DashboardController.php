<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        if (auth()->user()->role == 'admin') {
            return view('pages.admin.dashboard');
        } else if (auth()->user()->role == 'user') {
            return view('pages.user.dashboard');
        }

    }
}
