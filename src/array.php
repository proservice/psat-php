<?php
function dd($val) {
    return var_dump($val);
}
//
//function zmienLiczbyJesliTrzeba(&$start, &$koniec)
//{
//    if (is_int($start) && is_int($koniec)) {
//        //poprawne parametry
//        if ($start>$koniec) {
//            $tmp = $start;
//            $start = $koniec;
//            $koniec = $tmp;
////            unset($tmp);
//        }
//    } else {
//        echo "Złe parametry.";
//    }
//}
//
//$start = 23;
//$koniec = 1;
//
//zmienLiczbyJesliTrzeba($start, $koniec);
//
//echo 'Start: ' . $start . ' | Koniec: ' .$koniec;

//=======================================================

//TYPY ZLOŻONE W PHP: TABLICE, OBIEKTY

$arr[1] = 25;
$arr[2] = 100;
$arr[3] = 125;
$arr[4] = 150;
//die(var_dump($arr));
//var_dump($arr);
$arrAssoc = array(
    "raz" => 1,
    "dwa" => 2,
    "trzy" => 3
);
//var_dump($assoc);
//Tablice - dwa typy array (indeksy int) i assocjacyjne (indeksy string)

//sizeof($arr)
//echo 'Rozmiar tablicy $arr: ' . sizeof($arr) . '<br>';
//echo 'Rozmiar tablicy $arrAssoc: ' . count($arrAssoc) . '<br>';

//array_values($arr)

//$wynik = array_values($arr);
//echo "Początkowa tablica:<br>";
//var_dump($arr);
//echo "Wynik funkcji array_values():<br>";
//var_dump($wynik);

//$wynikAssoc = array_values($arrAssoc);
//var_dump($arrAssoc);
//var_dump($wynikAssoc);


//array_keys($arr)
//var_dump($arr);
//$wynikKeys = array_keys($arr);
//var_dump($wynikKeys);

//var_dump($arrAssoc);
//$wynikKeys = array_keys($arrAssoc);
//var_dump($wynikKeys);

//---STRING---
//$tekst = "Ala ma balony. Cezary ma okulary.";

//echo str_replace("Cezary", "Janusz", str_replace("Ala", "Ola", $tekst));
//$doZmiany = array(
//    "Ala" => "Ola",
//    "Cezary" => "Janusz"
//);
//echo str_replace(array_keys($doZmiany), array_values($doZmiany), $tekst);

//array_pop($arr)
//var_dump($arrAssoc);
//$usunietyElement = array_pop($arrAssoc);
//var_dump($usunietyElement);
//var_dump($arrAssoc);


//array_push($arr, $val)

//array_push($arrAssoc, 4);
//dd($arrAssoc);

//array_shift($arr)
//dd($arrAssoc);
//dd(array_shift($arrAssoc));
//dd($arrAssoc);

//array_unshift($arr, $val)
//dd($arrAssoc);
//dd(array_unshift($arrAssoc, 5));
//dd($arrAssoc);
//dd(array_unshift($arrAssoc, 6));
//dd($arrAssoc);

//assoc-> array_flip($arr)
//echo "Tablica: <br>";
//dd($arrAssoc);
//echo "array_flip: <br>";
//dd(array_flip($arrAssoc));

//array_reverse($arr)
//echo "Tablica: <br>";
//dd($arrAssoc);
//echo "Array_reverse: <br>";
//dd(array_reverse($arrAssoc));


//array_merge($arr)
//$a = array("1" => 1, "2" => 2);
//$b = array("1" => 3, "2" => 4, "3" => 3);
//dd($a);
//dd($b);
//dd(array_merge($b,$a));

//===========================================================

//strpos(stog, igla)

//$wpisany_tekst = "cholera Rozwijam swoją wiedzę w dziedzinie PHP.";
//$czy = strpos($wpisany_tekst, "cholera");
//
//if ($czy === FALSE) // nie znaleziono słowa cholera
//    echo "Można wyświetlić: $wpisany_tekst.";
//else // znaleziono szukany wyraz
//    echo "Tekst zawiera wulgarne słownictwo.";

//explode() i count()

// string do rozdzielenia
//$dane = "Marcin|Wesel|Bielsko-Biała";
//dd($dane);
////// wykorzystanie funkcji explode, wg przecinka
////dd($dane);
//$dane_osobowe = explode("|", $dane);
//dd($dane_osobowe);
//$dane_osobowe[] = "Cezary";
//$implode = implode(',', $dane_osobowe);
//dd($implode);
//// wyświetlenie otrzymanej tablicy
//echo $dane_osobowe[0]."<br/>";
//echo $dane_osobowe[1]."<br/>";
//echo $dane_osobowe[2]."<br/>";

//echo count($dane_osobowe);

//strtolower()

//// przykładowy ciąg znaków zawierający małe oraz wielkie litery
//$wyswietl = "BarDzo Lubię PlaCki";
//
//// użycie funkcji strtolower()
//$male_litery = strtolower($wyswietl);
//
//// wyświetli napis:
//// bardzo lubię placki
//echo $male_litery;


//trim()

//// przykładowy ciąg znaków
//$wyswietl = "//www.google.com/";
//dd($wyswietl);
////// użycie funkcji trim()
//$zdanie = rtrim($wyswietl, "/");
//dd($zdanie);
//
//// wyświetli napis:
//// "bardzo lubię placki"
//echo $zdanie;


//strlen()
////// przykładowy ciąg znaków
//$wyswietl = "bardzo lubię placki";
////
////// użycie funkcji strlen()
//$ilosc = strlen($wyswietl);
//dd($ilosc);
//
//if ($ilosc > 20)
//    echo "Treść dłuższa niż 20 znaków.";
//else
//    echo "Treść zawiera 20 znaków lub mniej.";

//preg_match()
// konstrukcja wyrażenia regularnego
$wyrazenie = '/^[a-z].*$/';
$tekst = "123";

dd(preg_match($wyrazenie, $tekst));

//// preg_match() sprawdza występowanie wyrażenia w ciągu
if(preg_match($wyrazenie, $tekst))
    echo("Tekst zawiera tylko małe litery bez polskich znaków.");
else
    echo("Tekst zawiera dodatkowe znaki.");

//do formularza ... czym są formularze