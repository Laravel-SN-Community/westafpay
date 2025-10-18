<?php

namespace Laravelsn\Westafpay\Http\Integrations\Wave\Requests\Payout;

use Illuminate\Support\Str;
use Saloon\Enums\Method;
use Saloon\Http\Request;

class PayoutBatch extends Request
{
    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/payout-batch';
    }

    public function __construct(
        protected readonly array $payload,
    ) {}

    protected function defaultHeaders(): array
    {
        return [
            'Content-Type' => 'application/json',
            'idempotency_key' => Str::uuid(),
        ];
    }

    public function defaultBody(): array
    {
        return $this->payload;
    }
}
