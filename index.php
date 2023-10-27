<?php

declare(strict_types=1);

require_once 'vendor\autoload.php';
use App\Api;

$input = readline('Enter crypto symbols (ex. LTC ETH): ');
echo "-------------------------------------------------------------" . PHP_EOL;

$cryptoSymbols = explode(' ', $input);

$apiFetch = new Api();

$dataCollection = $apiFetch->getCryptoCurrencyData($cryptoSymbols);

if (empty($dataCollection->getCryptoCurrencies())) {
    exit("No records found. \n");
}

foreach ($dataCollection->getCryptoCurrencies() as $cryptoCurrency) {
    echo "Symbol: " . $cryptoCurrency->getSymbol() . PHP_EOL;
    echo "Price Change: " . $cryptoCurrency->getPriceChange() . PHP_EOL;
    echo "Price Change %: " . $cryptoCurrency->getPriceChangePercent() . '%' . PHP_EOL;
    echo "Weighted Avg Price: " . $cryptoCurrency->getWeightedAvgPrice() . PHP_EOL;
    echo "Previous Close Price: " . $cryptoCurrency->getPrevClosePrice() . PHP_EOL;
    echo "Last Qty: " . $cryptoCurrency->getLastQty() . PHP_EOL;
    echo "Bid Price: " . $cryptoCurrency->getBidPrice() . PHP_EOL;
    echo "Bid Qty: " . $cryptoCurrency->getBidQty() . PHP_EOL;
    echo "Ask Price: " . $cryptoCurrency->getAskPrice() . PHP_EOL;
    echo "Ask Qty: " . $cryptoCurrency->getAskQty() . PHP_EOL;
    echo "Open Price: " . $cryptoCurrency->getOpenPrice() . PHP_EOL;
    echo "High Price: " . $cryptoCurrency->getHighPrice() . PHP_EOL;
    echo "Low Price: " . $cryptoCurrency->getLowPrice() . PHP_EOL;
    echo "Volume: " . $cryptoCurrency->getVolume() . PHP_EOL;
    echo "Quote Volume: " . $cryptoCurrency->getQuoteVolume() . PHP_EOL;
    $timestampOpen = (int)($cryptoCurrency->getOpenTime() / 1000);
    echo "Open Time: " . date('Y-m-d H:i:s', $timestampOpen) . PHP_EOL;
    $timestampClose = (int)($cryptoCurrency->getCloseTime() / 1000);
    echo "Close Time: " . date('Y-m-d H:i:s', $timestampClose) . PHP_EOL;
    echo "Count: " . $cryptoCurrency->getCount() . PHP_EOL;
    echo "-------------------------------------------------------------" . PHP_EOL;
}