<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\ServiceRepositoryInterface;
use App\Repository\ServiceReposiotry;
use App\Interfaces\ServiceTypesRepositoryInterface;
use App\Repository\ServiceTypesReposiotry;
use App\Interfaces\MechanicsRepositoryInterface;
use App\Repository\MechanicsReposiotry;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(ServiceRepositoryInterface::class,ServiceReposiotry::class);
        $this->app->bind(ServiceTypesRepositoryInterface::class,ServiceTypesReposiotry::class);
        $this->app->bind(MechanicsRepositoryInterface::class,MechanicsReposiotry::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
