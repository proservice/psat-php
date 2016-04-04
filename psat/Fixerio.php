<?php

namespace Psat;

use Cache;
use Carbon\Carbon;

class Fixerio {

    protected $apiClient;

    public function __construct() {
        $this->apiClient = new \GuzzleHttp\Client();
    }

    public function getCurrencies() {
        
//         dd( $this->convertCurrencies("EUR",50,"USD"));
        return $this->castToArray($this->collectDataCurrency());  
    }


    private function collectDataCurrency() {
        $cacheKey = 'currenciesFor' . date('Y-m-d');
        if (Cache::has($cacheKey)) {
             return Cache::get($cacheKey);
        }

        $result = $this->apiClient->request(
            'GET',
            'http://api.fixer.io/latest'
        );
        $response = json_decode($result->getBody());

        $expiresAt = Carbon::now()->addMinutes(4600);
        Cache::put($cacheKey, $response, $expiresAt);

        return $response;
    }

    /**
     * @param $response
     * @return array
     */
    private function castToArray($response)
    {
        $currencies = get_object_vars($response->rates);
        $currencies[$response->base] = 1;
        ksort($currencies);

        foreach($currencies as $key => $value) {
            $currencies[$key] = $key;
        }
        return $currencies;
    }

    public function convertCurrencies( $baseCurrency ,$quantityCurrecny , $calculateCurrency )
    {
                $result = $this->apiClient->request(
            'GET',
            "http://api.fixer.io/latest?base=$baseCurrency&symbols=$calculateCurrency"
        );
        $response = json_decode($result->getBody());
       $equal= get_object_vars($response->rates)[$calculateCurrency] * $quantityCurrecny ;
       
        return $equal;

    }

}
