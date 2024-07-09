<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('should be able to delete a reading', function () {
    $user = User::factory()->create();
    auth()->login($user);

    $reading = $user->readings()->create([
        'title' => 'The Hobbit',
        'author' => 'J.R.R. Tolkien',
        'format' => 'Paperback',
        'gender_author' => 'male',
    ]);

    $component = Livewire::test('create-reading')
        ->call('deleteModal', $reading->id);

    $component->call('deleteReading');

    $this->assertDatabaseMissing('readings', [
        'id' => $reading->id,
    ]);
});
