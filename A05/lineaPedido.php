<?php
require_once 'producto.php';

class LineaPedido {
    private $producto;
    private $cantidad;
    private $precio;

    public function __construct($producto, $cantidad, $precio) {
        $this->producto = $producto;
        $this->cantidad = $cantidad;
        $this->precio = $precio;
    }

    public function getProducto() {
        return $this->producto;
    }

    public function setProducto($producto): void {
        $this->producto = $producto;
    }

    public function getCantidad() {
        return $this->cantidad;
    }

    public function setCantidad($cantidad): void {
        $this->cantidad = $cantidad;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function setPrecio($precio): void {
        $this->precio = $precio;
    }

    public function toString(): string {
        return 'Producto: ' . $this->producto->getNombre() . '<br>' .
               'Cantidad: ' . $this->cantidad . '<br>' .
               'Precio: ' . $this->precio;
    }
}
?>