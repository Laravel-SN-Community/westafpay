<?php

namespace Laravelsn\Westafpay\Http\Integrations\Wave\Requests\Merchant;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\PaginationPlugin\Contracts\Paginatable;

class GetMerchant extends Request implements Paginatable
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v1/aggregated_merchants';
    }
}
