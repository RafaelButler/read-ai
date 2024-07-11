<?php

namespace Database\Factories;

use App\Models\Note;
use App\Models\Reading;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class NoteFactory extends Factory
{
    protected $model = Note::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'date' => Carbon::now(),
            'user_id' => User::factory(),
            'reading_id' => Reading::factory(),
        ];
    }
}
