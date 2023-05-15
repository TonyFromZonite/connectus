<?php

use App\Http\Livewire\VideoPosts;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Home;
use App\Http\Livewire\Peoples;
use App\Http\Livewire\Profile;
use App\Http\Livewire\SinglePost;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::middleware(["auth", "verified", 'VerifiedUser'])->group(function () {
    Route::get('/', Home::class);
    Route::get('/post/{useruuid}/{postuuid}', SinglePost::class)->name('single-post');
    Route::get('/videos', VideoPosts::class)->name("videos");
    Route::get('/profile', Profile::class)->name("profile");
    Route::get('/explore', Peoples::class)->name("explore");
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
