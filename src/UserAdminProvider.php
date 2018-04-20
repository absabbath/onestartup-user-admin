<?php

namespace Onestartup\UserAdmin;

use Illuminate\Support\ServiceProvider;

class UserAdminProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
        $this->loadMigrationsFrom(__DIR__.'/migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Onestartup\UserAdmin\AdminUserController');
        $this->loadViewsFrom(__DIR__.'/views', 'user-admin');
    }
}
