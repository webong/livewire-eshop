<?php

namespace App\Providers;

use App\Cart;
use Illuminate\Support\ServiceProvider;
use Illuminate\Session\SessionManager;
use Illuminate\Contracts\Events\Dispatcher;

class CartServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('cart', function() {
            $session =  $this->app->make(SessionManager::class);
            $dispatcher =  $this->app->make(Dispatcher::class);
            return new Cart($session, $dispatcher);
         });
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
