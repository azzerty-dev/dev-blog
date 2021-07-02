<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;
use \App\Http\Controllers\IndexController;

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::view('blog','index.blog')->name('blog');

Route::view('projects','index.projects')->name('projects');

Route::view('contacts','index.contacts')->name('contacts');

Route::post('contacts-send', [ContactsController::class , 'submit' ])->name('contacts-send');
