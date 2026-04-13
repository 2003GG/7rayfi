<?php

namespace App\Http\Controllers;

use App\Http\Requests\CoursRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Cours;
use Pest\Mutate\Mutators\Number\DecrementFloat;

class CoursController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses=Cours::orderBy('id','DESC')->get();
        $categorys=Category::all();
        return view('cours',compact('courses','categorys'));
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
    public function store(CoursRequest $request)
    {
        $data=$request->validated();
         if ($request->hasFile('url')) {
        $filename = time() . '.' . $request->file('url')->getClientOriginalExtension();
        $request->file('photo_URL')->move(public_path('image'), $filename);
        $data['url'] = $filename;
    }
        Cours::create($data);
        auth()->user()->increment('solde', 10);
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
    public function update(CoursRequest $request,$id)
    {
        $validate=$request->validated();

        $cours=Cours::findOrFail($id);
        $this->authorize('update',$cours);
        $cours->update($validate);
        return redirect()->route('cours.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cours=Cours::findOrFail($id);
        $this->authorize('delete',$cours);
        $cours->delete();
        return redirect()->route('cours.index');
    }
}
