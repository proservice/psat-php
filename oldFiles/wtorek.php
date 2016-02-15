<?php

/* Konfiguracja XDebug

W pliku php.ini:
[XDebug]
zend_extension = "C:\xampp\php\ext\php_xdebug.dll"
xdebug.profiler_append = 0
xdebug.profiler_enable = 1
xdebug.profiler_enable_trigger = 0
xdebug.profiler_output_dir = "C:\xampp\tmp"
xdebug.profiler_output_name = "cachegrind.out.%t-%s"
xdebug.remote_enable = 1
xdebug.remote_handler = "dbgp"
xdebug.remote_host = "127.0.0.1"
xdebug.trace_output_dir = "C:\xampp\tmp"

Rozszerzenie do chrome:
https://chrome.google.com/webstore/detail/xdebug-helper/eadndfjplgieldjbigjakmdgkmoaaaoc?hl=en

Włączmy rozszerzenie na stronie którą chcecy dbugować, 
właczamy tryb debugowania w odpowiednim IDE. 

*/

/*
	Badanie zasięgu zmiennych i includowanie plików
*/

// include "zmienne";
// reguire "zmienne1.php";

//$zm1 = 0;
//
//if ($zm1 == 1) {
//    echo "Zmienna równa się 1";
//} else {
//    echo "Zmienna nie równa się 1";
//}

//for ($i = 0; $i < 5; $i++) {
//    echo $i . '<br>';
//}

//rekurencja - funkcja wywołująca samą siebioe

function silnia($liczba) {
	// if($liczba==0) $liczba=1; ---> uwaga to głupota pokazująca, że z rekurencją trzeba uważać
	
    if ($liczba==0) {
        return 1;
    } else {
        return $liczba * silnia($liczba-1);
    }
}

var_dump(silnia(97));
?>
