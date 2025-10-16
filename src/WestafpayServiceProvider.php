<?php

namespace Laravelsn\Westafpay;

use Illuminate\Support\ServiceProvider;
use Spatie\LaravelPackageTools\Package;
use Laravelsn\Westafpay\Commands\WestafpayCommand;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class WestafpayServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('westafpay', function ($app) {
            return new Westafpay($app);
        });
    }
}
