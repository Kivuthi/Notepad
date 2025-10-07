<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\PageController;

Route::get("/", [NoteController::class,"index"])->name("note.index");
Route::get("/create", [NoteController::class,"create"])->name("note.create");
Route::post('/store', [NoteController::class,"store"])->name('note.store');

//Admin
Route::get('/dashboard', [PageController::class,'dashboard'])->name('dashboard');


//pages
Route::get('/home', [PageController::class,'home'])->name("pages.index");