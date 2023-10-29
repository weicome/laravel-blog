<?php

use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

//Route::get('/', function () {
//    if(\Illuminate\Support\Facades\Auth::user()){
//        return redirect(route('dashboard'));
//    }else{
//        return redirect(route('login'));
//    }
//});
Route::middleware('guest')->group(function () {
    Volt::route('register', 'pages.auth.register')
        ->name('register');

    Volt::route('login', 'pages.auth.login')
        ->name('login');

    Volt::route('forgot-password', 'pages.auth.forgot-password')
        ->name('password.request');

    Volt::route('reset-password/{token}', 'pages.auth.reset-password')
        ->name('password.reset');
});

Route::middleware('auth')->group(function () {
    Volt::route('verify-email', 'pages.auth.verify-email')
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Volt::route('confirm-password', 'pages.auth.confirm-password')
        ->name('password.confirm');

//    Route::get('/users', [\App\Http\Controllers\UserController::class,'index'])->name('users');
    Route::get('/users', \App\Livewire\User\UserIndex::class)->name('users');
    Route::get('/media', [\App\Http\Controllers\MediaController::class,'index'])->name('media');
    Route::get('/category', [\App\Http\Controllers\CategoryController::class,'index'])->name('category');
    Route::get('/article', [\App\Http\Controllers\ArticleController::class,'index'])->name('article');
    Route::get('/contact', [\App\Http\Controllers\ContactController::class,'index'])->name('contact');

    Route::get('/chirps', [\App\Http\Controllers\ChirpController::class,'index'])->name('chirps');

});
