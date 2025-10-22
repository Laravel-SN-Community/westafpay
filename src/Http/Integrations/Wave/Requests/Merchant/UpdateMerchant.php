<?php

namespace Laravelsn\Westafpay\Http\Integrations\Wave\Requests\Merchant;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class UpdateMerchant extends Request
{
    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return '/v1/aggregated_merchants/'.$this->id;
    }

    public function __construct(
        protected readonly string $id,
        protected readonly array $payload,
    ) {}

    protected function defaultHeaders(): array
    {
        return [
            'Content-Type' => 'application/json',
        ];
    }

    public function defaultBody(): array
    {
        return $this->payload;
    }
}
