<?php
require_once 'pago.php';

class Cheque extends Pago {
    private $nombre;
    private $banco;

    public function __construct($importe, $nombre, $banco) {
        parent::__construct($importe);
        $this->nombre = $nombre;
        $this->banco = $banco;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function getBanco() {
        return $this->banco;
    }

    public function setBanco($banco): void {
        $this->banco = $banco;
    }

    public function toString(): string {
        return parent::toString() . '<br>' .
               'Nombre: ' . $this->nombre . '<br>' .
               'Banco: ' . $this->banco;
    }
}
?>