<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;


        //User can edit if the auth user is the user with profile to edit
        public function edit(User $currentUser, User $user) {
            return $currentUser->is($user);
        }
}
