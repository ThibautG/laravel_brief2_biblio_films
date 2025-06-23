<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return redirect()->route('movies.index');
});

Route::resource('movies', MovieController::class)->except(['show']);

Route::get('movies/search', [MovieController::class, 'search'])->name
('movies.search');

Route::get('movies/title/asc', [MovieController::class, 'sortAscTitle'])->name
('movies.sortAscTitle');
Route::get('movies/title/desc', [MovieController::class, 'sortDescTitle'])->name
('movies.sortDescTitle');
Route::get('movies/year/asc', [MovieController::class, 'sortAscYear'])->name
('movies.sortAscYear');
Route::get('movies/year/desc', [MovieController::class, 'sortDescYear'])->name
('movies.sortDescYear');
Route::get('movies/note/asc', [MovieController::class, 'sortAscNote'])->name
('movies.sortAscNote');
Route::get('movies/note/desc', [MovieController::class, 'sortDescNote'])->name
('movies.sortDescNote');
