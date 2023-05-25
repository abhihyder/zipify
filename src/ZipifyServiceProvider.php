<?php

namespace Hyder\Zipify;

use Hyder\Zipify\Services\ZipFacadeService;
use Illuminate\Support\ServiceProvider;

class ZipifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('zip-facade-service', function ($app) {
            return $app->make(ZipFacadeService::class);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
