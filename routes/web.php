<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ChatController;
use App\Models\Comment;
use App\Http\Controllers\Auth\GoogleController;
use Illuminate\Support\Facades\Route;
use Pest\Plugins\Profile;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/blocke',function(){
    return view('blocke');
});







Route::get('/auth/google',          [GoogleController::class, 'redirect'])->name('auth.google');
Route::get('/auth/google/callback', [GoogleController::class, 'callback']);




Route::get('/login',  [AuthController::class, 'showLogin'])->name('login');
Route::get('/signUp', [AuthController::class, 'showSignUp'])->name('signup');

Route::post('/login',   [AuthController::class, 'logIn'])->name('user.login');
Route::post('/signUp',  [AuthController::class, 'signUp'])->name('user.singup');
Route::post('/signOut', [AuthController::class, 'signOut'])->name('user.singout');


Route::middleware(['auth','deblocke'])->group(function () {
    Route::get('/profile', function () {return view('profile'); })->name('user.profile');
    Route::put('/profile',[ProfileController::class,'update'])->name('profile.update');
    Route::get('/userProduct/{id}',[ProfileController::class,'UserProfile'])->name('show.profile');

    Route::get('/chat', [ChatController::class, 'index'])->name('chat.index');
    Route::get('/messages/{userId}', [ChatController::class, 'getMessages']);
    Route::post('/send-message', [ChatController::class, 'sendMessage']);



    Route::get('/dashboard', [PostController::class, 'index'])->name('post.index');
    Route::post('/dashboard',[PostController::class, 'store'])->name('post.store');
    Route::get('/dashboard/{id}',[PostController::class, 'show'])->name('post.show');
    Route::put('/dashboard/{id}',[PostController::class, 'update'])->name('post.update');
    Route::delete('/dashboard/{id}',[PostController::class, 'destroy'])->name('post.destroy');
    Route::put('/dashboar/{id}',[PostController::class,'report'])->name('post.report');

    Route::post('/dashboard/{id}',[CommentController::class,'store'])->name('comments.store');
    Route::get('/dashboard/{id}/comment',[CommentController::class,'show'])->name('comments.show');
    Route::delete('/dashboard/comment/{id}',[CommentController::class,'destroy'])->name('comment.destroy');


    Route::get('/offer',[OfferController::class,'index'])->name('offer.index');
    Route::post('/offer',[OfferController::class,'store'])->name('offers.store');
    Route::put('/offer/{id}', [OfferController::class, 'update'])->name('offer.update');
    Route::delete('/offer/{id}',[OfferController::class,'destroy'])->name('offer.destroy');


    Route::get('/cours',[CoursController::class,'index'])->name('cours.index');
    Route::post('/cours',[CoursController::class,'store'])->name('cours.store');
    Route::get('/cours/{id}',[CoursController::class,'show'])->name('cours.show');



    Route::get('/demand', [DemandeController::class, 'index'])->name('demande.index');
    Route::post('/offer/{offer_id}/{sender_id}/{receiver_id}', [DemandeController::class, 'store'])->name('demande.store');
    Route::get('/demand/{id}', [DemandeController::class, 'show'])->name('demande.show');
    Route::delete('/demand/{id}', [DemandeController::class, 'destroy'])->name('demande.destroy');


    Route::get('/products',[ProductController::class,'index'])->name('products.index');
    Route::post('/products',[ProductController::class,'store'])->name('products.store');
    Route::put('/products/{id}/achete',[ProductController::class,'AcheteProduct'])->name('achete.product');
    Route::put('/products/{id}/vendu',[ProductController::class,'VenduProduct'])->name('vendu.product');
    Route::get('/MyProduct',function(){
    return view('MyProduct');
})->name('myProduct');


});

    Route::middleware(['auth','admin'])->group(function(){
    Route::get('/network',[AdminController::class,'index'])->name('admin.network');
    Route::put('/network/{id}/users',[AdminController::class,'Blocke'])->name('blocke.user');
    Route::put('/network/{id}',[AdminController::class,'Deblocke'])->name('deblocke.user');
    Route::get('/report',[AdminController::class,'RemoveReport'])->name('remove.report.post');

    Route::get('/category',  [CategoryController::class, 'index'])->name('category.index');
    Route::post('/category', [CategoryController::class, 'store'])->name('category.store');
    Route::put('/category/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/category/{id}',[CategoryController::class, 'destroy'])->name('category.destroy');

});
