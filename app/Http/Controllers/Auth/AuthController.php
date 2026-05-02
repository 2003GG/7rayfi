<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\SingupRequest;
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


    public function signUp(SingupRequest $request)
    {
        $validated = $request->validated();

        $user = User::create([
            'name'     => $validated['name'],
            'email'    => $validated['email'],
            'condition'=>'deblocke',
            'role_id'  =>2,
            'password' => Hash::make($validated['password']),
        ]);

        Auth::login($user);

        $request->session()->regenerate();

        return redirect()->intended('/dashboard')
            ->with('success', 'Account created successfully');
    }

    public function logIn(LoginRequest $request)
{
    $validated = $request->validated();

    // Attempt login
    if (!Auth::attempt($validated, $request->boolean('remember'))) {
        return back()
            ->withErrors(['email' => 'Invalid email or password'])
            ->withInput($request->only('email'));
    }

    $user = Auth::user();


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
