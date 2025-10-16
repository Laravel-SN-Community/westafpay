<?php

namespace Laravelsn\Westafpay\Providers\Wave;

use Laravelsn\Westafpay\Http\Integrations\Wave\WaveConnector;
use Laravelsn\Westafpay\Http\Integrations\Wave\Requests\Reconciliation\Balance as BalanceRequest;
use Laravelsn\Westafpay\Http\Integrations\Wave\Requests\Reconciliation\Transaction as TransactionRequest;
use Laravelsn\Westafpay\Http\Integrations\Wave\Requests\Reconciliation\Refund as RefundRequest;
use Laravelsn\Westafpay\DataTransfertObjects\Wave\BalanceResponseData;
use Saloon\Http\Response;

class WaveClient
{
    protected WaveConnector $connector;

    public function __construct() {
        $this->connector = new WaveConnector();
    }

    public function balance(bool $include_subaccounts = false): BalanceResponseData
    {
        $balanceRequest = new BalanceRequest();

        if ($include_subaccounts) {
            $balanceRequest->query()->add('include_subaccounts', 'true');
        }

        return $this->connector->send($balanceRequest)->dtoOrFail();
    }
}