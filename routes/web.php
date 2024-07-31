<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home2');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/chat', function () {
        return view('chat');
    })->name('chat');

});
