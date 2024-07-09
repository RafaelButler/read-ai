<?php

namespace Database\Factories;

use App\Models\Reading;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class TagFactory extends Factory
{
    protected $model = Tag::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => $this->faker->word(),
            'color' => $this->faker->randomElement(['red', 'blue', 'green', 'yellow', 'purple', 'pink', 'orange', 'indigo', 'teal', 'cyan']),
            'reading_id' => Reading::factory(),
        ];
    }
}
