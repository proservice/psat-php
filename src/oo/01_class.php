<?php

//Podejście strukturalne:
//$zadania[] = array(
//    'description' => 'Zadanie numer 1',
//    'status' => false
//);
//$zadania[] = array(
//    'description' => 'Zadanie numer 2',
//    'status' => false
//);
//$zadania[] = array(
//    'description' => 'Zadanie numer 3',
//    'status' => false
//);
//var_dump($zadania);
//Typy podstawowe: int, string, bool
//Typy złożone: array (wbudowane), class (definiowane przez użytkownika)

/* 00 - Problem
Tworzymy aplikację do obsługi listy zadań TODO APP
Musimy obsłużyć logikę związaną z zadaniem (ang. Task), czym jest zadanie i jakie ma właściwości?
 * Zadanie ma jakiś opis - string
 * zadanie ma swój stan (todo/zrobione) - boolean
 * można tworzyć nowe zadaniaa, można zmieniać istniejące zadanie, można kończyć istniejące zadania
*/

///* 01 - Klasa i instancja
//Klasa - definicja/schemat (ang. blueprint) budowania obiektów użytkownika
//class Task {
//
//}

//Instancja - obiekt zbudowany na podstawie class
//$task = new Task();
//var_dump($task); //zmienna zawiera obiekt typu Task zdefiniowny przez użytkownika
//*/

///* 02 - Właności obiektu (ang. property) (na razie nie przejmujemy się słowkiem public)
//class Task {
//    public $description = "Nauczyć się PHP";
//    public $status = false;
//}

//$task = new Task();
//var_dump($task); //zmienna zawiera obiekt typu Task zdefiniowny przez użytkownika
//var_dump($task->description);
//var_dump($task->status);
//*/

///* 03 - Metody klasy (ang. method) (nie zawracamy sobie głowy słowkiem public), jedna klasa wiele instancji
class Task {
    public $title;
    public $description; // = "Nauczyć się PHP";
    public $status = false;

    public function __construct($opis) {
        $this->description = $opis;
        /*
//        $this->status = true;
//        var_dump($opis);die();
        //die('Tworzenie elementu');
        //__construct używana podczas tworzeni instancji obiektu
        //magiczne metody dostępne dla klass w PHP:
        // __construct(),
        // __destruct(),
        // __call(),
        // __callStatic(),
        // __get(),
        // __set(),
        // __isset(),
        // __unset(),
        // __sleep(),
        // __wakeup(),
        // __toString(),
        // __invoke(),
        // __set_state()
        // __clone()
        // Wszystkie są ważne wszystkie będą omówione na osobnych zajęciach, jak koncepcja klasy się utrwali.

        //jedna klasa, wiele instancji?
        */
    }

    //--- metoda zwykła jaki status ma zadanie
    public function printStatus() {
        //var_dump($this->status);
        return $this->status == false ? 'W trakcie' : 'Skończone';
    }

    public function printDescription() {
        return $this->description;
    }

//  Nie możemy przeciążać metod!
//    public function  printDescription($test) {
//        echo $test;
//    }

    public function printTask() {
        return 'Task: [' . $this->printStatus() . '] ' . $this->printDescription() . '<br>';
    }

    public function __toString() {
        return $this->printTask();
    }
}

//$task = new Task("Nauczyć się JAVA");
//echo 'Task: [' . $task->printStatus() . '] ' . $task->printDescription() . '<br>';
//
//$task1 = new Task("Nauczyć się PHP");
//echo 'Task1: [' . $task1->printStatus() . '] ' . $task1->printDescription() . '<br>';
//
//$task2 = new Task("Nauczyć się JS");
//echo 'Task2: [' . $task2->printStatus() . '] ' . $task2->printDescription() . '<br>';

//wygodniejsza wersja
$tasks[] = new Task("Nauczyć się JAVA");
$tasks[] = new Task("Zadanie PHP", "Nauczyć się PHP");
$tasks[] = new Task("Nauczyć się JS");

foreach ($tasks as $task) {
    echo $task;
}
//$task = new Task('test');
//$task->printDescription("Test przeładowania");
die();
//*/

/*
Zadanie: dodać tytuł dla zadania - skoro ma już opis.
==========================================================================================
*/

echo "01_class.php";