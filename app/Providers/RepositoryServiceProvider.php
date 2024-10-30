<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\ServiceRepositoryInterface;
use App\Repository\ServiceRepository;
use App\Interfaces\ServiceTypesRepositoryInterface;
use App\Repository\ServiceTypesRepository;
use App\Interfaces\MechanicsRepositoryInterface;
use App\Repository\MechanicsRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(ServiceRepositoryInterface::class,ServiceRepository::class);
        $this->app->bind(ServiceTypesRepositoryInterface::class,ServiceTypesRepository::class);
        $this->app->bind(MechanicsRepositoryInterface::class,MechanicsRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
