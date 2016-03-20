<?php

namespace Psat;

use Cache;
use Carbon;

class Fixerio {

    protected $apiClient;
    protected $currencySymbols;

    public function __construct() {
        $this->apiClient = new \GuzzleHttp\Client();
    }

    public function getCurrencies() { 

        $response = $this->collectDataCurrency();
        
        $this->currencySymbols = $this->getCurrencySymbols($response);
     return $this->currencySymbols;
        
    }

    private function formatResponse($symb1, $symb2) { // wylicza ratio 

        $cur1 = $response->rates->$symb1;
        $cur2 = $response->rates->$symb2;
        $resp=$cur1/$cur2;
        return $resp;
                
    }

    private function getCurrencySymbols($response) { // buduje liste dostepnych walut 

        $tmp = $response->rates;
        $tmp = json_decode(json_encode($tmp), true);
        $tmp = array_keys($tmp);
        $tmpArray=array();
        for ($i=0;$i <= count($tmp)-1;$i++){
            $tmpArray[$tmp[$i]] =  $tmp[$i];
        }
    return $tmpArray;
        
        
    }

    private function collectDataCurrency() { // pobiera i psprawdza czy nie ma dnych w cache
        $data = date('Y-m-d');
$expiresAt =  \Carbon\Carbon::now()->addMinutes(4600);
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
//           $base = $response->base;
//           $response = $response->rates[$base]=1;  // chciłem dodać walute bazową 
           
        return $response;
    }

}
