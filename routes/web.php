<?php

use App\Http\Controllers\payment;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;




Route::get('/', function () {
    return to_route('posts');
});

Auth::routes();

Route::get('/home', [PostController::class, 'index'])->name('home');

Route::get('posts',[PostController::class,'index'])->name('posts')->middleware(['user']);


Route::middleware(['user'])->group(function(){

    Route::controller(PostController::class)->group(function(){
        Route::get('showposts','show')->name('showposts');
        Route::get('addpost','add')->name('addpost');
        Route::post('savepost','save')->name('savepost');
        Route::get('deletepost{id}','delete')->name('deletepost');
        Route::get('buy','buy')->name('buy');
    });
});

Route::post('addmoney.stripe',[payment::class,'pay'])->name('addmoney.stripe')->middleware(['user']);





// Route::redirect('login','/laravel-payment/public/');
// Route::redirect('register','/laravel-payment/public/');
// Route::redirect('logout','/laravel-payment/public/');

