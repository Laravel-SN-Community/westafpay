<?php

namespace Laravelsn\Westafpay;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Laravelsn\Westafpay\Commands\WestafpayCommand;

class WestafpayServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('westafpay')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_westafpay_table')
            ->hasCommand(WestafpayCommand::class);
    }
}
