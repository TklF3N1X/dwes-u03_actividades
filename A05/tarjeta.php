<?php
require_once 'pago.php';

class Tarjeta extends Pago {
    private $numero;
    private $caducidad;

    public function __construct($importe, $numero, $caducidad) {
        parent::__construct($importe);

        $this->numero = $numero;
        $this->caducidad = $caducidad;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero): void {
        $this->numero = $numero;
    }

    public function getCaducidad() {
        return $this->caducidad;
    }

    public function setCaducidad($caducidad): void {
        $this->caducidad = $caducidad;
    }

    public function toString(): string {
        return parent::toString() . '<br>' .
               'Número: ' . $this->numero . '<br>' .
               'Caducidad: ' . $this->caducidad;
    }
}
?>