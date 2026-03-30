<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DemandeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
 Route::get('/home',function () { return view('home'); })->name('home');
    Route::get('/network', function () { return view('network'); });
        Route::get('/demand', function () { return view('demand'); });

Route::get('/login',  [AuthController::class, 'showLogin'])->name('login');
Route::get('/signUp', [AuthController::class, 'showSignUp'])->name('signup');

Route::post('/login',   [AuthController::class, 'logIn'])->name('user.login');
Route::post('/signUp',  [AuthController::class, 'signUp'])->name('user.singup');

Route::middleware('auth')->group(function () {

    Route::post('/signOut', [AuthController::class, 'signOut'])->name('user.singout');

    Route::get('/dashboard', [PostController::class, 'index'])->name('post.index');
    Route::post('/dashboard',[PostController::class, 'store'])->name('post.store');
    Route::get('/dashboard/{id}',[PostController::class, 'show'])->name('post.show');
    Route::put('/dashboard/{id}',[PostController::class, 'update'])->name('post.update');
    Route::delete('/dashboard/{id}',[PostController::class, 'destroy'])->name('post.destroy');


    Route::get('/offer',[OfferController::class,    'index'])->name('offer.index');
    Route::get('/cours',[CoursController::class,    'index'])->name('cours.index');

    Route::post('/category',         [CategoryController::class, 'store'])->name('category.store');
    Route::put('/category/{id}',     [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/category/{id}',  [CategoryController::class, 'destroy'])->name('category.destroy');

    Route::get('/demand', [DemandeController::class, 'index'])->name('demand.index');
    Route::post('/demand', [DemandeController::class, 'store'])->name('demand.store');
    Route::get('/demand/{id}', [DemandeController::class, 'show'])->name('demand.show');
    Route::put('/demand/{id}', [DemandeController::class, 'update'])->name('demand.update');
    Route::delete('/demand/{id}', [DemandeController::class, 'destroy'])->name('demand.destroy');
});
