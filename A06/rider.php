<?php
require_once 'person.php';

class Rider extends Person {
    private $number;

    public function __construct($name, $birthday, $number) {
        parent::__construct($name, $birthday);
        $this->number = $number;
    }

    public function getNumber() {
        return $this->number;
    }

    public function setNumber($number): void {
        $this->number = $number;
    }

    public function toString(): string {
        return parent::toString() . '<br>' .
               'Número: ' . $this->number;
    }
}
?>