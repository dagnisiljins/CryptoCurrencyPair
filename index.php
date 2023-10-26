<?php

declare(strict_types=1);

require_once 'vendor\autoload.php';
use App\Api;

$input = readline('Enter cripto symbols (ex. LTC ETH): ');

$cryptoSymbols = explode(' ', $input);

$apiFetch = new Api();

$dataCollection = $apiFetch->getCryptoCurrencyData($cryptoSymbols);

