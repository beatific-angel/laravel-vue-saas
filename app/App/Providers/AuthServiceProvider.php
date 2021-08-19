<?php

namespace CreatyDev\App\Providers;

use Laravel\Passport\Passport;
use Illuminate\Support\Facades\Gate;
use CreatyDev\Domain\Users\Models\Role;
use CreatyDev\Domain\Users\Models\User;
use CreatyDev\Domain\Subscriptions\Models\Plan;
use CreatyDev\Domain\Users\Policies\RolePolicy;
use CreatyDev\Domain\Users\Policies\UserPolicy;
use CreatyDev\Domain\Users\Policies\PlanPolicy;
use CreatyDev\Domain\Users\Policies\CouponPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        User::class => UserPolicy::class,
        Role::class => RolePolicy::class,
        Plan::class => PlanPolicy::class,
        Coupon::class => CouponPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Passport::routes();
    }
}
