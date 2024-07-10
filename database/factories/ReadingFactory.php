<?php

namespace Database\Factories;

use App\Models\Reading;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ReadingFactory extends Factory
{
    protected $model = Reading::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'title' => $this->faker->word(),
            'author' => $this->faker->word(),
            'gender_author' => $this->faker->word(),
            'pages' => $this->faker->randomNumber(),
            'publisher' => $this->faker->word(),
            'translator' => $this->faker->word(),
            'country' => $this->faker->country(),
            'year' => $this->faker->randomNumber(),
            'month' => $this->faker->word(),
            'format' => $this->faker->word(),
            'gender_literary' => $this->faker->word(),
            'note' => $this->faker->numberBetween(0, 10),
            'user_id' => User::factory(),
        ];
    }
}
