<?php

namespace CreatyDev\Domain\Users\Policies;

use CreatyDev\Domain\Users\Models\User;
use CreatyDev\Domain\Subscriptions\Models\Plan;
use Illuminate\Auth\Access\HandlesAuthorization;

class PlanPolicy
{
    use HandlesAuthorization;

    public function before(User $user, $ability)
    {
        if ($user->hasRole('admin-root') ||
            $user->can('manage plans') ||
            $user->can('manage roles')) {
            return true;
        }
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \CreatyDev\Domain\Users\Models\User $user
     * @return mixed
     */
    public function view(User $user)
    {
        if ($user->can('create plans')) {
            return true;
        }
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \CreatyDev\Domain\Users\Models\User $user
     * @return mixed
     */
    public function create(User $user)
    {
        if ($user->can('create plans')) {
            return true;
        }
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \CreatyDev\Domain\Users\Models\User $user
     * @return mixed
     */
    public function update(User $user)
    {
        if ($user->can('update plans')) {
            return true;
        }
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \CreatyDev\Domain\Users\Models\User $user
     * @return mixed
     */
    public function delete(User $user)
    {
        if ($user->can('delete plans')) {
            return true;
        }
    }

}
