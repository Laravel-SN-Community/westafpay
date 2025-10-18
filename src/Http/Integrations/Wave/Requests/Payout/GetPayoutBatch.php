<?php

namespace Laravelsn\Westafpay\Http\Integrations\Wave\Requests\Payout;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetPayoutBatch extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v1/payout-batch/'.$this->id;
    }

    public function __construct(
        protected readonly string $id,
    ) {}
}
