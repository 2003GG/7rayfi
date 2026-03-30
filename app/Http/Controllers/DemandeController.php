<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Requests\DemandeRequest;
use App\Models\Demande;

class DemandeController extends Controller
{
    public function index()
    {
        $my_demands = Demande::where('sender_id', auth()->user->id);
        $demands=Demande::where('reciver_id',auth()->user->id);
        return view('demand', compact('demands','my_demands'));
    }
        public function store($offer_id,$sender_id,$receiver_id)
    {
        Demande::create([
            'sender_id' => $sender_id,
            'offer_id' => $offer_id,
            'receiver_id' => $receiver_id
                        ]);
        return redirect()->route('offers.index');
    }
    public function show($id)
    {
        $demande=Demande::findOrFail($id);
        return view('demand_show',compact('demande'));
    }
    public function update(DemandeRequest $request,$id)
    {
        $validate=$request->validated();
        $demande=Demande::findOrFail($id);
        $demande->update($validate);
        return redirect()->route('demand.index');
    }
    public function destroy($id)
    {
        $demande=Demande::findOrFail($id);
        $demande->delete();
        return redirect()->route('demand.index');
    }

}
