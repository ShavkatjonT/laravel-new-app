<?php

namespace App\Providers;

use App\Modules\Additions\Interfaces\RoomRepositoryInterface;
use App\Modules\Additions\Repositories\RoomRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(RoomRepositoryInterface::class, RoomRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
