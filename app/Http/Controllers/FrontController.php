<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.index', [
            'title' => 'Home',
        ]);
    }
}
