<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function Post(){

        $post = DB::table('posts')->get();
        return view('admin.posts', compact('post'));

    }

    public function addingPost(Request $request){

        $post = new Posts();
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->project = $request->input('project');
        $post->status = $request->input('status');
        $post->image = $request->file('image')->store('post-content');
        $post->slug = Str::slug($request->title, '-');
        $post->save();

        return redirect()->route('posts');
    }
}
