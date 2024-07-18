<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ReadingTag extends Model
{
    use HasFactory;

    protected $fillable = [
        'reading_id',
        'tag_id',
    ];

    public function reading(): BelongsTo
    {
        return $this->belongsTo(Reading::class);
    }

    public function tag(): BelongsTo
    {
        return $this->belongsTo(Tag::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
    public function notes(): HasMany
    {
        return $this->hasMany(Note::class);
    }
}
