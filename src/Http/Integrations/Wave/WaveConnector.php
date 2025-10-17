<?php

namespace Laravelsn\Westafpay\Http\Integrations\Wave;

use Saloon\Http\Connector;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\PaginationPlugin\Contracts\HasPagination;
use Saloon\PaginationPlugin\Paginator;

class WaveConnector extends Connector implements HasPagination
{
    public function resolveBaseUrl(): string
    {
        return config('westafpay.wave.base_url');
    }

    protected function defaultHeaders(): array
    {
        return [
            'Authorization' => 'Bearer '.config('westafpay.wave.api_key'),
        ];
    }

    public function paginate(Request $request): Paginator
    {
        return new class(connector: $this, request: $request) extends Paginator
        {
            protected $endCursor = null;

            protected function isLastPage(Response $response): bool
            {
                return $response->json('page_info.has_next_page') === false;
            }

            protected function getPageItems(Response $response, Request $request): array
            {
                $this->endCursor = $response->json('page_info.end_cursor');

                return $response->json('items');
            }

            protected function applyPagination(Request $request): Request
            {
                if ($this->endCursor) {
                    $request->query()->add('after', $this->endCursor);
                }

                return $request;
            }
        };
    }
}
