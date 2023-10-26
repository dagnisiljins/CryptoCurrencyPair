<?php

namespace App;

class CryptoCurrency
{

    private string $symbol;
    private string $priceChange;
    private string $priceChangePercent;
    private string $weightedAvgPrice;

    public function __construct(
        string $symbol,
        string $priceChange,
        string $priceChangePercent,
        string $weightedAvgPrice)
    {
        $this->symbol = $symbol;
        $this->priceChange = $priceChange;
        $this->priceChangePercent = $priceChangePercent;
        $this->weightedAvgPrice = $weightedAvgPrice;
    }

}