<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use GuzzleHttp\Client;

class GoogleController extends Controller
{
    // Redirect to Google

    public function redirect()
    {
        return Socialite::driver('google')
            ->setHttpClient(new Client(['verify' => false]))
            ->redirect();
    }

    public function callback()
    {
        $googleUser = Socialite::driver('google')
            ->setHttpClient(new Client(['verify' => false]))
            ->stateless()
            ->user();

        $user = User::where('google_id', $googleUser->getId())->first();

        if (!$user) {
            $user = User::where('email', $googleUser->getEmail())->first();

            if ($user) {
                $user->update([
                    'google_id' => $googleUser->getId(),
                    'avatar'    => $googleUser->getAvatar(),
                ]);
            } else {
                $user = User::create([
                    'name'              => $googleUser->getName(),
                    'email'             => $googleUser->getEmail(),
                    'google_id'         => $googleUser->getId(),
                    'password'          => bcrypt(Str::random(24)),
                    'email_verified_at' => now(),
                    'avatar'            => $googleUser->getAvatar(),
                ]);
            }
        }

        Auth::login($user, true);

        return redirect()->intended('/dashboard');
    }
}
