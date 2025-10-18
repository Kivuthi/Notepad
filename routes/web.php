<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FeaturedVehiclesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\InsightsController;
use App\Http\Controllers\CarController;

// Route::get("/", [NoteController::class,"index"])->name("note.index");
// Route::get("/create", [NoteController::class,"create"])->name("note.create");
// Route::post('/store', [NoteController::class,"store"])->name('note.store');

//Admin

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [PageController::class,'dashboard'])->name('dashboard');
});

//pages
Route::get('/home', [PageController::class,'home'])->name("pages.index");
Route::get("/inventory", [PageController::class,"inventory"])->name('pages.inventory');
Route::get('/about', [PageController::class,'about'])->name('pages.about');
Route::get('/contact', [PageController::class,'contact'])->name('pages.contact');
Route::get('/sellcar', [PageController::class,'sellcar'])->name('pages.sellcar');
Route::get('/import', [PageController::class,'import'])->name('pages.import');

//featured vehicles
Route::resource('featuredVehicles', FeaturedVehiclesController::class);

//insights
Route::resource('insights', InsightsController::class);

//cars
Route::resource('cars', CarController::class);

//auth
Route::get('/register', [AuthController::class,'register'])->name('auth.register');
Route::get('/login', [AuthController::class,'login'])->name('login');
Route::post('/register', [AuthController::class,'registerPost'])->name('auth.registerPost');
Route::post('/login', [AuthController::class,'loginPost'])->name('auth.login');
Route::get('/logout', [AuthController::class,'logout'])->name('logout');