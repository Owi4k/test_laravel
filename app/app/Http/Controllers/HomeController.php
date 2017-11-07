<?php

namespace App\Http\Controllers;

use App\Dictionary;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dictionaries = Dictionary::orderBy('id', 'ASC')->take(10)->get();
        return view('home', compact('dictionaries'));
    }
}
