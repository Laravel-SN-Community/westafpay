<?php

namespace Laravelsn\Westafpay\DataTransfertObjects\Wave;

class BalanceResponseData
{
    public function __construct(
        public readonly string $balance,
        public readonly string $currency,
    ) {}
}
