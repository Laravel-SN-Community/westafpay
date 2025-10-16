<?php

namespace Laravelsn\Westafpay\Http\Integrations\Wave;

use Saloon\Http\Connector;

class WaveConnector extends Connector
{
    
    public function resolveBaseUrl(): string
    {
        return config('westafpay.wave.base_url');
    }

    protected function defaultHeaders(): array
    {
        return [
            'Authorization' => 'Bearer ' . config('westafpay.wave.api_key'),
        ];
    }
}