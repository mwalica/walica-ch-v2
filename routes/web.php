<?php

use App\Livewire\About;
use App\Livewire\CreatePhoto;
use App\Livewire\Home;
use App\Livewire\Photostock;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/about', About::class)->name('about');
Route::get('/photostock', Photostock::class)->name('photostock');
Route::get('/admin/photo/create', CreatePhoto::class)->name('admin.photo.create');
