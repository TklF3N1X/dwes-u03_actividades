<?php
class Person {
    protected $name;
    protected $birthday;

    public function __construct($name, $birthday) {
        $this->name = $name;
        $this->birthday = $birthday;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name): void {
        $this->name = $name;
    }

    public function getBirthday() {
        return $this->birthday;
    }

    public function setBirthday($birthday): void {
        $this->birthday = $birthday;
    }

    public function toString(): string {
        return 'Nombre: ' . $this->name . '<br>' .
               'Cumpleaños: ' . $this->birthday;
    }
}
?>