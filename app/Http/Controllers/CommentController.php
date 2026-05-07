<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CommentRequest $request,$id)
    {
       $validate= $request->validated();

        Comment::create(array_merge($validate,[ 'user_id' => auth()->id(),'post_id'=>$id]));
        // add points to the post owner
        $post=Post::findOrFail($id);
        $post->user()->increment('solde',2);
        auth()->user()->increment('solde',1);


        return redirect()->back()->with('success', 'Comment added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $comments=Comment::where('post_id',$id)->get();
        $post=Post::findOrFail($id);
        return view('comments',compact('comments','post'));


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $comment=Comment::findOrFail($id);
        $this->authorize('delete',$comment);
        $comment->delete();
        return redirect()->back()->with('success', 'Comment deleted successfully!');

    }
}
