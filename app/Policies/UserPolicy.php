<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->email === 'billy@email.com';
    }

    public function edit(User $user, User $model)
    {
        // a random user can edit another random user
        // this is just random for demo purposes, there are no teams
        return (bool) mt_rand(0, 1);
    }
}