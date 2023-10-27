<?php

namespace App;

class CryptoCurrency
{

    private string $symbol;
    private string $priceChange;
    private string $priceChangePercent;
    private string $weightedAvgPrice;
    private string $prevClosePrice;
    private string $lastQty;
    private string $bidPrice;
    private string $bidQty;
    private string $askPrice;
    private string $askQty;
    private string $openPrice;
    private string $highPrice;
    private string $lowPrice;
    private string $volume;
    private string $quoteVolume;
    private int $openTime;
    private int $closeTime;
    private int $count;

    public function __construct(
        string $symbol,
        string $priceChange,
        string $priceChangePercent,
        string $weightedAvgPrice,
        string $prevClosePrice,
        string $lastQty,
        string $bidPrice,
        string $bidQty,
        string $askPrice,
        string $askQty,
        string $openPrice,
        string $highPrice,
        string $lowPrice,
        string $volume,
        string $quoteVolume,
        int $openTime,
        int $closeTime,
        int $count
    )
    {
        $this->symbol = $symbol;
        $this->priceChange = $priceChange;
        $this->priceChangePercent = $priceChangePercent;
        $this->weightedAvgPrice = $weightedAvgPrice;
        $this->prevClosePrice = $prevClosePrice;
        $this->lastQty = $lastQty;
        $this->bidPrice = $bidPrice;
        $this->bidQty = $bidQty;
        $this->askPrice = $askPrice;
        $this->askQty = $askQty;
        $this->openPrice = $openPrice;
        $this->highPrice = $highPrice;
        $this->lowPrice = $lowPrice;
        $this->volume = $volume;
        $this->quoteVolume = $quoteVolume;
        $this->openTime = $openTime;
        $this->closeTime = $closeTime;
        $this->count = $count;
    }

    public function getSymbol(): string
    {
        return $this->symbol;
    }

    public function getPriceChange(): string
    {
        return $this->priceChange;
    }

    public function getPriceChangePercent(): string
    {
        return $this->priceChangePercent;
    }

    public function getWeightedAvgPrice(): string
    {
        return $this->weightedAvgPrice;
    }

    public function getPrevClosePrice(): string
    {
        return $this->prevClosePrice;
    }

    public function getLastQty(): string
    {
        return $this->lastQty;
    }

    public function getBidPrice(): string
    {
        return $this->bidPrice;
    }

    public function getBidQty(): string
    {
        return $this->bidQty;
    }

    public function getAskPrice(): string
    {
        return $this->askPrice;
    }

    public function getAskQty(): string
    {
        return $this->askQty;
    }

    public function getOpenPrice(): string
    {
        return $this->openPrice;
    }

    public function getHighPrice(): string
    {
        return $this->highPrice;
    }

    public function getLowPrice(): string
    {
        return $this->lowPrice;
    }

    public function getVolume(): string
    {
        return $this->volume;
    }

    public function getQuoteVolume(): string
    {
        return $this->quoteVolume;
    }

    public function getOpenTime(): int
    {
        return $this->openTime;
    }

    public function getCloseTime(): int
    {
        return $this->closeTime;
    }

    public function getCount(): int
    {
        return $this->count;
    }

}