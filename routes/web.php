<?php

use App\Livewire\About;
use App\Livewire\CreatePhoto;
use App\Livewire\Home;
use App\Livewire\Login;
use App\Livewire\PhotosList;
use App\Livewire\Photostock;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/about', About::class)->name('about');
Route::get('/photostock', Photostock::class)->name('photostock');
Route::get('/login', Login::class)->name('login');
Route::get('/logout', function () {
    Auth::logout();
    session()->invalidate();
    session()->regenerateToken();
    return redirect()->route('login');
});
Route::get('/admin/photo/create', CreatePhoto::class)->name('admin.photo.create')->middleware('auth');
Route::get('/admin/photo/list', PhotosList::class)->name('admin.photo.list')->middleware('auth');
