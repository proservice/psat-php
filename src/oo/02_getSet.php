<?php

class Person {
    public $name;
    public $age;

    public function __construct($imie, $wiek=17) {
        $this->setName($imie);
        $this->setAge($wiek);
    }

    public function __destruct() {
        var_dump('Zabijam ' . $this->name);
    }

//    public function __get($name) {
//        if ($name=='age') {
//            return $this->getAge();
//        }
//    }

    public function setAge($age) {
        if ($age>=18) {
            $this->age = $age;
        } else {
            throw new \Exception('Osoba nieletnia');
        }
    }

    public function getAge() {
        return $this->age;
    }

    public function setName($name) {
        $this->name = $name;
    }
}

$jan = new Person("Jan", 18);
//unset($jan);
echo $jan->getAge();

//$array[1] = "Jeden";
//$array[2] = "Dwa";
//unset($array[1]);
//var_dump($array);

//echo $jan->getAge() . ' ' . $jan->name;
//
//$jan->setAge(17);
//echo $jan->getAge() . ' ' . $jan->name;
//echo "Test";