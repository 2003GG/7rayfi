<?php

namespace App\Http\Controllers\auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{

    public function showLogin()
    {
        return view('login');
    }

    public function showSignUp()
    {
        return view('signUp');
    }


    public function signUp(Request $request)
    {
        $validated = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name'     => $validated['name'],
            'email'    => $validated['email'],
            'role_id'  =>2,
            'password' => Hash::make($validated['password']),
        ]);

        Auth::login($user);

        $request->session()->regenerate();

        return redirect()->intended('/dashboard')
            ->with('success', 'Account created successfully');
    }

    public function logIn(Request $request)
    {
        $validated = $request->validate([
            'email'    => 'required|email',
            'password' => 'required|string',
        ]);

        if (!Auth::attempt($validated, $request->boolean('remember'))) {
            return back()
                ->withErrors(['email' => 'Invalid email or password'])
                ->withInput($request->only('email'));
        }

        $request->session()->regenerate();

        return redirect()->intended('/dashboard');
    }

    public function signOut(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function me(Request $request)
    {
        return view('profile', ['user' => $request->user()]);
    }
}
