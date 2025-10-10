<?php

use App\Http\Controllers\FeaturedVehiclesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\PageController;

// Route::get("/", [NoteController::class,"index"])->name("note.index");
// Route::get("/create", [NoteController::class,"create"])->name("note.create");
// Route::post('/store', [NoteController::class,"store"])->name('note.store');

//Admin
Route::get('/dashboard', [PageController::class,'dashboard'])->name('dashboard');


//pages
Route::get('/home', [PageController::class,'home'])->name("pages.index");
Route::get("/cars", [PageController::class,"cars"])->name('pages.car');

//featured vehicles
// Route::get('/featuredVehicles', [FeaturedVehiclesController::class,'index'])->name('featuredVehicles.index');
// Route::get('/create', [FeaturedVehiclesController::class,'create'])->name('featuredVehicles.create');
// Route::post('/store ', [FeaturedVehiclesController::class,'store'])->name('featuredVehicles.store');

Route::resource('featuredVehicles', FeaturedVehiclesController::class);
