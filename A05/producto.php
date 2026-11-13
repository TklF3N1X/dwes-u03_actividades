<?php
class Producto {
    private $nombre;
    private $peso;
    private $stock;
    private $precio;

    public function __construct($nombre, $peso, $stock, $precio) {
        $this->nombre = $nombre;
        $this->peso = $peso;
        $this->stock = $stock;
        $this->precio = $precio;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function setPeso($peso): void {
        $this->peso = $peso;
    }

    public function getStock() {
        return $this->stock;
    }

    public function setStock($stock): void {
        $this->stock = $stock;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function setPrecio($precio): void {
        $this->precio = $precio;
    }

    public function toString(): string {
        return 'Nombre: ' . $this->nombre . '<br>' .
               'Peso: ' . $this->peso . '<br>' .
               'Stock: ' . $this->stock . '<br>' .
               'Precio: ' . $this->precio;
    }
}
?>