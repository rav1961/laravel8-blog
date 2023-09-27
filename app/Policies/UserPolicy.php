<?php

namespace App\Policies;

use App\Enums\Role;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function accessPanel(User $user)
    {
        return in_array($user->role, [Role::ADMIN, Role::EDITOR]);
    }
}
