<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\Project;
use Illuminate\Http\Request;
use Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy("created_at", "desc")->paginate(9);
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projects = Project::get();
        return view('admin.posts.form', compact('projects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $post = new Post();
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->image = $request->file('image')->store('post-content');
        $post->project = $request->input('project');
        $post->status = $request->input('status');
        $post->slug = Str::slug($request->title, '-');
        $post->save();

        return redirect()->route('posts.index')->withSuccess('Пост создан');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $projects = Project::get();
        return view('admin.posts.form', compact('post', 'projects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->slug = Str::slug($request->title, '-');
        
        if($request->project){
            $post->project = $request->input('project');
        }
        
        if($request->status){
            $post->status = $request->input('status');
        }

        if($request->image){
            $post->image = $request->file('image')->store('post-content');            
        }
        
        $post->update();

        return redirect()->route('posts.index')->withSuccess('Пост обновлён');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->withDanger('Пост удалён');
    }
}
