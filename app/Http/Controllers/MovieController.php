<?php

namespace App\Http\Controllers;

use App\Models\Genre;
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
            'photo' => 'required|image',
            'title' => 'required|max:30',
            'description' => 'required|max:50',
            'date' => 'required|date'
        ]);

        $path = $request->file('photo')->store('photos', 'public');
        
        $genreId = Genre::where('name', $validate['genre'])->get('id');
        if ($genreId->isEmpty()){
            return "genre not found";
        }
        Movie::create([
            'title' => $validate['title'],
            'description'=> $validate['description'],
            'publish_date'=> $validate['date'],
            'genre_id' => 3,
            'photo' => $path
        ]);
        return redirect()->route('home')->with('success','Movie successfully added!');
    }
}
