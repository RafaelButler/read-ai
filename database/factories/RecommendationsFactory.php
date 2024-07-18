<?php

namespace Database\Factories;

use App\Models\Reading;
use App\Models\Recommendations;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class RecommendationsFactory extends Factory
{
    protected $model = Recommendations::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'content' => $this->faker->words(),
            'user_id' => User::factory(),
            'reading_id' => Reading::factory(),
        ];
    }
}
