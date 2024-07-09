<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Reading extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'user_id',
        'author',
        'gender_author',
        'pages',
        'publisher',
        'translator',
        'country',
        'year',
        'month',
        'format',
        'gender_literary',
        'note',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function tags(): HasMany
    {
        return $this->hasMany(Tag::class);
    }
}
