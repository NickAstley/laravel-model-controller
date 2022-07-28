<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class PageController extends Controller
{
    function index() {
        $movies = Movie::all();
        return view('page', [
            "movies" => $movies
        ]);
    }
}
