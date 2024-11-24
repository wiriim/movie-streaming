@extends('layouts.app')

@section('content')

    <div class="container-lg">
        <form enctype="multipart/form-data" action="{{ route('add-movie') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="genre" class="form-label">Genre</label>
              <input name="genre" type="text" class="form-control" id="genre" aria-describedby="genre">
            </div>
            @error('genre')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div class="mb-3">
                <label for="photo" class="form-label">Photo</label>
                <input name="photo" type="file" class="form-control" id="photo" aria-describedby="photo">
            </div>
            @error('photo')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input name="title" type="text" class="form-control" id="title" aria-describedby="title">
            </div>
            @error('title')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div class="mb-3">
                <label for="description" class="form-label" style="display: block">Description</label>
                <textarea name="description" id="description" style="width: 100%; resize: none; min-height: 100px"></textarea>
            </div>
            @error('description')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div class="mb-3">
                <label for="date" class="form-label">Publish Date</label>
                <input name="date" type="date" class="form-control" id="date" aria-describedby="date">
            </div>
            @error('date')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>

@endsection