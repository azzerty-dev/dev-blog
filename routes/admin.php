<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RegisterController;

Route::get('login', [LoginController::class , 'loginCheck'])->name('loginCheck');
Route::post('login', [LoginController::class , 'login'])->name('login');

Route::get('logout', [LoginController::class , 'logout'])->name('logout');

Route::get('register', [RegisterController::class, 'registerCheck'])->name('registerCheck');
Route::post('register', [RegisterController::class , 'register'])->name('register');

Route::middleware('auth')->group(function (){
    Route::view('dashboard', 'admin.dashboard')->name('dashboard');

    Route::resource('posts', PostController::class);
    Route::resource('projects', ProjectController::class);
});
