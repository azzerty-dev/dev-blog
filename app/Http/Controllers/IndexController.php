<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index(){

        $posts = DB::table('posts')->limit(6)->get();
        return view('index', compact('posts'));

    }
}
