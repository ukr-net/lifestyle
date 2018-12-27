<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SitePolicy
{
    use HandlesAuthorization;

    protected $permissions = [];

    /**
     * Determine whether the user can view the feature.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function view(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can create features.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        if (array_key_exists('create', $this->permissions)) return $user->canDo($this->permissions['create']);

        return false;
    }

    /**
     * Determine whether the user can update the feature.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function update(User $user)
    {
        if (array_key_exists('update', $this->permissions)) return $user->canDo($this->permissions['update']);

        return false;
    }

    /**
     * Determine whether the user can delete the feature.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function delete(User $user)
    {
        if (array_key_exists('delete', $this->permissions)) return $user->canDo($this->permissions['delete']);

        return false;
    }

    /**
     * Determine whether the user can restore the feature.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function restore(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the feature.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function forceDelete(User $user)
    {
        return false;
    }

    public function list(User $user)
    {
        if (array_key_exists('list', $this->permissions)) return $user->canDo($this->permissions['list']);

        return false;
    }
}
