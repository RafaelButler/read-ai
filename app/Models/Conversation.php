<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Conversation extends Model
{
    protected $fillable = [
        'historic',
        'chat_user_id',
        'user_id',
    ];

    public function chatUser(): BelongsTo
    {
        return $this->belongsTo(ChatUser::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected function casts(): array
    {
        return [
            'historic' => 'array',
        ];
    }
}
