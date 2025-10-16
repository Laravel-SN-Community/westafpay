<?php

namespace Laravelsn\Westafpay;

use Illuminate\Support\Manager;
use Laravelsn\Westafpay\Providers\Wave\WaveProvider;

class Westafpay extends Manager
{
    public function getDefaultDriver(): string
    {
        return 'wave';
    }

    protected function createWaveDriver()
    {
        return new WaveProvider;
    }
}
