<?php

namespace Psat;

use Cache;
use Carbon;

class Fixerio {

    protected $apiClient;
    protected $currencySymbols=[];
    protected $actRates=[];

    public function __construct() {
        $this->apiClient = new \GuzzleHttp\Client();
    }

    public function getCurrencies() {

        $this->actRates = $this->collectDataCurrency();

        $this->currencySymbols = $this->getCurrencySymbols($this->actRates);
        return $this->currencySymbols;
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

    private function getCurrencySymbols($param) { // buduje liste dostepnych walut jak "EUR"=>"EUR"
        $tmp = array_keys($param);                    
        $tmpArray = array();
        for ($i = 0; $i <= count($tmp) - 1; $i++) {
            $tmpArray[$tmp[$i]] = $tmp[$i];
        }
        return $tmpArray;
    }

    private function collectDataCurrency() { // pobiera i psprawdza czy nie ma dnych w cache
        $data = date('Y-m-d');
        $expiresAt = \Carbon\Carbon::now()->addMinutes(4600); // data około 5 dni do przodu 
        if (Cache::has($data)) {
            $response = Cache::get($data);
//            echo("Z pamieci");
        } else {
            $result = $this->apiClient->request(
                    'GET', 'http://api.fixer.io/latest');
            $response = json_decode($result->getBody());
            Cache::put($data, $response, $expiresAt);
//            echo("Dopisano");
        }
        $base = $response->base;
        $tmp = $response->rates;                     //sprawdza jaka jest waluta bazowa 
        $tmp = json_decode(json_encode($tmp), true); //wypakowuje dane z objektu 
        $tmp[$base]=1;                               //dodaje walute bazowa 
        ksort($tmp);                                 //sortuję po I kluczu   
        return $tmp;
    }

}
