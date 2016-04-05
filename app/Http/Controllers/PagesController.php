<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Mockery\CountValidator\Exception;
use Psat\Fixerio;

class PagesController extends Controller {

    protected $fixerIo;

    public function __construct(\Psat\CurrenciesApi $fixerIo) {
        $this->fixerIo = $fixerIo;
    }

    public function mainPage() {
        return view('pages.mainpage', array ('curr' => $this->fixerIo->getCurrencies()));
    }

    public function convert(Request $request) {
        $validator = Validator::make($request->all(), [
                'kwota'         =>  'required|numeric',
                'walutaBaza'    =>  'required|different:walutaDocelowa',
                'walutaDocelowa'=>  'required|different:walutaBaza',
        ]);

        if ($validator->fails()) {
            return back()
                ->withInput()
                ->withErrors($validator);
        }

        $result = $this->fixerIo->convertCurrencies(
            $request->input('walutaBaza'),
            $request->input('kwota'),
            $request->input('walutaDocelowa')
        );

        return back()
            ->withInput()
            ->with('result', $result);
    }
}