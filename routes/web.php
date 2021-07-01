<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;
use \App\Http\Controllers\IndexController;

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::view('index.blog','blog')->name('blog');

Route::view('index.projects','projects')->name('projects');

Route::view('index.contacts','contacts')->name('contacts');

Route::post('contacts-send', [ContactsController::class , 'submit' ])->name('contacts-send');
