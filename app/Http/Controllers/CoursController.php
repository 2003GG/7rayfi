<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cours;

class CoursController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cours=Cours::all();
        return view('Cours'.compact('cours'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Cours.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate=$request->validate([
            'user_id'=>'required|exists:users,id',
            'Title'=>'required|string|max:255',
            'Article'=>'nullable|string',
            'url'=>'nullable|string|max:255',
        ]);

        $cours=Cours::create($validate);
        return redirect()->route('cours.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $cours=Cours::findOrFail($id);
        return view('Cours.show',compact('cours'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cours=Cours::findOrFail($id);
        return view('Cours.edit',compact('cours'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $validate=$request->validate([
            'user_id'=>'required|exists:users,id',
            'Title'=>'required|string|max:255',
            'Article'=>'nullable|string',
            'url'=>'nullable|string|max:255',
        ]);

        $cours=Cours::findOrFail($id);
        $cours->update($validate);
        return redirect()->route('cours.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cours=Cours::findOrFail($id);
        $cours->delete();
        return redirect()->route('cours.index');
    }
}
