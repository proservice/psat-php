<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Składnia PHP</title>
        <meta name="description" content="">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
		<?php
			echo '<h2>Komentarze</h2>';
			
			/*
			  Komentarz blokowy,
			  moze rozciagać się na wiele lini,
			  echo 'Hello World'; nie zadziała...
			*/
			
			//Komentarz lini, analogicznie jak w językach C/C++ echo 
			
			# Jak wyżej, styl powłoki Uniks
			
			echo '<hr>';
		?>
		<?php
			echo '<h2>Informacje konfiguracyjne PHP</h2>';
				// phpinfo();
			echo '<hr>';
		?>
		<?php
			//Każda instrukcja musi kończyć się znakiem średnika
			echo   
			   
			
			
			
			'Hello'
			
			
			;
			echo 'World';
		?>
		<?php 
			//Jedyny wyjątek od tej zasady to przejście parsera do trybu HTML.
			echo '<hr>'
		?>
		<?php
			echo '<h2>Zmienne</h2>';
			
			/*
			  Zmienna jest to identyfikator znakowy, któremu przypisano jakąś wartość.
			  W PHP nazwa zmiennej musi zaczynać się od litery lub znaku _ 
			  Zmienne są alokowane dynamicznie bez wcześniejszego określenia typu
			*/
			
			$zmienna1 = 1;
			var_dump($zmienna1);
			
			$zmienna1 = 2147483648;
			var_dump($zmienna1);
			
			$zmienna2 = 1.01;
			var_dump($zmienna2);
			
			$zmienna3 = true;
			var_dump($zmienna3);
			
			$zmienna4 = "$zmienna1";
			var_dump($zmienna4);
			
			$zmienna5 = array(); //od php 5.4 dopuszczalna wersja skrócona []
			var_dump($zmienna5);
			
			$zmienna6 = null;
			var_dump($zmienna6);
			
			// var_dump($zmienna7);
			
			echo '<hr>';
		?>
		<?php
			echo '<h2>Rzutowanie</h2>';
			
			/*
				Zmienne można rzutować na inne typy zdefiniowane w php
			*/
			
			// $liczba_calkowita = 10.50;
			// var_dump($liczba_calkowita);
			// $liczba_rzeczywista = (integer) $liczba_calkowita;
			// var_dump($liczba_calkowita);
			// var_dump($liczba_rzeczywista);
			// settype($liczba_calkowita, "integer");
			// var_dump($liczba_calkowita);
			//$int = 1;
			
			echo '<hr>';
		?>
		<?php
			echo '<h2>Operatory</h2>';
			
			/*
			  Operatory definiują mozliwe operacje na zmiennych, 
			  Przykład	Nazwa	Wynik
				$a + $b	Dodawanie	Suma 				$a i $b.
				$a – $b	Odejmowanie	Różnica 			$a i $b.
				$a * $b	Mnożenie	Iloczyn 			$a i $b.
				$a / $b	Dzielenie	Iloraz 				$a i $b (bez reszty).
				$a % $b	Modulo		Reszta z dzielenia 	$a przez $b.
			*/
			
			$a = 1;
			$b = 2;
			
			var_dump(1+(2-3)*(2/2));
			
			echo '<hr>';
		?>
		<?php
			echo '<h2>Operatory preinkrementacja i postinkrementacja</h2>';
			
			/*
				Przykład	Nazwa				Wynik
				++$a		Preinkrementacja	Zwiększa $a o jeden, a następnie zwraca $a.
				$a++		Postinkrementacja	Zwraca $a, a następnie zwiększa $a o jeden.
				–$a			Predekrementacja	Zmniejsza $a o jeden, po czym zwraca $a.
				$a–			Postdekrementacja	Zwraca $a, po czym zmniejsza $a o jeden.
			*/
			
			echo "Postinkrementacja <br>";
			$a = 5;
			echo "Powinno być 5: " . $a++ . "<br>";
			echo "Powinno być 6: " . $a   . "<br>";

			echo "<br>Preinkrementacja <br>";
			$a = 5;
			echo "Powinno być 6: " . ++$a . "<br>";
			echo "Powinno być 6: " . $a   . "<br>";

			echo "<br> Postdekrementacja <br>";
			$a = 5;
			echo "Powinno być 5: " . $a-- . "<br>";
			echo "Powinno być 4: " . $a   . "<br>";

			echo "<br> Predekrementacja <br>";
			$a = 5;
			echo "Powinno być 4: " . --$a . "<br>";
			echo "Powinno być 4: " . $a   . "<br>";
			
			echo '<hr>';
		?>
		<?php 
			echo '<h2>Operatory logiczne</h2>';
			
			
			/* 
				Operatory logiczne służą do budowania bardziej 
				skomplikowanych instrukcji warunkowych – do łączenia kilku warunków w jednej instrukcji.
			
				Przykład	Nazwa	Wynik
				$a && $b	AND		Prawda, jeśli $a i $b są prawdą
				$a || $b	OR		Prawda, jeśli $a lub $b są prawdą
				! $a		NOT		Prawda, jeśli $a nie jest prawdą
			*/
			
			var_dump( !(true && false)) ;
			
			echo '<hr>';
			
			echo "a \n b";
		?>
		
		<?php 
		
		$a = 1;
		$b = 2;
		$c = 10;
		
		//wersja 1 instrukcja 
		// if ($a == 1) {
			// instrukcje...
		// } 
		
		//wersja 2 intrukcje
		if ($a == 1) echo "Zmienna a równa się 1";
		
		
		?>
    </body>
</html>