<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;

Route::get('/', function () {
    return view('index');
});


Route::get('contacts', function (){
    return view('contacts');
});

Route::post('', [ContactsController::class , 'submit' ]);

Route::get('blog', function (){
    return view('blog');
});

Route::get('projects', function (){
    return view('projects');
});
