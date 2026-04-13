<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;

class ProfileController extends Controller
{
 public function update(ProfileRequest $request)
{
    $user = auth()->user();
    $data = $request->validated();

    if ($request->hasFile('profile_photo')) {
        $filename = time() . '.' . $request->file('profile_photo')->getClientOriginalExtension();
        $request->file('profile_photo')->move(public_path('image'), $filename);
        $data['profile_photo'] = $filename;
    }

    $user->update($data);

    return redirect()->back()->with('success', 'Profil mis à jour!');
}

public function UserProfile($id){
        $user=User::findOrFail($id);
        return view('UserProfile',compact('user'));
}
    }

