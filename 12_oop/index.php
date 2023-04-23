<?php

// What is class and instance
require_once "Person.php";
require_once "student.php";

$student = new Student("Frodo", "Baggings", '1234');

echo '<pre>';
var_dump($student);
echo '</pre>';

//$p = new Person("Gandalf", "Grey");
//$p->setAge(101);
//echo '<pre>';
//var_dump($p);
//echo '</pre>';
//echo $p->getAge();


//$p2 = new Person('Bilbo', 'Baggings');

//echo '<pre>';
//var_dump($p2);
//echo '</pre>';
//echo Person::getCounter();

//echo $p->name . '<br>';

