<?php
require_once 'rider.php';
require_once 'circuit.php';

class GrandPrix {
    private $date;
    private $circuit;
    private $riders = [];

    public function __construct($date, Circuit $circuit) {
        $this->date = $date;
        $this->circuit = $circuit;
    }

    public function getDate() {
        return $this->date;
    }

    public function setDate($date): void {
        $this->date = $date;
    }

    public function getCircuit() {
        return $this->circuit;
    }

    public function setCircuit(Circuit $circuit): void {
        $this->circuit = $circuit;
    }

    public function getRiders() {
        return $this->riders;
    }

    public function addRider(int $position, Rider $rider): bool {
        if (array_key_exists($position, $this->riders)) {
            return false;
        }
        $this->riders[$position] = $rider;
        return true;
    }

    public function results(): string {
        $resultado = '<h3>Resultados</h3>';
        if (count($this->riders) == 0) {
            return $resultado . 'No hay pilotos registrados.';
        }

        ksort($this->riders);
        foreach ($this->riders as $position => $rider) {
            $resultado .= 'Posición: ' . $position . '<br>' .
                          $rider->toString() . '<br><br>';
        }
        return $resultado;
    }

    public function toString(): string {
        return 'Fecha: ' . $this->date . '<br>' .
               $this->circuit->toString() . '<br>' .
               $this->results();
    }
}
?>