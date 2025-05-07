<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestInterfaceController extends Controller
{
    public function welcome() {
        return view('welcome');
    }

    public function about() {
        return view('about');
    }
}
