<?php

namespace Laravelsn\Westafpay\Providers\Wave;

class WaveProvider
{
    protected WaveClient $client;

    public function __construct()
    {
        $this->client = new WaveClient;
    }

    public function getBalance(?bool $include_subaccounts = null)
    {
        return $this->client->balance($include_subaccounts);
    }

    public function getTransactions(?string $date = null, ?bool $include_subaccounts = null)
    {
        return $this->client->transactions($date, $include_subaccounts);
    }

    public function refund(string $transaction_id)
    {
        return $this->client->refund($transaction_id);
    }
}
