<?php

use App\Http\Controllers\CatController;
use App\Http\Controllers\FilmController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

//Film CRUD Routes
Route::get('/films/create', [FilmController::class, 'create'])->name('films.create');
Route::post('/films', [FilmController::class, 'store'])->name('films.store');
Route::get('/films/{id}/edit', [FilmController::class, 'edit'])->name('films.edit');
Route::put('/films/{id}', [FilmController::class, 'update'])->name('films.update');
Route::delete('/films/{id}', [FilmController::class, 'destroy'])->name('films.destroy');
Route::get('/films/{id}', [FilmController::class, 'show'])->name('films.show');
Route::get('/films', [FilmController::class, 'index'])->name('films.index');

// Cat CRUD Routes
Route::get('/cats/create', [CatController::class, 'create'])->name('cats.create');
Route::post('/cats', [CatController::class, 'store'])->name('cats.store');
Route::get('/cats/{id}/edit', [CatController::class, 'edit'])->name('cats.edit');
Route::put('/cats/{id}', [CatController::class, 'update'])->name('cats.update');
Route::delete('/cats/{id}', [CatController::class, 'destroy'])->name('cats.destroy');
Route::get('/cats/{id}', [CatController::class, 'show'])->name('cats.show');
Route::get('/cats', [CatController::class, 'index'])->name('cats.index');
