<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'reading_id',
        'name',
        'color',
    ];

    public function reading(): BelongsTo
    {
        return $this->belongsTo(Reading::class);
    }
}
