<?php

namespace Laravelsn\Westafpay\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Laravelsn\Westafpay\Westafpay
 */
class Westafpay extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return Westafpay::class;
    }
}
