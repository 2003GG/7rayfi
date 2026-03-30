<?php

namespace App\Http\Controllers;

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
        $offers=Offer::all();
        return view('offer',compact('offers'));
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
        $validate=$request->validated();

        $offer = Offer::create($validate);
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
        return view('Offer.edit',compact('offer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OfferRequest $request,$id)
    {
        $validate=$request->validated();

        $offer=Offer::findOrFail($id);
        $offer->update($validate);
        return redirect()->route('offer.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $offer=Offer::findOrFail($id);
        $offer->delete();
        return redirect()->route('offer.index');
    }
}
