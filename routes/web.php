<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/home');

Route::get('/home', [MovieController::class, 'index'])->name('home');

Route::get('/home/add-movie', [MovieController::class, 'addMovie'])->name('add-movie');
Route::post('/home/add-movie', [MovieController::class, 'create']);