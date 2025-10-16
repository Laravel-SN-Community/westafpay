<?php

namespace Laravelsn\Westafpay\Providers\Wave;

use Laravelsn\Westafpay\DataTransfertObjects\Wave\BalanceResponseData;

class WaveProvider 
{
    protected WaveClient $client;

    public function __construct()
    {
        $this->client = new WaveClient();
    }

    public function balance(bool $include_subaccounts = false)
    {
        return $this->client->balance($include_subaccounts);
    }

    // public function transaction()
    // {
    //     return $this->client->transactions()->object();
    // }
}