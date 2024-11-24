<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){
        $movies = Movie::paginate(4);
        return view('pages.home', ['movies'=>$movies]);
    }
}
