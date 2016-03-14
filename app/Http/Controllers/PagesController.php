<?php

namespace App\Http\Controllers;

//use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//class PagesController extends BaseController {
class PagesController extends Controller {
    public function mainPage() {
        return view('pages.mainpage');
    }

    public function convert(Request $request) {
	//TODO: Dodać walidację pola kwoty formularza i obsłużyć błędy w widoku blade  
	//https://laravel.com/docs/5.2/validation

    //chcemy osiągnąć sytację taką:
        //Jak wprowadzimy złe dane i nie przejdziemy walidacji - to wracamy do formularza i pokazujemy błedy
        //Jak wprowadzimy dobre dane do dostajemy na ekranie komunikat: 'Udało się'
     $this->validate($request, [
        'value' => 'required|numeric|',
        ]);

    echo "Udało się.";

    /*
	//dane od uzytkownika
        $value = $_POST['value'];
        $currencyFrom = 'PLN';

        //validacja danych
        //1. dorobić na natępnych zajęciach

        //publiczne api
        //2. wyeksportujemy tą logikę - dodamy cache
        $client = new \GuzzleHttp\Client();
        $res = $client->request(
            'GET', 'http://api.fixer.io/latest?base=PLN');
        $response = json_decode($res->getBody());
        $targetCurrency = 'USD';
        $usdToPln = $response->rates->USD;
//        $usdToPln = 0.25232;
        //zwrocic jakis wynik
        $wynik = $value * $usdToPln;

        //3. zwracanie danych
//        $out = [
//            'convertedValue' => $wynik,
//            'currency' => $targetCurrency
//        ];

//        return json_encode($out);
        return view('pages.welcome2', [
            'out' => $wynik
        ]);
*/
    }
}
