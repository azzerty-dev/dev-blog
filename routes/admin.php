<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\RegisterController;
use \App\Http\Controllers\LoginController;
use \App\Http\Controllers\PostController;

Route::middleware('auth')->group(function (){
    Route::view('dashboard', 'admin.dashboard')->name('dashboard');

    Route::prefix('posts')->group(function (){

        Route::get('/', [PostController::class, 'Post'])->name('posts');

        Route::get('create', function (){
            return view('admin.post-create');
        })->name('post-create');
        Route::post('create-post', [PostController::class, 'addingPost'])->name('create-post');

    });

});

Route::get('admin', function (){

    if (Auth::check()){
        return redirect(route('dashboard'));
    }

   return view('admin.admin');
})->name('admin');

Route::post('admin', [LoginController::class , 'index'])->name('admin');

Route::get('logout', function (){
    Auth::logout();
    return redirect('/');
})->name('logout');

//Route::get('register', function (){
//
//    if (Auth::check()){
//        return redirect(route('dashboard'));
//    }
//
//    return view('admin.register');
//})->name('register');
//Route::post('register', [RegisterController::class , 'index'])->name('register');
