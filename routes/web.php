<?php

use App\Livewire\About;
use App\Livewire\Home;
use App\Livewire\Photostock;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class);
Route::get('/about', About::class);
Route::get('/photostock', Photostock::class);
