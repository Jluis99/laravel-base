<?php

namespace App\Providers;

use App\Services\Interfaces\UserServiceI;
use App\Services\UserService;
use Illuminate\Support\ServiceProvider;

class ServiceServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->bind(BaseServiceInterface::class, BaseService::class);
        $this->app->bind(UserServiceI::class, UserService::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
