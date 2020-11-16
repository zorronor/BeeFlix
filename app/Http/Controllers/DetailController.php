<?php

namespace App\Http\Controllers;

use App\Episodes;
use App\Genres;
use App\Movies;


class DetailController extends Controller
{
    public function index($MovieID){
        $movie = Movies::WHERE('MovieID', $MovieID)->first();
        $genre = Genres::WHERE('GenreID', $movie->GenreID)->first();
        $episode = Episodes::WHERE('MovieID', $movie->MovieID)->paginate(3);
        return view('detail', compact('movie','genre','episode'));
    }
}
