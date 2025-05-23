<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class GuestInterfaceController extends Controller
{
    public function welcome() {
        return view('welcome');
    }

    public function about() {
        return view('about');
    }

    public function education() {
        return view('pages.education.index', [
            'articles' => Article::latest()->paginate(9) // withQueryString
        ]);
    }
}
