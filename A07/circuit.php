<?php
class Circuit {
    private $name;
    private $country;
    private $laps;
    private $localidad;
    private $kilometros;
    private $curvasIzq;
    private $curvasDer;

    public function __construct($name, $country, $laps, $localidad, $kilometros, $curvasIzq, $curvasDer) {
        $this->name = $name;
        $this->country = $country;
        $this->laps = $laps;
        $this->localidad = $localidad;
        $this->kilometros = $kilometros;
        $this->curvasIzq = $curvasIzq;
        $this->curvasDer = $curvasDer;
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

    public function getLaps() {
        return $this->laps;
    }

    public function setLaps($laps): void {
        $this->laps = $laps;
    }

    public function getLocalidad() {
        return $this->localidad;
    }

    public function setLocalidad($localidad): void {
        $this->localidad = $localidad;
    }

    public function getKilometros() {
        return $this->kilometros;
    }

    public function setKilometros($kilometros): void {
        $this->kilometros = $kilometros;
    }

    public function getCurvasIzq() {
        return $this->curvasIzq;
    }

    public function setCurvasIzq($curvasIzq): void {
        $this->curvasIzq = $curvasIzq;
    }

    public function getCurvasDer() {
        return $this->curvasDer;
    }

    public function setCurvasDer($curvasDer): void {
        $this->curvasDer = $curvasDer;
    }

    public function toString(): string {
        return 'Circuito: ' . $this->name . '<br>' .
               'País: ' . $this->country . '<br>' .
               'Vueltas: ' . $this->laps . '<br>' .
               'Localidad: ' . $this->localidad . '<br>' .
               'Kilómetros: ' . $this->kilometros . '<br>' .
               'Curvas izquierda: ' . $this->curvasIzq . '<br>' .
               'Curvas derecha: ' . $this->curvasDer;
    }
}
?>