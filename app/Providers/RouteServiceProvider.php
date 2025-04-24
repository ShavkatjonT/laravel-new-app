<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadModuleRoutes();
        // $this->mapApiRoutes();
    }

    protected function loadModuleRoutes()
    {
        foreach (glob(base_path('app/Modules/*/routes.php')) as $routeFile) {
            Route::prefix('api')
//                ->middleware('auth:sanctum')
                ->group(function () use ($routeFile) {
                require $routeFile;
            });
        }
    }

    protected function mapApiRoutes()
    {
        Route::prefix('api')
            ->group(base_path('routes/api.php'));
    }
}
