<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

Route::get("/", [NoteController::class,"index"])->name("note.index");
Route::get("/create", [NoteController::class,"create"])->name("note.create");
Route::post('/store', [NoteController::class,"store"])->name('note.store');