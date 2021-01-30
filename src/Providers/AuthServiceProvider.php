<?php

namespace Voletale\Prometheus\Providers;

use Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Mediabroker\Core\Models\Admin;

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
