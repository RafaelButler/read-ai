<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('if router to dashboard is ok', function () {
    $user = User::factory()->create();
    $response = $this->actingAs($user)->get('/dashboard');
    $response->assertStatus(200);
});

test('if required fields is in component', function () {
    Livewire::test('create-reading')
        ->set('title', 'War and Peace')
        ->set('author', 'Leo Tolstoy')
        ->set('format', 'AudioBook')
        ->assertSet('title', 'War and Peace')
        ->assertSet('author', 'Leo Tolstoy')
        ->assertSet('format', 'AudioBook');
});

test('when called created method, validate required fields and if its saved', function () {
    $user = User::factory()->create();
    auth()->login($user);

    Livewire::test('create-reading')
        ->set('title', 'War and Peace')
        ->set('author', 'Leo Tolstoy')
        ->set('format', 'AudioBook')
        ->call('createReading')
        ->assertHasNoErrors(['title', 'author', 'format'])
        ->assertSet('title', '')
        ->assertSet('author', '')
        ->assertSet('format', '');

    $this->assertDatabaseHas('readings', [
        'title' => 'War and Peace',
        'author' => 'Leo Tolstoy',
        'format' => 'AudioBook',
    ]);
});

test('if the fields not required when created, is in database', function () {
    $user = User::factory()->create();
    auth()->login($user);

    Livewire::test('create-reading')
        ->set('title', 'War and Peace')
        ->set('author', 'Leo Tolstoy')
        ->set('format', 'AudioBook')
        ->set('gender_literary', 'Fiction')
        ->set('pages', 1000)
        ->set('publisher', 'Penguin')
        ->set('translator', 'Richard Pevear')
        ->set('country', 'Russia')
        ->set('year', 1869)
        ->set('month', 'January')
        ->set('gender_author', 'male')
        ->set('note', 5)
        ->call('createReading');

    $this->assertDatabaseHas('readings', [
        'title' => 'War and Peace',
        'author' => 'Leo Tolstoy',
        'format' => 'AudioBook',
        'gender_literary' => 'Fiction',
        'pages' => 1000,
        'publisher' => 'Penguin',
        'translator' => 'Richard Pevear',
        'country' => 'Russia',
        'year' => 1869,
        'month' => 'January',
        'gender_author' => 'male',
        'note' => 5,
    ]);
    
});
