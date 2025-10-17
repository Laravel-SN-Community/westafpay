<?php

namespace Laravelsn\Westafpay;

use Illuminate\Support\ServiceProvider;

class WestafpayServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('westafpay', Westafpay::class);
    }
}
