<?php
class Cliente {
    private $nombre;
    private $direccion;

    public function __construct($nombre, $direccion) {
        $this->nombre = $nombre;
        $this->direccion = $direccion;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function setDireccion($direccion): void {
        $this->direccion = $direccion;
    }

    public function toString(): string {
        return 'Nombre: ' . $this->nombre . '<br>' .
               'Dirección: ' . $this->direccion;
    }
}
?>