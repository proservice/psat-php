<?php

namespace App\Http\Controllers;

//use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Psat\Fixerio;


//class PagesController extends BaseController {
class PagesController extends Controller {
    protected $fixer;
    public function mainPage() {
        $fixer = new Fixerio(); //TODO: to jeszcze nie jest dobrze
        return view('pages.mainpage', array ('curr' => $fixer->getCurrencies()));
    }

    public function convert(Request $request) {
        //TODO: walidacja: rozpoznać, czy ktoś nie próbuje skonwertować tej samej waluty
        $validator = Validator::make($request->all(),
            [
                'kwota' => 'required|numeric',
            ]
        );

        if ($validator->fails()) {
            return back()
                ->withErrors($validator);
        }

        //validacja się udała
        dd($request->all());
        $fixer = new Fixerio(); //TODO: to jeszcze nie jest dobrze

        //Zadanie: wykonać konwersję odpytując API
        $result = $fixer->convertCurrencies();

        dd($result);
    }
}
