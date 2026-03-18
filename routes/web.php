<?php

use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',   [AuthController::class, 'showLogin'])->name('login');
Route::get('/signUp',  [AuthController::class, 'showSignUp'])->name('signup');

Route::post('/login',   [AuthController::class, 'logIn'])->name('user.login');
Route::post('/signUp',  [AuthController::class, 'signUp'])->name('user.singup');
Route::post('/signOut', [AuthController::class, 'signOut'])->name('user.singout');

Route::get('/home',      function () { return view('home'); })->name('home');
Route::get('/network',   function () { return view('network'); })->name('network');
Route::get('/dashboard', [PostController::class, 'index'])->name('post.index');
Route::post('/dashboard', [PostController::class, 'store'])->name('post.store');
Route::get('/offer',[OfferController::class,'index'])->name('offer.index');

