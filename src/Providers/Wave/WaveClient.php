<?php

namespace Laravelsn\Westafpay\Providers\Wave;

use Laravelsn\Westafpay\DataTransfertObjects\Wave\BalanceResponseData;
use Laravelsn\Westafpay\Http\Integrations\Wave\Requests\Reconciliation\Balance as BalanceRequest;
use Laravelsn\Westafpay\Http\Integrations\Wave\WaveConnector;

class WaveClient
{
    protected WaveConnector $connector;

    public function __construct()
    {
        $this->connector = new WaveConnector;
    }

    public function balance(bool $include_subaccounts = false): BalanceResponseData
    {
        $balanceRequest = new BalanceRequest;

        if ($include_subaccounts) {
            $balanceRequest->query()->add('include_subaccounts', 'true');
        }

        return $this->connector->send($balanceRequest)->dtoOrFail();
    }
}
