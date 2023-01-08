<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;




Route::get('/', function () {
    return to_route('posts');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('posts',[PostController::class,'index'])->name('posts');

Route::controller(PostController::class)->group(function(){
    Route::get('showposts','show')->name('showposts');
    Route::get('addpost','add')->name('addpost');
    Route::post('savepost','save')->name('savepost');
    Route::get('deletepost{id}','delete')->name('deletepost');
})->middleware(['auth','auth.session']);





Route::redirect('login','/laravel-payment/public/');
Route::redirect('register','/laravel-payment/public/');
Route::redirect('logout','/laravel-payment/public/');

