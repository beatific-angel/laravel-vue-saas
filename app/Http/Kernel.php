<?php

namespace CreatyDev\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \CreatyDev\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
        \CreatyDev\Http\Middleware\TrustProxies::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            \CreatyDev\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            // \Illuminate\Session\Middleware\AuthenticateSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \CreatyDev\Http\Middleware\VerifyCsrfToken::class,
            \CreatyDev\Http\Middleware\Admin\Impersonate::class,
        ],

        'tenant' => [
            \CreatyDev\Http\Middleware\Tenant\TenantMiddleware::class,
            \CreatyDev\Http\Middleware\Tenant\TenantConfigMiddleware::class,
        ],

        'api' => [
            'throttle:60,1',
            'bindings',
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \Illuminate\Auth\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
        'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        'guest' => \CreatyDev\Http\Middleware\RedirectIfAuthenticated::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'confirmation_token.expired' => \CreatyDev\Http\Middleware\ChecksExpiredConfirmationTokens::class,
        'role' => \CreatyDev\Http\Middleware\AbortIfHasNoRole::class,
        'permission' => \CreatyDev\Http\Middleware\AbortIfHasNoPermission::class,
        'auth.register' => \CreatyDev\Http\Middleware\AuthenticateRegister::class,
        'subscription.active' => \CreatyDev\Http\Middleware\Subscription\RedirectIfNotActive::class,
        'subscription.notcancelled' => \CreatyDev\Http\Middleware\Subscription\RedirectIfCancelled::class,
        'subscription.cancelled' => \CreatyDev\Http\Middleware\Subscription\RedirectIfNotCancelled::class,
        'subscription.customer' => \CreatyDev\Http\Middleware\Subscription\RedirectIfNotCustomer::class,
        'subscription.inactive' => \CreatyDev\Http\Middleware\Subscription\RedirectIfNotInactive::class,
        'subscription.team' => \CreatyDev\Http\Middleware\Subscription\RedirectIfNoTeamPlan::class,
        'subscription.owner' => \CreatyDev\Http\Middleware\Subscription\RedirectIfNotSubscriptionOwner::class,
    ];
}
