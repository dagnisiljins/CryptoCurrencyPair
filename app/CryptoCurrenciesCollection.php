<?php

declare(strict_types=1);

namespace App;


class CryptoCurrenciesCollection
{

    private array $cryptoCurrencies;

    public function __construct(array $cryptoCurrencies = [])
    {
        foreach ($cryptoCurrencies as $cryptoCurrency)
        $this->add($cryptoCurrency);
    }

    public function add(CryptoCurrency $cryptoCurrency)
    {
        $this->cryptoCurrencies [] = $cryptoCurrency;
    }

    public function getCryptoCurrencies(): array
    {
        return $this->cryptoCurrencies;
    }

}