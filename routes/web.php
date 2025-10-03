<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

Route::get('/', function () {
    return view('note.index');
});

Route::get('/create', [NoteController::class, 'create'])->name('note.create');
