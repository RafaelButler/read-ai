<?php

namespace App\Policies;

use App\Models\Recommendations;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RecommendationsPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, Recommendations $recommendations): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, Recommendations $recommendations): bool
    {
    }

    public function delete(User $user, Recommendations $recommendations): bool
    {
    }

    public function restore(User $user, Recommendations $recommendations): bool
    {
    }

    public function forceDelete(User $user, Recommendations $recommendations): bool
    {
    }
}
