<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if(env('REDIRECT_HTTPS'))
        {
            \URL::forceScheme('https');
        }

        Schema::defaultStringLength(191);

        Collection::macro('recursive', function () {
            return $this->map(function ($value) {
                if (is_array($value)) {
                    return (object) $value;
                }
        
                return $value;
            });
        });

    }
}
