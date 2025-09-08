<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\Translation;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/counter', Counter::class);
Route::get('/translation', Translation::class);
