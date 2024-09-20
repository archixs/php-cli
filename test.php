<?php

class Person {
    private $name;
    private $surname;
    private $personalCode;

    public function __construct($name, $surname, $personalCode) {
        $this->name = $name;
        $this->surname = $surname;
        $this->personalCode = $personalCode;
      }
}