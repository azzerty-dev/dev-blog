<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;

Route::view('/', 'index')->name('index');

Route::view('blog','blog')->name('blog');

Route::view('projects','projects')->name('projects');

Route::view('contacts','contacts')->name('contacts');

Route::post('contacts-send', [ContactsController::class , 'submit' ])->name('contacts-send');
