<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $posts    = Post::all();
    $categorys = Category::all();
    return view('dashboard', compact('posts', 'categorys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('Post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
            $validate=$request->validated();

        $post = Post::create(array_merge($validate, ['user_id' => auth()->user()->id]));


        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post=Post::findOrFail($id);
        return view('Post.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('Post.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $validate=$request->validate([
            'title'=>'required|string|max:255',
            'photo_URL'=>'nullable|string|max:255',
            'description'=>'nullable|string',
            ]);

            $post=Post::findOrFail($id);
            $post->update($validate);
            return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post=Post::findOrFail($id);
        $post->delete();
        return redirect()->route('post.index');
    }
}
