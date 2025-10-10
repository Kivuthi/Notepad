<?php

use App\Http\Controllers\FeaturedVehiclesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\InsightsController;

// Route::get("/", [NoteController::class,"index"])->name("note.index");
// Route::get("/create", [NoteController::class,"create"])->name("note.create");
// Route::post('/store', [NoteController::class,"store"])->name('note.store');

//Admin
Route::get('/dashboard', [PageController::class,'dashboard'])->name('dashboard');


//pages
Route::get('/home', [PageController::class,'home'])->name("pages.index");
Route::get("/cars", [PageController::class,"cars"])->name('pages.car');

//featured vehicles
Route::resource('featuredVehicles', FeaturedVehiclesController::class);

//insights
Route::resource('insights', InsightsController::class);
