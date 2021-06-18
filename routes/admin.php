<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\RegisterController;
use \App\Http\Controllers\LoginController;

Route::view('dashboard', 'admin.dashboard')->middleware('auth')->name('dashboard');

Route::get('register', function (){

    if (Auth::check()){
        return redirect(route('dashboard'));
    }

    return view('admin.register');
})->name('register');
Route::post('register', [RegisterController::class , 'index'])->name('register');

Route::get('login', function (){

    if (Auth::check()){
        return redirect(route('dashboard'));
    }

   return view('admin.login');
})->name('login');
Route::post('login', [LoginController::class , 'index'])->name('login');

Route::get('logout', function (){
    Auth::logout();
    return redirect('/');
})->name('logout');
