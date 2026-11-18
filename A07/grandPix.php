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

    private function pointsForPosition(int $position): int {
        $points = [
            1 => 25,
            2 => 20,
            3 => 16,
            4 => 13,
            5 => 11,
            6 => 10,
            7 => 9,
            8 => 8,
            9 => 7,
            10 => 6,
            11 => 5,
            12 => 4,
            13 => 3,
            14 => 2,
            15 => 1
        ];

        if (isset($points[$position])) {
            return $points[$position];
        }
        return 0;
    }

    public function addRider(int $position, Rider $rider): bool {
        if ($position < 1 || array_key_exists($position, $this->riders)) {
            return false;
        }
        foreach ($this->riders as $currentRider) {
            if ($currentRider === $rider) {
                return false;
            }
        }
        $this->riders[$position] = $rider;
        $rider->addPoints($this->pointsForPosition($position));
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
                          $rider->toString() . '<br>' .
                          'Puntos de esta carrera: ' .
                          $this->pointsForPosition($position) . '<br><br>';
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