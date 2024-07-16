<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/chat', function () {
        return view('greetings-chat');
    })->name('chat');

    Route::get('/chat/{chat}', function ($chat) {
        return view('chat', [
            'id_conversation' => $chat
        ]);
    })->name('chat.show');

});
