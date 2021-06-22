<?php

namespace App\Providers;

use App\Services\UserService;
use App\Services\MailService;

use App\Services\Implementations\MailServiceImpl;
use App\Services\Implementations\UserServiceImpl;

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
        $this->app->bind(UserService::class, UserServiceImpl::class);
        $this->app->bind(MailService::class, MailServiceImpl::class);
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
