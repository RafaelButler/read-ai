<?php

namespace Database\Factories;

use App\Models\Reading;
use App\Models\ReadingTag;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ReadingTagFactory extends Factory
{
    protected $model = ReadingTag::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'reading_id' => Reading::factory(),
            'tag_id' => Tag::factory(),
        ];
    }
}
