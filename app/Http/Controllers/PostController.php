<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Post;
use Pest\Mutate\Mutators\Number\DecrementInteger;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $posts = Post::orderBy('id', 'DESC')->get();
    $categorys = Category::all();
    return view('dashboard', compact('posts', 'categorys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
{
    $data = $request->validated();

    if ($request->hasFile('photo_URL')) {
        $filename = time() . '.' . $request->file('photo_URL')->getClientOriginalExtension();
        $request->file('photo_URL')->move(public_path('image'), $filename);
        $data['photo_URL'] = $filename;
    }

    Post::create(array_merge($data, ['user_id' => auth()->user()->id]));
    auth()->user()->increment('solde',8);

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
    $post = Post::findOrFail($id);
    $this->authorize('update', $post);
    return view('Post.edit', compact('post'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request,$id)
    {
        $validate=$request->validated();

            $post=Post::findOrFail($id);
            $this->authorize('update',$post);
            $post->update($validate);
            return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post=Post::findOrFail($id);
        $this->authorize('delete',$post);
        $post->delete();
        return redirect()->route('post.index');
    }
    public function report($id){
        $post=Post::findOrFail($id);
        $post->update([
            'report_count'=>$post->report_count + 1,
        ]);
        return redirect()->route('post.index');
    }
}
