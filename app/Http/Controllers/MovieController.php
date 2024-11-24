<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;
use Storage;

class MovieController extends Controller
{
    public function index(){
        $movies = Movie::paginate(4);
        return view('pages.home', ['movies'=>$movies]);
    }

    public function addMovie(){
        $genres = Genre::all();
        return view('pages.add-movie', ['genres'=>$genres]);
    }

    public function create(Request $request){
        $validate = $request->validate([
            'genre' => 'required',
            'photo' => 'required|image|max:5120',
            'title' => 'required|max:30',
            'description' => 'required|max:50',
            'date' => 'required|date|before:tomorrow'
        ]);

        $path = $request->file('photo')->store('photos', 'public');
        
        $genreId = Genre::where('name', $validate['genre'])->get();

        Movie::create([
            'title' => $validate['title'],
            'description'=> $validate['description'],
            'publish_date'=> $validate['date'],
            'genre_id' => $genreId->first()->id,
            'photo' => $path
        ]);
        return redirect()->route('home')->with('success','Movie successfully added!');
    }

    public function delete(Request $request, Movie $movie){
        $movie->delete();
        Storage::disk('public')->delete($movie->photo);
        return redirect()->route('home')->with('success','Movie successfully deleted');
    }
}
