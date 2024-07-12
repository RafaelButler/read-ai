<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'reading_id',
        'user_id',
        'name',
        'color',
    ];

    public function reading(): BelongsTo
    {
        return $this->belongsTo(Reading::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function readingTags(): HasMany
    {
        return $this->hasMany(ReadingTag::class);
    }
}
