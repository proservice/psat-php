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
        return $this->castToArray($this->collectDataCurrency());
    }

    private function formatResponse($symb1, $symb2) { // wylicza ratio do obliczeń 
        $cur1 = $this->currencySymbols[$symb1];
        $cur2 = $this->currencySymbols[$symb2];
        $resp = $cur1 / $cur2;
        return $resp;
    }
    public function calculateCurrency($curr,$symb1,$symb2){ //przelicza waluty 
       $ratio = $this ->formatResponse($symb1, $symb2);
       $score=$ratio * $curr;
       return $score;
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

    public function convertCurrencies()
    {
        //TODO: wykonać konwersję walut i zwrócić wynik korzystając z API
    }

}
