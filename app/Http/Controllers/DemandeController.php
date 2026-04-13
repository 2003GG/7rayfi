<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DemandeRequest;
use App\Models\Demande;
use App\Models\User;

class DemandeController extends Controller
{
    public function index()
    {
        $my_demands = Demande::with(['receiver', 'offer'])->where('sender_id', auth()->user()->id)->get();
        $demands = Demande::with(['sender', 'offer'])->where('receiver_id', auth()->user()->id)->get();
        return view('demand', compact('demands', 'my_demands'));
    }
    public function store($offer_id, $sender_id, $receiver_id)
    {
        Demande::create([
            'sender_id' => $sender_id,
            'offer_id' => $offer_id,
            'receiver_id' => $receiver_id
        ]);

        auth()->user()->increment('solde',1.5);

        return redirect()->route('offer.index');
    }
    public function show($id)
    {
        $demande = Demande::findOrFail($id);
        return view('demand_show', compact('demande'));
    }
    public function update(DemandeRequest $request, $id)
    {
        $validate = $request->validated();
        $demande = Demande::findOrFail($id);
        $demande->update($validate);
        return redirect()->route('demande.index');
    }
    public function destroy($id)
    {
        $demande = Demande::findOrFail($id);
        $demande->delete();
        return redirect()->route('demande.index');
    }

}
