<?php

declare(strict_types=1);
namespace App;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class Api
{
    private string $apiEndpoint;

    public function __construct()
    {
        $this->apiEndpoint = 'https://api4.binance.com/api/v3/ticker/24hr?symbol=';
    }

    public function getCryptoCurrencyData(array $cryptoSymbols): CryptoCurrenciesCollection
    {
        $cryptoCurrenciesCollection = new CryptoCurrenciesCollection();

        foreach ($cryptoSymbols as $symbol) {
            $apiUrl = $this->apiEndpoint . $symbol . 'BTC';
            try {
                $client = new Client([
                    'verify' => 'C:/CA certificates/cacert.pem',
                ]);
                $response = $client->get($apiUrl);
                $data = json_decode($response->getBody()->getContents());


                if ($data !== false) {
                    $cryptoCurrency = new CryptoCurrency(
                        $data->symbol,
                        $data->priceChange,
                        $data->priceChangePercent,
                        $data->weightedAvgPrice,
                        $data->prevClosePrice,
                        $data->lastQty,
                        $data->bidPrice,
                        $data->bidQty,
                        $data->askPrice,
                        $data->askQty,
                        $data->openPrice,
                        $data->highPrice,
                        $data->lowPrice,
                        $data->volume,
                        $data->quoteVolume,
                        $data->openTime,
                        $data->closeTime,
                        $data->count
                    );
                    $cryptoCurrenciesCollection->add($cryptoCurrency);
                } else {

                }
            } catch (GuzzleException $e) {

            }
        }

        //var_dump($cryptoCurrenciesCollection);die;
        return $cryptoCurrenciesCollection;
    }
}
