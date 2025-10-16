<?php

namespace Laravelsn\Westafpay\Providers\Wave;

use Laravelsn\Westafpay\Http\Integrations\Wave\Requests\Reconciliation\Balance as BalanceRequest;
use Laravelsn\Westafpay\Http\Integrations\Wave\Requests\Reconciliation\Refund as RefundRequest;
use Laravelsn\Westafpay\Http\Integrations\Wave\Requests\Reconciliation\Transaction as TransactionRequest;
use Laravelsn\Westafpay\Http\Integrations\Wave\WaveConnector;

class WaveClient
{
    protected WaveConnector $connector;

    public function __construct()
    {
        $this->connector = new WaveConnector;
    }

    public function balance(?bool $include_subaccounts = null)
    {
        $balanceRequest = new BalanceRequest;

        if ($include_subaccounts === true) {
            $balanceRequest->query()->add('include_subaccounts', 'true');
        }

        $response = $this->connector->send($balanceRequest);

        if ($response->successful()) {
            return $response->json();
        }

        return $response->throw();
    }

    public function transactions(?string $date = null, ?bool $include_subaccounts = null)
    {
        $transactionRequest = new TransactionRequest;

        if ($date) {
            $transactionRequest->query()->add('date', $date);
        }

        if ($include_subaccounts === true) {
            $transactionRequest->query()->add('include_subaccounts', 'true');
        }

        $response = $this->connector->send($transactionRequest);

        if ($response->successful()) {
            return $response->json();
        }

        return $response->throw();
    }

    public function refund(string $transaction_id)
    {
        $refundRequest = new RefundRequest($transaction_id);

        $response = $this->connector->send($refundRequest);

        if ($response->successful()) {
            return $response->json();
        }

        return $response->throw();
    }
}
