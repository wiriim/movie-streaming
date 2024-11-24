<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/home');

Route::get('/home', [MovieController::class, 'index'])->name('home');