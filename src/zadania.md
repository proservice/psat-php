# Zadania utrwalajaće PHP

## [Zadanie 1]

- [ ] Napisać funkcję o nazwie `zamienLiczbyJesliTrzeba(...)` (o 2 parametrach: **`$liczba1`**, **`$liczba2`**), która zamienia między sobą wartości parametrów **`$liczba1`** i **`$liczba2`**, jeśli tylko **`$liczba1`** jest większa od **`$liczba2`**.

* Podpowiedź 1: Należy wewnątrz funkcji zdefiniować zmienną tymczasową do przepisania wartości.
* Podpowiedź 2: W funkcji należy użyć [referencji przy parametrach](http://php.net/manual/pl/language.references.pass.php).
* Podpowiedź 3:
```php
$start = 23;
$koniec = 1;

zmienLiczbyJesliTrzeba($start, $koniec);

//po wywołaniu funkcji, gdy sprawdzimy wartość $start, mamy dostać 1
//funkcja nie zwraca żadnych wartości, dlatego musimy użyć referencji
var_dump($start);
```

## [Zadanie 2]
- [ ] Napisać funkcję o nazwie `sumaLiczb(...)` (o 2 parametrach: **`$zakres1`**, **`$zakres2`**), która zwraca sumę
liczb z zakresu od **`$zakres1`** do **`$zakres2`** (włącznie).
- [ ] Należy przy tym najpierw sprawdzić, czy **`$zakres1`** jest mniejsze lub równe **`$zakres2`** - jeśli nie, to należy zamienić między sobą obie liczby (wykorzystać funkcję z **Zadania 1**).

* Podpowiedź 1: Do sumowania zakresu liczb, trzeba wykorzystać pętlę. Jest więcej niż jedno dobre rozwiązanie.

## [Zadanie 3]

- [ ] Napisać funkcję o nazwie `listaLiczb(...)` (o 3 parametrach: **`$zakres1`**, **`$zakres2`**, **`$ilosc`**) wczytujący do utworzonej wewnątrz funkcji tablicy **`$tab`** losowe liczby całkowite z zakresu od **`$zakres1`** do **`$zakres2`** w ilości **`$ilosc`**.
- [ ] Zweryfikować zmienne **`$zakres1`** i **`$zakres2`** podobnie jak w **Zadaniu 2**.
- [ ] Dodatkowo, jeśli **`$ilosc`** nie jest większa od zera, to wyświetlić komunikat o błędzie (`"Ilość elementów w tablicy musi być większa od 0."`) i przerwać działanie funkcji.
- [ ] Ostatecznie funkcja wyświetla liczby z tablicy w postaci listy nienumerowanej.

* Podpowiedź 1: generowanie liczby losowej z zakresu dwóch liczb: `echo rand(5, 15); //rand(MIN, MAX)`
* Podpowiedź 2: do wyświetlenia liczb trzeba użyć pętli i listy nienumerowanej HTML.

## [Zadanie 4]
- [ ] Napisać funkcję o nazwie `wyswietlLiczbyObliczSrednia(...)` (o 4 parametrach: **`$ilosc1`**, **`$ilosc2`**,
**`$zakres1`**, **`$zakres2`**) wczytującą do tablicy **`$tab`** utworzonej wewnątrz funkcji losową ilość liczb (ilość elementów od **`$ilosc1`** do **`$ilosc2`**).
- [ ] Każdy element tablicy ma być losową liczbą z zakresu od **`$zakres1`** do **`$zakres2`**.
- [ ] Następnie funkcja ma wyświetlić te liczby w formi tabeli HTML (tylko pojedyncza kolumna).
- [ ] Ostatecznie funkcja ma zwrócić średnią arytmetyczną liczb z tej tablicy w ostatnim wierszy tej tabeli.

## [Zadanie 5]
- [ ] Napisać funkcję o nazwie `dzielenieTekstow(...)` (o 1 parametrze: **`$wyrazenieZlozone`**), która jako
parametr przyjmuje zmienną **`$wyrazenieZlozone`**; w parametrze powinien być wczytany do funkcji
ciąg znaków (tekst) postaci: *pojedyncze wyrażenia oddzielone przecinkami*:
(np. `"Komputer,Serwer,Router,Klawiatura,Mysz,Karta sieciowa,Monitor,Zasilacz"`).
- [ ] Funkcja ma za zadanie wypisać każde pojedyncze wyrażenie znajdujące się w zmiennej
**`$wyrazenieZlozone`** w osobnej linii.
- [ ] Dodatkowo, przy wypisywaniu muszą być spełnione następujące założenia:
    1. Pierwsze i ostatnie pojedyncze wyrażenie mają być wypisane dużymi literami.
    2. Wszystkie pojedyncze wyrażenia (poza pierwszym i ostatnim), zawierające więcej niż 7 znaków
należy wypisać małymi literami oraz jako pogrubione.
- [ ] Ostatecznie funkcja zwraca ilość pojedynczych wyrażeń, które wystąpiły w zmiennej
$wyrazenieZlozone.

* Podpowiedź 1: rozbijanie tesktów funkcja `explode()` do wyczytania w internetach.
* Podpowiedź 2: wpisywanie tekstów dużymi małyli lietrami, całych, pierwszych liter: `ucfist()`, `lcfirst()`, `strtoupper()`, `strtolower()`.

## Zad. 6
- [ ] Napisać funkcję o nazwie `obliczPierwiastkiRownaniaKwadratowego()` (o 3 parametrach: *`$a`*, *`$b`*,
*`$c`*), która oblicza i wypisuje na ekranie pierwiastki rzeczywiste równania kwadratowego, jeśli one
istnieją (w zależności od parametrów funkcji `$a`, `$b`, `$c`, które są współczynnikami równania kwadratowego postaci ax2 + bx + c = 0).
- [ ] Funkcja zwraca wartość true, jeśli rozwiązania istnieją albo wartość false, jeśli brak rozwiązań.