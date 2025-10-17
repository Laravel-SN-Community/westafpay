<?php

namespace Laravelsn\Westafpay\Http\Integrations\Wave\Requests\Reconciliation;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\PaginationPlugin\Contracts\Paginatable;

class Transaction extends Request implements Paginatable
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v1/transactions';
    }
}
