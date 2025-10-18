<?php

namespace Laravelsn\Westafpay\Http\Integrations\Wave\Requests\Payout;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ReservePayout extends Request
{
    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/payout/'.$this->id.'/reserve';
    }

    public function __construct(
        protected readonly string $id,
    ) {}

}
