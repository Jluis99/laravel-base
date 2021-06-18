<?php

namespace App\Providers;

use App\Repositories\BaseRepository;
use App\Repositories\UserRepository;

use App\Repositories\Implementations\BaseRepositoryImpl;
use App\Repositories\Implementations\UserRepositoryImpl;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserRepository::class, UserRepositoryImpl::class);
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
