<?php

namespace App\Policies;

use App\Models\ChatUser;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ChatUserPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, ChatUser $chatUser): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, ChatUser $chatUser): bool
    {
    }

    public function delete(User $user, ChatUser $chatUser): bool
    {
    }

    public function restore(User $user, ChatUser $chatUser): bool
    {
    }

    public function forceDelete(User $user, ChatUser $chatUser): bool
    {
    }
}
