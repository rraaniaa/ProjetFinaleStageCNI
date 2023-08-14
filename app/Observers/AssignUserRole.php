<?php

namespace App\Observers;

use App\Models\User;
use Spatie\Permission\Models\Role;

class AssignUserRole
{
    public function creating(User $user)
    {
        $role = Role::findByName('user'); // Supposons que le rôle "user" existe

        if ($role) {
            $user->assignRole($role);
        }
    }
}
