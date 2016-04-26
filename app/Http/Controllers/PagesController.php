<?php
//\Psat\CurrenciesApi $fixerIo
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Mockery\CountValidator\Exception;
use Psat\Fixerio;

class PagesController extends Controller {

    protected $api;

    public function __construct(\Psat\CurrenciesApi $api) {
        $this->api = $api;
    }

    public function mainPage() {
        return view('pages.mainpage', array ('curr' => $this->api->getCurrencies()));
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

        $result = $this->api->convertCurrencies(
            $request->input('walutaBaza'),
            $request->input('kwota'),
            $request->input('walutaDocelowa')
        );

        return back()
            ->withInput()
            ->with('result', $result);
    }

    public function solid() {
        // SOLID
        // S - Single Reponsibility Principle
        // O - Open/Closed Principle
        //--
        // L - Liskov Substitution Principle
        // I - Interface Segragation Principle
        // D - Depenedency Injection Principle

        $shapes = array(
            new \Psat\Solid\Circle(2),
            new \Psat\Solid\Square(5),
            new \Psat\Solid\Square(6),
            new \Psat\Solid\Triangle(1000,2)
        );

        $areas = new \Psat\Solid\AreaCalculator($shapes);
        $output = new \Psat\Solid\SumCalculatorOutputter($areas);

        echo $output->HTML();

        dd();
    }
}