<?php namespace Psat;

interface CurrenciesApi
{
    public function getCurrencies();
    public function convertCurrencies($baseCurrency, $quantityCurrecny, $calculateCurrency);
}