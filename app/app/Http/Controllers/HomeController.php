<?php

namespace App\Http\Controllers;

use App\User;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all()->toArray();

        $i = count($users);
        while ($i > 1) {
            $i--;
            $j = rand(0, $i);
            $this->array_move($users, $j, $i);
        }

        return view('home', compact('users'));
    }
}
