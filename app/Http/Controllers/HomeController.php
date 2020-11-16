<?php

namespace App\Http\Controllers;

use App\Genres;
use App\Movies;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $movies = Movies::all();
        $genres = Genres::all();
        return view('home', compact('genres','movies'));
    }
}
