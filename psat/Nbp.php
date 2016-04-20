<?php

namespace Psat;

use Cache;
use Carbon\Carbon;

class Nbp implements CurrenciesApi {

    protected $apiClient;

    public function __construct(\GuzzleHttp\Client $guzzle) {
        $this->apiClient = $guzzle;
    }

    public function getCurrencies() {
       return  ( $this->castToArray($this->collectDataCurrency()));  
    }


    private function collectDataCurrency() {
        $cacheKey = 'currenciesFor' . date('Y-m-d');
        if (Cache::has($cacheKey)) {
             //return Cache::get($cacheKey);
        }

        $result = $this->apiClient->get(
            'http://www.nbp.pl/kursy/xml/LastA.xml'
        );
        $xml = simplexml_load_string( $result->getBody(), "SimpleXMLElement", LIBXML_NOCDATA);
        $json = json_encode($xml);
        $curr = json_decode($json, TRUE);

        $output = [];
        foreach($curr['pozycja'] as $key => $value) {
            $index = $value["kod_waluty"] . " " . $value["nazwa_waluty"];
            $rate = floatval(
                str_replace(",",".",$value["kurs_sredni"])
            );
            $output[$index] = $rate;
        }

        $output["PLN polski Złoty"]=1;
        ksort($output);

        $expiresAt = Carbon::now()->addMinutes(4600);
        Cache::put($cacheKey, $output, $expiresAt);

     return $output;
    }

    /**
     * @param $response
     * @return array
     */
    private function castToArray($response)
    {
      

        foreach($response as $key => $value) {
            $currencies[$key] = $key;
        }
     
        return $currencies;
            

        
    }

    public function convertCurrencies( $baseCurrency ,$quantityCurrecny , $calculateCurrency )
    {
            $currencies= $this->collectDataCurrency();
//           dd($currencies[$baseCurrency]  );
            
       $equal= ($currencies[$baseCurrency] / $currencies[$calculateCurrency])* 
               $quantityCurrecny;
       
        return $equal;

    }

}
