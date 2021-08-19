<?php

namespace CreatyDev\Domain\Users\Policies;

use CreatyDev\Domain\Users\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use CreatyDev\Domain\Coupon\Models\Coupon;
use CreatyDev\Domain\Subscriptions\Models\Plan;

class CouponPolicy
{
    use HandlesAuthorization;

    public function before(User $user, $ability)
    {
        if ($user->hasRole('admin-root') ||
            $user->can('manage coupons') ||
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
    public function view(User $user, Coupon $coupon)
    {
        if ($this->touch($user) || $user->can('manage coupons')) {
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
        if ($this->touch($user) || $user->can('create coupons')) {
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
        if ($this->touch($user) || $user->can('update coupons')) {
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
        if ($this->touch($user) || $user->can('delete coupons')) {
            return true;
        }
    }

}
