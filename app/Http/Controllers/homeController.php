<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    // index function
    public function index()
    {
        return view('home');
    }
}
