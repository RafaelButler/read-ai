<?php

use App\Models\Reading;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('if all user reading is been passed to view', function () {

    $user = User::factory()->create();
    auth()->login($user);

    Reading::factory()->create([
        'user_id' => $user->id
    ]);

    Livewire::test('create-reading')
        ->assertViewHas('readings', function ($readings) {
            return count($readings) === 1;
        });
});
