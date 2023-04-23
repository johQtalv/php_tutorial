<?php

require_once "Person.php";

class student extends Person {

public string $studentId;

public function __construct($name, $surname, $studentId)
{
   
    parent::__construct($name, $surname);
    $this->age = 22;
    $this->studentId = $studentId;
}

}