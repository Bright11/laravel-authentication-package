<?php

use Brightweb\Authentication\Http\Controllers\brightauthController;
use Illuminate\Support\Facades\Route;


Route::middleware(['guest','web'])->group(function(){
    Route::match(['get','post'], '/register',[brightauthController::class,'register'])->name('register');

    Route::match(['get', 'post'], '/login', [brightauthController::class, 'login'])->name('login');

    Route::get('/logout', [brightauthController::class, 'logout'])->name('logout');
});

Route::middleware(['web','admin'])->group(function () {
    Route::get('/dashboard', [brightauthController::class, 'dashboard'])->name('dashboard');

});