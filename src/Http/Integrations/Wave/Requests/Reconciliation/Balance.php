<?php

namespace Laravelsn\Westafpay\Http\Integrations\Wave\Requests\Reconciliation;

use Laravelsn\Westafpay\DataTransfertObjects\Wave\BalanceResponseData;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

class Balance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v1/balance';
    }

    public function createDtoFromResponse(Response $response): mixed
    {
        $data = $response->json();

        return new BalanceResponseData(
            balance: $data['amount'],
            currency: $data['currency'],
        );
    }
}
