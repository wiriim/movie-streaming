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

    public function addMovie(){
        return view('pages.add-movie');
    }

    public function create(Request $request){
        $validate = $request->validate([
            'genre' => 'required|max:10',
            'photo' => 'required|file',
            'title' => 'required|max:30',
            'description' => 'required|max:50',
            'date' => 'required'
        ]);
        
    }
}
