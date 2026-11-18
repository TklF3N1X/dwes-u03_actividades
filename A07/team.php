<?php
require_once 'rider.php';
require_once 'mechanic.php';

class Team {
    private $name;
    private $country;
    private $riders = [];
    private $mechanics = [];

    public function __construct($name, $country) {
        $this->name = $name;
        $this->country = $country;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name): void {
        $this->name = $name;
    }

    public function getCountry() {
        return $this->country;
    }

    public function setCountry($country): void {
        $this->country = $country;
    }

    public function getRiders() {
        return $this->riders;
    }

    public function getMechanics() {
        return $this->mechanics;
    }

    public function addRider(Rider $rider): void {
        $this->riders[] = $rider;
    }

    public function addMechanic(Mechanic $mechanic): void {
        $this->mechanics[] = $mechanic;
    }

    public function toString(): string {
        $resultado = 'Equipo: ' . $this->name . '<br>' .
                     'País: ' . $this->country . '<br>';

        $resultado .= '<h3>Pilotos</h3>';
        foreach ($this->riders as $rider) {
            $resultado .= $rider->toString() . '<br><br>';
        }
       
        $resultado .= '<h3>Mecánicos</h3>';
        foreach ($this->mechanics as $mechanic) {
            $resultado .= $mechanic->toString() . '<br><br>';
        }
        return $resultado;
    }
}
?>