<?php
require_once 'pago.php';

class Efectivo extends Pago {
    private $nombre;

    public function __construct($importe, $nombre) {
        parent::__construct($importe);
        $this->nombre = $nombre;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function toString(): string {
        return parent::toString() . '<br>' .
               'Nombre: ' . $this->nombre;
    }
}
?>