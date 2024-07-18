<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Recommendations extends Model
{
    use HasFactory;

    protected $fillable = [
        'reading_id',
        'user_id',
        'content',
    ];

    public function reading(): BelongsTo
    {
        return $this->belongsTo(Reading::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected function casts(): array
    {
        return [
            'content' => 'array',
        ];
    }
}
