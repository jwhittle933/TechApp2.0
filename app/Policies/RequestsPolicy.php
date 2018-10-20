<?php

namespace App\Policies;

use App\User;
use App\Requests;
use Illuminate\Auth\Access\HandlesAuthorization;

class RequestsPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the requests.
     *
     * @param  \App\User  $user
     * @param  \App\Requests  $requests
     * @return mixed
     */
    public function view(User $user, Requests $requests)
    {
        //
    }

    /**
     * Determine whether the user can create requests.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the requests.
     *
     * @param  \App\User  $user
     * @param  \App\Requests  $requests
     * @return mixed
     */
    public function update(User $user, Requests $requests)
    {
        //
    }

    /**
     * Determine whether the user can delete the requests.
     *
     * @param  \App\User  $user
     * @param  \App\Requests  $requests
     * @return mixed
     */
    public function delete(User $user, Requests $requests)
    {
        //
    }

    /**
     * Determine whether the user can restore the requests.
     *
     * @param  \App\User  $user
     * @param  \App\Requests  $requests
     * @return mixed
     */
    public function restore(User $user, Requests $requests)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the requests.
     *
     * @param  \App\User  $user
     * @param  \App\Requests  $requests
     * @return mixed
     */
    public function forceDelete(User $user, Requests $requests)
    {
        //
    }
}
