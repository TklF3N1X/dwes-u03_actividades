<?php
require_once 'person.php';

class Mechanic extends Person {
    private $speciality;

    public function __construct($name, $birthday, $speciality) {
        parent::__construct($name, $birthday);
        $this->speciality = $speciality;
    }

    public function getSpeciality() {
        return $this->speciality;
    }

    public function setSpeciality($speciality): void {
        $this->speciality = $speciality;
    }

    public function toString(): string {
        return parent::toString() . '<br>' .
               'Especialidad: ' . $this->speciality;
    }
}
?>