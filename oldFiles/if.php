<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Składnia PHP</title>
        <meta name="description" content="">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
	<h1>If</h1>
<?php 
$a = 1;
$b = 2;
$c = 10;

$s1 = "";
$s2 = "Java";
$s3 = "1";

// if ($a === $s3) {
	// if () {
		
	// } else {
		// if () {
			
		// }
	// }
	// echo "true";
// } else {
	// echo "false";
// }

//wersja 2 intrukcje
// if ( $a = 1 ) {
	// echo "zmienna a";
// } elseif($b == 2) {
	// echo "zmienna b";
// } else {
	// echo "Zmienna a nie równa się 1";
// }

$a = 1;
$b = 1;

// switch ($a) {
	// case $b:
	// echo "Równa się 1";
	// break;
	// case 2:
	// echo "Równa się 2";
	// break;
	// default:
	// echo "Nie 1 i nie 2";
	// break;
// }

// for (; $a <= 10; $a++) {
	// echo "$a<br>";
	// if ($x==9) {
		// echo "Reset x";
		// $x=1;
	// }
// }

//tablice

//php 5.3
// $tablica = array();
//5.4 i dalej

$tablica = [1,2,3,4,5, "a", 1 => 5];
$tablica[] = [
	"jeden" => 1
];

die(var_dump( $tablica ));

foreach ($tablica as $key => $value) {
	$value = $value+1;
	echo "[$key]" . $value . " ";
}

var_dump($tablica);


?>

</body>
</html>