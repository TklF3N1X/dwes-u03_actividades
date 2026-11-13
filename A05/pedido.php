<?php
require_once 'cliente.php';
require_once 'lineaPedido.php';

class Pedido {
    private $cliente;
    private $fecha;
    private $estado;
    private $lineas = [];
    private $pago = null;

    public function __construct($cliente, $fecha, $estado) {
        $this->cliente = $cliente;
        $this->fecha = $fecha;
        $this->estado = $estado;
    }

    public function getCliente() {
        return $this->cliente;
    }

    public function setCliente($cliente): void {
        $this->cliente = $cliente;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function setFecha($fecha): void {
        $this->fecha = $fecha;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setEstado($estado): void {
        $this->estado = $estado;
    }

    public function getLineas() {
        return $this->lineas;
    }

    public function setLineas($lineas): void {
        $this->lineas = $lineas;
    }

    public function getPago() {
        return $this->pago;
    }

    public function setPago($pago): void {
        $this->pago = $pago;
    }

    public function addLinea(LineaPedido $linea): void {
        $this->lineas[] = $linea;
    }

    public function calcularTotal() {
        $total = 0;
        foreach ($this->lineas as $linea) {
            $total += $linea->getCantidad() * $linea->getPrecio();
        }
        return $total;
    }

    public function toString(): string {
        $resultado = 'Cliente: ' . $this->cliente->toString() . '<br>' .
                     'Fecha: ' . $this->fecha . '<br>' .
                     'Estado: ' . $this->estado . '<br>';

        $resultado .= '<h3>Líneas del pedido</h3>';
        foreach ($this->lineas as $linea) {
            $resultado .= $linea->toString() . '<br><br>';
        }
        $resultado .= 'Total del pedido: ' . $this->calcularTotal() . ' €<br>';
        if ($this->pago != null) {
            $resultado .= 'Pago: ' . $this->pago->toString();
        }
        return $resultado;
    }
}
?>