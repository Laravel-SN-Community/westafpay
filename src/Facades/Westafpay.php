<?php

namespace Laravelsn\Westafpay\Facades;

use Illuminate\Support\Facades\Facade;

class Westafpay extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'westafpay';
    }
}
