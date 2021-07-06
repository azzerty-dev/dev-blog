<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index(){

        $posts = Post::orderBy("created_at", "desc")->limit(6)->get();
        return view('index.index', compact('posts'));

    }
}
