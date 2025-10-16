<?php

namespace Laravelsn\Westafpay\Http\Integrations\Wave\Requests\Reconciliation;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class Refund extends Request
{
    protected Method $method = Method::POST;

    public function __construct(
        protected readonly string $transaction_id,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/v1/transactions/'.$this->transaction_id.'/refund';
    }
}
