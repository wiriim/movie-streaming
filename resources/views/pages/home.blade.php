@extends('layouts.app')

@section('content')

    <div class="container-lg d-flex justify-content-center">
        <div class="logo-wrapper" style="width: 300px; position: relative">
            <img src="{{ asset('popcorn.jpg') }}" alt="popcorn" width="300px" height="auto">
            <div class="name-logo" style="position: absolute; bottom: 0; left: 0">
                <span class="fs-1">𝐵𝑒𝑒𝐹𝓁𝒾𝓍</span>
            </div>
        </div>
        
        
    </div>
    <div class="container d-flex justify-content-center mt-5">
        <a href="{{ route('add-movie') }}" class="btn btn-dark" style="width: 300px">add a new movie</a>
    </div>

    @if (Session::has('success'))
    <div class="container-lg">
        <div class="text-success">{{Session::get('success')}}</div>
    </div>
        
    @endif

    <div class="container-lg">
        <div class="mb-3 mt-3 d-flex justify-content-center flex-wrap" style="gap: 40px">
            @foreach ($movies as $movie)
                <div class="card-wrapper">
                    <div class="card" style="width: 18rem; height: 700px;">
                        <img src="{{ asset('storage/'.$movie->photo) }}" class="card-img-top" alt="{{$movie->title}}" height="400px">
                        <div class="card-body d-flex" style="flex-direction: column; justify-content: space-between">
                          <h5 class="card-title">{{$movie->title}}</h5>
                          <p class="card-text">{{$movie->genre->name}}</p>
                          <p class="card-text" style="flex-grow: 1">{{$movie->description}}</p>
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