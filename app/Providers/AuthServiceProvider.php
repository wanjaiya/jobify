<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
        Gate::before(function ($user, $ability) {
            if ( $user->hasRole('admin')) {

                return true;
            }
        });

        Gate::define('manage-users', fn ($user) =>
        $user->hasPermissions('manage-users')
        );

        Gate::define('manage-site', fn ($user) =>
        $user->hasPermissions('manage-site-pages')
        );

        Gate::define('view-tasks', fn ($user) =>
        $user->hasPermissions('view-tasks')
        );

        Gate::define('approve-tasks', fn ($user) =>
        $user->hasPermissions('approve-tasks')
        );
    }
}
