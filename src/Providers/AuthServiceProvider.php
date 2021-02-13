<?php

namespace Violetale\Prometheus\Providers;

use Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Violetale\Prometheus\Models\Admin;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [];

    public function boot(): void
    {
        $this->registerPolicies();

        Gate::define('super-admin', function (Admin $user) {
            return $user->isSuperAdmin();
        });
    }
}
