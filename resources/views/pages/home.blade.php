@extends('layouts.app')

@section('content')

    <div class="container-lg d-flex justify-content-center">
        <img src="{{ asset('popcorn.jpg') }}" alt="popcorn" width="300px">
    </div>
    <div class="container d-flex justify-content-center mt-5">
        <a href="{{ route('add-movie') }}" class="btn btn-dark" style="width: 300px">add a new movie</a>
    </div>

    <div class="container-lg">
        <div class="mb-3 mt-3 d-flex justify-content-center flex-wrap" style="gap: 40px">
            @foreach ($movies as $movie)
                <div class="card-wrapper">
                    <div class="card" style="width: 18rem; min-height: 500px">
                        <img src="{{ asset($movie->photo) }}" class="card-img-top" alt="$movie->title">
                        <div class="card-body">
                          <h5 class="card-title">{{$movie->title}}</h5>
                          <p class="card-text">{{$movie->genre->name}}</p>
                          <p class="card-text">{{$movie->description}}</p>
                          <p class="text-tertiary">{{$movie->publish_date}}</p>
                          <a href="#" class="btn btn-danger">delete</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{$movies->links()}}
    </div>

@endsection