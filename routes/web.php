<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;

Route::get('/', function () {
    return view('index');
})->name('index');


Route::get('contacts', function (){
    return view('contacts');
})->name('contacts');

Route::post('contacts-send', [ContactsController::class , 'submit' ])->name('contacts-send');

Route::get('blog', function (){
    return view('blog');
})->name('blog');

Route::get('projects', function (){
    return view('projects');
})->name('projects');
