<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Feature' => 'App\Policies\FeaturePolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('ADMIN_VIEW', function ($user) {
            return $user->canDo('ADMIN_VIEW');
        });

        Gate::resource('features', 'App\Policies\FeaturePolicy');
        Gate::define('features.list', 'App\Policies\FeaturePolicy@list');
    }
}
