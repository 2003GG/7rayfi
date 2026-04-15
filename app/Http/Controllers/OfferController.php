<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Offer;
use App\Http\Requests\OfferRequest;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
{
    $offers = Offer::all();

    foreach ($offers as $offer) {
        if ($offer->end_date < now()) {
            $offer->update(['status' => 'indisponible']);
        }
    }

    $categorys = Category::all();
    return view('offer', compact('offers','categorys'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Offer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OfferRequest $request)
{
    $data = $request->validated();

    if ($request->hasFile('photo')) {
        $filename = time() . '.' . $request->file('photo')->getClientOriginalExtension();
        $request->file('photo')->move(public_path('image'), $filename);
        $data['photo'] = $filename;
    }

    Offer::create(array_merge($data, [
        'user_id' => auth()->user()->id,
        'status'  => 'disponible', 
    ]));

    auth()->user()->increment('solde', 15);
    return redirect()->route('offer.index');
}

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $offer=Offer::findOrFail($id);
        return view('Offer.show',compact('offer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $offer=Offer::findOrFail($id);
        $this->authorize('update',$offer);
        return view('Offer.edit',compact('offer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OfferRequest $request,$id)
    {
        $validate=$request->validated();

        $offer=Offer::findOrFail($id);
        $this->authorize('update',$offer);
        $offer->update($validate);
        return redirect()->route('offer.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $offer=Offer::findOrFail($id);
        $this->authorize('delete',$offer);
        $offer->delete();
        return redirect()->route('offer.index');
    }
}
