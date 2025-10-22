<?php

namespace Laravelsn\Westafpay\Http\Integrations\Wave\Requests\Merchant;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class DeleteMerchant extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return '/v1/aggregated_merchants/'.$this->id;
    }

    public function __construct(
        protected readonly string $id,
    ) {}
}
