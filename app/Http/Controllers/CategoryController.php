<?php

namespace App\Http\Controllers;

use App\Movies;


class CategoryController extends Controller
{
    public function index($GenreID)
    {
        $movies = Movies::all()->where('GenreID', $GenreID);
        return view('category', compact('movies'));
    }   
}
